<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
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
    $searchTerm = $request->query->get('search', '');
    $filter = $request->query->get('filter', '');

    $queryBuilder = $this->sponsorRepository->createQueryBuilder('s');

    if ($searchTerm) {
        $queryBuilder
            ->andWhere('s.nom LIKE :term OR s.contact LIKE :term OR s.pack LIKE :term')
            ->setParameter('term', '%' . $searchTerm . '%');
    }

    if ($filter === 'nom') {
        $queryBuilder->orderBy('s.nom', 'ASC');
    } elseif ($filter === 'contact') {
        $queryBuilder->orderBy('s.contact', 'ASC');
    } elseif ($filter === 'pack') {
        $queryBuilder->orderBy('s.pack', 'ASC');
    }

    $pagination = $paginator->paginate(
        $queryBuilder,
        $request->query->getInt('page', 1),
        3
    );

    // Fetch all sponsors for stats
    $allSponsors = $this->sponsorRepository->findAll();
    $totalSponsors = count($allSponsors);
    $packDistribution = $this->getPackDistribution($allSponsors);

    // Calculate active sponsors (sponsors with at least one contract)
    $activeSponsors = count(array_filter($allSponsors, fn($sponsor) => $sponsor->getContrats()->count() > 0));

    // Calculate total contracts per pack for radar chart
    $contractCounts = ['Bronze' => 0, 'Silver' => 0, 'Gold' => 0, 'Platinum' => 0];
    foreach ($allSponsors as $sponsor) {
        $pack = $sponsor->getPack();
        if (isset($contractCounts[$pack])) {
            $contractCounts[$pack] += $sponsor->getContrats()->count();
        }
    }

    return $this->render('sponsor/main.html.twig', [
        'sponsors' => $pagination,
        'searchTerm' => $searchTerm,
        'filter' => $filter,
        'totalSponsors' => $totalSponsors,
        'activeSponsors' => $activeSponsors,
        'packDistribution' => $packDistribution,
        'contractCounts' => $contractCounts,
        ]);
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

        // Compute top sponsors (e.g., by number of contracts)
        $topSponsors = $this->getTopSponsors($allSponsors);

        return $this->render('sponsor/statistics.html.twig', [
            'totalSponsors' => $totalSponsors,
            'packDistribution' => $packDistribution,
            'allSponsors' => $allSponsors,
            'topSponsors' => $topSponsors,
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

    private function getTopSponsors(array $sponsors): array
    {
        // Sort sponsors by number of contracts (descending)
        usort($sponsors, function ($a, $b) {
            return $b->getContrats()->count() <=> $a->getContrats()->count();
        });

        // Take the top 5 sponsors
        return array_slice($sponsors, 0, 5);
    }

    #[Route('/new', name: 'sponsor_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sponsor = new Sponsor();
        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
    public function edit(Request $request, int $id, EntityManagerInterface $entityManager): Response
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (!$sponsor) {
            throw $this->createNotFoundException('The sponsor with ID ' . $id . ' does not exist.');
        }

        $form = $this->createForm(SponsorType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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

            $sheet->fromArray(['Nom', 'Contact', 'Pack'], null, 'A1');
            $row = 2;
            foreach ($sponsors as $sponsor) {
                $sheet->setCellValue('A' . $row, $sponsor->getNom());
                $sheet->setCellValue('B' . $row, $sponsor->getContact());
                $sheet->setCellValue('C' . $row, $sponsor->getPack());
                $row++;
            }

            $writer = new Csv($spreadsheet);
            $fileName = 'sponsors_export_' . date('Y-m-d') . '.csv';
            break;

        case 'pdf':
            $html = '<h2>Liste des Sponsors</h2><table border="1" cellpadding="5" cellspacing="0"><thead><tr><th>Nom</th><th>Contact</th><th>Pack</th></tr></thead><tbody>';
            foreach ($sponsors as $sponsor) {
                $html .= '<tr><td>' . $sponsor->getNom() . '</td><td>' . $sponsor->getContact() . '</td><td>' . $sponsor->getPack() . '</td></tr>';
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
                    'Content-Disposition' => 'attachment; filename="sponsors_export_' . date('Y-m-d') . '.pdf"',
                ]
            );

        case 'sql':
            $content = '';
            foreach ($sponsors as $sponsor) {
                $nom = addslashes($sponsor->getNom());
                $contact = addslashes($sponsor->getContact());
                $pack = addslashes($sponsor->getPack());
                $content .= "INSERT INTO sponsor (nom, contact, pack) VALUES ('$nom', '$contact', '$pack');\n";
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
            $sheet->mergeCells('A1:C1');
            $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
            $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

            $sheet->fromArray(['Nom', 'Contact', 'Pack'], null, 'A3');
            $row = 4;
            foreach ($sponsors as $sponsor) {
                $sheet->setCellValue('A' . $row, $sponsor->getNom());
                $sheet->setCellValue('B' . $row, $sponsor->getContact());
                $sheet->setCellValue('C' . $row, $sponsor->getPack());
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
    $response->deleteFileAfterSend(true); // This ensures Symfony deletes the temp file AFTER it's sent
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    return $response;
    }
    



}