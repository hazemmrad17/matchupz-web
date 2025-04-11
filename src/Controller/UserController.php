<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
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
                ->where('u.nom LIKE :search')
                ->orWhere('u.prenom LIKE :search')
                ->orWhere('u.email LIKE :search')
                ->setParameter('search', '%' . $searchQuery . '%');
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
    
        return $this->render('user/index.html.twig', [
            'users' => $pagination,
            'stats' => $stats,
            'ageStats' => $ageStats,
            'searchQuery' => $searchQuery,
        ]);
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
            $session->set('user', [
                'id' => $user->getId_User(),
                'email' => $user->getEmail(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'image' => $user->getImage(),
                'role' => $user->getRole()
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

    #[Route('/register', name: 'app_user_register')]
    public function register(): Response
    {
        return $this->render('user/register.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('kernel.project_dir').'/public/uploads/users',
                    $newFilename
                );
                $user->setImage($newFilename);
            }
    
            $entityManager->persist($user);
            $entityManager->flush();
    
            $this->addFlash('success', 'Utilisateur créé avec succès');
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
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
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur mis à jour avec succès');
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
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
}