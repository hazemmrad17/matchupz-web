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
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $searchTerm = $request->query->get('search', '');

        $queryBuilder = $reservationRepository->createQueryBuilder('r')
            ->leftJoin('r.espacesportif', 'e')
            ->orderBy('r.date_reservee', 'DESC');

        if ($searchTerm) {
            $queryBuilder
                ->where('e.nom_espace LIKE :searchTerm')
                ->orWhere('r.motif LIKE :searchTerm')
                ->orWhere('r.status LIKE :searchTerm')
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
            $reservationData = [];
            foreach ($pagination as $reservation) {
                $reservationData[] = [
                    'id_reservation' => $reservation->getIdReservation(),
                    'nom_espace' => $reservation->getEspacesportif() ? $reservation->getEspacesportif()->getNomEspace() : 'N/A',
                    'date_reservee' => $reservation->getDateReservee() ? $reservation->getDateReservee()->format('d/m/Y H:i') : 'N/A',
                    'motif' => $reservation->getMotif() ?? 'N/A',
                    'status' => $reservation->getStatus() ?? 'N/A',
                ];
            }

            // Render pagination HTML
            $paginationHtml = $this->renderView('reservation/_pagination.html.twig', [
                'reservations' => $pagination,
                'searchTerm' => $searchTerm,
            ]);

            return new JsonResponse([
                'reservations' => $reservationData,
                'pagination' => $paginationHtml,
            ]);
        }

        return $this->render('reservation/index.html.twig', [
            'reservations' => $pagination,
            'upcoming_reservations' => $upcomingReservations,
            'searchTerm' => $searchTerm,
            'google_calendar_initialized' => $googleCalendarService->isInitialized(),
        ]);
    }

    #[Route('/export/csv', name: 'reservation_export_csv')]
    public function exportCsv(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();
        $output = fopen('php://memory', 'w');
        fputcsv($output, [
            'Lieu Sportif',
            'Date Réservée',
            'Motif',
            'Statut',
        ]);
        foreach ($reservations as $reservation) {
            fputcsv($output, [
                $reservation->getEspacesportif() ? $reservation->getEspacesportif()->getNomEspace() : 'N/A',
                $reservation->getDateReservee() ? $reservation->getDateReservee()->format('d/m/Y H:i') : 'N/A',
                $reservation->getMotif() ?? 'N/A',
                $reservation->getStatus() ?? 'N/A',
            ]);
        }
        fseek($output, 0);
        $response = new Response(stream_get_contents($output));
        fclose($output);
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
        $html = $this->renderView('reservation/export_pdf.html.twig', [
            'reservations' => $reservations,
            'logo_path' => $this->getParameter('kernel.project_dir') . '/public/img/logo_white.svg'
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
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Lieu Sportif');
        $sheet->setCellValue('B1', 'Date Réservée');
        $sheet->setCellValue('C1', 'Motif');
        $sheet->setCellValue('D1', 'Statut');
        $row = 2;
        foreach ($reservations as $reservation) {
            $sheet->setCellValue('A' . $row, $reservation->getEspacesportif() ? $reservation->getEspacesportif()->getNomEspace() : 'N/A');
            $sheet->setCellValue('B' . $row, $reservation->getDateReservee() ? $reservation->getDateReservee()->format('d/m/Y H:i') : 'N/A');
            $sheet->setCellValue('C' . $row, $reservation->getMotif() ?? 'N/A');
            $sheet->setCellValue('D' . $row, $reservation->getStatus() ?? 'N/A');
            $row++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'reservations_export_' . date('Y-m-d') . '.xlsx';
        $tempFile = tempnam(sys_get_temp_dir(), 'reservations_export');
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
        $totalReservations = count($reservations);
        $statusDistribution = $reservationRepository->getStatusDistribution();
        $motifDistribution = $reservationRepository->getMotifDistribution();
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
        $redirectTo = $request->query->get('redirect_to', $this->generateUrl('reservation_index'));
        return $this->redirect($redirectTo);
    }

    #[Route('/google-logout', name: 'google_logout', methods: ['GET'])]
    public function googleLogout(GoogleCalendarService $googleCalendarService, SessionInterface $session): Response
    {
        $googleCalendarService->setSession($session);
        $client = $googleCalendarService->getClient();
        $accessToken = $session->get('google_access_token');
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
        $this->logger->info('Session contents before processing: ' . json_encode($session->all()));
        $accessToken = $session->get('google_access_token');
        $this->logger->info('Access token from session: ' . ($accessToken ? json_encode($accessToken) : 'null'));
        if (!$accessToken) {
            $session->remove('google_access_token');
            $authUrl = $client->createAuthUrl();
            $this->logger->info('No access token found, redirecting to Google for authentication: ' . $authUrl);
            return new RedirectResponse($authUrl);
        }
        $client->setAccessToken($accessToken);
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
        $existingEventId = $eventIdStorage->getEventId($reservation->getIdReservation());
        if ($existingEventId) {
            $this->addFlash('warning', 'Cette réservation est déjà synchronisée avec Google Calendar.');
            return $this->redirectToRoute('reservation_show', ['id_reservation' => $reservation->getIdReservation()]);
        }
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
        $this->logger->info('Redirecting to add-to-google-calendar with reservation ID: ' . $reservationId);
        return $this->redirectToRoute('reservation_add_to_google_calendar', ['id_reservation' => $reservationId]);
    }
}