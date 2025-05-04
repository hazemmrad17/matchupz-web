<?php
namespace App\Controller;

use App\Repository\EspacesportifRepository;
use App\Repository\ScheduleRepository;
use App\Repository\SponsorRepository; // Add this import
use App\Service\GeocodingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        EspacesportifRepository $espaceSportifRepository,
        GeocodingService $geocodingService,
        ScheduleRepository $scheduleRepository,
        SponsorRepository $sponsorRepository // Add this parameter
    ): Response {
        // Existing logic for espaces sportifs
        $espaces = $espaceSportifRepository->findAll();
        $espacesWithCoords = [];

        foreach ($espaces as $espace) {
            $coords = $geocodingService->getCoordinates($espace->getAdresse());
            $weather = null;
            if ($coords && isset($coords['latitude'], $coords['longitude'])) {
                $weather = $geocodingService->getWeather($coords['latitude'], $coords['longitude']);
            } else {
                error_log("Geocoding failed for address: " . $espace->getAdresse());
            }
            $espacesWithCoords[] = [
                'espace' => $espace,
                'latitude' => $coords['latitude'] ?? null,
                'longitude' => $coords['longitude'] ?? null,
                'weather' => $weather,
            ];
        }

        // Logic to fetch the ongoing or most recent past schedule
        $now = new \DateTime('now');
        $currentTimestamp = $now->getTimestamp();

        // Fetch all schedules with their related entities
        $schedules = $scheduleRepository->createQueryBuilder('s')
            ->leftJoin('s.matchEntity', 'm')
            ->leftJoin('s.espaceSportif', 'e')
            ->select('s, m, e')
            ->orderBy('s.dateMatch', 'DESC') // Most recent first
            ->addOrderBy('s.endTime', 'DESC')
            ->getQuery()
            ->getResult();

        $ongoingSchedule = null;
        $latestPastSchedule = null;

        // Find ongoing or most recent past schedule
        foreach ($schedules as $schedule) {
            $dateMatch = $schedule->getDateMatch();
            $startTime = clone $dateMatch;
            $endTime = clone $dateMatch;

            // Set the time part for startTime and endTime
            $startTime->setTime(
                (int) $schedule->getStartTime()->format('H'),
                (int) $schedule->getStartTime()->format('i'),
                (int) $schedule->getStartTime()->format('s')
            );
            $endTime->setTime(
                (int) $schedule->getEndTime()->format('H'),
                (int) $schedule->getEndTime()->format('i'),
                (int) $schedule->getEndTime()->format('s')
            );

            $startTimestamp = $startTime->getTimestamp();
            $endTimestamp = $endTime->getTimestamp();

            // Check if the schedule is ongoing
            if ($currentTimestamp >= $startTimestamp && $currentTimestamp <= $endTimestamp) {
                $ongoingSchedule = $schedule;
                break; // Found the ongoing schedule, no need to continue
            }

            // If no ongoing schedule, keep track of the most recent past schedule
            if ($currentTimestamp > $endTimestamp && !$latestPastSchedule) {
                $latestPastSchedule = $schedule;
            }
        }

        // Use the ongoing schedule if available, otherwise fall back to the latest past schedule
        $scheduleToDisplay = $ongoingSchedule ?? $latestPastSchedule;

        // Fetch all sponsors
        $sponsors = $sponsorRepository->findAll();

        return $this->render('Home.html.twig', [
            'controller_name' => 'HomeController',
            'espacesWithCoords' => $espacesWithCoords,
            'espaces_description' => 'Découvrez nos espaces sportifs modernes et bien équipés, parfaits pour vos activités physiques et compétitions.',
            'schedule' => $scheduleToDisplay,
            'isOngoing' => $ongoingSchedule !== null,
            'sponsors' => $sponsors, // Add sponsors variable
        ]);
    }
}