<?php

namespace App\Controller;


use App\Entity\Materiel;
use App\Entity\Fournisseur;
use App\Form\MaterielType;
use App\Repository\MaterielRepository;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use TCPDF;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use GuzzleHttp\Client;
use App\Service\SlackNotifier;

#[Route('/materiel')]
final class MaterielController extends AbstractController
{
    private $materielRepository;
    private $paginator;
    private $logger;

    public function __construct(MaterielRepository $materielRepository, PaginatorInterface $paginator, \Psr\Log\LoggerInterface $logger)
    {
        $this->materielRepository = $materielRepository;
        $this->paginator = $paginator;
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_materiel_index')]
    public function index(Request $request): Response
    {
        // Get search term, filter, and page from query parameters
        $searchTerm = $request->query->get('search', '');
        $filter = $request->query->get('filter', '');
        $page = $request->query->getInt('page', 1);

        // Build the query for materials
        $queryBuilder = $this->materielRepository->createQueryBuilder('m');

        // Apply search term
        if ($searchTerm) {
            $queryBuilder->andWhere('m.nom LIKE :search OR m.type LIKE :search OR m.etat LIKE :search OR m.barcode LIKE :search')
                         ->setParameter('search', '%' . $searchTerm . '%');
        }

        // Apply filter
        if ($filter && in_array($filter, ['nom', 'type', 'etat'])) {
            $queryBuilder->andWhere('m.' . $filter . ' IS NOT NULL');
        }

        // Sort by id DESC to show latest material first
        $queryBuilder->orderBy('m.id', 'DESC');

        // Paginate the results
        $pagination = $this->paginator->paginate(
            $queryBuilder->getQuery(),
            $page,
            10 // Items per page
        );

        // Calculate widget data
        $allMateriels = $this->materielRepository->findAll();
        $totalMateriels = count($allMateriels);

        // Type distribution
        $typeDistribution = $this->materielRepository->createQueryBuilder('m')
            ->select('m.type, COUNT(m.id) as count')
            ->groupBy('m.type')
            ->getQuery()
            ->getResult();
        $typeDistribution = array_column($typeDistribution, 'count', 'type');

        // State distribution
        $stateDistribution = $this->materielRepository->createQueryBuilder('m')
            ->select('m.etat, COUNT(m.id) as count')
            ->groupBy('m.etat')
            ->getQuery()
            ->getResult();
        $stateDistribution = array_column($stateDistribution, 'count', 'etat');

        // Inventory value
        $inventoryValue = array_reduce($allMateriels, fn($carry, $materiel) => $carry + ($materiel->getPrix() * $materiel->getQuantite()), 0);

        // Render the template
        return $this->render('materiel/index.html.twig', [
            'pagination' => $pagination,
            'searchTerm' => $searchTerm,
            'filter' => $filter,
            'totalMateriels' => $totalMateriels,
            'typeDistribution' => $typeDistribution,
            'stateDistribution' => $stateDistribution,
            'inventoryValue' => $inventoryValue,
        ]);
    }
    
    #[Route('/scan', name: 'app_materiel_scan', methods: ['GET'])]
    public function scan(Request $request, MaterielRepository $repository): JsonResponse
    {
        try {
            $barcode = $request->query->get('barcode');
            if (empty($barcode)) {
                return new JsonResponse(['error' => 'Code-barres vide'], 400);
            }
    
            $materiel = $repository->findOneBy(['barcode' => $barcode]);
            
            if (!$materiel) {
                return new JsonResponse([
                    'materiel' => null,
                    'barcode' => $barcode
                ]);
            }
    
            return new JsonResponse([
                'materiel' => [
                    'id' => $materiel->getId(),
                    'nom' => $materiel->getNom(),
                    'type' => $materiel->getType(),
                    'etat' => $materiel->getEtat(),
                    'quantite' => $materiel->getQuantite()
                ]
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Erreur serveur',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    #[Route('/materiel', name: 'app_materiel_indexF', methods: ['GET'])]
    public function indexF(
        MaterielRepository $repository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $query = $repository->createQueryBuilder('m')
            ->leftJoin('m.fournisseur', 'f')
            ->addSelect('f')
            ->orderBy('m.id', 'DESC') // Sort by id DESC for latest first
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );
        
        // Get all materials for stats
        $allMaterials = $repository->findAll();
        $totalMaterials = count($allMaterials);
        
        // Get type distribution
        $typeDistribution = array_count_values(
            array_map(fn($m) => $m->getType(), $allMaterials)
        );
        
        // Get state distribution
        $stateDistribution = array_count_values(
            array_map(fn($m) => $m->getEtat(), $allMaterials)
        );
        
        // Calculate inventory value
        $inventoryValue = array_reduce(
            $allMaterials,
            fn($carry, $m) => $carry + ($m->getPrix() * $m->getQuantite()),
            0
        );

        return $this->render('materiel/indexF.html.twig', [
            'pagination' => $pagination,
            'totalMateriels' => $totalMaterials,
            'typeDistribution' => $typeDistribution,
            'stateDistribution' => $stateDistribution,
            'inventoryValue' => $inventoryValue
        ]);
    }

    #[Route('/new', name: 'app_materiel_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            /** @var UploadedFile|null $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // Create a safe filename
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    // Move the file to the uploads directory
                    $imageFile->move(
                        $this->getParameter('materiels_directory'),
                        $newFilename
                    );
                    // Set the image path in the entity
                    $materiel->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                    return $this->render('materiel/new.html.twig', [
                        'materiel' => $materiel,
                        'form' => $form->createView(),
                    ]);
                }
            } else {
                // Explicitly set image to null if no file is uploaded
                $materiel->setImage(null);
            }

            $entityManager->persist($materiel);
            $entityManager->flush();

            $this->addFlash('success', 'Le matériel a été créé avec succès.');
            return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('materiel/new.html.twig', [
            'materiel' => $materiel,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/statistics', name: 'app_materiel_statistics', methods: ['GET'])]
    public function statistics(ChartBuilderInterface $chartBuilder): Response
    {
        $allMaterials = $this->materielRepository->findAll();
        $totalMateriels = count($allMaterials);

        // Ne garder que les matériels ayant un état non vide pour les stats
        $materialsWithEtat = array_filter($allMaterials, function($m) {
            $etat = $m->getEtat();
            return $etat !== null && trim($etat) !== '';
        });

        // Types uniques
        $types = array_unique(array_map(fn($m) => $m->getType(), $materialsWithEtat));
        $typesCount = count($types);

        // Matériels avec barcode
        $materialsWithBarcodeList = array_filter($allMaterials, fn($m) => $m->getBarcode());
        $materialsWithBarcode = count($materialsWithBarcodeList);
        $barcodeCoverage = $totalMateriels > 0 ? ($materialsWithBarcode / $totalMateriels) * 100 : 0;

        // Longueur moyenne du nom
        $averageNameLength = $totalMateriels > 0 ? array_sum(array_map(fn($m) => strlen($m->getNom()), $allMaterials)) / $totalMateriels : 0;

        // Distribution des types (seulement pour matériels avec état)
        $typeDistribution = array_count_values(array_map(fn($m) => $m->getType() ?: 'Non défini', $materialsWithEtat));
        // Distribution des états (seulement pour matériels avec état)
        $stateDistribution = array_count_values(array_map(fn($m) => $m->getEtat() ?: 'Non défini', $materialsWithEtat));

        // Valeur d'inventaire
        $inventoryValue = array_reduce($allMaterials, fn($carry, $m) => $carry + ($m->getPrix() * $m->getQuantite()), 0);

        // Top matériels par longueur de nom
        usort($allMaterials, fn($a, $b) => strlen($b->getNom()) <=> strlen($a->getNom()));
        $topMaterialsByNameLength = array_map(function ($m) {
            return [
                'nom' => $m->getNom(),
                'id' => $m->getId(),
                'nameLength' => strlen($m->getNom())
            ];
        }, array_slice($allMaterials, 0, 5));

        // Chart.js - Distribution des types
        $typeChart = $chartBuilder->createChart(Chart::TYPE_PIE);
        $typeChart->setData([
            'labels' => array_keys($typeDistribution),
            'datasets' => [[
                'label' => 'Répartition des types',
                'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
                'data' => array_values($typeDistribution),
            ]],
        ]);
        $typeChart->setOptions([
            'plugins' => [
                'legend' => ['position' => 'bottom'],
            ],
        ]);

        // Chart.js - Distribution des états
        $stateChart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $stateChart->setData([
            'labels' => array_keys($stateDistribution),
            'datasets' => [[
                'label' => 'Nombre de matériels',
                'backgroundColor' => '#36A2EB',
                'data' => array_values($stateDistribution),
            ]],
        ]);
        $stateChart->setOptions([
            'plugins' => [
                'legend' => ['display' => false],
            ],
            'scales' => [
                'x' => [
                    'ticks' => ['font' => ['size' => 12]],
                ],
                'y' => [
                    'title' => ['display' => true, 'text' => 'Nombre de matériels'],
                ],
            ],
        ]);

        return $this->render('materiel/statistics.html.twig', [
            'totalMateriels' => $totalMateriels,
            'typesCount' => $typesCount,
            'materialsWithBarcode' => $materialsWithBarcode,
            'barcodeCoverage' => $barcodeCoverage,
            'averageNameLength' => $averageNameLength,
            'typeDistribution' => $typeDistribution,
            'stateDistribution' => $stateDistribution,
            'inventoryValue' => $inventoryValue,
            'materialsWithBarcodeList' => $materialsWithBarcodeList,
            'topMaterialsByNameLength' => $topMaterialsByNameLength,
            'allMaterials' => $allMaterials,
            'typeChart' => $typeChart,
            'stateChart' => $stateChart
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_show', methods: ['GET'])]
    public function show(Materiel $materiel = null): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }

        return $this->render('materiel/show.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/materiel/{id}', name: 'app_materiel_showF', methods: ['GET'])]
    public function showF(Materiel $materiel = null): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }

        return $this->render('materiel/showF.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiel_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Materiel $materiel,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        // Vérifier les champs non-nullables pour éviter les erreurs avec les données existantes
        if ($materiel->getNom() === null) $materiel->setNom('');
        if ($materiel->getType() === null) $materiel->setType('');
        if ($materiel->getEtat() === null) $materiel->setEtat('');
        if ($materiel->getQuantite() <= 5) $materiel->setQuantite(6); // Respecter > 5
        if ($materiel->getPrix() === null) $materiel->setPrix(0.0);
        if ($materiel->getBarcode() === null) $materiel->setBarcode('');
        if ($materiel->getFournisseur() === null || !$this->materielRepository->checkFournisseurCategoryMatch($materiel->getFournisseur(), $materiel->getType())) {
            // Trouver un fournisseur par défaut correspondant au type
            $defaultFournisseur = $entityManager->getRepository(Fournisseur::class)
                ->findOneBy(['categorie_produit' => $materiel->getType()]);
            if ($defaultFournisseur) {
                $materiel->setFournisseur($defaultFournisseur);
            } else {
                $this->addFlash('error', 'Aucun fournisseur disponible pour la catégorie ' . $materiel->getType());
            }
        }

        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            dump($form->getErrors(true, true));
            if (!$form->isValid()) {
                dump($form->getData());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $imageFile */
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('materiels_directory'),
                        $newFilename
                    );
                    if ($materiel->getImage()) {
                        $oldImage = $this->getParameter('materiels_directory').'/'.$materiel->getImage();
                        if (file_exists($oldImage)) {
                            unlink($oldImage);
                        }
                    }
                    $materiel->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l’image.');
                    return $this->render('materiel/edit.html.twig', [
                        'materiel' => $materiel,
                        'form' => $form->createView(),
                    ]);
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Le matériel a été mis à jour avec succès.');
            return $this->redirectToRoute('app_materiel_show', ['id' => $materiel->getId()], Response::HTTP_SEE_OTHER);
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        return $this->render('materiel/edit.html.twig', [
            'materiel' => $materiel,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_materiel_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Materiel $materiel, 
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($materiel);
            $entityManager->flush();
            $this->addFlash('success', 'Le matériel a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_materiel_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/export/csv', name: 'app_materiel_export_csv')]
    public function exportCsv(MaterielRepository $repository): Response
    {
        $materiels = $repository->findAll();
        $output = fopen('php://memory', 'w');

        // Headers
        fputcsv($output, [
            'ID', 'Nom', 'Type', 'Quantité', 'État', 
            'Prix Unitaire', 'Code-barres', 'Fournisseur'
        ]);

        // Data
        foreach ($materiels as $m) {
            fputcsv($output, [
                $m->getId(),
                $m->getNom(),
                $m->getType(),
                $m->getQuantite(),
                $m->getEtat(),
                $m->getPrix(),
                $m->getBarcode(),
                $m->getFournisseur() ? $m->getFournisseur()->getNom() : 'N/A'
            ]);
        }

        fseek($output, 0);
        $response = new Response(stream_get_contents($output));
        fclose($output);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'materiels_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'app_materiel_export_pdf')]
    public function exportPdf(MaterielRepository $repository): Response
    {
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->renderView('materiel/exportPDF.html.twig', [
            'materiels' => $repository->findAll(),
            'date' => new \DateTime()
        ]);

        $mpdf->WriteHTML($html);
        return new Response(
            $mpdf->Output('materiels.pdf', 'I'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/export/excel', name: 'app_materiel_export_excel')]
    public function exportExcel(MaterielRepository $repository): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Headers
        $sheet->fromArray(
            ['ID', 'Nom', 'Type', 'Quantité', 'État', 'Prix', 'Code-barres', 'Fournisseur'],
            null,
            'A1'
        );

        // Data
        $data = [];
        foreach ($repository->findAll() as $m) {
            $data[] = [
                $m->getId(),
                $m->getNom(),
                $m->getType(),
                $m->getQuantite(),
                $m->getEtat(),
                $m->getPrix(),
                $m->getBarcode(),
                $m->getFournisseur() ? $m->getFournisseur()->getNom() : 'N/A'
            ];
        }
        $sheet->fromArray($data, null, 'A2');

        // Auto-size columns
        foreach (range('A', 'H') as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        $writer = new Xlsx($spreadsheet);
        $response = new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            }
        );

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="materiels_export.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }

    #[Route('/search', name: 'app_materiel_search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $term = $request->query->get('term', '');
        $materiels = $this->materielRepository->findBySearchTerm($term);
        $data = array_map(fn(Materiel $m) => [
            'id' => $m->getId(),
            'nom' => $m->getNom(),
            'type' => $m->getType(),
            'etat' => $m->getEtat(),
            'quantite' => $m->getQuantite(),
            'prix' => $m->getPrix(),
            'barcode' => $m->getBarcode(),
            'image' => $m->getImage(),
            'fournisseur' => $m->getFournisseur()?->getNom(),
        ], $materiels);

        return new JsonResponse($data);
    }

    #[Route('/materiel/analyze-image', name: 'app_materiel_analyze_image', methods: ['POST'])]
    public function analyzeImage(Request $request): JsonResponse
    {
        try {
            $imageFile = $request->files->get('image');
            if (!$imageFile) {
                return new JsonResponse(['error' => 'Aucune image fournie'], 400);
            }

            // Préparer la requête vers Hugging Face
            $client = new Client();
            $response = $client->post('https://api-inference.huggingface.co/models/google/vit-base-patch16-224', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $_ENV['HUGGINGFACE_TOKEN'],
                    'Content-Type' => 'application/octet-stream',
                ],
                'body' => fopen($imageFile->getPathname(), 'r'),
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            // Extraire les labels et scores
            $labels = array_map(fn($item) => [
                'label' => $item['label'],
                'score' => $item['score'],
            ], $result);

            // Suggérer un type basé sur les labels
            $suggestedType = $this->mapLabelsToType($labels);

            return new JsonResponse([
                'labels' => $labels,
                'suggestedType' => $suggestedType,
            ]);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return new JsonResponse(['error' => 'Erreur API: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Erreur générale: ' . $e->getMessage()], 500);
        }
    }

    private function mapLabelsToType(array $labels): string
{
    error_log('Labels reçus: ' . json_encode($labels)); // Log pour déboguer
    foreach ($labels as $item) {
        $label = strtolower($item['label']);
        $score = $item['score'];
        error_log("Analyse label: $label, score: $score"); // Log chaque label

        // Réduire le seuil pour plus de flexibilité
        if ($score < 0.1) { // Abaissé de 0.3 à 0.1
            continue;
        }

        // Matériel de jeu (ballons, raquettes, etc.)
        if (str_contains($label, 'ball') || str_contains($label, 'sports equipment') || str_contains($label, 'racket')) {
            return 'MATERIEL_JEU';
        }
        // Tenue sportive (t-shirts, maillots, etc.)
        elseif (str_contains($label, 'clothing') || str_contains($label, 'jersey') || str_contains($label, 'shirt') || str_contains($label, 't-shirt') || str_contains($label, 'uniform')) {
            return 'TENUE_SPORTIVE';
        }
        // Équipement de protection
        elseif (str_contains($label, 'helmet') || str_contains($label, 'protective') || str_contains($label, 'pad') || str_contains($label, 'guard')) {
            return 'EQUIPEMENT_PROTECTION';
        }
        // Accessoires d'entraînement (cônes, sifflets, etc.)
        elseif (str_contains($label, 'training') || str_contains($label, 'cone') || str_contains($label, 'agility') || str_contains($label, 'whistle') || str_contains($label, 'stopwatch')) {
            return 'ACCESSOIRE_ENTRAINEMENT';
        }
        // Équipement sportif (machines, poids, etc.)
        elseif (str_contains($label, 'gym') || str_contains($label, 'weight') || str_contains($label, 'machine') || str_contains($label, 'treadmill')) {
            return 'EQUIPEMENT_SPORTIF';
        }
        // Infrastructure
        elseif (str_contains($label, 'field') || str_contains($label, 'stadium') || str_contains($label, 'structure') || str_contains($label, 'goalpost')) {
            return 'INFRASTRUCTURE';
        }
    }
    return ''; // Type non déterminé
}

#[Route('/{id}/notify-slack', name: 'app_materiel_notify_slack', methods: ['POST'])]
public function notifySlack(Request $request, Materiel $materiel, SlackNotifier $slackNotifier): JsonResponse
{
    try {
        if (!$this->isCsrfTokenValid('slack_notify', $request->headers->get('X-CSRF-Token'))) {
            $this->logger->warning('Invalid CSRF token for Slack notification', [
                'material_id' => $materiel->getId(),
                'received_token' => $request->headers->get('X-CSRF-Token'),
                'expected_token' => $this->container->get('security.csrf.token_manager')->getToken('slack_notify')->getValue()
            ]);
            return new JsonResponse(['status' => 'error', 'message' => 'Invalid CSRF token'], 403);
        }

        if ($materiel->getQuantite() >= 5) {
            return new JsonResponse([
                'status' => 'error', 
                'message' => 'Notification not sent: Quantity is not low enough'
            ], 400);
        }

        $slackNotifier->sendLowStockNotification($materiel);
        return new JsonResponse(['status' => 'success']);
        
    } catch (\Throwable $e) {
        $this->logger->error('Slack notification failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'material_id' => $materiel->getId()
        ]);
        
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Failed to send notification: ' . $e->getMessage(),
            'details' => $e instanceof HttpExceptionInterface ? $e->getResponse()->getContent(false) : null
        ], 500);
    }
}

    
}