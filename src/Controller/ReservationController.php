<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Service\GoogleCalendarService;
use App\Service\EventIdStorage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Dompdf\Dompdf;
use Dompdf\Options;
use Psr\Log\LoggerInterface;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/', name: 'reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository, Request $request, PaginatorInterface $paginator, GoogleCalendarService $googleCalendarService): Response
    {
        if (!$googleCalendarService->isInitialized()) {
            $this->addFlash('warning', 'Google Calendar integration is not available. Please check the configuration.');
        }

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
            'google_calendar_initialized' => $googleCalendarService->isInitialized(),
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
    public function new(Request $request, EntityManagerInterface $entityManager, GoogleCalendarService $googleCalendarService, EventIdStorage $eventIdStorage): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->persist($reservation);
                $entityManager->flush();

                if ($googleCalendarService->isInitialized()) {
                    try {
                        $eventId = $googleCalendarService->createEvent($reservation);
                        $eventIdStorage->saveEventId($reservation->getIdReservation(), $eventId);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de la synchronisation avec Google Calendar: ' . $e->getMessage());
                    }
                } else {
                    $this->addFlash('warning', 'Google Calendar sync skipped due to initialization failure.');
                }

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
    public function show(?Reservation $reservation, Request $request, EventIdStorage $eventIdStorage): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        $isSyncedWithGoogleCalendar = $eventIdStorage->getEventId($reservation->getIdReservation()) !== null;

        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
            'isSyncedWithGoogleCalendar' => $isSyncedWithGoogleCalendar,
        ]);
    }

    #[Route('/{id_reservation}/edit', name: 'reservation_edit', methods: ['GET', 'POST'], requirements: ['id_reservation' => '\d+'])]
    public function edit(Request $request, ?Reservation $reservation, EntityManagerInterface $entityManager, GoogleCalendarService $googleCalendarService, EventIdStorage $eventIdStorage): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager->flush();

                if ($googleCalendarService->isInitialized()) {
                    try {
                        $eventId = $eventIdStorage->getEventId($reservation->getIdReservation());
                        if ($eventId) {
                            $googleCalendarService->updateEvent($eventId, $reservation);
                        } else {
                            $eventId = $googleCalendarService->createEvent($reservation);
                            $eventIdStorage->saveEventId($reservation->getIdReservation(), $eventId);
                        }
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de la synchronisation avec Google Calendar: ' . $e->getMessage());
                    }
                } else {
                    $this->addFlash('warning', 'Google Calendar sync skipped due to initialization failure.');
                }

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
    public function delete(Request $request, ?Reservation $reservation, EntityManagerInterface $entityManager, GoogleCalendarService $googleCalendarService, EventIdStorage $eventIdStorage): Response
    {
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation avec l\'ID ' . $request->attributes->get('id_reservation') . ' n\'existe pas');
        }

        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->request->get('_token'))) {
            if ($googleCalendarService->isInitialized()) {
                try {
                    $eventId = $eventIdStorage->getEventId($reservation->getIdReservation());
                    if ($eventId) {
                        $googleCalendarService->deleteEvent($eventId);
                        $eventIdStorage->removeEventId($reservation->getIdReservation());
                    }
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la suppression de l\'événement Google Calendar: ' . $e->getMessage());
                }
            } else {
                $this->addFlash('warning', 'Google Calendar sync skipped due to initialization failure.');
            }

            $entityManager->remove($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation supprimée avec succès!');
        } else {
            $this->addFlash('error', 'Erreur lors de la suppression de la réservation.');
        }

        return $this->redirectToRoute('reservation_index');
    }

    #[Route('/google-auth', name: 'google_auth', methods: ['GET'])]
    public function googleAuth(GoogleCalendarService $googleCalendarService, Request $request, SessionInterface $session): Response
    {
        $googleCalendarService->setSession($session);

        if (!$googleCalendarService->isInitialized()) {
            $this->addFlash('error', 'Google Calendar client not initialized. Check the configuration.');
            return $this->redirectToRoute('reservation_index');
        }

        $client = $googleCalendarService->getClient();

        if (!$client->getAccessToken()) {
            $authUrl = $client->createAuthUrl();
            $this->logger->info('Redirecting to Google OAuth URL', ['url' => $authUrl]);
            return $this->redirect($authUrl);
        }

        // Check for a redirect_to parameter to return to the original page
        $redirectTo = $request->query->get('redirect_to', $this->generateUrl('reservation_index'));
        return $this->redirect($redirectTo);
    }

    #[Route('/google-logout', name: 'google_logout', methods: ['GET'])]
    public function googleLogout(GoogleCalendarService $googleCalendarService, SessionInterface $session): Response
    {
        $googleCalendarService->setSession($session);

        $client = $googleCalendarService->getClient();
        $accessToken = $session->get('google_access_token');

        // Revoke the token if it exists
        if ($accessToken) {
            $client->revokeToken($accessToken);
            $session->remove('google_access_token');
            $this->logger->info('Google OAuth token revoked and removed from session.');
        }

        $this->addFlash('success', 'Disconnected from Google Calendar. Please authenticate again.');
        return $this->redirectToRoute('google_auth');
    }

    #[Route('/{id_reservation}/add-to-google-calendar', name: 'reservation_add_to_google_calendar', methods: ['GET'], requirements: ['id_reservation' => '\d+'])]
    public function addToGoogleCalendar(int $id_reservation, ReservationRepository $reservationRepository, GoogleCalendarService $googleCalendarService, EventIdStorage $eventIdStorage, SessionInterface $session): Response
    {
        $googleCalendarService->setSession($session);

        $reservation = $reservationRepository->find($id_reservation);

        if (!$reservation) {
            $this->addFlash('error', "La réservation demandée n'existe pas ou a été supprimée.");
            return $this->redirectToRoute('reservation_index');
        }

        if (!$googleCalendarService->isInitialized()) {
            $this->addFlash('error', 'Google Calendar client not initialized. Check the configuration.');
            return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservation->getIdReservation()]);
        }

        $client = $googleCalendarService->getClient();
        $client->setState((string) $id_reservation);

        // Log session contents for debugging
        $this->logger->info('Session contents before processing: ' . json_encode($session->all()));

        // Check if access token exists
        $accessToken = $session->get('google_access_token');
        $this->logger->info('Access token from session: ' . ($accessToken ? json_encode($accessToken) : 'null'));

        if (!$accessToken) {
            // Clear any stale session data to prevent loops
            $session->remove('google_access_token');
            $authUrl = $client->createAuthUrl();
            $this->logger->info('No access token found, redirecting to Google for authentication: ' . $authUrl);
            return new RedirectResponse($authUrl);
        }

        $client->setAccessToken($accessToken);

        // Check if access token is expired and refresh if necessary
        if ($client->isAccessTokenExpired()) {
            $this->logger->info('Access token expired, attempting to refresh.');
            try {
                $googleCalendarService->refreshAccessToken();
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors du rafraîchissement du jeton d\'accès : ' . $e->getMessage());
                $session->remove('google_access_token');
                $authUrl = $client->createAuthUrl();
                $this->logger->info('Redirecting to Google for re-authentication: ' . $authUrl);
                return new RedirectResponse($authUrl);
            }
        }

        // Check if the reservation already has an event in Google Calendar
        $existingEventId = $eventIdStorage->getEventId($reservation->getIdReservation());
        if ($existingEventId) {
            $this->addFlash('warning', 'Cette réservation est déjà synchronisée avec Google Calendar.');
            return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservation->getIdReservation()]);
        }

        // Create the calendar event
        try {
            $eventId = $googleCalendarService->createReservationEvent($reservation);
            $eventIdStorage->saveEventId($reservation->getIdReservation(), $eventId);
            $this->addFlash('success', 'Réservation ajoutée à votre Google Calendar avec succès !');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'ajout à Google Calendar : ' . $e->getMessage());
        }

        return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservation->getIdReservation()]);
    }

    #[Route('/google-callback', name: 'google_callback', methods: ['GET'])]
    public function googleCallback(Request $request, ReservationRepository $reservationRepository, GoogleCalendarService $googleCalendarService, SessionInterface $session): Response
    {
        $googleCalendarService->setSession($session);

        if (!$googleCalendarService->isInitialized()) {
            $this->addFlash('error', 'Google Calendar client not initialized. Check the configuration.');
            return $this->redirectToRoute('reservation_index');
        }

        $this->logger->info('Google callback received with query: ' . json_encode($request->query->all()));
        $reservationId = $request->query->get('state');

        if (!$reservationId) {
            $this->logger->error('Reservation ID not provided in state parameter.');
            $this->addFlash('error', 'Reservation ID not provided in state parameter.');
            return $this->redirectToRoute('reservation_index');
        }

        $reservation = $reservationRepository->find($reservationId);
        if (!$reservation) {
            $this->addFlash('error', "La réservation demandée n'existe pas ou a été supprimée.");
            return $this->redirectToRoute('reservation_index');
        }

        $client = $googleCalendarService->getClient();
        $code = $request->query->get('code');
        $error = $request->query->get('error');

        if ($error) {
            $this->addFlash('error', 'Google OAuth error: ' . $error);
            $this->logger->error('Google OAuth error received', ['error' => $error]);
            return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservationId]);
        }

        if ($code) {
            try {
                $accessToken = $client->fetchAccessTokenWithAuthCode($code);
                if (isset($accessToken['error'])) {
                    $this->addFlash('error', 'Erreur lors de l\'authentification Google: ' . $accessToken['error_description']);
                    $this->logger->error('Google OAuth token error', [
                        'error' => $accessToken['error'],
                        'description' => $accessToken['error_description'],
                    ]);
                    $session->remove('google_access_token');
                    return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservationId]);
                }
                $googleCalendarService->setAccessToken($accessToken);
                $this->addFlash('success', 'Successfully authenticated with Google Calendar.');
                $this->logger->info('Google OAuth authentication successful', ['access_token' => $accessToken]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'authentification Google: ' . $e->getMessage());
                $this->logger->error('Google OAuth authentication failed', [
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);
                $session->remove('google_access_token');
                return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservationId]);
            }
        } else {
            $this->addFlash('error', 'Erreur: Aucun code d\'authentification reçu de Google.');
            $this->logger->error('No OAuth code received from Google');
            return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservationId]);
        }

        // Redirect to addToGoogleCalendar to create the event
        $this->logger->info('Redirecting to add-to-google-calendar with reservation ID: ' . $reservationId);
        return $this->redirectToRoute('reservation_add_to_google_calendar', ['id_reservation' => $reservationId]);
    }
}