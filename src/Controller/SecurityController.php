<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
class SecurityController extends AbstractController
{
    private $userRepository;
private $logger;

public function __construct(UserRepository $userRepository, LoggerInterface $logger)
{
    $this->userRepository = $userRepository;
    $this->logger = $logger;
}

    #[Route('/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/connect/google', name: 'connect_google')]
    public function connectGoogle(ClientRegistry $clientRegistry): RedirectResponse
    {
        return $clientRegistry->getClient('google')->redirect(['email', 'profile'], []);
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheck(): never
    {
        throw new \LogicException('This should never be reached!');
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): never
    {
        throw new \LogicException('This should be handled by the firewall.');
    }

    #[Route('/check-face-id-available', name: 'check_face_id_available', methods: ['POST'])]
    public function checkFaceIdAvailable(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;

        if (!$email) {
            return $this->json(['error' => 'Email is required'], 400);
        }

        $user = $this->userRepository->findOneBy(['email' => $email]);

        return $this->json([
            'hasFaceId' => $user && $user->getImage() !== null,
        ]);
    }

    #[Route('/verify-face-id', name: 'verify_face_id', methods: ['POST'])]
    public function verifyFaceId(Request $request, LoggerInterface $logger): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;
        $descriptor = $data['descriptor'] ?? null;
    
        if (!$email || !$descriptor) {
            return $this->json(['success' => false, 'message' => 'Email and descriptor required'], 400);
        }
    
        $user = $this->userRepository->findOneBy(['email' => $email]);
    
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'User not found'], 404);
        }
    
        // Log the descriptor for debugging
        $logger->info('Face descriptor received', ['descriptor' => $descriptor]);
    
        // Placeholder: In a real implementation, compare the descriptor with stored face data
        $token = bin2hex(random_bytes(32));
        $request->getSession()->set('faceIdToken', $token);
    
        return $this->json(['success' => true, 'token' => $token]);
    }



}