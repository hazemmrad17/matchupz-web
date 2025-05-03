<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/abonnement')]
class AbonnementController extends AbstractController
{
    #[Route('/', name: 'abonnement_index', methods: ['GET'])]
    public function index(AbonnementRepository $abonnementRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $activeAbonnements = $abonnementRepository->findActiveAbonnements(5);
        $searchTerm = $request->query->get('search', '');

        $queryBuilder = $abonnementRepository->createQueryBuilder('a')
            ->leftJoin('a.club', 'c')
            ->orderBy('a.dateDebut', 'DESC');

        if ($searchTerm) {
            $queryBuilder
                ->where('c.nomClub LIKE :searchTerm')
                ->orWhere('a.typeAbonnement LIKE :searchTerm')
                ->orWhere('a.etat LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        $query = $queryBuilder->getQuery();
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );

        // Handle AJAX request
        if ($request->isXmlHttpRequest()) {
            $abonnementData = [];
            foreach ($pagination as $abonnement) {
                $abonnementData[] = [
                    'id_abonnement' => $abonnement->getIdAbonnement(),
                    'nom_club' => $abonnement->getClub() ? $abonnement->getClub()->getNomClub() : 'N/A',
                    'type_abonnement' => $abonnement->getTypeAbonnement() ?? 'N/A',
                    'date_debut' => $abonnement->getDateDebut() ? $abonnement->getDateDebut()->format('d/m/Y') : 'N/A',
                    'date_fin' => $abonnement->getDateFin() ? $abonnement->getDateFin()->format('d/m/Y') : 'N/A',
                    'tarif' => $abonnement->getTarif() ?? 'N/A',
                    'etat' => $abonnement->getEtat() ?? 'N/A',
                ];
            }

            // Render pagination HTML
            $paginationHtml = $this->renderView('abonnement/_pagination.html.twig', [
                'abonnements' => $pagination,
                'searchTerm' => $searchTerm,
            ]);

            return new JsonResponse([
                'abonnements' => $abonnementData,
                'pagination' => $paginationHtml,
            ]);
        }

        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $pagination,
            'active_abonnements' => $activeAbonnements,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/export/csv', name: 'abonnement_export_csv')]
    public function exportCsv(AbonnementRepository $abonnementRepository): Response
    {
        $abonnements = $abonnementRepository->findAll();
        $output = fopen('php://memory', 'w');
        fputcsv($output, [
            'ID',
            'Club',
            'Type d\'Abonnement',
            'Date de Début',
            'Date de Fin',
            'Tarif',
            'État',
        ]);
        foreach ($abonnements as $abonnement) {
            fputcsv($output, [
                $abonnement->getIdAbonnement(),
                $abonnement->getClub() ? $abonnement->getClub()->getNomClub() : 'N/A',
                $abonnement->getTypeAbonnement() ?? 'N/A',
                $abonnement->getDateDebut() ? $abonnement->getDateDebut()->format('d/m/Y') : 'N/A',
                $abonnement->getDateFin() ? $abonnement->getDateFin()->format('d/m/Y') : 'N/A',
                $abonnement->getTarif() ?? 'N/A',
                $abonnement->getEtat() ?? 'N/A',
            ]);
        }
        fseek($output, 0);
        $response = new Response(stream_get_contents($output));
        fclose($output);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'abonnements_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    #[Route('/export/pdf', name: 'abonnement_export_pdf')]
    public function exportPdf(AbonnementRepository $abonnementRepository): Response
    {
        $abonnements = $abonnementRepository->findAll();
        $html = $this->renderView('abonnement/export_pdf.html.twig', [
            'abonnements' => $abonnements,
            'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.svg',
        ]);
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('defaultMediaType', 'print');
        $options->set('dpi', 96);
        $options->set('chroot', $this->getParameter('kernel.project_dir'));
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $pdfContent = $dompdf->output();
        $response = new Response($pdfContent);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'abonnements_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);
        return $response;
    }

    #[Route('/export/excel', name: 'abonnement_export_excel')]
    public function exportExcel(AbonnementRepository $abonnementRepository): Response
    {
        $abonnements = $abonnementRepository->findAll();
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Club');
        $sheet->setCellValue('C1', 'Type d\'Abonnement');
        $sheet->setCellValue('D1', 'Date de Début');
        $sheet->setCellValue('E1', 'Date de Fin');
        $sheet->setCellValue('F1', 'Tarif');
        $sheet->setCellValue('G1', 'État');
        $row = 2;
        foreach ($abonnements as $abonnement) {
            $sheet->setCellValue('A' . $row, $abonnement->getIdAbonnement());
            $sheet->setCellValue('B' . $row, $abonnement->getClub() ? $abonnement->getClub()->getNomClub() : 'N/A');
            $sheet->setCellValue('C' . $row, $abonnement->getTypeAbonnement() ?? 'N/A');
            $sheet->setCellValue('D' . $row, $abonnement->getDateDebut() ? $abonnement->getDateDebut()->format('d/m/Y') : 'N/A');
            $sheet->setCellValue('E' . $row, $abonnement->getDateFin() ? $abonnement->getDateFin()->format('d/m/Y') : 'N/A');
            $sheet->setCellValue('F' . $row, $abonnement->getTarif() ?? 'N/A');
            $sheet->setCellValue('G' . $row, $abonnement->getEtat() ?? 'N/A');
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'abonnements_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'abonnements_export');
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

    #[Route('/new', name: 'abonnement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->persist($abonnement);
                    $entityManager->flush();
                    $this->addFlash('success', 'Abonnement créé avec succès !');
                    return $this->redirectToRoute('abonnement_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la création de l\'abonnement : ' . $e->getMessage());
                }
            } else {
                $this->addFlash('error', 'Erreur lors de la création de l\'abonnement. Veuillez vérifier les champs.');
            }
        }
        return $this->render('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/statistics', name: 'abonnement_statistics', methods: ['GET'])]
    public function statistics(AbonnementRepository $abonnementRepository): Response
    {
        $abonnements = $abonnementRepository->findAll();
        $totalAbonnements = count($abonnements);
        $etatDistribution = $abonnementRepository->getEtatDistribution();
        $typeDistribution = $abonnementRepository->getTypeDistribution();
        $clubDistribution = $abonnementRepository->getClubDistribution();
        return $this->render('abonnement/statistics.html.twig', [
            'totalAbonnements' => $totalAbonnements,
            'etatDistribution' => $etatDistribution,
            'typeDistribution' => $typeDistribution,
            'clubDistribution' => $clubDistribution,
            'allAbonnements' => $abonnements,
        ]);
    }

    #[Route('/{idAbonnement}', name: 'abonnement_show', methods: ['GET'], requirements: ['idAbonnement' => '\d+'])]
    public function show(#[MapEntity(mapping: ['idAbonnement' => 'id_abonnement'])] Abonnement $abonnement = null, Request $request): Response
    {
        if (!$abonnement) {
            $this->addFlash('error', 'L\'abonnement avec l\'ID ' . $request->attributes->get('idAbonnement') . ' n\'existe pas.');
            return $this->redirectToRoute('abonnement_index');
        }
        return $this->render('abonnement/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    #[Route('/{idAbonnement}/edit', name: 'abonnement_edit', methods: ['GET', 'POST'], requirements: ['idAbonnement' => '\d+'])]
    public function edit(Request $request, #[MapEntity(mapping: ['idAbonnement' => 'id_abonnement'])] Abonnement $abonnement = null, EntityManagerInterface $entityManager): Response
    {
        if (!$abonnement) {
            $this->addFlash('error', 'L\'abonnement avec l\'ID ' . $request->attributes->get('idAbonnement') . ' n\'existe pas.');
            return $this->redirectToRoute('abonnement_index');
        }
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    $this->addFlash('success', 'Abonnement mis à jour avec succès !');
                    return $this->redirectToRoute('abonnement_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour de l\'abonnement : ' . $e->getMessage());
                }
            } else {
                $this->addFlash('error', 'Erreur lors de la mise à jour de l\'abonnement. Veuillez vérifier les champs.');
            }
        }
        return $this->render('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idAbonnement}', name: 'abonnement_delete', methods: ['POST'], requirements: ['idAbonnement' => '\d+'])]
    public function delete(Request $request, #[MapEntity(mapping: ['idAbonnement' => 'id_abonnement'])] Abonnement $abonnement = null, EntityManagerInterface $entityManager): Response
    {
        if (!$abonnement) {
            $this->addFlash('error', 'L\'abonnement avec l\'ID ' . $request->attributes->get('idAbonnement') . ' n\'existe pas.');
            return $this->redirectToRoute('abonnement_index');
        }
        if ($this->isCsrfTokenValid('delete' . $abonnement->getIdAbonnement(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($abonnement);
                $entityManager->flush();
                $this->addFlash('success', 'Abonnement supprimé avec succès !');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression de l\'abonnement : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide. Suppression annulée.');
        }
        return $this->redirectToRoute('abonnement_index');
    }
}