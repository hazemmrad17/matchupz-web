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
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Mpdf\Mpdf;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use GuzzleHttp\Client;
use App\Service\SlackNotifier;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

#[Route('/materiel')]
final class MaterielController extends AbstractController
{
    private $materielRepository;
    private $paginator;
    private $logger;

    public function __construct(MaterielRepository $materielRepository, PaginatorInterface $paginator, LoggerInterface $logger)
    {
        $this->materielRepository = $materielRepository;
        $this->paginator = $paginator;
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_materiel_index')]
    public function index(Request $request): Response
    {
        $searchTerm = $request->query->get('search', '');
        $filter = $request->query->get('filter', '');
        $page = $request->query->getInt('page', 1);

        $queryBuilder = $this->materielRepository->createQueryBuilder('m');

        if ($searchTerm) {
            $queryBuilder->andWhere('m.nom LIKE :search OR m.type LIKE :search OR m.etat LIKE :search OR m.barcode LIKE :search')
                         ->setParameter('search', '%' . $searchTerm . '%');
        }

        if ($filter && in_array($filter, ['nom', 'type', 'etat'])) {
            $queryBuilder->andWhere('m.' . $filter . ' IS NOT NULL');
        }

        $queryBuilder->orderBy('m.id', 'DESC');

        $pagination = $this->paginator->paginate(
            $queryBuilder->getQuery(),
            $page,
            10
        );

        $allMateriels = $this->materielRepository->findAll();
        $totalMateriels = count($allMateriels);

        $typeDistribution = $this->materielRepository->createQueryBuilder('m')
            ->select('m.type, COUNT(m.id) as count')
            ->groupBy('m.type')
            ->getQuery()
            ->getResult();
        $typeDistribution = array_column($typeDistribution, 'count', 'type');

        $stateDistribution = $this->materielRepository->createQueryBuilder('m')
            ->select('m.etat, COUNT(m.id) as count')
            ->groupBy('m.etat')
            ->getQuery()
            ->getResult();
        $stateDistribution = array_column($stateDistribution, 'count', 'etat');

        $inventoryValue = array_reduce($allMateriels, fn($carry, $materiel) => $carry + ($materiel->getPrix() * $materiel->getQuantite()), 0);

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
    public function indexF(MaterielRepository $repository, Request $request, PaginatorInterface $paginator): Response
    {
        $query = $repository->createQueryBuilder('m')
            ->leftJoin('m.fournisseur', 'f')
            ->addSelect('f')
            ->orderBy('m.id', 'DESC')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        $allMaterials = $repository->findAll();
        $totalMaterials = count($allMaterials);

        $typeDistribution = array_count_values(
            array_map(fn($m) => $m->getType(), $allMaterials)
        );

        $stateDistribution = array_count_values(
            array_map(fn($m) => $m->getEtat(), $allMaterials)
        );

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
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
                    $materiel->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                    return $this->render('materiel/new.html.twig', [
                        'materiel' => $materiel,
                        'form' => $form->createView(),
                    ]);
                }
            } else {
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

        $materialsWithEtat = array_filter($allMaterials, function($m) {
            $etat = $m->getEtat();
            return $etat !== null && trim($etat) !== '';
        });

        $types = array_unique(array_map(fn($m) => $m->getType(), $materialsWithEtat));
        $typesCount = count($types);

        $materialsWithBarcodeList = array_filter($allMaterials, fn($m) => $m->getBarcode());
        $materialsWithBarcode = count($materialsWithBarcodeList);
        $barcodeCoverage = $totalMateriels > 0 ? ($materialsWithBarcode / $totalMateriels) * 100 : 0;

        $averageNameLength = $totalMateriels > 0 ? array_sum(array_map(fn($m) => strlen($m->getNom()), $allMaterials)) / $totalMateriels : 0;

        $typeDistribution = array_count_values(array_map(fn($m) => $m->getType() ?: 'Non défini', $materialsWithEtat));
        $stateDistribution = array_count_values(array_map(fn($m) => $m->getEtat() ?: 'Non défini', $materialsWithEtat));

        $inventoryValue = array_reduce($allMaterials, fn($carry, $m) => $carry + ($m->getPrix() * $m->getQuantite()), 0);

        usort($allMaterials, fn($a, $b) => strlen($b->getNom()) <=> strlen($a->getNom()));
        $topMaterialsByNameLength = array_map(function ($m) {
            return [
                'nom' => $m->getNom(),
                'id' => $m->getId(),
                'nameLength' => strlen($m->getNom())
            ];
        }, array_slice($allMaterials, 0, 5));

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

    #[Route('/materiel/{id<\d+>}', name: 'app_materiel_showF', methods: ['GET'])]
    public function showF(Materiel $materiel = null): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }

        return $this->render('materiel/showF.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/{id<\d+>}/edit', name: 'app_materiel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materiel $materiel, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        if ($materiel->getNom() === null) $materiel->setNom('');
        if ($materiel->getType() === null) $materiel->setType('');
        if ($materiel->getEtat() === null) $materiel->setEtat('');
        if ($materiel->getPrix() === null) $materiel->setPrix(0.0);
        if ($materiel->getBarcode() === null) $materiel->setBarcode('');
        if ($materiel->getFournisseur() === null || !$this->materielRepository->checkFournisseurCategoryMatch($materiel->getFournisseur(), $materiel->getType())) {
            $defaultFournisseur = $entityManager->getRepository(Fournisseur::class)
                ->findOneBy(['categorie_produit' => $materiel->getType()]);
            if ($defaultFournisseur) {
                $materiel->setFournisseur($defaultFournisseur);
            } else {
                $this->addFlash('error', 'Aucun fournisseur disponible pour la catégorie ' . $materiel->getType());
            }
        }

        $form = $this->createForm(MaterielType::class, $materiel, ['edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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

    #[Route('/{id<\d+>}', name: 'app_materiel_delete', methods: ['POST'])]
    public function delete(Request $request, Materiel $materiel = null, EntityManagerInterface $entityManager): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }
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

        fputcsv($output, [
            'ID', 'Nom', 'Type', 'Quantité', 'État', 
            'Prix Unitaire', 'Code-barres', 'Fournisseur'
        ]);

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

        $sheet->fromArray(
            ['ID', 'Nom', 'Type', 'Quantité', 'État', 'Prix', 'Code-barres', 'Fournisseur'],
            null,
            'A1'
        );

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

    #[Route('/materiel/analyze-image-AI', name: 'app_materiel_analyze_image_AI', methods: ['POST'])]
    public function analyzeImageAI(Request $request, LoggerInterface $logger): JsonResponse
    {
        try {
            $imageFile = $request->files->get('image');
            if (!$imageFile) {
                $logger->error('No image file provided in request');
                return new JsonResponse(['error' => 'Aucune image fournie'], 400);
            }

            // Validate image
            if (!$imageFile->isValid() || !in_array($imageFile->getMimeType(), ['image/jpeg', 'image/png'])) {
                $logger->error('Invalid image file', ['mime_type' => $imageFile->getMimeType()]);
                return new JsonResponse(['error' => 'Fichier image invalide (JPEG ou PNG requis)'], 400);
            }

            $huggingFaceToken = $_ENV['HUGGINGFACE_TOKEN'] ?? null;
            if (!$huggingFaceToken) {
                $logger->error('HUGGINGFACE_TOKEN is not defined');
                return new JsonResponse(['error' => 'Configuration manquante : jeton Hugging Face non défini'], 500);
            }

            $client = new \GuzzleHttp\Client();
            $maxRetries = 3;
            $retryDelay = 2; // secondes
            $lastException = null;
            for ($attempt = 1; $attempt <= $maxRetries; $attempt++) {
                try {
                    $logger->info("Tentative $attempt d'appel à l'API Hugging Face");
                    $response = $client->post('https://api-inference.huggingface.co/models/google/vit-base-patch16-224', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $huggingFaceToken,
                            'Content-Type' => 'application/octet-stream',
                        ],
                        'body' => fopen($imageFile->getPathname(), 'r'),
                        'timeout' => 30,
                    ]);
                    $result = json_decode($response->getBody()->getContents(), true);
                    if (json_last_error() !== JSON_ERROR_NONE) {
                        $logger->error('Invalid JSON response from Hugging Face', ['error' => json_last_error_msg()]);
                        return new JsonResponse(['error' => 'Réponse API invalide'], 500);
                    }
                    $labels = array_map(fn($item) => [
                        'label' => $item['label'],
                        'score' => $item['score'],
                    ], $result);
                    $suggestedType = $this->mapLabelsToType($labels);
                    $logger->info('Image analysis completed', ['labels' => $labels, 'suggestedType' => $suggestedType]);
                    return new JsonResponse([
                        'labels' => $labels,
                        'suggestedType' => $suggestedType,
                    ]);
                } catch (\GuzzleHttp\Exception\ServerException $e) {
                    $status = $e->getResponse()->getStatusCode();
                    $logger->warning("Erreur serveur Hugging Face (tentative $attempt)", [
                        'status' => $status,
                        'message' => $e->getMessage(),
                    ]);
                    if ($status == 503 && $attempt < $maxRetries) {
                        sleep($retryDelay);
                        continue;
                    }
                    $lastException = $e;
                    break;
                } catch (\GuzzleHttp\Exception\ClientException $e) {
                    $status = $e->getResponse()->getStatusCode();
                    $logger->error("Erreur client Hugging Face (tentative $attempt)", [
                        'status' => $status,
                        'message' => $e->getMessage(),
                    ]);
                    $lastException = $e;
                    break;
                } catch (\Exception $e) {
                    $logger->error("Erreur inconnue lors de l'appel à Hugging Face (tentative $attempt)", [
                        'message' => $e->getMessage(),
                    ]);
                    $lastException = $e;
                    break;
                }
            }
            // Gestion de l'erreur après les tentatives
            if ($lastException instanceof \GuzzleHttp\Exception\ServerException && $lastException->getResponse()->getStatusCode() == 503) {
                return new JsonResponse([
                    'error' => "Le service d'analyse d'image est temporairement indisponible (Hugging Face 503). Merci de réessayer plus tard.",
                    'details' => $lastException->getMessage(),
                ], 503);
            } elseif ($lastException instanceof \GuzzleHttp\Exception\ClientException) {
                $status = $lastException->getResponse()->getStatusCode();
                $errorMsg = $status == 429 ? "Quota Hugging Face dépassé ou trop de requêtes. Merci de réessayer plus tard." : "Erreur API Hugging Face ($status) : " . $lastException->getMessage();
                return new JsonResponse([
                    'error' => $errorMsg,
                    'details' => $lastException->getMessage(),
                ], $status);
            } elseif ($lastException instanceof \Exception) {
                return new JsonResponse([
                    'error' => "Erreur lors de l'analyse de l'image : " . $lastException->getMessage(),
                ], 500);
            }
            return new JsonResponse([
                'error' => "Erreur inconnue lors de l'analyse de l'image. Merci de réessayer plus tard.",
            ], 500);
        } catch (\Exception $e) {
            $logger->error('General error in image analysis', ['message' => $e->getMessage()]);
            return new JsonResponse(['error' => 'Erreur lors de l\'analyse : ' . $e->getMessage()], 500);
        }
    }

    private function mapLabelsToType(array $labels): string
    {
        error_log('Labels reçus: ' . json_encode($labels)); // Log pour déboguer
        foreach ($labels as $item) {
            $label = strtolower($item['label']);
            $score = $item['score'];
            error_log("Analyse label: $label, score: $score"); // Log chaque label
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

    #[Route('/materiel/analyze-image', name: 'app_materiel_analyze_image', methods: ['POST'])]
    public function analyzeImage(Request $request, HttpClientInterface $httpClient, ParameterBagInterface $params, LoggerInterface $logger): JsonResponse
    {
        try {
            $imageFile = $request->files->get('image');
            if (!$imageFile) {
                $logger->error('No image file provided');
                return new JsonResponse(['error' => 'Aucune image fournie'], 400);
            }

            // Convert the uploaded image to base64
            $imageData = base64_encode(file_get_contents($imageFile->getPathname()));

            $apiKey = $params->get('roboflow_api_key');
            $inferenceUrl = 'https://serverless.roboflow.com/material-detection-ptb8q/8';

            $response = $httpClient->request('POST', $inferenceUrl, [
                'query' => ['api_key' => $apiKey],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => $imageData,
                'timeout' => 30,
            ]);

            $result = $response->toArray();

            $predictions = array_map(function($item) {
                return [
                    'label' => $item['class'],
                    'confidence' => $item['confidence'],
                    'x' => $item['x'],
                    'y' => $item['y'],
                    'width' => $item['width'],
                    'height' => $item['height'],
                ];
            }, $result['predictions'] ?? []);

            $suggestedType = $this->mapLabelsToTypeObject($predictions);

            return new JsonResponse([
                'predictions' => $predictions,
                'suggestedType' => $suggestedType,
            ]);
        } catch (\Exception $e) {
            $logger->error('Image analysis error: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Erreur lors de l\'analyse: ' . $e->getMessage()], 500);
        }
    }

    private function mapLabelsToTypeObject(array $labels): string
    {
        $this->logger->info('Labels reçus pour mapping', ['labels' => $labels]);

        foreach ($labels as $item) {
            $label = strtolower($item['label']);
            $confidence = $item['confidence'];
            $this->logger->info("Analyse label: $label, confidence: $confidence");

            if ($confidence < 0.1) {
                continue;
            }

            switch ($label) {
                case 'ballon de basket':
                case 'ballon de football':
                    return 'MATERIEL_JEU';
                case 'chasuble rouge':
                case 'maillot de match rouge':
                case 'short dentrainement':
                case 'veste dechauffement':
                    return 'TENUE_SPORTIVE';
                case 'casque de rugby':
                case 'genouilleres':
                case 'protege-tibias':
                    return 'EQUIPEMENT_PROTECTION';
                case 'chronometre':
                case 'drapeau de touche':
                case 'jeu de cartes darbitrage':
                case 'plots dentrainement':
                case 'poteau de slalom':
                case 'sifflet':
                    return 'ACCESSOIRE_ENTRAINEMENT';
                case 'material':
                    return 'EQUIPEMENT_SPORTIF';
                case 'banc de touche':
                case 'eclairage de terrain':
                case 'filet de but':
                case 'filet de volley':
                    return 'INFRASTRUCTURE';
            }
        }

        return '';
    }

    #[Route('/{id}/notify-slack', name: 'app_materiel_notify_slack', methods: ['POST'])]
public function notifySlack(Request $request, Materiel $materiel, SlackNotifier $slackNotifier): JsonResponse
{
    try {
        // Vérification CSRF
        if (!$this->isCsrfTokenValid('slack_notify', $request->headers->get('X-CSRF-Token'))) {
            $this->logger->warning('Invalid CSRF token for Slack notification', [
                'material_id' => $materiel->getId(),
                'received_token' => $request->headers->get('X-CSRF-Token'),
                'expected_token' => $this->container->get('security.csrf.token_manager')->getToken('slack_notify')->getValue()
            ]);
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Invalid CSRF token'
            ], 403);
        }

        // Vérification quantité
        if ($materiel->getQuantite() >= 5) {
            return new JsonResponse([
                'status' => 'error', 
                'message' => 'Notification not sent: Quantity is not low enough'
            ], 400);
        }

        // Envoi notification Slack
        $slackNotifier->sendLowStockNotification($materiel);

        // Réponse succès
        return new JsonResponse([
            'status' => 'success',
            'message' => 'Slack notification sent successfully'
        ]);
        
    } catch (\Throwable $e) {
        // Log l'erreur
        $this->logger->error('Slack notification failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'material_id' => $materiel->getId()
        ]);
        
        // Réponse erreur avec message clair
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Failed to send notification: ' . $e->getMessage()
        ], 500);
    }
}

    #[Route('/detect-object-webcam', name: 'app_materiel_detect_object_webcam', methods: ['POST'])]
    public function detectObjectWebcam(Request $request, HttpClientInterface $httpClient, ParameterBagInterface $params, LoggerInterface $logger): JsonResponse
    {
        try {
            $imageData = $request->request->get('image');
            $logger->info('Received image data', ['length' => strlen($imageData ?? '')]);

            if (!$imageData) {
                $logger->error('No image data provided');
                return new JsonResponse(['error' => 'Aucune donnée d\'image fournie'], 400);
            }

            // Remove data URL prefix if present
            $base64Image = preg_replace('/^data:image\/[a-zA-Z]+;base64,/', '', $imageData);
            $logger->info('Base64 image after prefix removal', ['length' => strlen($base64Image)]);

            // Validate base64 string
            if (!base64_decode($base64Image, true)) {
                $logger->error('Invalid base64 image data', ['base64' => substr($base64Image, 0, 100)]);
                return new JsonResponse(['error' => 'Données d\'image base64 invalides'], 400);
            }

            $apiKey = $params->get('roboflow_api_key');
            $inferenceUrl = 'https://serverless.roboflow.com/material-detection-ptb8q/8';

            $logger->info('Sending request to Roboflow API', ['url' => $inferenceUrl]);
            $response = $httpClient->request('POST', $inferenceUrl, [
                'query' => ['api_key' => $apiKey],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => $base64Image,
                'timeout' => 30,
            ]);

            $result = $response->toArray();
            $logger->info('Roboflow API response', ['predictions' => $result['predictions'] ?? []]);

            $predictions = array_map(function($item) {
                return [
                    'label' => $item['class'],
                    'confidence' => $item['confidence'],
                    'x' => $item['x'],
                    'y' => $item['y'],
                    'width' => $item['width'],
                    'height' => $item['height'],
                ];
            }, $result['predictions'] ?? []);

            $suggestedType = $this->mapLabelsToTypeObject($predictions);

            return new JsonResponse([
                'predictions' => $predictions,
                'suggestedType' => $suggestedType,
            ]);

        } catch (\Exception $e) {
            $logger->error('Object detection failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return new JsonResponse([
                'error' => 'Erreur lors de la détection',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id<\d+>}', name: 'app_materiel_show', methods: ['GET'])]
    public function show(Materiel $materiel = null): Response
    {
        if (!$materiel) {
            throw $this->createNotFoundException('Matériel non trouvé');
        }

        return $this->render('materiel/show.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    #[Route('/fournisseurs-by-type/{type}', name: 'app_fournisseurs_by_type', methods: ['GET'])]
    public function fournisseursByType(string $type, EntityManagerInterface $em): Response
    {
        $fournisseurs = $em->getRepository(Fournisseur::class)->findBy(['categorie_produit' => $type]);
        $data = [];
        foreach ($fournisseurs as $f) {
            $data[] = [
                'id' => $f->getIdFournisseur(),
                'nom' => $f->getNom(),
            ];
        }
        return $this->json($data);
    }
}
