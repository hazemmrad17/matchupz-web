<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FaceIdController extends AbstractController
{
    #[Route('/face-id-authenticate', name: 'app_face_id_authenticate', methods: ['POST'])]
    public function authenticate(Request $request, UserRepository $userRepository, SessionInterface $session): JsonResponse
    {
        // Retrieve email from the request
        $email = $request->request->get('email');

        // Check if email is provided
        if (!$email) {
            return new JsonResponse(['success' => false, 'error' => 'Email manquant'], 400);
        }

        // Find the user by email
        $user = $userRepository->findOneBy(['email' => $email]);
        if (!$user) {
            return new JsonResponse(['success' => false, 'error' => 'Utilisateur non trouvé'], 404);
        }

        // Check if the user has an image
        if (!$user->getImage()) {
            return new JsonResponse(['success' => false, 'error' => 'Image utilisateur manquante'], 404);
        }

        // Get user image path and check if it exists
        $userImagePath = $this->getParameter('kernel.project_dir') . '/public/' . $user->getImage();
        if (!file_exists($userImagePath)) {
            return new JsonResponse(['success' => false, 'error' => 'Fichier image introuvable'], 404);
        }

        // Encode the image to base64
        $imageBase64 = base64_encode(file_get_contents($userImagePath));

        // Store user data in the session
        $session->set('user', [
            'id' => $user->getIdUser(),
            'email' => $user->getEmail(),
            'role' => $user->getRole(),
            'date_de_naissance' => $user->getDateDeNaissance(),
            'image' => $user->getImage(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'num_telephone' => $user->getNum_telephone(),
            'genre' => $user->getGenre()
        ]);

        // Return success response with user role and image
        return new JsonResponse([
            'success' => true,
            'role' => $user->getRole(),
            'image' => $imageBase64,
        ]);
    }
    
}
