<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Knp\Snappy\Pdf;

#[Route('/club')]
class ClubController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'club_index', methods: ['GET'])]
    public function index(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();
        $clubsWithPhotos = count(array_filter($clubs, fn($club) => $club->getPhotoUrl() !== null));

        return $this->render('club/index.html.twig', [
            'clubs' => $clubs,
            'clubs_with_photos' => $clubsWithPhotos,
        ]);
    }

    #[Route('/new', name: 'club_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photoUrl')->getData();
            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();
                try {
                    $photoFile->move(
                        $this->getParameter('club_photos_directory'),
                        $newFilename
                    );
                    $club->setPhotoUrl('/uploads/club_photos/'.$newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload photo: '.$e->getMessage());
                    return $this->render('club/new.html.twig', [
                        'club' => $club,
                        'form' => $form->createView(),
                    ]);
                }
            }

            $this->entityManager->persist($club);
            $this->entityManager->flush();

            $this->addFlash('success', 'Club created successfully!');
            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/new.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idClub}', name: 'club_show', methods: ['GET'], requirements: ['idClub' => '\d+'])]
    public function show(?Club $club, Request $request): Response
    {
        if (!$club) {
            throw $this->createNotFoundException('The club with ID ' . $request->attributes->get('idClub') . ' does not exist');
        }

        return $this->render('club/show.html.twig', [
            'club' => $club,
        ]);
    }

    #[Route('/{idClub}/edit', name: 'club_edit', methods: ['GET', 'POST'], requirements: ['idClub' => '\d+'])]
    public function edit(Request $request, ?Club $club): Response
    {
        if (!$club) {
            throw $this->createNotFoundException('The club with ID ' . $request->attributes->get('idClub') . ' does not exist');
        }

        $form = $this->createForm(ClubType::class, $club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photoUrl')->getData();
            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();
                try {
                    $photoFile->move(
                        $this->getParameter('club_photos_directory'),
                        $newFilename
                    );
                    if ($club->getPhotoUrl()) {
                        $oldFile = $this->getParameter('club_photos_directory').'/'.basename($club->getPhotoUrl());
                        if (file_exists($oldFile)) {
                            unlink($oldFile);
                        }
                    }
                    $club->setPhotoUrl('/uploads/club_photos/'.$newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload photo: '.$e->getMessage());
                    return $this->render('club/edit.html.twig', [
                        'club' => $club,
                        'form' => $form->createView(),
                    ]);
                }
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'Club updated successfully!');
            return $this->redirectToRoute('club_index');
        }

        return $this->render('club/edit.html.twig', [
            'club' => $club,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idClub}', name: 'club_delete', methods: ['POST'], requirements: ['idClub' => '\d+'])]
    public function delete(Request $request, ?Club $club): Response
    {
        if (!$club) {
            throw $this->createNotFoundException('The club with ID ' . $request->attributes->get('idClub') . ' does not exist');
        }

        if ($this->isCsrfTokenValid('delete'.$club->getIdClub(), $request->request->get('_token'))) {
            if ($club->getPhotoUrl()) {
                $photoFile = $this->getParameter('club_photos_directory').'/'.basename($club->getPhotoUrl());
                if (file_exists($photoFile)) {
                    unlink($photoFile);
                }
            }
            
            $this->entityManager->remove($club);
            $this->entityManager->flush();

            $this->addFlash('success', 'Club deleted successfully!');
        }

        return $this->redirectToRoute('club_index');
    }

    #[Route('/statistics', name: 'club_statistics', methods: ['GET'])]
    public function statistics(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();

        $totalClubs = count($clubs);
        $clubsWithPhotos = count(array_filter($clubs, fn($club) => $club->getPhotoUrl() !== null));
        $clubsWithoutPhotos = $totalClubs - $clubsWithPhotos;

        return $this->render('club/statistics.html.twig', [
            'totalClubs' => $totalClubs,
            'clubsWithPhotos' => $clubsWithPhotos,
            'clubsWithoutPhotos' => $clubsWithoutPhotos,
            'allClubs' => $clubs,
        ]);
    }

    #[Route('/export/pdf', name: 'club_export_pdf')]
    public function exportPdf(ClubRepository $clubRepository, Pdf $knpSnappyPdf): Response
    {
        $clubs = $clubRepository->findAll();

        $html = $this->renderView('club/export_pdf.html.twig', [
            'clubs' => $clubs,
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
        ];

        $pdfContent = $knpSnappyPdf->getOutputFromHtml($html, $pdfOptions);

        $response = new Response($pdfContent);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'clubs_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/csv', name: 'club_export_csv')]
    public function exportCsv(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();

        $output = fopen('php://memory', 'w');

        fputcsv($output, [
            'Nom du Club',
            'Photo URL'
        ]);

        foreach ($clubs as $club) {
            fputcsv($output, [
                $club->getNomClub(),
                $club->getPhotoUrl() ?? 'N/A',
            ]);
        }

        fseek($output, 0);

        $response = new Response(stream_get_contents($output));
        fclose($output);

        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'clubs_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/excel', name: 'club_export_excel')]
    public function exportExcel(ClubRepository $clubRepository): Response
    {
        $clubs = $clubRepository->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Nom du Club');
        $sheet->setCellValue('B1', 'Photo URL');

        $row = 2;
        foreach ($clubs as $club) {
            $sheet->setCellValue('A' . $row, $club->getNomClub());
            $sheet->setCellValue('B' . $row, $club->getPhotoUrl() ?? 'N/A');
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'clubs_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'clubs_export');
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
