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
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;
use League\Csv\Writer;

#[Route('/fournisseur')]
final class FournisseurController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/fournisseur', name: 'app_fournisseur_index')]
    public function index(FournisseurRepository $fournisseurRepository, Request $request, PaginatorInterface $paginator): Response
    {
        // Get search term, sort, order, and filter from query parameters
        $searchTerm = $request->query->get('search', '');
        $sort = $request->query->get('sort', 'nom');
        $order = $request->query->get('order', 'asc');
        $filter = $request->query->get('filter', '');

        // Validate sort and order
        $validSorts = ['nom', 'email', 'adresse', 'categorie_produit'];
        $sort = in_array($sort, $validSorts) ? $sort : 'nom';
        $order = in_array($order, ['asc', 'desc']) ? $order : 'asc';

        // Fetch suppliers, filtered and sorted
        $fournisseurs = $fournisseurRepository->findFilteredSuppliers($searchTerm, $filter, $sort, $order);

        $suppliersWithEmail = $fournisseurRepository->getSuppliersWithEmailCount();
        $emailCoverage = $fournisseurs ? ($suppliersWithEmail / count($fournisseurs)) * 100 : 0;
        $categoriesCount = $fournisseurRepository->getCategoriesCount();
        $categoryDistribution = $fournisseurRepository->getCategoryDistribution();
        $locationDistribution = $fournisseurRepository->getLocationDistribution();
        $recentSuppliers = $fournisseurRepository->getRecentSuppliers();

        // Pagination
        $pagination = $paginator->paginate(
            $fournisseurs,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('fournisseur/index.html.twig', [
            'pagination' => $pagination,
            'fournisseurs' => $fournisseurs,
            'totalSuppliers' => count($fournisseurs),
            'categoriesCount' => $categoriesCount,
            'emailCoverage' => $emailCoverage,
            'suppliersWithEmail' => $suppliersWithEmail,
            'categoryDistribution' => $categoryDistribution,
            'locationDistribution' => $locationDistribution,
            'recentSuppliers' => $recentSuppliers,
            'searchTerm' => $searchTerm,
            'sort' => $sort,
            'order' => $order,
            'filter' => $filter,
            'categories' => array_keys($categoryDistribution), // For filter dropdown
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

    #[Route('/fournisseur/{id_fournisseur}', name: 'app_fournisseur_show', requirements: ['id_fournisseur' => '\d+'])]
    public function show(?Fournisseur $fournisseur): Response
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

#[Route('/fournisseur/widgets', name: 'app_fournisseur_widgets')]
    public function widgets(FournisseurRepository $fournisseurRepository): Response
    {
        $fournisseurs = $fournisseurRepository->findAll();
        $suppliersWithEmail = $fournisseurRepository->getSuppliersWithEmailCount();
        $emailCoverage = $fournisseurs ? ($suppliersWithEmail / count($fournisseurs)) * 100 : 0;
        $categoryDistribution = $fournisseurRepository->getCategoryDistribution();
        $recentSuppliers = $fournisseurRepository->getRecentSuppliers();

        return $this->render('fournisseur/widgets.html.twig', [
            'fournisseurs' => $fournisseurs,
            'emailCoverage' => $emailCoverage,
            'suppliersWithEmail' => $suppliersWithEmail,
            'categoryDistribution' => $categoryDistribution,
            'recentSuppliers' => $recentSuppliers,
        ]);
    }

    #[Route('/{id_fournisseur}/edit', name: 'app_fournisseur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fournisseur $fournisseur): Response
    {
        $form = $this->createForm(FournisseurType::class, $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // Débogage temporaire pour inspecter les erreurs
            dump($form->getErrors(true, true));
            if (!$form->isValid()) {
                dump($form->getData());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();


            $this->addFlash('success', 'Fournisseur mis à jour avec succès !');
            return $this->redirectToRoute('app_fournisseur_index');
        }

        return $this->render('fournisseur/edit.html.twig', [
            'form' => $form->createView(),
            'fournisseur' => $fournisseur,
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
    public function stats(FournisseurRepository $fournisseurRepository): Response
    {
        // Total suppliers
        $totalSuppliers = $fournisseurRepository->count([]);

        // Category distribution
        $categoryDistribution = $fournisseurRepository->getCategoryDistribution();
        $categoriesCount = count($categoryDistribution);

        // Location distribution (cities)
        $locationDistribution = $fournisseurRepository->getLocationDistribution();
        $citiesCount = count($locationDistribution);

        // Distribution des domaines email
        $emailDomainDistribution = $fournisseurRepository->getEmailDomainDistribution();
        // Moyenne de matériels par fournisseur
        $averageMaterialsPerSupplier = $fournisseurRepository->getAverageMaterialsPerSupplier();
        // Top 5 fournisseurs par nombre de matériels
        $topSuppliersByMaterialCount = $fournisseurRepository->getTopSuppliersByMaterialCount();

        return $this->render('fournisseur/statistics.html.twig', [
            'totalSuppliers' => $totalSuppliers,
            'categoriesCount' => $categoriesCount,
            'citiesCount' => $citiesCount,
            'categoryDistribution' => $categoryDistribution,
            'locationDistribution' => $locationDistribution,
            'emailDomainDistribution' => $emailDomainDistribution,
            'averageMaterialsPerSupplier' => $averageMaterialsPerSupplier,
            'topSuppliersByMaterialCount' => $topSuppliersByMaterialCount,
        ]);
    }

    

#[Route('/fournisseur/export/{format}', name: 'app_fournisseur_export', requirements: ['format' => 'csv|xlsx'])]
    public function export(string $format, FournisseurRepository $fournisseurRepository, Request $request): Response
    {
        // Get search term, sort, order, and filter from query parameters
        $searchTerm = $request->query->get('search', '');
        $sort = $request->query->get('sort', 'nom');
        $order = $request->query->get('order', 'asc');
        $filter = $request->query->get('filter', '');

        // Validate sort and order
        $validSorts = ['nom', 'email', 'adresse', 'categorie_produit'];
        $sort = in_array($sort, $validSorts) ? $sort : 'nom';
        $order = in_array($order, ['asc', 'desc']) ? $order : 'asc';

        // Fetch suppliers, filtered and sorted
        $fournisseurs = $fournisseurRepository->findFilteredSuppliers($searchTerm, $filter, $sort, $order);

        // Prepare headers
        $headers = [
            'ID',
            'Nom',
            'Email',
            'Adresse',
            'Catégorie Produit',
        ];

        // Prepare data
        $data = [];
        foreach ($fournisseurs as $fournisseur) {
            $data[] = [
                $fournisseur->getIdFournisseur(),
                $fournisseur->getNom(),
                $fournisseur->getEmail() ?? 'N/A',
                $fournisseur->getAdresse() ?? 'N/A',
                $fournisseur->getCategorieProduit() ?? 'N/A',
            ];
        }

        if ($format === 'csv') {
            // Fix: Pass an empty string to createFromString()
            $csv = Writer::createFromString('');

            // Insert headers and data
            $csv->insertOne($headers);
            $csv->insertAll($data);

            // Create a StreamedResponse for CSV
            $response = new StreamedResponse(function () use ($csv) {
                echo $csv->toString();
            });

            $filename = 'fournisseurs_' . date('Ymd_His') . '.csv';
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
            $response->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            return $response;
        } elseif ($format === 'xlsx') {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // Insert headers
            $column = 'A';
            foreach ($headers as $header) {
                $sheet->setCellValue($column . '1', $header);
                $column++;
            }

            // Insert data
            $row = 2;
            foreach ($data as $rowData) {
                $column = 'A';
                foreach ($rowData as $value) {
                    $sheet->setCellValue($column . $row, $value);
                    $column++;
                }
                $row++;
            }

            // Create a StreamedResponse for XLSX
            $writer = new Xlsx($spreadsheet);
            $response = new StreamedResponse(function () use ($writer) {
                $writer->save('php://output');
            });

            $filename = 'fournisseurs_' . date('Ymd_His') . '.xlsx';
            $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
            $response->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            return $response;
        }

        // Fallback for invalid format (though route requirements should prevent this)
        throw new \Exception('Invalid export format.');
    }
    
}
