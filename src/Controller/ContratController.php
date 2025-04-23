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
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;
use Knp\Snappy\Pdf;
use Stripe;

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
            $this->logger->info('Signature data: ' . (is_string($signatureData) ? substr($signatureData, 0, 50) . '...' : 'No signature data'));

            if ($signatureData) {
                // Check if the signature is the default placeholder
                if ($signatureData === 'signatures/signature_contrat_1741119108385.png') {
                    // Treat as no signature
                    $contrat->setSignature(null);
                    $this->logger->info('Default signature placeholder detected; signature field set to null');
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
                // No signature provided; set to null
                $contrat->setSignature(null);
                $this->logger->info('No signature provided; signature field set to null');
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
            $body = "Contract titled $titre with sponsor $sponsorNom from $dateDebutFormatted to $dateFinFormatted with amount " . number_format($montant, 2) . " has been registered.";

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
    public function export(string $format, ContratRepository $contratRepository, Pdf $knpSnappyPdf): Response
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
            // Render the Twig template with contract data
            $html = $this->renderView('contrat/export_pdf.html.twig', [
                'contrats' => $contrats,
                'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.png'
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
                'orientation' => 'landscape', 
            ];

            // Generate PDF using KnpSnappy
            $pdfContent = $knpSnappyPdf->getOutputFromHtml($html, $pdfOptions);

            // Create response
            $response = new Response($pdfContent);
            $disposition = $response->headers->makeDisposition(
                ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                'contrats_export_' . date('Y-m-d') . '.pdf'
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

        // Log the received data for debugging
        $this->get('logger')->info('Received SMS request', [
            'contratId' => $contratId,
            'titre' => $titre,
            'sponsorNom' => $sponsorNom,
            'dateDebut' => $dateDebut,
            'dateFin' => $dateFin,
            'montant' => $montant,
        ]);

        // Format dates
        try {
            $dateDebutFormatted = $dateDebut ? \DateTime::createFromFormat('Y-m-d', $dateDebut)->format('d/m/Y') : 'N/A';
            $dateFinFormatted = $dateFin ? \DateTime::createFromFormat('Y-m-d', $dateFin)->format('d/m/Y') : 'N/A';
        } catch (\Exception $e) {
            $this->get('logger')->error('Date formatting error: ' . $e->getMessage());
            return new JsonResponse(['status' => 'error', 'message' => 'Invalid date format'], 400);
        }

        // Twilio credentials (store these in environment variables or config)
        $accountSid = $this->getParameter('twilio_account_sid');
        $authToken = $this->getParameter('twilio_auth_token');
        $toNumber = $this->getParameter('twilio_to_number');
        $fromNumber = $this->getParameter('twilio_from_number');                        

        // Message body
        $body = "Contract titled $titre with sponsor $sponsorNom from $dateDebutFormatted to $dateFinFormatted with amount " . number_format($montant, 2) . " has been registered.";

        try {
            $this->get('logger')->info('Initializing Twilio with credentials...');
            $twilio = new Client($accountSid, $authToken);

            $this->get('logger')->info("Attempting to send message to $toNumber from $fromNumber");

            $message = $twilio->messages->create(
                $toNumber,
                [
                    'from' => $fromNumber,
                    'body' => $body,
                ]
            );

            $this->get('logger')->info('Message sent successfully', [
                'sid' => $message->sid,
                'status' => $message->status,
                'dateCreated' => $message->dateCreated,
            ]);

            return new JsonResponse(['status' => 'success', 'message' => 'SMS sent successfully', 'sid' => $message->sid]);
        } catch (TwilioException $e) {
            $this->get('logger')->error('Twilio Error sending message: ' . $e->getMessage());
            return new JsonResponse(['status' => 'error', 'message' => 'Failed to send SMS: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            $this->get('logger')->error('Error sending message: ' . $e->getMessage());
            return new JsonResponse(['status' => 'error', 'message' => 'An unexpected error occurred: ' . $e->getMessage()], 500);
        }
    }


    #[Route('/{idContrat}/pay', name: 'contrat_pay', methods: ['GET', 'POST'], requirements: ['idContrat' => '\d+'])]
    public function pay(Request $request, string $idContrat, ContratRepository $contratRepository, \Stripe\StripeClient $stripeClient): Response
    {
    $idContrat = (int) $idContrat;
    $contrat = $contratRepository->find($idContrat);

    if (!$contrat) {
        throw $this->createNotFoundException('Contrat not found for id ' . $idContrat);
    }

    if ($request->isMethod('POST')) {
        try {
            // Get the payment method ID from the form
            $paymentMethodId = $request->request->get('payment_method');

            // Create a PaymentIntent on the server
            $paymentIntent = $stripeClient->paymentIntents->create([
                'amount' => $contrat->getMontant() * 100, // Amount in cents (e.g., 100.50 TND = 10050 cents)
                'currency' => 'tnd', // Adjust currency as needed
                'payment_method' => $paymentMethodId,
                'confirmation_method' => 'manual',
                'confirm' => true,
            ]);

            if ($paymentIntent->status === 'succeeded') {
                // Payment successful
                $this->addFlash('success', 'Paiement effectué avec succès pour le contrat #' . $contrat->getIdContrat());
                return $this->redirectToRoute('contrat_main');
            } else {
                // Payment requires further action (e.g., 3D Secure)
                $this->addFlash('warning', 'Paiement nécessite une action supplémentaire.');
            }
        } catch (\Stripe\Exception\CardException $e) {
            $this->addFlash('error', 'Erreur de paiement : ' . $e->getError()->message);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur s\'est produite : ' . $e->getMessage());
        }
    }

    return $this->render('stripe.html.twig', [
        'contrat' => $contrat,
        'stripe_public_key' => $this->getParameter('stripe_public_key'),
    ]);
}

}