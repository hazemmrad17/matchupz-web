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


#[Route('/schedule')]
class ScheduleController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
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
public function main(ScheduleRepository $scheduleRepository): Response
{
    $now = new \DateTime('now');

    // Fetch all schedules with related entities
    $allSchedules = $scheduleRepository->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    // Ongoing matches
    $ongoingMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now) {
        $startDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getStartTime()->format('H'),
            (int) $schedule->getStartTime()->format('i')
        );
        $endDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getEndTime()->format('H'),
            (int) $schedule->getEndTime()->format('i')
        );
        return $now >= $startDateTime && $now <= $endDateTime;
    });

    // Completed matches
    $completedMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now) {
        $endDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getEndTime()->format('H'),
            (int) $schedule->getEndTime()->format('i')
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
        'ongoingMatches' => count($ongoingMatches),
        'completedMatches' => count($completedMatches),
        'sportDistribution' => $sportDistribution,
        'venueDistribution' => $venueDistribution,
    ]);
}

    #[Route('/statistics', name: 'schedule_statistics', methods: ['GET'])]
    public function statistics(ScheduleRepository $scheduleRepository): Response
    {
        $now = new \DateTime('now');
    
        // Fetch all schedules with related entities
        $allSchedules = $scheduleRepository->createQueryBuilder('s')
            ->leftJoin('s.matchEntity', 'm')
            ->leftJoin('s.espaceSportif', 'e')
            ->addSelect('m')
            ->addSelect('e')
            ->getQuery()
            ->getResult();
    
        // Ongoing matches
        $ongoingMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now) {
            $startDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getStartTime()->format('H'),
                (int) $schedule->getStartTime()->format('i')
            );
            $endDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getEndTime()->format('H'),
                (int) $schedule->getEndTime()->format('i')
            );
            return $now >= $startDateTime && $now <= $endDateTime;
        });
    
        // Completed matches
        $completedMatches = array_filter($allSchedules, function (Schedule $schedule) use ($now) {
            $endDateTime = (clone $schedule->getDateMatch())->setTime(
                (int) $schedule->getEndTime()->format('H'),
                (int) $schedule->getEndTime()->format('i')
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
            'ongoingMatches' => count($ongoingMatches),
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
    public function showF(int $idSchedule, ScheduleRepository $scheduleRepository): Response
    {
        $schedule = $scheduleRepository->find($idSchedule);

        if (!$schedule) {
            $this->addFlash('error', "L'horaire demandé n'existe pas ou a été supprimé.");
            return $this->redirectToRoute('schedule_mainF');
        }

        return $this->render('schedule/showF.html.twig', [
            'schedule' => $schedule,
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

}