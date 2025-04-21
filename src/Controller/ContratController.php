<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Filesystem\Filesystem;

#[Route('/contrat')]
class ContratController extends AbstractController
{
    private $contratRepository;
    private $logger;

    public function __construct(ContratRepository $contratRepository, LoggerInterface $logger)
    {
        $this->contratRepository = $contratRepository;
        $this->logger = $logger;
    }

    #[Route('/main', name: 'contrat_main', methods: ['GET'])]
    public function index(Request $request, PaginatorInterface $paginator, EntityManagerInterface $entityManager): Response
    {
        $searchTerm = $request->query->get('search', '');
        $filter = $request->query->get('filter', '');
        $page = $request->query->getInt('page', 1);

        $queryBuilder = $this->contratRepository->createQueryBuilder('c')
            ->leftJoin('c.sponsor', 's');

        if ($searchTerm) {
            $queryBuilder->andWhere('c.Titre LIKE :search OR s.nom LIKE :search OR c.Montant LIKE :search')
                ->setParameter('search', '%' . $searchTerm . '%');
        }

        if ($filter) {
            switch ($filter) {
                case 'titre':
                    $queryBuilder->orderBy('c.Titre', 'ASC');
                    break;
                case 'datedebut':
                    $queryBuilder->orderBy('c.DateDebut', 'ASC');
                    break;
                case 'datefin':
                    $queryBuilder->orderBy('c.DateFin', 'ASC');
                    break;
                case 'montant':
                    $queryBuilder->orderBy('c.Montant', 'ASC');
                    break;
                case 'sponsor':
                    $queryBuilder->orderBy('s.nom', 'ASC');
                    break;
            }
        }

        $contrats = $paginator->paginate(
            $queryBuilder->getQuery(),
            $page,
            3 // Items per page, matching SponsorController
        );

        // Fetch recent contracts
        $recentContracts = $this->contratRepository->findRecentContracts(5);

        // Fetch all contracts for stats
        $allContracts = $this->contratRepository->findAll();
        $totalContracts = count($allContracts);
        $sponsorDistribution = $this->getSponsorDistribution($allContracts);

        // Calculate total montant for stats
        $totalMontant = array_sum(array_map(fn($contract) => $contract->getMontant(), $allContracts));

        return $this->render('contrat/main.html.twig', [
            'contrats' => $contrats,
            'recentContracts' => $recentContracts,
            'searchTerm' => $searchTerm,
            'filter' => $filter,
            'totalContracts' => $totalContracts,
            'sponsorDistribution' => $sponsorDistribution,
            'totalMontant' => $totalMontant,
        ]);
    }

    #[Route('/new', name: 'contrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contrat = new Contrat();
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Log form data
                $this->logger->info('Form submitted with data:', [
                    'Titre' => $contrat->getTitre(),
                    'DateDebut' => $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : null,
                    'DateFin' => $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : null,
                    'Montant' => $contrat->getMontant(),
                    'Id_sponsor' => $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : null,
                ]);

