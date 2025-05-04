<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class FaceRecognitionAuthenticator extends AbstractAuthenticator
{
    private $doctrine;
    private $logger;

    public function __construct(ManagerRegistry $doctrine, LoggerInterface $logger)
    {
        $this->doctrine = $doctrine;
        $this->logger = $logger;
    }

    public function supports(Request $request): ?bool
    {
        // Activer cet authenticator uniquement pour la route de reconnaissance faciale
        return $request->attributes->get('_route') === 'app_face_recognition'
            && $request->isMethod('POST');
    }

    public function authenticate(Request $request): SelfValidatingPassport
    {
        // Récupérer l'image capturée (base64)
        $data = json_decode($request->getContent(), true);
        $faceImageData = $data['face_image_data'] ?? null;

        if (!$faceImageData) {
            throw new AuthenticationException('Aucune image capturée fournie.');
        }

        // Décoder l'image base64 et la sauvegarder temporairement
        $capturedImagePath = sys_get_temp_dir() . '/captured_face_' . uniqid() . '.jpg';
        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $faceImageData));
        file_put_contents($capturedImagePath, $imageData);

        // Récupérer tous les utilisateurs
        $userRepository = $this->doctrine->getRepository(User::class);
        $users = $userRepository->findAll();

        $recognizedUser = null;
        foreach ($users as $user) {
            $referenceImagePath = $user->getImage();
            if (!$referenceImagePath) {
                continue; // Passer au prochain utilisateur si aucune image
            }

            // Construire le chemin absolu de l'image de référence
            $referenceImageFullPath = $request->server->get('DOCUMENT_ROOT') . '/../public/' . $referenceImagePath;
            if (!file_exists($referenceImageFullPath)) {
                $this->logger->info('Image de référence introuvable pour l\'utilisateur ' . $user->getId() . ' : ' . $referenceImageFullPath);
                continue;
            }

            // Appeler le script Python pour comparer les visages
            $pythonScript = $request->server->get('DOCUMENT_ROOT') . '/../compare_faces.py';
            $command = escapeshellcmd("python \"$pythonScript\" \"$capturedImagePath\" \"$referenceImageFullPath\"");
            $output = shell_exec($command);

            $this->logger->info('Chemin de l\'image capturée : ' . $capturedImagePath);
            $this->logger->info('Chemin de l\'image de référence : ' . $referenceImageFullPath);
            $this->logger->info('Résultat de la comparaison pour l\'utilisateur ' . $user->getId() . ' : ' . $output);

            if (trim($output) === 'True') {
                $recognizedUser = $user;
                break;
            }
        }

        // Supprimer l'image temporaire
        if (file_exists($capturedImagePath)) {
            unlink($capturedImagePath);
        }

        if (!$recognizedUser) {
            throw new AuthenticationException('La reconnaissance faciale a échoué.');
        }

        // Créer un badge utilisateur pour l'authentification
        return new SelfValidatingPassport(new UserBadge($recognizedUser->getUserIdentifier(), function () use ($recognizedUser) {
            return $recognizedUser;
        }));
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Retourner une réponse JSON indiquant le succès
        return new JsonResponse(['success' => true]);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        // Retourner une réponse JSON indiquant l'échec
        return new JsonResponse(['success' => false, 'message' => $exception->getMessage()], Response::HTTP_UNAUTHORIZED);
    }
}