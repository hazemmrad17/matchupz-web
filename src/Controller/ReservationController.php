<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet; // For Excel export
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; // For Excel export
use Dompdf\Dompdf; // For PDF export
use Dompdf\Options; // For Dompdf options

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/', name: 'reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $upcomingReservations = $reservationRepository->findUpcomingConfirmed(5);

        // Get the search term from the query parameters
        $searchTerm = $request->query->get('search', '');

        // Create query for pagination with search filter
        $queryBuilder = $reservationRepository->createQueryBuilder('r')
            ->leftJoin('r.espacesportif', 'e')
            ->orderBy('r.date_reservee', 'DESC');

        // Apply search filter if a search term is provided
        if ($searchTerm) {
            $queryBuilder
                ->where('e.nom_espace LIKE :searchTerm')
                ->orWhere('r.motif LIKE :searchTerm')
                ->orWhere('r.status LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        $query = $queryBuilder->getQuery();

        // Paginate the results (5 reservations per page)
        $reservations = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
            'upcoming_reservations' => $upcomingReservations,
            'searchTerm' => $searchTerm,
        ]);
    }

    #[Route('/export/csv', name: 'reservation_export_csv')]
    public function exportCsv(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        // Create a CSV file in memory
        $output = fopen('php://memory', 'w');

        // Add headers
        fputcsv($output, [
            'Lieu Sportif',
            'Date Réservée',
            'Motif',
            'Statut',
        ]);

        // Add data
        foreach ($reservations as $reservation) {
            fputcsv($output, [
                $reservation->getEspacesportif() ? $reservation->getEspacesportif()->getNomEspace() : 'N/A',
                $reservation->getDateReservee() ? $reservation->getDateReservee()->format('d/m/Y H:i') : 'N/A',
                $reservation->getMotif() ?? 'N/A',
                $reservation->getStatus() ?? 'N/A',
            ]);
        }

        // Rewind the file pointer to the beginning
        fseek($output, 0);

        // Create the response with the CSV content
        $response = new Response(stream_get_contents($output));
        fclose($output);

        // Set headers for download
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'reservations_export_' . date('Y-m-d') . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/pdf', name: 'reservation_export_pdf')]
    public function exportPdf(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        // Render the HTML template
        $html = $this->renderView('reservation/export_pdf.html.twig', [
            'reservations' => $reservations,
            'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.svg'
        ]);

        // Configure Dompdf options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true); // Allow loading remote resources (e.g., images)
        $options->set('defaultMediaType', 'print');
        $options->set('dpi', 96);
        $options->set('chroot', $this->getParameter('kernel.project_dir')); // Restrict file access to project directory

        // Instantiate Dompdf
        $dompdf = new Dompdf($options);

        // Load the HTML into Dompdf
        $dompdf->loadHtml($html);

        // Set paper size and orientation (A4 landscape)
        $dompdf->setPaper('A4', 'landscape');

        // Render the PDF
        $dompdf->render();

        // Get the PDF content
        $pdfContent = $dompdf->output();

        // Create the response
        $response = new Response($pdfContent);
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'reservations_export_' . date('Y-m-d') . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/export/excel', name: 'reservation_export_excel')]
    public function exportExcel(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'Lieu Sportif');
        $sheet->setCellValue('B1', 'Date Réservée');
        $sheet->setCellValue('C1', 'Motif');
        $sheet->setCellValue('D1', 'Statut');

        // Add data
        $row = 2;
        foreach ($reservations as $reservation) {
            $sheet->setCellValue('A' . $row, $reservation->getEspacesportif() ? $reservation->getEspacesportif()->getNomEspace() : 'N/A');
            $sheet->setCellValue('B' . $row, $reservation->getDateReservee() ? $reservation->getDateReservee()->format('d/m/Y H:i') : 'N/A');
            $sheet->setCellValue('C' . $row, $reservation->getMotif() ?? 'N/A');
            $sheet->setCellValue('D' . $row, $reservation->getStatus() ?? 'N/A');
            $row++;
        }

        // Create the Excel file in memory
        $writer = new Xlsx($spreadsheet);
        $fileName = 'reservations_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'reservations_export');
        $writer->save($tempFile);

        // Create the response with the Excel content
        $response = new Response(file_get_contents($tempFile));
        unlink($tempFile);

        // Set headers for download
        $disposition = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/new', name: 'reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->persist($reservation);
                $entityManager->flush();

                $this->addFlash('success', 'Réservation créée avec succès!');
                return $this->redirectToRoute('reservation_index');
            } else {
                $this->addFlash('error', 'Erreur lors de la création de la réservation. Veuillez vérifier les champs.');
            }
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/statistics', name: 'reservation_statistics', methods: ['GET'])]
    public function statistics(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();

        // Total number of reservations
        $totalReservations = count($reservations);

        // Status distribution
        $statusDistribution = $reservationRepository->getStatusDistribution();

        // Motif distribution
        $motifDistribution = $reservationRepository->getMotifDistribution();

        // Reservations per espace sportif
        $espaceDistribution = $reservationRepository->getEspaceDistribution();

        return $this->render('reservation/statistics.html.twig', [
            'totalReservations' => $totalReservations,
            'statusDistribution' => $statusDistribution,
            'motifDistribution' => $motifDistribution,
            'espaceDistribution' => $espaceDistribution,
            'allReservations' => $reservations,
        ]);
    }

    #[Route('/{id_reservation}', name: 'reservation_show', methods: ['GET'], requirements: ['id_reservation' => '\d+'])]
    public function show(?Reservation $reservation, Request $request): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/{id_reservation}/edit', name: 'reservation_edit', methods: ['GET', 'POST'], requirements: ['id_reservation' => '\d+'])]
    public function edit(Request $request, ?Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->flush();

                $this->addFlash('success', 'Réservation mise à jour avec succès!');
                return $this->redirectToRoute('reservation_index');
            } else {
                $this->addFlash('error', 'Erreur lors de la mise à jour de la réservation. Veuillez vérifier les champs.');
            }
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id_reservation}', name: 'reservation_delete', methods: ['POST'], requirements: ['id_reservation' => '\d+'])]
    public function delete(Request $request, ?Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation supprimée avec succès!');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression de la réservation.');
        }

        return $this->redirectToRoute('reservation_index');
    }
}