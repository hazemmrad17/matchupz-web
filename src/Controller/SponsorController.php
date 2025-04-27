<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use App\Repository\ContratRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Knp\Snappy\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Stripe;

#[Route('/sponsor')]
class SponsorController extends AbstractController
{
    private $sponsorRepository;

    public function __construct(SponsorRepository $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
    }

    #[Route('/main', name: 'sponsor_main', methods: ['GET'])]
    public function main(Request $request, PaginatorInterface $paginator, EntityManagerInterface $entityManager): Response
    {
        try {
            error_log('Entering sponsor_main');

            $searchTerm = $request->query->get('search', '');
            $filter = $request->query->get('filter', '');

            $queryBuilder = $this->sponsorRepository->createQueryBuilder('s');

            if ($searchTerm) {
                $queryBuilder
                    ->andWhere('s.nom LIKE :term OR s.contact LIKE :term OR s.pack LIKE :term OR s.sponsorPicture LIKE :term')
                    ->setParameter('term', '%' . $searchTerm . '%');
            }

            if ($filter === 'nom') {
                $queryBuilder->orderBy('s.nom', 'ASC');
            } elseif ($filter === 'contact') {
                $queryBuilder->orderBy('s.contact', 'ASC');
            } elseif ($filter === 'pack') {
                $queryBuilder->orderBy('s.pack', 'ASC');
            } elseif ($filter === 'sponsorPicture') {
                $queryBuilder->orderBy('s.sponsorPicture', 'ASC');
            } else {
                $queryBuilder->orderBy('s.nom', 'ASC');
            }

            // If there's a search term, fetch all results without pagination
            if ($searchTerm) {
                $sponsors = $queryBuilder->getQuery()->getResult();
            } else {
                $sponsors = $paginator->paginate(
                    $queryBuilder,
                    $request->query->getInt('page', 1),
                    5
                );
            }

            // Basic stats without contrats
            $allSponsors = $this->sponsorRepository->findAll();
            $totalSponsors = count($allSponsors);
            $packDistribution = $this->getPackDistribution($allSponsors);
            $activeSponsors = $totalSponsors; // Assume all are active
            $contractCounts = ['Bronze' => 0, 'Silver' => 0, 'Gold' => 0, 'Platinum' => 0];

            error_log('Rendering main with ' . $totalSponsors . ' sponsors');

            return $this->render('sponsor/main.html.twig', [
                'sponsors' => $sponsors,
                'searchTerm' => $searchTerm,
                'filter' => $filter,
                'totalSponsors' => $totalSponsors,
                'activeSponsors' => $activeSponsors,
                'packDistribution' => $packDistribution,
                'contractCounts' => $contractCounts,
            ]);
        } catch (\Exception $e) {
            error_log('Main error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            throw $e;
        }
    }


    #[Route('/sponsor/search', name: 'sponsor_search', methods: ['GET'])]
    public function search(Request $request, CsrfTokenManagerInterface $csrfTokenManager): JsonResponse
    {
        try {
            error_log('Entering sponsor_search');
            error_log('SponsorRepository: ' . (isset($this->sponsorRepository) ? 'Injected' : 'Missing'));
            error_log('CsrfTokenManager: ' . ($csrfTokenManager ? 'Injected' : 'Missing'));

            $query = $request->query->get('q', '');
            error_log('Search query: ' . $query);

            $queryBuilder = $this->sponsorRepository->createQueryBuilder('s')
                ->select('s');

            if ($query) {
                $queryBuilder->where('s.nom LIKE :query')
                    ->setParameter('query', '%' . $query . '%');
                try {
                    $queryBuilder->orWhere('s.contact LIKE :query');
                    $queryBuilder->orWhere('s.pack LIKE :query');
                } catch (\Exception $e) {
                    error_log('Error adding optional fields in search: ' . $e->getMessage());
                }
            }

            $sql = $queryBuilder->getQuery()->getSQL();
            error_log('SQL Query: ' . $sql);

            $sponsors = $queryBuilder
                ->orderBy('s.nom', 'ASC')
                ->getQuery()
                ->getResult();

            error_log('Found ' . count($sponsors) . ' sponsors');

            $sponsorsData = array_map(function (Sponsor $sponsor) use ($csrfTokenManager) {
                $csrfToken = $csrfTokenManager->getToken('delete' . $sponsor->getIdSponsor())->getValue();
                error_log('Generated CSRF token for sponsor ID ' . $sponsor->getIdSponsor() . ': ' . $csrfToken);
                return [
                    'idSponsor' => $sponsor->getIdSponsor(),
                    'nom' => $sponsor->getNom(),
                    'contact' => $sponsor->getContact(),
                    'pack' => $sponsor->getPack(),
                    'sponsorPicture' => $sponsor->getSponsorPicture(),
                    'csrfToken' => $csrfToken,
                ];
            }, $sponsors);

            error_log('Returning ' . count($sponsorsData) . ' sponsors in JSON');

            return new JsonResponse($sponsorsData);
        } catch (\Exception $e) {
            error_log('Search error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            return new JsonResponse(['error' => $e->getMessage()], 500);
        }
    }


    #[Route('/statistics', name: 'sponsor_statistics', methods: ['GET'])]
    public function statistics(): Response
    {
        // Total number of sponsors
        $totalSponsors = $this->sponsorRepository->count([]);

        // Fetch all sponsors
        $allSponsors = $this->sponsorRepository->findAll();

        // Compute pack distribution
        $packDistribution = $this->getPackDistribution($allSponsors);
        

        return $this->render('sponsor/statistics.html.twig', [
            'totalSponsors' => $totalSponsors,
            'packDistribution' => $packDistribution,
            'allSponsors' => $allSponsors,
        ]);
    }

    private function getPackDistribution(array $sponsors): array
    {
        $packs = ['Bronze' => 0, 'Silver' => 0, 'Gold' => 0, 'Platinum' => 0];
        foreach ($sponsors as $sponsor) {
            $pack = $sponsor->getPack();
            if (isset($packs[$pack])) {
                $packs[$pack]++;
            }
        }
        return $packs;
    }

    #[Route('/new', name: 'sponsor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            /** @var UploadedFile $pictureFile */
            $pictureFile = $form->get('sponsorPicture')->getData();
            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pictureFile->guessExtension();

                try {
                    $pictureFile->move(
                        $this->getParameter('sponsor_pictures_directory'),
                        $newFilename
                    );
                    $sponsor->setSponsorPicture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $entityManager->persist($sponsor);
            $entityManager->flush();

            return $this->redirectToRoute('sponsor_main');
        }

        return $this->render('sponsor/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'sponsor_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        return $this->render('sponsor/show.html.twig', [
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{id}/edit', name: 'sponsor_edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            /** @var UploadedFile $pictureFile */
            $pictureFile = $form->get('sponsorPicture')->getData();
            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $pictureFile->guessExtension();

                try {
                    $pictureFile->move(
                        $this->getParameter('sponsor_pictures_directory'),
                        $newFilename
                    );
                    $sponsor->setSponsorPicture($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $entityManager->flush();

            return $this->redirectToRoute('sponsor_main');
        }

        return $this->render('sponsor/edit.html.twig', [
            'form' => $form->createView(),
            'sponsor' => $sponsor,
        ]);
    }

    #[Route('/{id}', name: 'sponsor_delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        if ($this->isCsrfTokenValid('delete' . $sponsor->getIdSponsor(), $request->request->get('_token'))) {
            $entityManager->remove($sponsor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sponsor_main');
    }

    #[Route('/export/{format}', name: 'sponsor_export', defaults: ['format' => 'xlsx'])]
    public function export(string $format, SponsorRepository $sponsorRepository): Response
    {
        $sponsors = $sponsorRepository->findAll();

        switch ($format) {
            case 'csv':
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->fromArray(['Nom', 'Contact', 'Pack', 'Picture'], null, 'A1');
                $row = 2;
                foreach ($sponsors as $sponsor) {
                    $sheet->setCellValue('A' . $row, $sponsor->getNom());
                    $sheet->setCellValue('B' . $row, $sponsor->getContact());
                    $sheet->setCellValue('C' . $row, $sponsor->getPack());
                    $sheet->setCellValue('D' . $row, $sponsor->getSponsorPicture());
                    $row++;
                }

                $writer = new Csv($spreadsheet);
                $fileName = 'sponsors_export_' . date('Y-m-d') . '.csv';
                break;

            case 'pdf':
                $html = $this->renderView('sponsor/export_pdf.html.twig', [
                    'sponsors' => $sponsors,
                    'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.png'
                ]);

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
                        'Content-Disposition' => 'attachment; filename="sponsors_export_' . date('Y-m-d') . '.pdf"',
                    ]
                );

            case 'sql':
                $content = '';
                foreach ($sponsors as $sponsor) {
                    $nom = addslashes($sponsor->getNom());
                    $contact = addslashes($sponsor->getContact());
                    $pack = addslashes($sponsor->getPack());
                    $picture = addslashes($sponsor->getSponsorPicture() ?? '');
                    $content .= "INSERT INTO sponsor (nom, contact, pack, sponsorPicture) VALUES ('$nom', '$contact', '$pack', '$picture');\n";
                }

                return new Response(
                    $content,
                    200,
                    [
                        'Content-Type' => 'text/sql',
                        'Content-Disposition' => 'attachment; filename="sponsors_export_' . date('Y-m-d') . '.sql"',
                    ]
                );

            case 'xlsx':
            default:
                $spreadsheet = new Spreadsheet();
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->setCellValue('A1', 'Liste des Sponsors - Export personnalisé');
                $sheet->mergeCells('A1:D1');
                $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
                $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

                $sheet->fromArray(['Nom', 'Contact', 'Pack', 'Picture'], null, 'A3');
                $row = 4;
                foreach ($sponsors as $sponsor) {
                    $sheet->setCellValue('A' . $row, $sponsor->getNom());
                    $sheet->setCellValue('B' . $row, $sponsor->getContact());
                    $sheet->setCellValue('C' . $row, $sponsor->getPack());
                    $sheet->setCellValue('D' . $row, $sponsor->getSponsorPicture());
                    $row++;
                }

                $writer = new Xlsx($spreadsheet);
                $fileName = 'sponsors_export_' . date('Y-m-d') . '.xlsx';
                break;
        }

        // Sauvegarde temporaire du fichier
        $tempFile = tempnam(sys_get_temp_dir(), 'sponsor_export');
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

    #[Route('/front', name: 'sponsor_front', methods: ['GET'])]
    public function front(SponsorRepository $sponsorRepository): Response
    {
        $sponsors = $sponsorRepository->findAll();
        return $this->render('sponsor/sponsor_front.html.twig', [
            'sponsors' => $sponsors,
            'stripe_public_key' => $_ENV["STRIPE_KEY"],
        ]);
    }

    #[Route('/{id}/stripe-charge', name: 'sponsor_stripe_charge', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function createCharge(int $id, Request $request, SponsorRepository $sponsorRepository, ContratRepository $contratRepository): Response
    {
        $sponsor = $sponsorRepository->find($id);
        if (!$sponsor) {
            $this->addFlash('error', 'Sponsor non trouvé.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        // Validate CSRF token
        if (!$this->isCsrfTokenValid('stripe_payment_' . $sponsor->getIdSponsor(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        // Check if sponsor has at least one contract
        $contracts = $sponsor->getContrats();
        if ($contracts->isEmpty()) {
            $this->addFlash('error', 'Aucun contrat associé à ce sponsor.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        // Get selected contract ID
        $contractId = $request->request->get('contractId');
        if (!$contractId) {
            $this->addFlash('error', 'Aucun contrat sélectionné.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        // Fetch the selected contract
        $contract = $contratRepository->find($contractId);
        if (!$contract || $contract->getSponsor()->getIdSponsor() !== $sponsor->getIdSponsor()) {
            $this->addFlash('error', 'Contrat invalide ou non associé à ce sponsor.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET"]);

        $customerName = $request->request->get('customerName');
        $token = $request->request->get('stripeToken');

        if (!$token) {
            $this->addFlash('error', 'Paiement échoué : jeton manquant.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        if (!$customerName) {
            $this->addFlash('error', 'Paiement échoué : nom du client requis.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }

        // Get the contract amount and convert to cents
        $amount = $contract->getMontant();
        if ($amount <= 0) {
            $this->addFlash('error', 'Paiement échoué : montant du contrat invalide.');
            return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
        }
        $amountInCents = (int) ($amount * 100); // Convert to cents

        try {
            Stripe\Charge::create([
                "amount" => $amountInCents,
                "currency" => "usd",
                "source" => $token,
                "description" => "Paiement pour le contrat #" . $contract->getIdContrat() . " (" . $contract->getTitre() . ") de " . $sponsor->getNom(),
                "metadata" => [
                    'customer_name' => $customerName,
                    'sponsor_id' => $sponsor->getIdSponsor(),
                    'sponsor_name' => $sponsor->getNom(),
                    'contract_id' => $contract->getIdContrat(),
                    'contract_title' => $contract->getTitre(),
                    'amount' => $amount,
                ],
            ]);

            $this->addFlash('success', 'Paiement de $' . number_format($amount, 2) . ' effectué avec succès !');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Paiement échoué : ' . $e->getMessage());
        }

        return $this->redirectToRoute('sponsor_front', [], Response::HTTP_SEE_OTHER);
    }

    
}