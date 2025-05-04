<?php

namespace App\Controller;

use App\Entity\Sport;
use App\Form\SportType;
use App\Repository\SportRepository;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Knp\Snappy\Pdf;

#[Route('/sport')]
class SportController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'sport_index', methods: ['GET'])]
    public function index(SportRepository $sportRepository, JoueurRepository $joueurRepository): Response
    {
        $sports = $sportRepository->findAll();
        return $this->render('sport/index.html.twig', [
            'sports' => $sports,
            'joueurs' => $joueurRepository->findAll(),
            'topPerformers' => $joueurRepository->findBy([], ['taille' => 'DESC'], 5)
        ]);
    }

    #[Route('/new', name: 'sport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sport = new Sport();
        $form = $this->createForm(SportType::class, $sport);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->persist($sport);
                $entityManager->flush();

                $this->addFlash('success', 'Sport créé avec succès !');
                return $this->redirectToRoute('sport_index');
            } else {
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                $this->addFlash('error', 'Erreur lors de la création du sport : ' . implode(', ', $errors));
            }
        }

        return $this->render('sport/new.html.twig', [
            'sport' => $sport,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idSport}/edit', name: 'sport_edit', methods: ['GET', 'POST'], requirements: ['idSport' => '\d+'])]
    public function edit(Request $request, ?Sport $sport, EntityManagerInterface $entityManager): Response
    {
        if (!$sport) {
            throw $this->createNotFoundException('Le sport avec l\'ID ' . $request->attributes->get('idSport') . ' n\'existe pas');
        }

        $form = $this->createForm(SportType::class, $sport);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->flush();

                $this->addFlash('success', 'Sport mis à jour avec succès !');
                return $this->redirectToRoute('sport_index');
            } else {
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                $this->addFlash('error', 'Erreur lors de la mise à jour du sport : ' . implode(', ', $errors));
            }
        }

        return $this->render('sport/edit.html.twig', [
            'sport' => $sport,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idSport}', name: 'sport_delete', methods: ['POST'], requirements: ['idSport' => '\d+'])]
    public function delete(Request $request, ?Sport $sport, EntityManagerInterface $entityManager): Response
    {
        if (!$sport) {
            throw $this->createNotFoundException('Le sport avec l\'ID ' . $request->attributes->get('idSport') . ' n\'existe pas');
        }

        if ($this->isCsrfTokenValid('delete'.$sport->getIdSport(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($sport);
                $entityManager->flush();
                $this->addFlash('success', 'Sport supprimé avec succès !');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression du sport : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide.');
        }

        return $this->redirectToRoute('sport_index');
    }

    #[Route('/statistics', name: 'sport_statistics', methods: ['GET'])]
    public function statistics(SportRepository $sportRepository): Response
    {
        $allSports = $sportRepository->findAll();

        if (empty($allSports)) {
            $this->addFlash('warning', 'Aucun sport trouvé dans la base de données.');
        }

        $totalSports = count($allSports);

        $descriptionLengths = array_filter(
            array_map(fn($sport) => $sport->getDescription() ? strlen($sport->getDescription()) : null, $allSports)
        );
        $averageDescriptionLength = $descriptionLengths ? array_sum($descriptionLengths) / count($descriptionLengths) : 0;

        $sportsWithDescription = count(array_filter(
            array_map(fn($sport) => $sport->getDescription() !== null, $allSports)
        ));

        return $this->render('sport/statistics.html.twig', [
            'totalSports' => $totalSports,
            'averageDescriptionLength' => $averageDescriptionLength,
            'sportsWithDescription' => $sportsWithDescription,
            'allSports' => $allSports,
        ]);
    }

    #[Route('/{idSport}', name: 'sport_show', methods: ['GET'], requirements: ['idSport' => '\d+'])]
    public function show(?Sport $sport, Request $request): Response
    {
        if (!$sport) {
            throw $this->createNotFoundException('The sport with ID ' . $request->attributes->get('idSport') . ' does not exist');
        }

        return $this->render('sport/show.html.twig', [
            'sport' => $sport,
        ]);
    }

    #[Route('/export/csv', name: 'sport_export_csv')]
    public function exportCsv(SportRepository $sportRepository): Response
    {
        $sports = $sportRepository->findAll();

        $output = fopen('php://memory', 'w');

        fputcsv($output, [
            'Nom du Sport',
            'Description',
        ]);

        foreach ($sports as $sport) {
            fputcsv($output, [
                $sport->getNomSport(),
                $sport->getDescription() ?? 'N/A',
            ]);
        }

        fseek($output, 0);

        $response = new Response(stream_get_contents($output));
        fclose($output);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'sports_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'sport_export_pdf')]
    public function exportPdf(SportRepository $sportRepository, Pdf $knpSnappyPdf): Response
    {
        $sports = $sportRepository->findAll();

        $html = $this->renderView('sport/export_pdf.html.twig', [
            'sports' => $sports,
            'logo_path' => $this->getParameter('kernel.project_dir').'/public/img/logo_white.png'
        ]);

        $pdfOptions = [
            'enable-local-file-access' => true,
            'encoding' => 'UTF-8',
            'margin-top' => 10,
            'margin-bottom' => 10,
            'margin-left' => 10,
            'margin-right' => 10,
            'no-stop-slow-scripts' => true,
        ];

        $pdfContent = $knpSnappyPdf->getOutputFromHtml($html, $pdfOptions);

        $response = new Response($pdfContent);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'sports_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/excel', name: 'sport_export_excel')]
    public function exportExcel(SportRepository $sportRepository): Response
    {
        $sports = $sportRepository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Nom du Sport');
        $sheet->setCellValue('B1', 'Description');

        $row = 2;
        foreach ($sports as $sport) {
            $sheet->setCellValue('A' . $row, $sport->getNomSport());
            $sheet->setCellValue('B' . $row, $sport->getDescription() ?? 'N/A');
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'sports_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'sports_export');
        $writer->save($tempFile);

        $response = new Response(file_get_contents($tempFile));
        unlink($tempFile);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }
}