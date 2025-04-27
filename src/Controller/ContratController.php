<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Filesystem\Filesystem;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

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
    $this->logger->info('Entering contrat_main', ['search' => $request->query->get('search', '')]);

    $searchTerm = $request->query->get('search', '');
    $filter = $request->query->get('filter', '');

    $queryBuilder = $this->contratRepository->createQueryBuilder('c')
        ->leftJoin('c.sponsor', 's');

    if ($searchTerm) {
        $queryBuilder->andWhere('c.Titre LIKE :search OR s.nom LIKE :search OR CAST(c.Montant AS STRING) LIKE :search OR c.article LIKE :search')
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
            case 'article':
                $queryBuilder->orderBy('c.article', 'ASC');
                break;
        }
    }

    if ($searchTerm) {
        $contrats = $queryBuilder->getQuery()->getResult();
        $this->logger->info('Search active, found ' . count($contrats) . ' contracts');
    } else {
        $contrats = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
        $this->logger->info('Pagination active, page ' . $request->query->getInt('page', 1));
    }

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
                    'Article' => substr($contrat->getArticle(), 0, 50) . (strlen($contrat->getArticle()) > 50 ? '...' : ''),
                ]);

                // Handle signature
                $signatureData = $form->get('signature')->getData();
                $this->logger->info('Signature data: ' . (is_string($signatureData) ? substr($signatureData, 0, 50) . '...' : 'No signature data'));

                if ($signatureData) {
                    // Check if the signature is the default placeholder
                    if ($signatureData === 'signatures/signature_contrat_1741119108385.png') {
                        // Use the placeholder path
                        $contrat->setSignature($signatureData);
                        $this->logger->info('Default signature placeholder detected; signature field set to placeholder');
                    } elseif (strpos($signatureData, 'data:image/png;base64,') === 0) {
                        // Valid base64 signature; save it
                        $titre = $contrat->getTitre() ?: 'Untitled';
                        $filePath = $this->saveSignature($signatureData, $titre);
                        $contrat->setSignature($filePath);
                        $this->logger->info('Signature saved at: ' . $filePath);
                    } else {
                        $this->logger->error('Invalid signature format');
                        $this->addFlash('error', 'Format de signature invalide.');
                        return $this->render('contrat/new.html.twig', [
                            'form' => $form->createView(),
                        ]);
                    }
                } else {
                    // No signature provided; use placeholder
                    $contrat->setSignature('signatures/signature_contrat_1741119108385.png');
                    $this->logger->info('No signature provided; signature field set to placeholder');
                }

                // Persist contract
                $entityManager->persist($contrat);
                $entityManager->flush();

                // Send Twilio SMS
                $this->logger->info('Preparing to send Twilio SMS for contract: ' . $contrat->getIdContrat());

                // Extract data for SMS
                $contratId = $contrat->getIdContrat();
                $titre = $contrat->getTitre();
                $sponsorNom = $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : 'Unknown Sponsor';
                $dateDebut = $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : null;
                $dateFin = $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : null;
                $montant = $contrat->getMontant() ?? 0.0;
                $article = substr($contrat->getArticle(), 0, 50) . (strlen($contrat->getArticle()) > 50 ? '...' : '');

                // Format dates
                try {
                    $dateDebutFormatted = $dateDebut ? \DateTime::createFromFormat('Y-m-d', $dateDebut)->format('d/m/Y') : 'N/A';
                    $dateFinFormatted = $dateFin ? \DateTime::createFromFormat('Y-m-d', $dateFin)->format('d/m/Y') : 'N/A';
                } catch (\Exception $e) {
                    $this->logger->error('Date formatting error: ' . $e->getMessage());
                    $this->addFlash('error', 'Erreur lors du formatage des dates : ' . $e->getMessage());
                    return $this->redirectToRoute('contrat_main');
                }

                // Twilio credentials
                $accountSid = $this->getParameter('twilio_account_sid');
                $authToken = $this->getParameter('twilio_auth_token');
                $toNumber = $this->getParameter('twilio_to_number');
                $fromNumber = $this->getParameter('twilio_from_number');

                // Message body
                $body = "Contract #$contratId titled '$titre' with sponsor '$sponsorNom' from $dateDebutFormatted to $dateFinFormatted, amount " . number_format($montant, 2) . ", article: '$article' has been registered.";

                try {
                    $this->logger->info('Initializing Twilio with credentials...');
                    $twilio = new Client($accountSid, $authToken);

                    $this->logger->info("Attempting to send message to $toNumber from $fromNumber");

                    $message = $twilio->messages->create(
                        $toNumber,
                        [
                            'from' => $fromNumber,
                            'body' => $body,
                        ]
                    );

                    $this->logger->info('Message sent successfully', [
                        'sid' => $message->sid,
                        'status' => $message->status,
                        'dateCreated' => $message->dateCreated,
                    ]);

                    $this->addFlash('success', 'Contrat créé et SMS envoyé avec succès.');
                } catch (TwilioException $e) {
                    $this->logger->error('Twilio Error sending message: ' . $e->getMessage());
                    $this->addFlash('warning', 'Contrat créé, mais échec de l\'envoi du SMS : ' . $e->getMessage());
                } catch (\Exception $e) {
                    $this->logger->error('Error sending message: ' . $e->getMessage());
                    $this->addFlash('warning', 'Contrat créé, mais une erreur s\'est produite lors de l\'envoi du SMS : ' . $e->getMessage());
                }

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
                // Log form data
                $this->logger->info('Form submitted for edit with data:', [
                    'Titre' => $contrat->getTitre(),
                    'DateDebut' => $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : null,
                    'DateFin' => $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : null,
                    'Montant' => $contrat->getMontant(),
                    'Id_sponsor' => $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : null,
                    'Article' => substr($contrat->getArticle(), 0, 50) . (strlen($contrat->getArticle()) > 50 ? '...' : ''),
                ]);

                // Handle signature
                $signatureData = $form->get('signature')->getData();
                $this->logger->info('Signature data received for edit: ' . (is_string($signatureData) ? substr($signatureData, 0, 50) . '...' : 'No signature data'));

                if ($signatureData && strpos($signatureData, 'data:image/png;base64,') === 0) {
                    // Delete old signature file if it exists and not the placeholder
                    $oldSignature = $contrat->getSignature();
                    if ($oldSignature && $oldSignature !== 'signatures/signature_contrat_1741119108385.png' && file_exists($this->getParameter('signatures_directory') . '/' . $oldSignature)) {
                        unlink($this->getParameter('signatures_directory') . '/' . $oldSignature);
                        $this->logger->info('Deleted old signature: ' . $oldSignature);
                    }

                    // Save new signature
                    $filePath = $this->saveSignature($signatureData, $contrat->getTitre() ?: 'Contract_' . $idContrat);
                    $contrat->setSignature($filePath);
                    $this->logger->info('New signature saved at: ' . $filePath);
                } elseif (!$signatureData) {
                    // No signature provided; keep existing or set placeholder
                    if (!$contrat->getSignature()) {
                        $contrat->setSignature('signatures/signature_contrat_1741119108385.png');
                        $this->logger->info('No signature provided; signature field set to placeholder');
                    }
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
            // Delete signature file if it exists and not the placeholder
            $signature = $contrat->getSignature();
            if ($signature && $signature !== 'signatures/signature_contrat_1741119108385.png' && file_exists($this->getParameter('signatures_directory') . '/' . $signature)) {
                unlink($this->getParameter('signatures_directory') . '/' . $signature);
                $this->logger->info('Deleted signature file: ' . $signature);
            }

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

    #[Route('/export/{format}/{idContrat?}', name: 'contrat_export', defaults: ['format' => 'xlsx', 'idContrat' => null], requirements: ['idContrat' => '\d+'])]
    public function export(string $format, ?string $idContrat, ContratRepository $contratRepository, Pdf $knpSnappyPdf): Response
    {
        if ($idContrat) {
            // Single contract export
            $contrat = $contratRepository->find($idContrat);
            if (!$contrat) {
                throw $this->createNotFoundException('Contrat not found for id ' . $idContrat);
            }
            $contrats = [$contrat]; // Wrap single contract in array for template consistency
            $fileNamePrefix = 'contrat_' . $contrat->getIdContrat();
        } else {
            // Bulk export
            $contrats = $contratRepository->findAll();
            $fileNamePrefix = 'contrats_export';
        }

        switch ($format) {
            case 'csv':
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->fromArray(['Titre', 'DateDebut', 'DateFin', 'Montant', 'Sponsor', 'Signature', 'Article'], null, 'A1');
                $row = 2;
                foreach ($contrats as $contrat) {
                    $sheet->setCellValue('A' . $row, $contrat->getTitre());
                    $sheet->setCellValue('B' . $row, $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : '');
                    $sheet->setCellValue('C' . $row, $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : '');
                    $sheet->setCellValue('D' . $row, $contrat->getMontant());
                    $sheet->setCellValue('E' . $row, $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : 'N/A');
                    $sheet->setCellValue('F' . $row, $contrat->getSignature());
                    $sheet->setCellValue('G' . $row, $contrat->getArticle());
                    $row++;
                }

                $writer = new Csv($spreadsheet);
                $fileName = $fileNamePrefix . '_' . date('Y-m-d') . '.csv';
                break;

            case 'pdf':
                // Render the Twig template with contract data
                $html = $this->renderView('contrat/export_pdf.html.twig', [
                    'contrats' => $contrats,
                    'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.png',
                    'is_single' => $idContrat !== null, // Flag to indicate single contract
                ]);

                // PDF options
                $pdfOptions = [
                    'enable-local-file-access' => true,
                    'encoding' => 'UTF-8',
                    'margin-top' => 10,
                    'margin-bottom' => 10,
                    'margin-left' => 10,
                    'margin-right' => 10,
                    'no-stop-slow-scripts' => true,
                    'orientation' => 'portrait', // Changed to portrait for single contract
                ];

                // Generate PDF using KnpSnappy
                $pdfContent = $knpSnappyPdf->getOutputFromHtml($html, $pdfOptions);

                // Create response
                $response = new Response($pdfContent);
                $disposition = $response->headers->makeDisposition(
                    ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                    $fileNamePrefix . '_' . date('Y-m-d') . '.pdf'
                );
                $response->headers->set('Content-Type', 'application/pdf');
                $response->headers->set('Content-Disposition', $disposition);

                return $response;

            case 'sql':
                $content = '';
                foreach ($contrats as $contrat) {
                    $titre = addslashes($contrat->getTitre());
                    $dateDebut = $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : 'NULL';
                    $dateFin = $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : 'NULL';
                    $montant = $contrat->getMontant();
                    $sponsorId = $contrat->getSponsor() ? $contrat->getSponsor()->getIdSponsor() : 'NULL';
                    $signature = addslashes($contrat->getSignature());
                    $article = addslashes($contrat->getArticle());
                    $content .= "INSERT INTO contrats (titre, date_debut, date_fin, montant, id_sponsor, signature, article) VALUES ('$titre', '$dateDebut', '$dateFin', $montant, $sponsorId, '$signature', '$article');\n";
                }

                return new Response(
                    $content,
                    200,
                    [
                        'Content-Type' => 'text/sql',
                        'Content-Disposition' => 'attachment; filename="' . $fileNamePrefix . '_' . date('Y-m-d') . '.sql"',
                    ]
                );

            case 'xlsx':
            default:
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->setCellValue('A1', 'Liste des Contrats - Export personnalisé');
                $sheet->mergeCells('A1:G1');
                $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
                $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                $sheet->fromArray(['Titre', 'DateDebut', 'DateFin', 'Montant', 'Sponsor', 'Signature', 'Article'], null, 'A3');
                $row = 4;
                foreach ($contrats as $contrat) {
                    $sheet->setCellValue('A' . $row, $contrat->getTitre());
                    $sheet->setCellValue('B' . $row, $contrat->getDateDebut() ? $contrat->getDateDebut()->format('Y-m-d') : '');
                    $sheet->setCellValue('C' . $row, $contrat->getDateFin() ? $contrat->getDateFin()->format('Y-m-d') : '');
                    $sheet->setCellValue('D' . $row, $contrat->getMontant());
                    $sheet->setCellValue('E' . $row, $contrat->getSponsor() ? $contrat->getSponsor()->getNom() : 'N/A');
                    $sheet->setCellValue('F' . $row, $contrat->getSignature());
                    $sheet->setCellValue('G' . $row, $contrat->getArticle());
                    $row++;
                }

                $writer = new Xlsx($spreadsheet);
                $fileName = $fileNamePrefix . '_' . date('Y-m-d') . '.xlsx';
                break;
        }

        // Save temporary file for non-PDF formats
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
        $montant = $contract->getMontant() ?? 0; 
        if ($montant < 0) {
            $this->logger->warning('Invalid montant value for contract ID ' . $contract->getIdContrat() . ': ' . $montant);
            continue; // Skip negative values
        }

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

    #[Route('/contrat/send-sms', name: 'contrat_send_sms', methods: ['POST'])]
    public function sendTwilioSms(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Extract data from the request
        $contratId = $data['contratId'] ?? null;
        $titre = $data['titre'] ?? 'Unknown Contract';
        $sponsorNom = $data['sponsorNom'] ?? 'Unknown Sponsor';
        $dateDebut = $data['dateDebut'] ?? null;
        $dateFin = $data['dateFin'] ?? null;
        $montant = $data['montant'] ?? 0.0;
        $article = isset($data['article']) ? substr($data['article'], 0, 50) . (strlen($data['article']) > 50 ? '...' : '') : 'N/A';

        // Log the received data for debugging
        $this->logger->info('Received SMS request', [
            'contratId' => $contratId,
            'titre' => $titre,
            'sponsorNom' => $sponsorNom,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'montant' => $montant,
            'article' => $article,
        ]);

        // Format dates
        try {
            $dateDebutFormatted = $dateDebut ? \DateTime::createFromFormat('Y-m-d', $dateDebut)->format('d/m/Y') : 'N/A';
            $dateFinFormatted = $dateFin ? \DateTime::createFromFormat('Y-m-d', $dateFin)->format('d/m/Y') : 'N/A';
        } catch (\Exception $e) {
            $this->logger->error('Date formatting error: ' . $e->getMessage());
            return new JsonResponse(['status' => 'error', 'message' => 'Invalid date format'], 400);
        }

        // Twilio credentials
        $accountSid = $this->getParameter('twilio_account_sid');
        $authToken = $this->getParameter('twilio_auth_token');
        $toNumber = $this->getParameter('twilio_to_number');
        $fromNumber = $this->getParameter('twilio_from_number');

        // Message body
        $body = "Contract #$contratId titled '$titre' with sponsor '$sponsorNom' from $dateDebutFormatted to $dateFinFormatted, amount " . number_format($montant, 2) . ", article: '$article' has been registered.";

        try {
            $this->logger->info('Initializing Twilio with credentials...');
            $twilio = new Client($accountSid, $authToken);

            $this->logger->info("Attempting to send message to $toNumber from $fromNumber");

            $message = $twilio->messages->create(
                $toNumber,
                [
                    'from' => $fromNumber,
                    'body' => $body,
                ]
            );

            $this->logger->info('Message sent successfully', [
                'sid' => $message->sid,
                'status' => $message->status,
                'dateCreated' => $message->dateCreated,
            ]);

            return new JsonResponse(['status' => 'success', 'message' => 'SMS sent successfully', 'sid' => $message->sid]);
        } catch (TwilioException $e) {
            $this->logger->error('Twilio Error sending message: ' . $e->getMessage());
            return new JsonResponse(['status' => 'error', 'message' => 'Failed to send SMS: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            $this->logger->error('Error sending message: ' . $e->getMessage());
            return new JsonResponse(['status' => 'error', 'message' => 'An unexpected error occurred: ' . $e->getMessage()], 500);
        }
    }

    #[Route('/check-expiring', name: 'contrat_check_expiring', methods: ['GET'])]
    public function checkExpiringContractsAction(EntityManagerInterface $entityManager): Response
    {
        $this->logger->info('Checking for expiring contracts');
        $currentDate = new \DateTime('now');
        $thresholdDate = (clone $currentDate)->modify('+3 days');
        $results = [];

        // Fetch all contracts
        $contracts = $this->contratRepository->findAll();
        $this->logger->info('Found ' . count($contracts) . ' contracts to check');

        foreach ($contracts as $contract) {
            $dateFin = $contract->getDateFin();
            if (!$dateFin) {
                $this->logger->warning('Contract ID ' . $contract->getIdContrat() . ' has no DateFin');
                $results[] = [
                    'contractId' => $contract->getIdContrat(),
                    'status' => 'error',
                    'message' => 'No DateFin set for contract',
                ];
                continue;
            }

            // Check if DateFin is within 3 days
            if ($dateFin >= $currentDate && $dateFin <= $thresholdDate) {
                $this->logger->info('Contract ID ' . $contract->getIdContrat() . ' is expiring soon', [
                    'DateFin' => $dateFin->format('Y-m-d'),
                ]);

                // Get sponsor details
                $sponsor = $contract->getSponsor();
                if (!$sponsor) {
                    $this->logger->warning('No sponsor found for contract ID ' . $contract->getIdContrat());
                    $results[] = [
                        'contractId' => $contract->getIdContrat(),
                        'status' => 'error',
                        'message' => 'No sponsor associated with contract',
                    ];
                    continue;
                }

                $phoneNumber = $sponsor->getContact();
                if (!$phoneNumber) {
                    $this->logger->warning('No contact number for sponsor ' . $sponsor->getNom());
                    $results[] = [
                        'contractId' => $contract->getIdContrat(),
                        'status' => 'error',
                        'message' => 'No contact number for sponsor',
                    ];
                    continue;
                }

                // Add country code if necessary (e.g., +216 for Tunisia)
                $formattedPhoneNumber = preg_match('/^\+/', $phoneNumber) ? $phoneNumber : '+216' . $phoneNumber;
                $this->logger->info('Formatted phone number: ' . $formattedPhoneNumber);

                // Prepare SMS details
                $contratId = $contract->getIdContrat();
                $titre = $contract->getTitre();
                $sponsorNom = $sponsor->getNom();
                $dateDebut = $contract->getDateDebut() ? $contract->getDateDebut()->format('d/m/Y') : 'N/A';
                $dateFinFormatted = $dateFin->format('d/m/Y');
                $montant = $contract->getMontant() ?? 0.0;
                $article = substr($contract->getArticle(), 0, 50) . (strlen($contract->getArticle()) > 50 ? '...' : '');

                // Twilio credentials
                $accountSid = $this->getParameter('twilio_account_sid');
                $authToken = $this->getParameter('twilio_auth_token');
                $fromNumber = $this->getParameter('twilio_from_number');

                // Message body
                $body = "Alert: Contract #$contratId titled '$titre' with sponsor '$sponsorNom' from $dateDebut to $dateFinFormatted, amount " . number_format($montant, 2) . ", is expiring soon on $dateFinFormatted. Please review.";

                try {
                    $this->logger->info('Sending SMS to ' . $formattedPhoneNumber . ' for contract ID ' . $contratId);
                    $twilio = new Client($accountSid, $authToken);

                    $message = $twilio->messages->create(
                        $formattedPhoneNumber,
                        [
                            'from' => $fromNumber,
                            'body' => $body,
                        ]
                    );

                    $this->logger->info('SMS sent successfully for contract ID ' . $contratId, [
                        'sid' => $message->sid,
                        'status' => $message->status,
                    ]);

                    $results[] = [
                        'contractId' => $contratId,
                        'status' => 'success',
                        'message' => 'SMS sent successfully',
                        'sid' => $message->sid,
                    ];
                } catch (TwilioException $e) {
                    $this->logger->error('Twilio error sending SMS for contract ID ' . $contratId . ': ' . $e->getMessage());
                    $results[] = [
                        'contractId' => $contratId,
                        'status' => 'error',
                        'message' => 'Failed to send SMS: ' . $e->getMessage(),
                    ];
                } catch (\Exception $e) {
                    $this->logger->error('Unexpected error sending SMS for contract ID ' . $contratId . ': ' . $e->getMessage());
                    $results[] = [
                        'contractId' => $contratId,
                        'status' => 'error',
                        'message' => 'Unexpected error: ' . $e->getMessage(),
                    ];
                }
            }
        }

        // Calculate summary
        $successCount = count(array_filter($results, fn($r) => $r['status'] === 'success'));
        $errorCount = count($results) - $successCount;

        $this->logger->info('Finished checking expiring contracts', [
            'success' => $successCount,
            'errors' => $errorCount,
            'results' => $results,
        ]);

        // Add flash messages for user feedback
        if ($successCount > 0) {
            $this->addFlash('success', sprintf('%d SMS sent successfully.', $successCount));
        }
        if ($errorCount > 0) {
            $this->addFlash('warning', sprintf('%d errors encountered while sending SMS.', $errorCount));
        }

        // Render a template with results or redirect
        return $this->render('contrat/check_expiring.html.twig', [
            'results' => $results,
            'successCount' => $successCount,
            'errorCount' => $errorCount,
        ]);
    }

    
}