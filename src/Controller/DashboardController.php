<?php

namespace App\Controller;

use App\Repository\ScheduleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(ScheduleRepository $scheduleRepository): Response
    {
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

        return $this->render('dashboard.html.twig', [
            'schedule' => $scheduleToDisplay,
            'isOngoing' => $ongoingSchedule !== null,
        ]);
    }
}