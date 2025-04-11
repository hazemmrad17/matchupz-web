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
            'searchQuery' => $searchQuery, // Pass the search query to the template
        ]);
    }

 
    #[Route('/verif-user', name: 'app_verif_user', methods: ['POST'])]
    public function verifUser(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        $email = $request->request->get('_username');
        $password = $request->request->get('_password');
    
        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);
    
        if ($user && $user->getPassword() === $password) {
            // Stocker les infos utilisateur en session
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
    $session->remove('user'); // Clear the user session data
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
            // Gestion de l'image pour le formulaire Symfony
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
    
        // Gestion de l'affichage du formulaire Symfony
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
            // Suppression de l'image associée
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