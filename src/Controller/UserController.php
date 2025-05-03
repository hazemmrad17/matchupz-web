<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Entity\User;
use App\Form\UserType;
use App\Form\LoginType ;
use App\Form\UserRegisterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ForgotPasswordType;
use App\Form\ResetPasswordType;
use Symfony\Component\HttpFoundation\JsonResponse;

use Aws\Rekognition\RekognitionClient;
 
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Mime\Email;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;
use TCPDF;

#[Route('/user')]
final class UserController extends AbstractController
{
    #[Route(name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, UserRepository $userRepository, PaginatorInterface $paginator): Response
    {
        // Get the search query from the request
        $searchQuery = $request->query->get('search', '');

        // Build the query with search filtering
        $queryBuilder = $userRepository->createQueryBuilder('u');

        if ($searchQuery) {
            $queryBuilder
                ->where('LOWER(u.nom) LIKE :search')
                ->orWhere('LOWER(u.prenom) LIKE :search')
                ->orWhere('LOWER(u.email) LIKE :search')
                ->setParameter('search', '%' . strtolower($searchQuery) . '%');
        }

        $query = $queryBuilder->getQuery();
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 6);

        // Statistiques par genre
        $users = $userRepository->findAll();
        $total = count($users);
        $men = count(array_filter($users, fn($user) => $user->getGenre() === 'Homme'));
        $women = $total - $men;

        $stats = [
            'total' => $total,
            'percentMen' => $total > 0 ? round(($men / $total) * 100) : 0,
            'percentWomen' => $total > 0 ? round(($women / $total) * 100) : 0,
        ];

        // Statistiques par âge (18-30, 31-50, 51+)
        $ageStats = [
            '18-30' => 0,
            '31-50' => 0,
            '51+' => 0,
        ];

        $currentYear = (int) date('Y');
        foreach ($users as $user) {
            if ($user->getDateDeNaissance()) {
                $birthYear = (int) $user->getDateDeNaissance()->format('Y');
                $age = $currentYear - $birthYear;

                if ($age >= 18 && $age <= 30) {
                    $ageStats['18-30']++;
                } elseif ($age >= 31 && $age <= 50) {
                    $ageStats['31-50']++;
                } elseif ($age > 50) {
                    $ageStats['51+']++;
                }
            }
        }

        // Handle AJAX request
        if ($request->isXmlHttpRequest()) {
            $userData = [];
            foreach ($pagination as $user) {
                $userData[] = [
                    'id_user' => $user->getId_user(),
                    'nom' => $user->getNom() ?? '',
                    'prenom' => $user->getPrenom() ?? '',
                    'email' => $user->getEmail() ?? '',
                    'role' => $user->getRole() ?? '',
                    'image' => $user->getImage(),
                    'dateDeNaissance' => $user->getDateDeNaissance() ? $user->getDateDeNaissance()->format('d/m/Y') : null,
                    'numTelephone' => $user->getNumTelephone(),
                    'genre' => $user->getGenre() ?? '',
                ];
            }

            // Render pagination HTML
            $paginationHtml = $this->renderView('user/_pagination.html.twig', [
                'users' => $pagination,
            ]);

            return new JsonResponse([
                'users' => $userData,
                'pagination' => $paginationHtml,
            ]);
        }

