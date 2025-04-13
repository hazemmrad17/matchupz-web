<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Form\FournisseurType;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface; // Use the interface for dependency injection

#[Route('/fournisseur')]
final class FournisseurController extends AbstractController
{
    #[Route('/fournisseur', name: 'app_fournisseur_index')]
public function index(
    FournisseurRepository $repository,
    Request $request,
    PaginatorInterface $paginator
): Response {
    // Create query for pagination
    $query = $repository->createQueryBuilder('f')->getQuery();

    // Paginate results
    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1), // Current page, default 1
        6 // Items per page, matching MaterielController
    );

    // Get all suppliers for statistics
    $allSuppliers = $repository->findAll();
    $totalSuppliers = count($allSuppliers);
    
    // Get category distribution
    $categoryDistribution = array_count_values(
        array_map(fn($f) => $f->getCategorieProduit(), $allSuppliers)
    );
    
    // Extract cities from addresses
    $locations = array_map(function($f) {
        $parts = explode(',', $f->getAdresse());
        return trim(end($parts)) ?: 'Unknown';
    }, $allSuppliers);
    $locationDistribution = array_count_values($locations);
    arsort($locationDistribution);
    $locationDistribution = array_slice($locationDistribution, 0, 5);
    
    return $this->render('fournisseur/index.html.twig', [
        'pagination' => $pagination,
        'totalSuppliers' => $totalSuppliers,
        'categoriesCount' => count($categoryDistribution),
        'emailCoverage' => $this->calculateEmailCoverage($allSuppliers, $totalSuppliers),
        'categoryDistribution' => $categoryDistribution,
        'locationDistribution' => $locationDistribution
    ]);
}

#[Route('/', name: 'app_fournisseur_indexF')]
public function indexF(
    FournisseurRepository $repository,
    Request $request,
    PaginatorInterface $paginator
): Response {
    // Create query for pagination
    $query = $repository->createQueryBuilder('f')->getQuery();

    // Paginate results
    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1), // Current page, default 1
        6 // Items per page, matching MaterielController
    );

    // Get all suppliers for statistics
    $allSuppliers = $repository->findAll();
    $totalSuppliers = count($allSuppliers);
    
    // Get category distribution
    $categoryDistribution = array_count_values(
        array_map(fn($f) => $f->getCategorieProduit(), $allSuppliers)
    );
    
    // Extract cities from addresses
    $locations = array_map(function($f) {
        $parts = explode(',', $f->getAdresse());
        return trim(end($parts)) ?: 'Unknown';
    }, $allSuppliers);
    $locationDistribution = array_count_values($locations);
    arsort($locationDistribution);
    $locationDistribution = array_slice($locationDistribution, 0, 5);
    
    return $this->render('fournisseur/indexF.html.twig', [
        'pagination' => $pagination,
        'totalSuppliers' => $totalSuppliers,
        'categoriesCount' => count($categoryDistribution),
        'emailCoverage' => $this->calculateEmailCoverage($allSuppliers, $totalSuppliers),
        'categoryDistribution' => $categoryDistribution,
        'locationDistribution' => $locationDistribution
    ]);
}
    
    private function calculateEmailCoverage(array $suppliers, int $totalSuppliers): int
    {
        $withEmail = count(array_filter(
            $suppliers,
            fn($f) => !empty($f->getEmail())
        ));
        return $totalSuppliers > 0 ? round(($withEmail/$totalSuppliers)*100) : 0;
    }
    #[Route('/new', name: 'app_fournisseur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fournisseur = new Fournisseur();
        $form = $this->createForm(FournisseurType::class, $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fournisseur);
            $entityManager->flush();

            return $this->redirectToRoute('app_fournisseur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fournisseur/new.html.twig', [
            'fournisseur' => $fournisseur,
            'form' => $form,
        ]);
    }

    // src/Controller/FournisseurController.php

#[Route('/fournisseur/{id_fournisseur}', name: 'app_fournisseur_show', methods: ['GET'])]
public function show(Fournisseur $fournisseur = null): Response
{
    if (!$fournisseur) {
        throw $this->createNotFoundException('Fournisseur non trouvé');
    }

    return $this->render('fournisseur/show.html.twig', [
        'fournisseur' => $fournisseur,
    ]);
}

#[Route('/{id_fournisseur}', name: 'app_fournisseur_showF', methods: ['GET'])]
public function showF(Fournisseur $fournisseur = null): Response
{
    if (!$fournisseur) {
        throw $this->createNotFoundException('Fournisseur non trouvé');
    }

    return $this->render('fournisseur/showF.html.twig', [
        'fournisseur' => $fournisseur,
    ]);
}

    #[Route('/{id_fournisseur}/edit', name: 'app_fournisseur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FournisseurType::class, $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fournisseur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('fournisseur/edit.html.twig', [
            'fournisseur' => $fournisseur,
            'form' => $form,
        ]);
    }

    #[Route('/{id_fournisseur}', name: 'app_fournisseur_delete', methods: ['POST'])]
    public function delete(Request $request, Fournisseur $fournisseur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fournisseur->getId_fournisseur(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($fournisseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fournisseur_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/fournisseur/stats', name: 'app_fournisseur_stats')]
public function stats(FournisseurRepository $repository): Response
{
    $allSuppliers = $repository->findAll();
    
    // Calculate basic stats
    $totalSuppliers = count($allSuppliers);
    
    // Get unique categories
    $categories = array_unique(array_map(
        fn($f) => $f->getCategorieProduit(), 
        $allSuppliers
    ));
    $categoriesCount = count($categories);
    
    // Email coverage (assuming non-empty string is valid)
    $withEmail = count(array_filter(
        $allSuppliers,
        fn($f) => !empty($f->getEmail())
    ));
    $emailCoverage = $totalSuppliers > 0 ? round(($withEmail/$totalSuppliers)*100) : 0;
    
    // Category distribution
    $categoryDistribution = array_count_values(
        array_map(fn($f) => $f->getCategorieProduit(), $allSuppliers)
    );
    
    // Extract cities from addresses (simple example)
    $locations = array_map(function($f) {
        $parts = explode(',', $f->getAdresse());
        return trim(end($parts)) ?: 'Unknown';
    }, $allSuppliers);
    $locationDistribution = array_count_values($locations);
    arsort($locationDistribution);
    $locationDistribution = array_slice($locationDistribution, 0, 5); // Top 5
    
    return $this->render('fournisseur/index.html.twig', [
        'totalSuppliers' => $totalSuppliers,
        'categoriesCount' => $categoriesCount,
        'emailCoverage' => $emailCoverage,
        'categoryDistribution' => $categoryDistribution,
        'locationDistribution' => $locationDistribution,
        'allSuppliers' => $allSuppliers
    ]);
}
    
}
