<?php

namespace App\Controller;

use App\Entity\Schedule;
use App\Form\ScheduleType;
use App\Repository\ScheduleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Psr\Log\LoggerInterface;
use Google_Client;
use Google_Service_Calendar;
use Google_Service_Calendar_Event;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;



#[Route('/schedule')]
class ScheduleController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private $newsApiKey;

    public function __construct(EntityManagerInterface $entityManager, string $newsApiKey)
    {
        $this->entityManager = $entityManager;
        $this->newsApiKey = $newsApiKey;
    }


    #[Route('/mainF', name: 'schedule_mainF', methods: ['GET'])]
public function mainF(ScheduleRepository $scheduleRepository): Response
{
    $schedules = $scheduleRepository->findAll();
    $now = new \DateTime('now');

    // Identify ongoing schedules
    $ongoingSchedules = array_filter($schedules, function (Schedule $schedule) use ($now) {
        try {
            // Combine dateMatch with startTime and endTime
            $startDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getStartTime()->format('H'),
                (int) $schedule->getStartTime()->format('i'),
                (int) $schedule->getStartTime()->format('s')
            );
            $endDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getEndTime()->format('H'),
                (int) $schedule->getEndTime()->format('i'),
                (int) $schedule->getEndTime()->format('s')
            );

            // Debug logging
            error_log(sprintf(
                'Schedule ID %d: dateMatch=%s, startTime=%s, endTime=%s, startDateTime=%s, endDateTime=%s, now=%s, isOngoing=%s',
                $schedule->getIdSchedule(),
                $schedule->getDateMatch()->format('Y-m-d'),
                $schedule->getStartTime()->format('H:i:s'),
                $schedule->getEndTime()->format('H:i:s'),
                $startDateTime->format('Y-m-d H:i:s'),
                $endDateTime->format('Y-m-d H:i:s'),
                $now->format('Y-m-d H:i:s'),
                ($now >= $startDateTime && $now <= $endDateTime) ? 'true' : 'false'
            ));

            return $now >= $startDateTime && $now <= $endDateTime;
        } catch (\Exception $e) {
            error_log('Error processing schedule ID ' . $schedule->getIdSchedule() . ': ' . $e->getMessage());
            return false;
        }
    });

    // Log the count of ongoing schedules
    error_log('Ongoing schedules count: ' . count($ongoingSchedules));

    // Flag schedules with missing espaceSportif
    foreach ($schedules as $schedule) {
        if ($schedule->getIdLieu() !== null && $schedule->getEspaceSportif() === null) {
            $this->addFlash('warning', sprintf('Schedule ID %d references a non-existent venue (ID %d).', $schedule->getIdSchedule(), $schedule->getIdLieu()));
        }
    }

    return $this->render('schedule/mainF.html.twig', [
        'schedules' => $schedules,
        'ongoingSchedules' => $ongoingSchedules,
    ]);
}
#[Route('/main', name: 'schedule_main', methods: ['GET'])]
public function main(ScheduleRepository $scheduleRepository, LoggerInterface $logger): Response
{
    $now = new \DateTime('now');
    $nowTimestamp = $now->getTimestamp();
    $logger->info('Current time: ' . $now->format('Y-m-d H:i:s') . ' (Timestamp: ' . $nowTimestamp . ')');

    // Fetch all schedules with related entities
    $allSchedules = $scheduleRepository->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    // Ongoing matches (align with Twig logic)
    $ongoingMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now, $logger) {
        try {
            $startDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getStartTime()->format('H'),
                (int) $schedule->getStartTime()->format('i'),
                (int) $schedule->getStartTime()->format('s') // Include seconds
            );
            $endDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getEndTime()->format('H'),
                (int) $schedule->getEndTime()->format('i'),
                (int) $schedule->getEndTime()->format('s') // Include seconds
            );

            // Convert to timestamps for comparison (like Twig)
            $startTimestamp = $startDateTime->getTimestamp();
            $endTimestamp = $endDateTime->getTimestamp();
            $nowTimestamp = $now->getTimestamp();

            // Debug logging
            $logger->info(sprintf(
                'Schedule ID %d: dateMatch=%s, startTime=%s, endTime=%s, startTimestamp=%d, endTimestamp=%d, nowTimestamp=%d, isOngoing=%s',
                $schedule->getIdSchedule(),
                $schedule->getDateMatch()->format('Y-m-d'),
                $startDateTime->format('H:i:s'),
                $endDateTime->format('H:i:s'),
                $startTimestamp,
                $endTimestamp,
                $nowTimestamp,
                ($nowTimestamp >= $startTimestamp && $nowTimestamp <= $endTimestamp) ? 'true' : 'false'
            ));

            return $nowTimestamp >= $startTimestamp && $nowTimestamp <= $endTimestamp;
        } catch (\Exception $e) {
            $logger->warning('Error processing schedule ID ' . $schedule->getIdSchedule() . ': ' . $e->getMessage());
            return false;
        }
    });

    $logger->info('Ongoing matches count: ' . count($ongoingMatches));

    // Completed matches
    $completedMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now) {
        $endDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getEndTime()->format('H'),
            (int) $schedule->getEndTime()->format('i'),
            (int) $schedule->getEndTime()->format('s') // Include seconds here too
        );
        return $now > $endDateTime;
    });

    // Sport distribution
    $sportDistribution = [];
    foreach ($allSchedules as $schedule) {
        $sport = $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getSportType() : 'Unknown';
        $sportDistribution[$sport] = ($sportDistribution[$sport] ?? 0) + 1;
    }

    // Venue distribution
    $venueDistribution = [];
    foreach ($allSchedules as $schedule) {
        $venue = $schedule->getEspaceSportif() ? $schedule->getEspaceSportif()->getNomEspace() : 'N/A';
        $venueDistribution[$venue] = ($venueDistribution[$venue] ?? 0) + 1;
    }

    return $this->render('schedule/main.html.twig', [
        'schedules' => $allSchedules,
        'totalSchedules' => count($allSchedules),
        'ongoingMatches' => $ongoingMatches,
        'completedMatches' => count($completedMatches),
        'sportDistribution' => $sportDistribution,
        'venueDistribution' => $venueDistribution,
    ]);
}
#[Route('/statistics', name: 'schedule_statistics', methods: ['GET'])]
public function statistics(ScheduleRepository $scheduleRepository, LoggerInterface $logger): Response
{
    $now = new \DateTime('now');
    $nowTimestamp = $now->getTimestamp();
    $logger->info('Statistics - Current time: ' . $now->format('Y-m-d H:i:s') . ' (Timestamp: ' . $nowTimestamp . ')');

    // Fetch all schedules with related entities
    $allSchedules = $scheduleRepository->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    // Ongoing matches (using the same logic as main)
    $ongoingMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now, $nowTimestamp, $logger) {
        try {
            $startDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getStartTime()->format('H'),
                (int) $schedule->getStartTime()->format('i'),
                (int) $schedule->getStartTime()->format('s')
            );
            $endDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getEndTime()->format('H'),
                (int) $schedule->getEndTime()->format('i'),
                (int) $schedule->getEndTime()->format('s')
            );

            $startTimestamp = $startDateTime->getTimestamp();
            $endTimestamp = $endDateTime->getTimestamp();

            $logger->info(sprintf(
                'Statistics - Schedule ID %d: dateMatch=%s, startTime=%s, endTime=%s, startTimestamp=%d, endTimestamp=%d, nowTimestamp=%d, isOngoing=%s',
                $schedule->getIdSchedule(),
                $schedule->getDateMatch()->format('Y-m-d'),
                $startDateTime->format('H:i:s'),
                $endDateTime->format('H:i:s'),
                $startTimestamp,
                $endTimestamp,
                $nowTimestamp,
                ($nowTimestamp >= $startTimestamp && $nowTimestamp <= $endTimestamp) ? 'true' : 'false'
            ));

            return $nowTimestamp >= $startTimestamp && $nowTimestamp <= $endTimestamp;
        } catch (\Exception $e) {
            $logger->warning('Statistics - Error processing schedule ID ' . $schedule->getIdSchedule() . ': ' . $e->getMessage());
            return false;
        }
    });

    $logger->info('Statistics - Ongoing matches count: ' . count($ongoingMatches));

    // Completed matches
    $completedMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now) {
        $endDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getEndTime()->format('H'),
            (int) $schedule->getEndTime()->format('i'),
            (int) $schedule->getEndTime()->format('s')
        );
        return $now > $endDateTime;
    });

    // Sport distribution (from MatchEntity::sportType)
    $sportDistribution = [];
    foreach ($allSchedules as $schedule) {
        $sport = $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getSportType() : 'Unknown';
        $sportDistribution[$sport] = ($sportDistribution[$sport] ?? 0) + 1;
    }

    // Venue distribution (from Espacesportif::nomEspace)
    $venueDistribution = [];
    foreach ($allSchedules as $schedule) {
        $venue = $schedule->getEspaceSportif() ? $schedule->getEspaceSportif()->getNomEspace() : 'N/A';
        $venueDistribution[$venue] = ($venueDistribution[$venue] ?? 0) + 1;
    }

    return $this->render('schedule/statistics.html.twig', [
        'totalSchedules' => count($allSchedules),
        'ongoingMatches' => $ongoingMatches,
        'completedMatches' => count($completedMatches),
        'sportDistribution' => $sportDistribution,
        'venueDistribution' => $venueDistribution,
        'allSchedules' => $allSchedules,
    ]);
}
    #[Route('/search', name: 'schedule_search', methods: ['GET'])]
    public function search(Request $request, ScheduleRepository $scheduleRepository, CsrfTokenManagerInterface $csrfTokenManager): JsonResponse
    {
        $query = $request->query->get('q', '');

        $queryBuilder = $scheduleRepository->createQueryBuilder('s')
            ->leftJoin('s.matchEntity', 'm')
            ->leftJoin('s.espaceSportif', 'e')
            ->select('s, m, e');

        if ($query) {
            $queryBuilder
                ->where('LOWER(m.c1) LIKE :query')
                ->orWhere('LOWER(m.c2) LIKE :query')
                ->orWhere('LOWER(e.nom_espace) LIKE :query')
                ->setParameter('query', '%' . strtolower($query) . '%');
        }

        $schedules = $queryBuilder
            ->orderBy('s.dateMatch', 'ASC')
            ->getQuery()
            ->getResult();

        $schedulesData = array_map(function (Schedule $schedule) use ($csrfTokenManager) {
            $csrfToken = $csrfTokenManager->getToken('delete' . $schedule->getIdSchedule())->getValue();
            error_log('Generated CSRF token for schedule ID ' . $schedule->getIdSchedule() . ': ' . $csrfToken);
            return [
                'idSchedule' => $schedule->getIdSchedule(),
                'dateMatch' => $schedule->getDateMatch()->format('Y-m-d'),
                'startTime' => $schedule->getStartTime()->format('H:i:s'),
                'endTime' => $schedule->getEndTime()->format('H:i:s'),
                'match' => $schedule->getMatchEntity() ? [
                    'c1' => $schedule->getMatchEntity()->getC1(),
                    'c2' => $schedule->getMatchEntity()->getC2(),
                ] : null,
                'espaceSportif' => $schedule->getEspaceSportif() ? [
                    'nom_espace' => $schedule->getEspaceSportif()->getNomEspace(),
                ] : null,
                'csrfToken' => $csrfToken,
            ];
        }, $schedules);

        return new JsonResponse($schedulesData);
    }

    #[Route('/new', name: 'schedule_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($schedule);
            $this->entityManager->flush();

            $this->addFlash('success', 'Schedule créé avec succès!');
            return $this->redirectToRoute('schedule_main');
        }

        return $this->render('schedule/new.html.twig', [
            'schedule' => $schedule,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idSchedule}', name: 'schedule_show', methods: ['GET'], requirements: ['idSchedule' => '\d+'])]
    public function show(string $idSchedule, ScheduleRepository $scheduleRepository): Response
    {
        $idSchedule = (int) $idSchedule; // Cast to integer
        $schedule = $scheduleRepository->find($idSchedule);

        if (!$schedule) {
            $this->addFlash('error', 'Le schedule demandé n\'existe pas ou a été supprimé.');
            return $this->redirectToRoute('schedule_main');
        }

        return $this->render('schedule/show.html.twig', [
            'schedule' => $schedule,
        ]);
    }
    
    #[Route('/{idSchedule}/showF', name: 'schedule_showF', methods: ['GET'], requirements: ['idSchedule' => '\d+'])]
public function showF(int $idSchedule, ScheduleRepository $scheduleRepository, LoggerInterface $logger): Response
{
    $schedule = $scheduleRepository->find($idSchedule);

    if (!$schedule) {
        $this->addFlash('error', "L'horaire demandé n'existe pas ou a été supprimé.");
        return $this->redirectToRoute('schedule_mainF');
    }

    $now = new \DateTime('now', new \DateTimeZone('Europe/Paris')); // Ensure timezone matches your app

    // Combine dateMatch with startTime
    $startDateTime = (clone $schedule->getDateMatch())->setTime(
        (int) $schedule->getStartTime()->format('H'),
        (int) $schedule->getStartTime()->format('i'),
        (int) $schedule->getStartTime()->format('s')
    );

    // Combine dateMatch with endTime
    $endDateTime = (clone $schedule->getDateMatch())->setTime(
        (int) $schedule->getEndTime()->format('H'),
        (int) $schedule->getEndTime()->format('i'),
        (int) $schedule->getEndTime()->format('s')
    );

    // Calculate isFutureMatch and isOngoing
    $isFutureMatch = $now < $startDateTime;
    $isOngoing = $now >= $startDateTime && $now <= $endDateTime;

    // Debug logging
    $logger->info(sprintf(
        'Schedule ID %d: Checking match status - now=%s, startDateTime=%s, endDateTime=%s, isFutureMatch=%s, isOngoing=%s',
        $schedule->getIdSchedule(),
        $now->format('Y-m-d H:i:s'),
        $startDateTime->format('Y-m-d H:i:s'),
        $endDateTime->format('Y-m-d H:i:s'),
        $isFutureMatch ? 'true' : 'false',
        $isOngoing ? 'true' : 'false'
    ));

    // Additional debug: Log streamURL and URL
    $logger->info(sprintf(
        'Schedule ID %d: Stream URL=%s, URL=%s',
        $schedule->getIdSchedule(),
        $schedule->getStreamURL() ?? 'null',
        $schedule->getURL() ?? 'null'
    ));

    return $this->render('schedule/showF.html.twig', [
        'schedule' => $schedule,
        'isFutureMatch' => $isFutureMatch,
        'isOngoing' => $isOngoing, // Add this
    ]);
}
    #[Route('/{idSchedule}/edit', name: 'schedule_edit', methods: ['GET', 'POST'], requirements: ['idSchedule' => '\d+'])]
    public function edit(Request $request, string $idSchedule, ScheduleRepository $scheduleRepository): Response
    {
        $idSchedule = (int) $idSchedule; // Cast to integer
        $schedule = $scheduleRepository->find($idSchedule);

        if (!$schedule) {
            $this->addFlash('error', 'Le schedule demandé n\'existe pas ou a été supprimé.');
            return $this->redirectToRoute('schedule_main');
        }

        if ($schedule->getEspaceSportif() === null && $schedule->getIdLieu() !== null) {
            $this->addFlash('warning', 'L\'espace sportif associé n\'existe plus. Veuillez en sélectionner un nouveau.');
            $schedule->setEspaceSportif(null);
        }

        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Schedule mis à jour avec succès!');
            return $this->redirectToRoute('schedule_main');
        }

        return $this->render('schedule/edit.html.twig', [
            'schedule' => $schedule,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{idSchedule}/delete', name: 'schedule_delete', methods: ['POST'], requirements: ['idSchedule' => '\d+'])]
    public function delete(Request $request, ?Schedule $schedule): Response
    {
        // Log the incoming request
        $this->addFlash('info', 'Delete action called for schedule ID: ' . ($schedule ? $schedule->getIdSchedule() : 'null'));

        if (!$schedule) {
            $this->addFlash('error', 'Le schedule demandé n\'existe pas ou a été supprimé.');
            return $this->redirectToRoute('schedule_main');
        }

        $submittedToken = $request->request->get('_token');
        $this->addFlash('info', 'Submitted CSRF token: ' . $submittedToken);

        if ($this->isCsrfTokenValid('delete'.$schedule->getIdSchedule(), $submittedToken)) {
            $this->addFlash('info', 'CSRF token is valid');
            try {
                $this->entityManager->remove($schedule);
                $this->entityManager->flush();
                $this->addFlash('success', 'Schedule supprimé avec succès!');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression du schedule: ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('schedule_main');
    }

   #[Route('/test-view', name: 'test_view')]
   public function testView(): Response
   {
       return $this->render('test.html.twig');
   }

   #[Route('/export/pdf', name: 'schedule_export_pdf', methods: ['GET'])]
public function exportPdf(ScheduleRepository $scheduleRepository, Pdf $snappy): Response
{
    // Fetch all schedules with related entities
    $schedules = $scheduleRepository->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    // Render the PDF template
    $html = $this->renderView('schedule/export_pdf.html.twig', [
        'schedules' => $schedules,
    ]);

    // Generate PDF
    $pdfContent = $snappy->getOutputFromHtml($html);

    // Create response
    $response = new Response($pdfContent);
    $response->headers->set('Content-Type', 'application/pdf');
    $response->headers->set('Content-Disposition', $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'schedules_' . date('Y-m-d_H-i-s') . '.pdf'
    ));

    return $response;
}
#[Route('/export/csv', name: 'schedule_export_csv', methods: ['GET'])]
public function exportCsv(ScheduleRepository $scheduleRepository): Response
{
    // Fetch all schedules with related entities
    $schedules = $scheduleRepository->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    // Prepare CSV data
    $csvData = [];
    // Header row
    $csvData[] = [
        'ID Schedule',
        'Date du Match',
        'Heure de Début',
        'Heure de Fin',
        'Competitor 1',
        'Competitor 2',
        'Type de Sport',
        'Espace Sportif',
    ];

    // Data rows
    foreach ($schedules as $schedule) {
        $csvData[] = [
            $schedule->getIdSchedule(),
            $schedule->getDateMatch()->format('Y-m-d'),
            $schedule->getStartTime()->format('H:i:s'),
            $schedule->getEndTime()->format('H:i:s'),
            $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getC1() : 'N/A',
            $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getC2() : 'N/A',
            $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getSportType() : 'N/A',
            $schedule->getEspaceSportif() ? $schedule->getEspaceSportif()->getNomEspace() : 'N/A',
        ];
    }

    // Create a stream to write CSV
    $output = fopen('php://temp', 'r+');
    foreach ($csvData as $row) {
        fputcsv($output, $row);
    }
    rewind($output);
    $csvContent = stream_get_contents($output);
    fclose($output);

    // Create response
    $response = new Response($csvContent);
    $response->headers->set('Content-Type', 'text/csv');
    $response->headers->set('Content-Disposition', $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'schedules_' . date('Y-m-d_H-i-s') . '.csv'
    ));

    return $response;
}
#[Route('/export/excel', name: 'schedule_export_excel', methods: ['GET'])]
public function exportExcel(ScheduleRepository $scheduleRepository): Response
{
    // Fetch all schedules with related entities
    $schedules = $scheduleRepository->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    // Create a new Spreadsheet object
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set header row
    $headers = [
        'ID Schedule',
        'Date du Match',
        'Heure de Début',
        'Heure de Fin',
        'Competitor 1',
        'Competitor 2',
        'Type de Sport',
        'Espace Sportif',
    ];
    $sheet->fromArray($headers, null, 'A1');

    // Populate data rows
    $row = 2; // Start from row 2 (after headers)
    foreach ($schedules as $schedule) {
        $sheet->fromArray([
            $schedule->getIdSchedule(),
            $schedule->getDateMatch()->format('Y-m-d'),
            $schedule->getStartTime()->format('H:i:s'),
            $schedule->getEndTime()->format('H:i:s'),
            $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getC1() : 'N/A',
            $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getC2() : 'N/A',
            $schedule->getMatchEntity() ? $schedule->getMatchEntity()->getSportType() : 'N/A',
            $schedule->getEspaceSportif() ? $schedule->getEspaceSportif()->getNomEspace() : 'N/A',
        ], null, 'A' . $row);
        $row++;
    }

    // Auto-size columns for better readability
    foreach (range('A', 'H') as $columnID) {
        $sheet->getColumnDimension($columnID)->setAutoSize(true);
    }

    // Create a temporary file for the Excel output
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $tempFile = tempnam(sys_get_temp_dir(), 'schedules_excel_');
    $writer->save($tempFile);

    // Create response with the Excel file
    $response = new BinaryFileResponse($tempFile);
    $response->setContentDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        'schedules_' . date('Y-m-d_H-i-s') . '.xlsx'
    );
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    // Delete the temporary file after sending
    $response->deleteFileAfterSend(true);

    return $response;
}

#[Route('/{idSchedule}/add-to-google-calendar', name: 'schedule_add_to_google_calendar', methods: ['GET'], requirements: ['idSchedule' => '\d+'])]
    public function addToGoogleCalendar(int $idSchedule, ScheduleRepository $scheduleRepository, LoggerInterface $logger, SessionInterface $session): Response
    {
        $schedule = $scheduleRepository->find($idSchedule);

        if (!$schedule) {
            $session->getFlashBag()->add('error', "L'horaire demandé n'existe pas ou a été supprimé.");
            return $this->redirectToRoute('schedule_mainF');
        }

        $client = new Google_Client();
        $client->setApplicationName('Matchupz');
        $client->setScopes(Google_Service_Calendar::CALENDAR);
        $client->setAuthConfig($this->getParameter('kernel.project_dir') . '/config/secrets/client_secret_409921140476-h8u0n3e36lkkoq46ku6785d6opilm0p6.apps.googleusercontent.com.json');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        $client->setRedirectUri('http://127.0.0.1:8000/schedule/google-callback');
        $client->setState((string) $idSchedule);

        // Log session contents for debugging
        $logger->info('Session contents before processing: ' . json_encode($session->all()));

        // Load previously authorized token from session, if it exists
        $accessToken = $session->get('google_access_token');
        $logger->info('Access token from session: ' . ($accessToken ? json_encode($accessToken) : 'null'));

        if (!$accessToken) {
            // Clear any stale session data to prevent loops
            $session->remove('google_access_token');
            $authUrl = $client->createAuthUrl();
            $logger->info('No access token found, redirecting to Google for authentication: ' . $authUrl);
            return new RedirectResponse($authUrl);
        }

        $client->setAccessToken($accessToken);

        // Check if access token is expired and refresh if necessary
        if ($client->isAccessTokenExpired()) {
            $logger->info('Access token expired, attempting to refresh.');
            if (isset($accessToken['refresh_token'])) {
                try {
                    $newAccessToken = $client->fetchAccessTokenWithRefreshToken($accessToken['refresh_token']);
                    if (isset($newAccessToken['error'])) {
                        $logger->error('Error refreshing access token: ' . json_encode($newAccessToken));
                        $session->getFlashBag()->add('error', 'Erreur lors du rafraîchissement du jeton d\'accès : ' . $newAccessToken['error_description']);
                        $session->remove('google_access_token');
                        return $this->redirectToRoute('schedule_showF', ['idSchedule' => $schedule->getIdSchedule()]);
                    }
                    $session->set('google_access_token', $newAccessToken);
                    $logger->info('Google Calendar access token refreshed and stored in session: ' . json_encode($newAccessToken));
                } catch (\Exception $e) {
                    $logger->error('Exception while refreshing access token: ' . $e->getMessage());
                    $session->getFlashBag()->add('error', 'Erreur lors du rafraîchissement du jeton d\'accès : ' . $e->getMessage());
                    $session->remove('google_access_token');
                    $authUrl = $client->createAuthUrl();
                    $logger->info('Redirecting to Google for re-authentication: ' . $authUrl);
                    return new RedirectResponse($authUrl);
                }
            } else {
                $session->remove('google_access_token');
                $authUrl = $client->createAuthUrl();
                $logger->info('No refresh token available, redirecting to Google for re-authentication: ' . $authUrl);
                return new RedirectResponse($authUrl);
            }
        }

        // Create the calendar event (aligned with JavaFX logic)
        $service = new Google_Service_Calendar($client);

        $startDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getStartTime()->format('H'),
            (int) $schedule->getStartTime()->format('i'),
            (int) $schedule->getStartTime()->format('s')
        );
        $endDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getEndTime()->format('H'),
            (int) $schedule->getEndTime()->format('i'),
            (int) $schedule->getEndTime()->format('s')
        );

        $eventTitle = $schedule->getMatchEntity() ? 
            "{$schedule->getMatchEntity()->getC1()} vs {$schedule->getMatchEntity()->getC2()}" : 
            'Match à déterminer';
        $location = $schedule->getEspaceSportif() ? $schedule->getEspaceSportif()->getNomEspace() : 'N/A';
        $description = $schedule->getMatchEntity() && $schedule->getMatchEntity()->getSportType() ?
            "Sport: {$schedule->getMatchEntity()->getSportType()}" : '';

        $event = new Google_Service_Calendar_Event([
            'summary' => $eventTitle,
            'location' => $location,
            'description' => $description,
            'start' => [
                'dateTime' => $startDateTime->format(\DateTime::RFC3339),
                'timeZone' => date_default_timezone_get(),
            ],
            'end' => [
                'dateTime' => $endDateTime->format(\DateTime::RFC3339),
                'timeZone' => date_default_timezone_get(),
            ],
        ]);

        try {
            $calendarId = 'primary';
            $createdEvent = $service->events->insert($calendarId, $event);
            $logger->info('Google Calendar event created: ' . $createdEvent->getId());
            $session->getFlashBag()->add('success', 'Match ajouté à votre Google Calendar avec succès !');
        } catch (\Exception $e) {
            $logger->error('Error creating Google Calendar event: ' . $e->getMessage());
            $session->getFlashBag()->add('error', 'Erreur lors de l\'ajout à Google Calendar : ' . $e->getMessage());
        }

        return $this->redirectToRoute('schedule_showF', ['idSchedule' => $schedule->getIdSchedule()]);
    }

    #[Route('/google-callback', name: 'schedule_google_callback', methods: ['GET'])]
    public function googleCallback(Request $request, ScheduleRepository $scheduleRepository, LoggerInterface $logger, SessionInterface $session): Response
    {
        $logger->info('Google callback received with query: ' . json_encode($request->query->all()));
        $scheduleId = $request->query->get('state');
        if (!$scheduleId) {
            $logger->error('Schedule ID not provided in state parameter.');
            $session->getFlashBag()->add('error', 'Schedule ID not provided in state parameter.');
            return $this->redirectToRoute('schedule_mainF');
        }

        $schedule = $scheduleRepository->find($scheduleId);
        if (!$schedule) {
            $session->getFlashBag()->add('error', "L'horaire demandé n'existe pas ou a été supprimé.");
            return $this->redirectToRoute('schedule_mainF');
        }

        if (isset($request->query->all()['error'])) {
            $logger->error('Google OAuth error: ' . $request->query->get('error'));
            $session->getFlashBag()->add('error', 'Google OAuth error: ' . $request->query->get('error'));
            return $this->redirectToRoute('schedule_showF', ['idSchedule' => $scheduleId]);
        }

        $code = $request->query->get('code');
        if (!$code) {
            $logger->error('No authorization code provided in callback.');
            $session->getFlashBag()->add('error', 'No authorization code provided by Google.');
            return $this->redirectToRoute('schedule_showF', ['idSchedule' => $scheduleId]);
        }

        // Set up the Google Client
        $client = new Google_Client();
        $client->setApplicationName('Matchupz');
        $client->setScopes(Google_Service_Calendar::CALENDAR);
        $client->setAuthConfig($this->getParameter('kernel.project_dir') . '/config/secrets/client_secret_409921140476-h8u0n3e36lkkoq46ku6785d6opilm0p6.apps.googleusercontent.com.json');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        $client->setRedirectUri('http://127.0.0.1:8000/schedule/google-callback');

        // Exchange the code for an access token
        try {
            $accessToken = $client->fetchAccessTokenWithAuthCode($code);
            if (isset($accessToken['error'])) {
                $logger->error('Error fetching access token: ' . json_encode($accessToken));
                $session->getFlashBag()->add('error', 'Erreur lors de l\'authentification avec Google : ' . $accessToken['error_description']);
                $session->remove('google_access_token');
                return $this->redirectToRoute('schedule_showF', ['idSchedule' => $scheduleId]);
            }
            $session->set('google_access_token', $accessToken);
            $logger->info('Google Calendar access token obtained and stored in session: ' . json_encode($accessToken));
        } catch (\Exception $e) {
            $logger->error('Exception while fetching access token: ' . $e->getMessage());
            $session->getFlashBag()->add('error', 'Erreur lors de l\'authentification avec Google : ' . $e->getMessage());
            $session->remove('google_access_token');
            return $this->redirectToRoute('schedule_showF', ['idSchedule' => $scheduleId]);
        }

        // Redirect to addToGoogleCalendar to create the event
        $logger->info('Redirecting to add-to-google-calendar with schedule ID: ' . $scheduleId);
        return $this->redirectToRoute('schedule_add_to_google_calendar', ['idSchedule' => $scheduleId]);
    }

    #[Route('/{idSchedule}/news', name: 'schedule_news', methods: ['GET'], requirements: ['idSchedule' => '\d+'])]
    public function news(int $idSchedule, ScheduleRepository $scheduleRepository, HttpClientInterface $httpClient, LoggerInterface $logger): Response
    {
        $schedule = $scheduleRepository->find($idSchedule);
    
        if (!$schedule) {
            $this->addFlash('error', "L'horaire demandé n'existe pas ou a été supprimé.");
            return $this->redirectToRoute('schedule_mainF');
        }
    
        if (!$schedule->getMatchEntity() || !$schedule->getMatchEntity()->getC1() || !$schedule->getMatchEntity()->getC2()) {
            $this->addFlash('error', "Les équipes ne sont pas définies pour ce match.");
            return $this->redirectToRoute('schedule_mainF');
        }
    
        $c1 = $schedule->getMatchEntity()->getC1();
        $c2 = $schedule->getMatchEntity()->getC2();
        $sportType = $schedule->getMatchEntity()->getSportType() ?? 'sport';
    
        // Warn if sportType is missing
        if (!$schedule->getMatchEntity()->getSportType()) {
            $this->addFlash('warning', "Le type de sport n'est pas défini pour ce match, les résultats de recherche peuvent être moins précis.");
        }
    
        // Map team abbreviations to full names
        $teamNameMapping = [
            'USA' => 'United States',
            'CAN' => 'Canada',
            'FCB' => 'FC Barcelona',
            'RMD' => 'Real Madrid',
            'ATM' => 'Atlético Madrid',
            'PSG' => 'Paris Saint-Germain',
            'LIV' => 'Liverpool',
            'MCI' => 'Manchester City',
            'MUN' => 'Manchester United',
        ];
    
        // Expand team names if they exist in the mapping, otherwise use the original
        $c1Expanded = $teamNameMapping[$c1] ?? $c1;
        $c2Expanded = $teamNameMapping[$c2] ?? $c2;
    
        // Function to fetch articles for a given query and language
        $fetchArticles = function (string $query, string $language) use ($httpClient, $logger): array {
            $logger->info("Fetching articles for query: $query, language: $language");
            try {
                $response = $httpClient->request('GET', 'https://newsapi.org/v2/everything', [
                    'query' => [
                        'q' => $query,
                        'apiKey' => $this->newsApiKey,
                        'language' => $language,
                        'sortBy' => 'publishedAt',
                        'pageSize' => 10,
                    ],
                ]);
                $data = $response->toArray();
    
                // Check for NewsAPI errors
                if ($data['status'] !== 'ok') {
                    $errorMessage = $data['message'] ?? 'Unknown error';
                    $logger->warning("NewsAPI error for language $language: " . $errorMessage);
                    $logger->debug("NewsAPI response: " . json_encode($data));
                    if (stripos($errorMessage, 'rate limit') !== false) {
                        throw new \Exception("NewsAPI rate limit exceeded. Please try again later or upgrade your plan.");
                    }
                    if (stripos($errorMessage, 'api key') !== false) {
                        throw new \Exception("Invalid NewsAPI key. Please check your API key in the configuration.");
                    }
                    return [];
                }
    
                $articleCount = count($data['articles']);
                $logger->info("Found $articleCount articles for query '$query' in language $language");
                if ($articleCount === 0) {
                    $logger->debug("NewsAPI response (no articles): " . json_encode($data));
                }
                return $data['articles'];
            } catch (\Exception $e) {
                $logger->error("Error fetching news for query '$query' in language $language: " . $e->getMessage());
                throw $e;
            }
        };
    
        // Function to combine and sort articles by publication date
        $combineAndSortArticles = function (array $englishArticles, array $frenchArticles) use ($logger): array {
            $allArticles = array_merge($englishArticles, $frenchArticles);
            usort($allArticles, function ($a, $b) {
                return strtotime($b['publishedAt']) - strtotime($a['publishedAt']);
            });
            $logger->info("Combined and sorted " . count($allArticles) . " articles");
            return $allArticles;
        };
    
        // Initial query: C1 AND C2 AND sportType
        $query = "$c1Expanded AND $c2Expanded AND $sportType";
        $logger->info("NewsAPI initial query: $query");
    
        try {
            // Fetch articles in English and French
            $englishArticles = $fetchArticles($query, 'en');
            $frenchArticles = $fetchArticles($query, 'fr');
            $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
            // Fallback queries by removing one criterion at a time
            if (empty($articles)) {
                // Fallback 1: C1 AND C2
                $logger->warning("No articles found for query: $query, trying C1 AND C2...");
                $query = "$c1Expanded AND $c2Expanded";
                $englishArticles = $fetchArticles($query, 'en');
                $frenchArticles = $fetchArticles($query, 'fr');
                $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                if (empty($articles)) {
                    // Fallback 2: C1 AND sportType
                    $logger->warning("No articles found for query: $query, trying C1 AND sportType...");
                    $query = "$c1Expanded AND $sportType";
                    $englishArticles = $fetchArticles($query, 'en');
                    $frenchArticles = $fetchArticles($query, 'fr');
                    $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                    if (empty($articles)) {
                        // Fallback 3: C2 AND sportType
                        $logger->warning("No articles found for query: $query, trying C2 AND sportType...");
                        $query = "$c2Expanded AND $sportType";
                        $englishArticles = $fetchArticles($query, 'en');
                        $frenchArticles = $fetchArticles($query, 'fr');
                        $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                        if (empty($articles)) {
                            // Fallback 4: Just C1
                            $logger->warning("No articles found for query: $query, trying just C1...");
                            $query = "$c1Expanded";
                            $englishArticles = $fetchArticles($query, 'en');
                            $frenchArticles = $fetchArticles($query, 'fr');
                            $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                            if (empty($articles)) {
                                // Fallback 5: Just C2
                                $logger->warning("No articles found for query: $query, trying just C2...");
                                $query = "$c2Expanded";
                                $englishArticles = $fetchArticles($query, 'en');
                                $frenchArticles = $fetchArticles($query, 'fr');
                                $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                                if (empty($articles)) {
                                    // Fallback 6: Just sportType
                                    $logger->warning("No articles found for query: $query, trying just sportType...");
                                    $query = "$sportType";
                                    $englishArticles = $fetchArticles($query, 'en');
                                    $frenchArticles = $fetchArticles($query, 'fr');
                                    $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                                    if (empty($articles)) {
                                        // Final Fallback: General "sports" query
                                        $logger->warning("No articles found for query: $query, trying general sports query...");
                                        $query = "sports";
                                        $englishArticles = $fetchArticles($query, 'en');
                                        $frenchArticles = $fetchArticles($query, 'fr');
                                        $articles = $combineAndSortArticles($englishArticles, $frenchArticles);
    
                                        if (empty($articles)) {
                                            $logger->warning("No articles found for query: $query");
                                            $this->addFlash('error', "Aucune actualité trouvée, même avec des critères très élargis.");
                                            return $this->redirectToRoute('schedule_mainF');
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
    
            // Log the number of articles found
            $articleCount = count($articles);
            $logger->info("Found $articleCount articles for query '$query'");
    
            // Get the URL of the first article (most recent)
            $articleUrl = $articles[0]['url'];
            $articleLanguage = stripos($articleUrl, 'lang=fr') !== false || stripos($articles[0]['description'] ?? '', 'français') !== false ? 'French' : 'English';
            $logger->info("Redirecting to news article for query '$query': $articleUrl (Language: $articleLanguage)");
    
            return new RedirectResponse($articleUrl);
        } catch (\Exception $e) {
            $logger->error("Error fetching news for query '$query': " . $e->getMessage());
            $this->addFlash('error', $e->getMessage() ?: "Erreur lors de la récupération des actualités.");
            return $this->redirectToRoute('schedule_mainF');
        }
    }
}