        return $this->render('user/index.html.twig', [
            'users' => $pagination,
            'stats' => $stats,
            'ageStats' => $ageStats,
            'searchQuery' => $searchQuery,
        ]);
    }




    
   
    #[Route('/registerF', name: 'app_registerF', methods: ['GET', 'POST'])]
    public function registerF(Request $request, EntityManagerInterface $em, LoggerInterface $logger): Response
    {
        $user = new User();
        $form = $this->createForm(UserRegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Log form data for debugging
            $logger->info('RegisterF form submitted', [
                'data' => $form->getData(),
                'files' => $request->files->all(),
            ]);

            // Définir le mot de passe sans hachage (comme dans votre code original)
            $user->setPassword($form->get('password')->getData());

            // Gérer l'upload de l'image
            $imagePath = 'uploads/users/default-avatar.png'; // Image par défaut
            $imageFile = $form->get('image')->getData();
            if ($imageFile instanceof UploadedFile) {
                $imagesDirectory = $this->getParameter('users_image_directory');
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move($imagesDirectory, $newFilename);
                    $imagePath = 'Uploads/users/' . $newFilename; // Chemin relatif
                } catch (FileException $e) {
                    $logger->error('Image upload failed', ['error' => $e->getMessage()]);
                    $this->addFlash('error', 'Échec du téléchargement de l\'image.');
                    $imagePath = 'uploads/users/default-avatar.png'; // Utiliser l'image par défaut en cas d'erreur
                }
            }
            $user->setImage($imagePath);

            try {
                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
                return $this->redirectToRoute('app_login');
            } catch (\Exception $e) {
                $logger->error('Database error', ['error' => $e->getMessage()]);
                $this->addFlash('error', 'Erreur lors de l\'inscription : ' . $e->getMessage());
            }
        }

        return $this->render('user/registerF.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(Request $request, SessionInterface $session): Response
    {
        // Get the last username (email) from the session if available
        $lastUsername = $session->get('_security.last_username', '');

        return $this->render('user/login.html.twig', [
            'last_username' => $lastUsername,
        ]);
    }

    #[Route('/pagenjareb', name: 'app_jareb')]
    public function pagejareb(Request $request, SessionInterface $session): Response
    {
        // Get the last username (email) from the session if available
       

        return $this->render('user/jareb.html.twig');
    }

    #[Route('/verif-userF', name: 'app_verif_userF', methods: ['POST'])]
public function verifUserF(
    Request $request,
    EntityManagerInterface $em,
    SessionInterface $session,
    LoggerInterface $logger
): Response {
    // Récupérer la réponse reCAPTCHA
    $recaptchaResponse = $request->request->get('g-recaptcha-response');

    // Valider reCAPTCHA
    if (!$recaptchaResponse) {
        $this->addFlash('error', 'Veuillez compléter la vérification reCAPTCHA.');
        return $this->redirectToRoute('app_login');
 
    }

    $secretKey = $this->getParameter('recaptcha_secret_key');
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    try {
        $client = HttpClient::create();
        $response = $client->request('POST', $url, [
            'body' => [
                'secret' => $secretKey,
                'response' => $recaptchaResponse,
                'remoteip' => $request->getClientIp(),
            ],
        ]);

        $recaptchaData = $response->toArray();

        if (!$recaptchaData['success']) {
            $logger->warning('Échec de la vérification reCAPTCHA', [
                'error_codes' => $recaptchaData['error-codes'] ?? [],
            ]);
            $this->addFlash('error', 'Échec de la vérification reCAPTCHA. Veuillez réessayer.');
            return $this->redirectToRoute('app_login');
        }
    } catch (\Exception $e) {
        $logger->error('Erreur lors de la vérification reCAPTCHA', [
            'exception' => $e->getMessage(),
        ]);
        $this->addFlash('error', 'Erreur réseau lors de la vérification reCAPTCHA.');
        return $this->redirectToRoute('app_login');
    }

    // Get the email and password from the form
    $email = $request->request->get('_username');
    $password = $request->request->get('_password');

    // Store the email in the session to pre-fill the form if login fails
    $session->set('_security.last_username', $email);

    // Verify CSRF token
    if (!$this->isCsrfTokenValid('authenticate', $request->request->get('_csrf_token'))) {
        $this->addFlash('error', 'Invalid CSRF token.');
        return $this->redirectToRoute('app_login');
    }

    // Find the user by email
    $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

    // Check if the user exists and the password matches (plain-text comparison)
    if ($user && $user->getPassword() === $password) {
        // Vérifier si le rôle de l'utilisateur est "Block"
        if ($user->getRole() === 'BLOCK') {
            $this->addFlash('error', 'Votre compte est bloqué. Veuillez contacter l\'administrateur pour résoudre le problème.');
            return $this->redirectToRoute('app_login');
        }

        // Store user data in the session
        $session->set('user', [
            'id' => $user->getId_user(),
            'email' => $user->getEmail(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'image' => $user->getImage(),
            'role' => $user->getRole(),
        ]);

        // Redirect based on role
        if ($user->getRole() === 'ADMIN') {
            return $this->redirectToRoute('app_user_index');
        }

        return $this->redirectToRoute('app_acceuil');
    }

    // If authentication fails, add a flash message and redirect back to the login page
    $this->addFlash('error', 'Email ou mot de passe incorrect.');
    return $this->redirectToRoute('app_login');
}



#[Route('/acceuil', name: 'app_acceuil')]
public function acceuil(Request $request, SessionInterface $session): Response
{
    return $this->render('Home.html.twig'); // Assurez-vous que le fichier est dans templates/baseM.html.twig
}
    #[Route('/export-pdf', name: 'app_user_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, UserRepository $userRepository, PaginatorInterface $paginator): Response
    {
        $searchQuery = $request->query->get('search', '');
        $page = $request->query->getInt('page', 1);

        $queryBuilder = $userRepository->createQueryBuilder('u');

        if ($searchQuery) {
            $queryBuilder
                ->where('u.nom LIKE :search')
                ->orWhere('u.prenom LIKE :search')
                ->orWhere('u.email LIKE :search')
                ->setParameter('search', '%' . $searchQuery . '%');
        }

        $query = $queryBuilder->getQuery();
        $pagination = $paginator->paginate($query, $page, 6);
        $users = $pagination->getItems();

        // Initialize TCPDF with portrait orientation
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        $pdf->SetCreator('Gestion Utilisateurs');
        $pdf->SetAuthor('Your Application');
        $pdf->SetTitle('MatchupZ');
        $pdf->SetSubject('Exportation des utilisateurs');
        $pdf->SetKeywords('Utilisateurs, PDF, Export');

        // Set margins
        $pdf->SetMargins(20, 20, 20);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);
        $pdf->SetAutoPageBreak(true, 35);

        // Remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // Add a page
        $pdf->AddPage();

        // Header
        $pdf->SetFillColor(15, 56, 73);
        $pdf->Rect(0, 0, $pdf->getPageWidth(), 40, 'F');
        $logoPath = $this->getParameter('kernel.project_dir') . '/public/img/logo_white.png';
        if (file_exists($logoPath)) {
            $pdf->Image($logoPath, ($pdf->getPageWidth() - 60) / 2, 5, 60, 0, '', '', 'T', false, 300, '', false, false, 0);
        }
        $pdf->SetTextColor(255, 255, 255);
        $pdf->SetFont('helvetica', 'B', 24);
        $pdf->SetXY(20, 20);
        $pdf->Cell(0, 10, 'Bienvenu au MatchupZ', 0, 1, 'C');
        $pdf->SetFont('helvetica', '', 14);
        $pdf->SetTextColor(220, 220, 220);
        $pdf->Cell(0, 10, 'Generated on ' . date('d/m/Y H:i'), 0, 1, 'C');

        // Content
        $pdf->SetY(50);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(51, 51, 51);
        $pdf->SetFont('helvetica', 'B', 18);
        $pdf->Cell(0, 10, 'Liste des Utilisateurs', 0, 1, 'L');
        $pdf->SetLineStyle(['width' => 0.5, 'color' => [170, 170, 170]]);
        $pdf->Line(20, $pdf->GetY(), 80, $pdf->GetY());
        $pdf->Ln(10);

        // User List
        if (count($users) > 0) {
            foreach ($users as $user) {
                if ($pdf->GetY() > 220) {
                    $pdf->AddPage();
                    $pdf->SetY(20);
                }

                $imagePath = $user->getImage()
                    ? $this->getParameter('kernel.project_dir') . '/public/Uploads/users/' . $user->getImage()
                    : $this->getParameter('kernel.project_dir') . '/public/img/default-avatar.png';
                if (file_exists($imagePath)) {
                    $pdf->Image($imagePath, 20, $pdf->GetY(), 30, 30, '', '', 'T', false, 300, '', false, false, 1);
                }

                $pdf->SetXY(55, $pdf->GetY());
                $pdf->SetFont('helvetica', 'B', 12);
                $pdf->Cell(0, 8, strtoupper($user->getPrenom() . ' ' . $user->getNom()), 0, 1);
                $pdf->SetFont('helvetica', '', 10);
                $pdf->SetX(55);
                $pdf->Cell(0, 6, 'Email: ' . $user->getEmail(), 0, 1);

                if ($user->getDateDeNaissance()) {
                    $pdf->SetX(55);
                    $pdf->Cell(0, 6, 'Date de naissance: ' . $user->getDateDeNaissance()->format('d/m/Y'), 0, 1);
                    $pdf->SetX(55);
                    $age = (new \DateTime())->format('Y') - $user->getDateDeNaissance()->format('Y');
                    $pdf->Cell(0, 6, 'Âge: ' . $age . ' ans', 0, 1);
                }
                if ($user->getNumTelephone()) {
                    $pdf->SetX(55);
                    $pdf->Cell(0, 6, 'Téléphone: ' . $user->getNumTelephone(), 0, 1);
                }
                $pdf->SetX(55);
                $pdf->Cell(0, 6, 'Genre: ' . $user->getGenre(), 0, 1);
                $pdf->SetX(55);
                $pdf->Cell(0, 6, 'Rôle: ' . $user->getRole(), 0, 1);

                $pdf->Ln(10);
            }
        } else {
            $pdf->SetTextColor(85, 85, 85);
            $pdf->Cell(0, 10, 'Aucun utilisateur trouvé', 0, 1, 'C');
        }

        // Footer
        $pdf->SetY(-35);
        $pdf->SetFillColor(15, 56, 73);
        $pdf->Rect(0, $pdf->GetY(), $pdf->getPageWidth(), 35, 'F');
        $pdf->SetTextColor(204, 204, 204);
        $pdf->SetFont('helvetica', '', 9);
        $pdf->Cell(0, 5, 'Gestion Utilisateurs © ' . date('Y') . ' | Contact: support@example.com', 0, 1, 'C');
        $pdf->SetTextColor(234, 183, 0);
        $pdf->Cell(0, 5, 'Powered by xAI Technology', 0, 1, 'C');

        // Output the PDF
        $pdfOutput = $pdf->Output('users.pdf', 'S');
        $response = new Response($pdfOutput);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'users.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }
    
    #[Route('/verif-user', name: 'app_verif_user', methods: ['POST'])]
    public function verifUser(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        $email = $request->request->get('_username');
        $password = $request->request->get('_password');

        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if ($user && $user->getPassword() === $password) {


            if ($user->getRole() === 'BLOCK') {
                $this->addFlash('error', 'Votre compte est bloqué. Veuillez contacter l\'administrateur pour résoudre le problème.');
                return $this->redirectToRoute('app_user_auth');
            }
    
           
    

            $session->set('user', [
                'id' => $user->getId_user(),
                'email' => $user->getEmail(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'image' => $user->getImage(),
                'role' => $user->getRole(),
            ]);
            // Redirect based on role
            if ($user->getRole() === 'ADMIN') {
                return $this->redirectToRoute('app_user_index');
            }
    
            $session->set('user', [
                'id' => $user->getIdUser(),
                'email' => $user->getEmail(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'image' => $user->getImage(),
                'role' => $user->getRole(),
                'date_de_naissance' => $user->getDateDeNaissance() ? $user->getDateDeNaissance()->format('Y-m-d') : null,
                'num_telephone' => $user->getNumTelephone(),
                'genre' => $user->getGenre(),
            ]);

            return $this->redirectToRoute('app_user_index');
        }

        $this->addFlash('error', 'Email ou mot de passe incorrect.');
        return $this->redirectToRoute('app_user_auth');
    }

    #[Route('/auth', name: 'app_user_auth')]
    public function auth(): Response
    {
        return $this->render('user/auth.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    #[Route('/logout', name: 'app_user_logout', methods: ['GET'])]
    public function logout(SessionInterface $session): Response
    {
        $session->remove('user');
        $this->addFlash('success', 'Vous êtes déconnecté.');
        return $this->redirectToRoute('app_user_auth');
    }


    #[Route('/logoutF', name: 'app_user_logoutF', methods: ['GET'])]
public function logoutF(SessionInterface $session): Response
{
    $session->remove('user');
    $this->addFlash('success', 'Vous êtes déconnecté.');
    return $this->redirectToRoute('app_login'); // Changé de 'app_user_auth' à 'app_login'
}

#[Route('/register', name: 'app_user_register', methods: ['GET', 'POST'])]
    public function register(Request $request, EntityManagerInterface $em, LoggerInterface $logger): Response
    {
        $user = new User();
        $form = $this->createForm(UserRegisterType::class, $user); // Utiliser UserRegistrationType
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Log form data for debugging
            $logger->info('Register form submitted', [
                'data' => $form->getData(),
                'files' => $request->files->all(),
            ]);

            // Gérer l'upload de l'image
            $imagePath = 'Uploads/users/default-avatar.png'; // Image par défaut
            $imageFile = $form->get('image')->getData();
            if ($imageFile instanceof UploadedFile) {
                $imagesDirectory = $this->getParameter('users_image_directory');
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move($imagesDirectory, $newFilename);
                    $imagePath = 'Uploads/users/' . $newFilename;
                    $user->setImage($imagePath);
                } catch (FileException $e) {
                    $logger->error('Image upload failed', ['error' => $e->getMessage()]);
                    $this->addFlash('error', 'Échec du téléchargement de l\'image.');
                    return $this->render('user/register.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
            } else {
                $user->setImage($imagePath);
            }

            try {
                // Hasher le mot de passe si nécessaire
                // $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

                $em->persist($user);
                $em->flush();
                $this->addFlash('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
                return $this->redirectToRoute('app_user_auth');
            } catch (\Exception $e) {
                $logger->error('Database error', ['error' => $e->getMessage()]);
                $this->addFlash('error', 'Erreur lors de l\'inscription : ' . $e->getMessage());
            }
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/new', name: 'app_user_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('users_image_directory'),
                    $newFilename
                );
                $user->setImage($newFilename);
            }

            // Hacher le mot de passe
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

            // Sauvegarder dans la base
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Utilisateur créé avec succès !');
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
   #[Route('/profile', name: 'app_user_profile', methods: ['GET'])]
    public function profile(SessionInterface $session): Response
    {
        $userData = $session->get('user');
        if (!$userData) {
            $this->addFlash('error', 'Vous devez être connecté pour voir votre profil.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/profile.html.twig', [
            'user' => $userData,
        ]);
    }
    #[Route('/{id_user}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId_user(), $request->getPayload()->getString('_token'))) {
            if ($user->getImage()) {
                $imagePath = $this->getParameter('kernel.project_dir').'/public/uploads/users/'.$user->getImage();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            
            $entityManager->remove($user);
            $entityManager->flush();
            
            $this->addFlash('success', 'Utilisateur supprimé avec succès');
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    
    #[Route('/profileF', name: 'app_user_profile_front', methods: ['GET'])]
    public function profileF(SessionInterface $session): Response
    {
        
        $userData = $session->get('user');
        if (!$userData) {
            $this->addFlash('error', 'Vous devez être connecté pour voir votre profil.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/profile_front.html.twig', [
            'user' => $userData,
        ]);
    }
    #[Route('/{id_user}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }
     
    #[Route('/{id_user}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle the image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData(); // Adjust 'image' to match your form field name

            if ($imageFile) {
                // Generate a unique filename
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    // Move the file to the upload directory
                    $imageFile->move(
                        $this->getParameter('users_image_directory'),
                        $newFilename
                    );

                    // Delete the old image if it exists
                    if ($user->getImage()) {
                        $oldImagePath = $this->getParameter('users_image_directory') . '/' . $user->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    // Update the image field in the User entity
                    $user->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                }
            }

            // Persist changes (including other fields and image)
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur mis à jour avec succès');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_user}/editFront', name: 'app_user_edit_profile_front', methods: ['GET', 'POST'])]
    public function editFront(Request $request, User $user, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle the image upload
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData(); // Adjust 'image' to match your form field name

            if ($imageFile) {
                // Generate a unique filename
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    // Move the file to the upload directory
                    $imageFile->move(
                        $this->getParameter('users_image_directory'),
                        $newFilename
                    );

                    // Delete the old image if it exists
                    if ($user->getImage()) {
                        $oldImagePath = $this->getParameter('users_image_directory') . '/' . $user->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    // Update the image field in the User entity
                    $user->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                }
            }

            // Persist changes (including other fields and image)
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur mis à jour avec succès');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/edit_profile_front.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/forgot-password', name: 'app_forgot_password', methods: ['GET', 'POST'], priority: 20)]
    public function forgotPassword(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, LoggerInterface $logger): Response
    {
        $form = $this->createForm(ForgotPasswordType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
    
            if ($user) {
                try {
                    // Generate and check unique reset code
                    $resetCode = random_int(100000, 999999);
                    $existingUser = $entityManager->getRepository(User::class)->findOneBy(['reset_code' => $resetCode]);
                    if ($existingUser) {
                        $resetCode = random_int(100000, 999999);
                    }
                    $user->setResetCode($resetCode);
                    $entityManager->persist($user);
                    $entityManager->flush();
    
                    // Log reset code
                    $logger->info('Reset code generated for ' . $user->getEmail() . ': ' . $resetCode);
    
                    // Send email
                    $emailMessage = (new TemplatedEmail())
                        ->from('contact.reefinity@gmail.com')
                        ->to($user->getEmail())
                        ->subject('Réinitialisation de votre mot de passe - Matchupz')
                        ->htmlTemplate('user/password_reset.html.twig')
                        ->context([
                            'userName' => $user->getPrenom() ?: $user->getNom() ?: 'Utilisateur',
                            'resetCode' => $resetCode,
                        ])
                        ->text(
                            "Bienvenue chez Matchupz, " . ($user->getPrenom() ?: $user->getNom() ?: 'Utilisateur') . " !\n\n" .
                            "Vous avez demandé à réinitialiser votre mot de passe. Voici votre code pour confirmer votre identité : " . $resetCode . "\n\n" .
                            "Entrez ce code sur la page de réinitialisation pour continuer.\n" .
                            "Si vous n'avez pas fait cette demande, ignorez cet email.\n\n" .
                            "Merci de faire partie de Matchupz !"
                        );
    
                    $logger->info('Attempting to send reset email to ' . $user->getEmail());
                    $mailer->send($emailMessage);
                    $logger->info('Reset email queued/sent successfully to ' . $user->getEmail());
                    $this->addFlash('success', 'Reset code sent to your email.');
                } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
                    $logger->error('Failed to send reset email: ' . $e->getMessage(), [
                        'exception' => $e,
                        'trace' => $e->getTraceAsString(),
                    ]);
                    $this->addFlash('error', 'Failed to send email: ' . $e->getMessage());
                    return $this->redirectToRoute('app_forgot_password');
                } catch (\Exception $e) {
                    $logger->error('Unexpected error sending reset email: ' . $e->getMessage(), [
                        'exception' => $e,
                        'trace' => $e->getTraceAsString(),
                    ]);
                    $this->addFlash('error', 'Error: ' . $e->getMessage());
                    return $this->redirectToRoute('app_forgot_password');
                }
            } else {
                $logger->info('No user found for email: ' . $email);
                $this->addFlash('success', 'If an account exists, a reset code has been sent.');
            }
    
            return $this->redirectToRoute('app_reset_password');
        }
    
        return $this->render('user/forgot_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reset-password', name: 'app_reset_password', methods: ['GET', 'POST'], priority: 20)]
    public function resetPassword(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $resetCode = $data['resetCode'];
            $newPassword = $data['newPassword'];

            $user = $entityManager->getRepository(User::class)->findOneBy(['reset_code' => $resetCode]);

            if ($user) {
                try {
                    // Store plain-text password (hashing removed)
                    $user->setPassword($newPassword);
                    $user->setResetCode(0); // Reset to default value
                    $entityManager->persist($user);
                    $entityManager->flush();
                    $this->addFlash('success', 'Password reset successfully.');
                    return $this->redirectToRoute('app_login');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Failed to reset password: ' . $e->getMessage());
                }
            } else {
                $this->addFlash('error', 'Invalid reset code.');
            }
        }

        return $this->render('user/reset_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }








    #partie back : 
    #[Route('/forgot-passwordB', name: 'app_forgot_passwordB', methods: ['GET', 'POST'], priority: 20)]
    public function forgotPasswordB(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, LoggerInterface $logger): Response
    {
        $form = $this->createForm(ForgotPasswordType::class);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
    
            if ($user) {
                try {
                    // Generate and check unique reset code
                    $resetCode = random_int(100000, 999999);
                    $existingUser = $entityManager->getRepository(User::class)->findOneBy(['reset_code' => $resetCode]);
                    if ($existingUser) {
                        $resetCode = random_int(100000, 999999);
                    }
                    $user->setResetCode($resetCode);
                    $entityManager->persist($user);
                    $entityManager->flush();
    
                    // Log reset code
                    $logger->info('Reset code generated for ' . $user->getEmail() . ': ' . $resetCode);
    
                    // Send email
                    $emailMessage = (new TemplatedEmail())
                        ->from('contact.reefinity@gmail.com')
                        ->to($user->getEmail())
                        ->subject('Réinitialisation de votre mot de passe - Matchupz')
                        ->htmlTemplate('user/password_reset.html.twig')
                        ->context([
                            'userName' => $user->getPrenom() ?: $user->getNom() ?: 'Utilisateur',
                            'resetCode' => $resetCode,
                        ])
                        ->text(
                            "Bienvenue chez Matchupz, " . ($user->getPrenom() ?: $user->getNom() ?: 'Utilisateur') . " !\n\n" .
                            "Vous avez demandé à réinitialiser votre mot de passe. Voici votre code pour confirmer votre identité : " . $resetCode . "\n\n" .
                            "Entrez ce code sur la page de réinitialisation pour continuer.\n" .
                            "Si vous n'avez pas fait cette demande, ignorez cet email.\n\n" .
                            "Merci de faire partie de Matchupz !"
                        );
    
                    $logger->info('Attempting to send reset email to ' . $user->getEmail());
                    $mailer->send($emailMessage);
                    $logger->info('Reset email queued/sent successfully to ' . $user->getEmail());
                    $this->addFlash('success', 'Reset code sent to your email.');
                } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
                    $logger->error('Failed to send reset email: ' . $e->getMessage(), [
                        'exception' => $e,
                        'trace' => $e->getTraceAsString(),
                    ]);
                    $this->addFlash('error', 'Failed to send email: ' . $e->getMessage());
                    return $this->redirectToRoute('app_forgot_passwordB');
                } catch (\Exception $e) {
                    $logger->error('Unexpected error sending reset email: ' . $e->getMessage(), [
                        'exception' => $e,
                        'trace' => $e->getTraceAsString(),
                    ]);
                    $this->addFlash('error', 'Error: ' . $e->getMessage());
                    return $this->redirectToRoute('app_forgot_passwordB');
                }
            } else {
                $logger->info('No user found for email: ' . $email);
                $this->addFlash('success', 'If an account exists, a reset code has been sent.');
            }
    
            return $this->redirectToRoute('app_reset_passwordB');
        }
    
        return $this->render('user/forgot_passwordB.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reset-passwordB', name: 'app_reset_passwordB', methods: ['GET', 'POST'], priority: 20)]
    public function resetPasswordB(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $resetCode = $data['resetCode'];
            $newPassword = $data['newPassword'];

            $user = $entityManager->getRepository(User::class)->findOneBy(['reset_code' => $resetCode]);

            if ($user) {
                try {
                    // Store plain-text password (hashing removed)
                    $user->setPassword($newPassword);
                    $user->setResetCode(0); // Reset to default value
                    $entityManager->persist($user);
                    $entityManager->flush();
                    $this->addFlash('success', 'Password reset successfully.');
                    return $this->redirectToRoute('app_user_auth');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Failed to reset password: ' . $e->getMessage());
                }
            } else {
                $this->addFlash('error', 'Invalid reset code.');
            }
        }

        return $this->render('user/reset_passwordB.html.twig', [
            'form' => $form->createView(),
        ]);
    }

   #[Route('/face-id-login', name: 'app_face_id_login', methods: ['POST'])]
public function faceIdLogin(Request $request, EntityManagerInterface $em, SessionInterface $session): JsonResponse
{
    $email = $request->request->get('email');
    
    if (!$email) {
        return new JsonResponse(['success' => false, 'error' => 'Email manquant.']);
    }
    
    $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

    if (!$user) {
        return new JsonResponse(['success' => false, 'error' => 'Utilisateur non trouvé.']);
    }

    // Store user in session
    $session->set('user', [
        'id' => $user->getId_user(),
        'email' => $user->getEmail(),
        'nom' => $user->getNom(),
        'prenom' => $user->getPrenom(),
        'image' => $user->getImage(),
        'role' => $user->getRole(),
    ]);

    // Redirect based on role
    $redirectUrl = '';
    
    if ($user->getRole() === 'ADMIN') {
        $redirectUrl = $this->generateUrl('app_user_index'); 
    } else {
        $redirectUrl = $this->generateUrl('app_user_index'); 
    }

    return new JsonResponse([
        'success' => true,
        'redirect' => $redirectUrl,
    ]);
}

    
 
    
   
}