                // Handle signature
                $signatureData = $form->get('signature')->getData();
                if (!$signatureData) {
                    $this->logger->error('No signature data received');
                    $this->addFlash('error', 'Veuillez fournir une signature.');
                    return $this->render('contrat/new.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }
                $this->logger->info('Signature data: ' . substr($signatureData, 0, 50) . '...');

                if (strpos($signatureData, 'data:image/png;base64,') !== 0) {
                    $this->logger->error('Invalid signature format');
                    $this->addFlash('error', 'Format de signature invalide.');
                    return $this->render('contrat/new.html.twig', [
                        'form' => $form->createView(),
                    ]);
                }

                // Save signature
                $titre = $contrat->getTitre() ?: 'Untitled';
                $filePath = $this->saveSignature($signatureData, $titre);
                $contrat->setSignature($filePath);
                $this->logger->info('Signature saved at: ' . $filePath);

                // Persist contract
                $entityManager->persist($contrat);
                $entityManager->flush();

                $this->addFlash('success', 'Contrat créé avec succès.');
                return $this->redirectToRoute('contrat_main');
            } catch (\Exception $e) {
                $this->logger->error('Error saving contract: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de la création du contrat : ' . $e->getMessage());
            }
        } else {
            $this->logger->info('Form invalid', ['errors' => (string) $form->getErrors(true, true)]);
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        return $this->render('contrat/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idContrat}', name: 'contrat_show', methods: ['GET'], requirements: ['idContrat' => '\d+'])]
    public function show(string $idContrat, ContratRepository $contratRepository): Response
    {
        $idContrat = (int) $idContrat; // Cast string to int
        $contrat = $contratRepository->find($idContrat);
        if (!$contrat) {
            throw $this->createNotFoundException('Contrat not found for id ' . $idContrat);
        }

        return $this->render('contrat/show.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{idContrat}/edit', name: 'contrat_edit', methods: ['GET', 'POST'], requirements: ['idContrat' => '\d+'])]
    public function edit(Request $request, string $idContrat, ContratRepository $contratRepository, EntityManagerInterface $entityManager): Response
    {
        $idContrat = (int) $idContrat; // Cast string to int
        $contrat = $contratRepository->find($idContrat);
        if (!$contrat) {
            throw $this->createNotFoundException('Contrat not found for id ' . $idContrat);
        }

        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Handle signature
                $signatureData = $form->get('signature')->getData();
                $this->logger->info('Signature data received for edit: ' . substr($signatureData, 0, 50) . '...');

                if ($signatureData && strpos($signatureData, 'data:image/png;base64,') === 0) {
                    // Delete old signature file if it exists
                    $oldSignature = $contrat->getSignature();
                    if ($oldSignature && file_exists($this->getParameter('signatures_directory') . '/' . $oldSignature)) {
                        unlink($this->getParameter('signatures_directory') . '/' . $oldSignature);
                        $this->logger->info('Deleted old signature: ' . $oldSignature);
                    }

                    // Save new signature
                    $filePath = $this->saveSignature($signatureData, $contrat->getIdContrat());
                    $contrat->setSignature($filePath);
                    $this->logger->info('New signature saved at: ' . $filePath);
                }

                $entityManager->flush();

                $this->addFlash('success', 'Contrat mis à jour avec succès.');
                return $this->redirectToRoute('contrat_main');
            } catch (\Exception $e) {
                $this->logger->error('Error updating contract: ' . $e->getMessage());
                $this->addFlash('error', 'Erreur lors de la mise à jour du contrat : ' . $e->getMessage());
            }
        }

        return $this->render('contrat/edit.html.twig', [
            'form' => $form->createView(),
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{idContrat}', name: 'contrat_delete', methods: ['POST'], requirements: ['idContrat' => '\d+'])]
    public function delete(Request $request, string $idContrat, ContratRepository $contratRepository, EntityManagerInterface $entityManager): Response
    {
        $idContrat = (int) $idContrat; // Cast string to int
        $contrat = $contratRepository->find($idContrat);
        if (!$contrat) {
            throw $this->createNotFoundException('Contrat not found for id ' . $idContrat);
        }

        if ($this->isCsrfTokenValid('delete' . $contrat->getIdContrat(), $request->request->get('_token'))) {
            $entityManager->remove($contrat);
            $entityManager->flush();

            $this->addFlash('success', 'Contrat supprimé avec succès.');
        }

        return $this->redirectToRoute('contrat_main');
    }

    #[Route('/statistics', name: 'contrat_statistics', methods: ['GET'])]
    public function statistics(Request $request): Response
    {
        $this->logger->info('Entering statistics action', ['uri' => $request->getUri()]);

        // Total number of contracts
        $totalContracts = $this->contratRepository->count([]);
        $this->logger->info('Total contracts: ' . $totalContracts);

        // Fetch all contracts
        $allContracts = $this->contratRepository->findAll();
        $this->logger->info('Fetched ' . count($allContracts) . ' contracts');

        // Compute montant distribution (histogram-like)
        $montantDistribution = $this->getMontantDistribution($allContracts);
        $this->logger->info('Computed montant distribution: ' . json_encode($montantDistribution));

        // Compute sponsor distribution
        $sponsorDistribution = $this->getSponsorDistribution($allContracts);
        $this->logger->info('Computed sponsor distribution: ' . json_encode($sponsorDistribution));

        // Calculate total montant for stats
        $totalMontant = array_sum(array_map(fn($contract) => $contract->getMontant(), $allContracts));
        $this->logger->info('Total montant: ' . $totalMontant);

        $this->logger->info('Rendering statistics.html.twig');
        return $this->render('contrat/statistics.html.twig', [
            'totalContracts' => $totalContracts,
            'montantDistribution' => $montantDistribution,
            'sponsorDistribution' => $sponsorDistribution,
            'totalMontant' => $totalMontant,
            'allContracts' => $allContracts,
        ]);
    }

    #[Route('/export/{format}', name: 'contrat_export', defaults: ['format' => 'xlsx'])]
    public function export(string $format, ContratRepository $contratRepository): Response
    {
        $contrats = $contratRepository->findAll();

        switch ($format) {
            case 'csv':
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->fromArray(['Titre', 'DateDebut', 'DateFin', 'Montant', 'Sponsor', 'Signature'], null, 'A1');
                $row = 2;
                foreach ($contrats as $contrat) {
                    $sheet->setCellValue('A' . $row, $contrat->getTitre());
                    $sheet->setCellValue('B' . $row, $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : '');
                    $sheet->setCellValue('C' . $row, $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : '');
                    $sheet->setCellValue('D' . $row, $contrat->getMontant());
                    $sheet->setCellValue('E' . $row, $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : 'N/A');
                    $sheet->setCellValue('F' . $row, $contrat->getSignature());
                    $row++;
                }

                $writer = new Csv($spreadsheet);
                $fileName = 'contrats_export_' . date('Y-m-d') . '.csv';
                break;

            case 'pdf':
                $html = '<h2>Liste des Contrats</h2><table border="1" cellpadding="5" cellspacing="0"><thead><tr><th>Titre</th><th>DateDébut</th><th>DateFin</th><th>Montant</th><th>Sponsor</th><th>Signature</th></tr></thead><tbody>';
                foreach ($contrats as $contrat) {
                    $sponsorName = $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : 'N/A';
                    $html .= '<tr>';
                    $html .= '<td>' . htmlspecialchars($contrat->getTitre()) . '</td>';
                    $html .= '<td>' . ($contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : '') . '</td>';
                    $html .= '<td>' . ($contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : '') . '</td>';
                    $html .= '<td>' . htmlspecialchars($contrat->getMontant()) . '</td>';
                    $html .= '<td>' . htmlspecialchars($sponsorName) . '</td>';
                    $html .= '<td>' . htmlspecialchars($contrat->getSignature()) . '</td>';
                    $html .= '</tr>';
                }
                $html .= '</tbody></table>';

                $options = new Options();
                $options->set('defaultFont', 'Arial');
                $dompdf = new Dompdf($options);
                $dompdf->loadHtml($html);
                $dompdf->setPaper('A4', 'portrait');
                $dompdf->render();

                return new Response(
                    $dompdf->output(),
                    200,
                    [
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'attachment; filename="contrats_export_' . date('Y-m-d') . '.pdf"',
                    ]
                );

            case 'sql':
                $content = '';
                foreach ($contrats as $contrat) {
                    $titre = addslashes($contrat->getTitre());
                    $dateDebut = $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : 'NULL';
                    $dateFin = $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : 'NULL';
                    $montant = $contrat->getMontant();
                    $sponsorId = $contrat->getSponsor() ? $contrat->getSponsor()->getIdSponsor() : 'NULL';
                    $signature = addslashes($contrat->getSignature());
                    $content .= "INSERT INTO contrat (titre, date_debut, date_fin, montant, sponsor_id, signature) VALUES ('$titre', '$dateDebut', '$dateFin', $montant, $sponsorId, '$signature');\n";
                }

                return new Response(
                    $content,
                    200,
                    [
                        'Content-Type' => 'text/sql',
                        'Content-Disposition' => 'attachment; filename="contrats_export_' . date('Y-m-d') . '.sql"',
                    ]
                );

            case 'xlsx':
            default:
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->setCellValue('A1', 'Liste des Contrats - Export personnalisé');
                $sheet->mergeCells('A1:F1');
                $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
                $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                $sheet->fromArray(['Titre', 'DateDebut', 'DateFin', 'Montant', 'Sponsor', 'Signature'], null, 'A3');
                $row = 4;
                foreach ($contrats as $contrat) {
                    $sheet->setCellValue('A' . $row, $contrat->getTitre());
                    $sheet->setCellValue('B' . $row, $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : '');
                    $sheet->setCellValue('C' . $row, $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : '');
                    $sheet->setCellValue('D' . $row, $contrat->getMontant());
                    $sheet->setCellValue('E' . $row, $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : 'N/A');
                    $sheet->setCellValue('F' . $row, $contrat->getSignature());
                    $row++;
                }

                $writer = new Xlsx($spreadsheet);
                $fileName = 'contrats_export_' . date('Y-m-d') . '.xlsx';
                break;
        }

        // Save temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'contrat_export');
        $writer->save($tempFile);

        $response = new BinaryFileResponse($tempFile);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );
        $response->deleteFileAfterSend(true);
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        return $response;
    }

    private function saveSignature(string $base64Data, string $titre): string
    {
        $this->logger->info('Saving signature for titre: ' . $titre);
        $filesystem = new Filesystem();
        $signaturesDir = $this->getParameter('signatures_directory');

        // Create signatures directory if it doesn’t exist
        if (!$filesystem->exists($signaturesDir)) {
            $filesystem->mkdir($signaturesDir, 0775);
            $this->logger->info('Created signatures directory: ' . $signaturesDir);
        }

        // Generate unique filename using titre and timestamp
        $sanitizedTitre = preg_replace('/[^a-zA-Z0-9_-]/', '_', trim($titre));
        if (empty($sanitizedTitre)) {
            $sanitizedTitre = 'Untitled';
        }
        $filename = 'signature_' . $sanitizedTitre . '_' . time() . '.png';
        $filePath = $signaturesDir . '/' . $filename;
        $relativePath = 'signatures/' . $filename;

        // Decode base64 data
        $data = explode(',', $base64Data);
        if (count($data) < 2) {
            $this->logger->error('Invalid base64 data');
            throw new \Exception('Données de signature invalides.');
        }
        $imageData = base64_decode($data[1]);
        if ($imageData === false) {
            $this->logger->error('Failed to decode base64 data');
            throw new \Exception('Échec du décodage des données de signature.');
        }

        // Save the image
        $filesystem->dumpFile($filePath, $imageData);
        $this->logger->info('Signature file saved: ' . $filePath);

        // Verify file was created
        if (!file_exists($filePath)) {
            $this->logger->error('Signature file not created at: ' . $filePath);
            throw new \Exception('Échec de la sauvegarde du fichier de signature.');
        }

        return $relativePath;
    }

    private function getMontantDistribution(array $contracts): array
    {
        $bins = [
            '0-2500' => 0,
            '2500-5000' => 0,
            '5000-10000' => 0,
            '10000-15000' => 0,
            '15000-20000' => 0,
            '20000+' => 0,
        ];

        foreach ($contracts as $contract) {
            $montant = $contract->getMontant();
            if ($montant < 2500) {
                $bins['0-2500']++;
            } elseif ($montant < 5000) {
                $bins['2500-5000']++;
            } elseif ($montant < 10000) {
                $bins['5000-10000']++;
            } elseif ($montant < 15000) {
                $bins['10000-15000']++;
            } elseif ($montant < 20000) {
                $bins['15000-20000']++;
            } else {
                $bins['20000+']++;
            }
        }

        return $bins;
    }

    private function getSponsorDistribution(array $contracts): array
    {
        $sponsorDistribution = [];
        foreach ($contracts as $contract) {
            $sponsor = $contract->getSponsor() ? $contract->getSponsor()->getNom() : 'Aucun Sponsor';
            if (!isset($sponsorDistribution[$sponsor])) {
                $sponsorDistribution[$sponsor] = 0;
            }
            $sponsorDistribution[$sponsor]++;
        }
        return $sponsorDistribution;
    }

    #[Route('/front', name: 'contrat_front', methods: ['GET'])]
    public function front(ContratRepository $contratRepository): Response
    {
    $contrats = $contratRepository->findAll();
    return $this->render('contrat/contrat_front.html.twig', [
        'contrats' => $contrats,
    ]);
    }
}