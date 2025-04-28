<?php

namespace App\Validator;

use App\Entity\Schedule;
use App\Repository\ScheduleRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class NoScheduleOverlapValidator extends ConstraintValidator
{
    private ScheduleRepository $scheduleRepository;

    public function __construct(ScheduleRepository $scheduleRepository)
    {
        $this->scheduleRepository = $scheduleRepository;
    }

    public function validate($value, Constraint $constraint): void
    {
        if (!$constraint instanceof NoScheduleOverlap) {
            throw new UnexpectedTypeException($constraint, NoScheduleOverlap::class);
        }

        if (!$value instanceof Schedule) {
            throw new UnexpectedTypeException($value, Schedule::class);
        }

        // Get the schedule being validated
        $schedule = $value;
        $dateMatch = $schedule->getDateMatch();
        $startTime = $schedule->getStartTime();
        $endTime = $schedule->getEndTime();
        $idSchedule = $schedule->getIdSchedule();

        // Skip validation if required fields are missing
        if (!$dateMatch || !$startTime || !$endTime) {
            return;
        }

        // Find all schedules on the same date, excluding the current schedule (if editing)
        $existingSchedules = $this->scheduleRepository->findBy(['dateMatch' => $dateMatch]);

        foreach ($existingSchedules as $existingSchedule) {
            // Skip the current schedule if it’s being edited
            if ($idSchedule && $existingSchedule->getIdSchedule() === $idSchedule) {
                continue;
            }

            $existingStartTime = $existingSchedule->getStartTime();
            $existingEndTime = $existingSchedule->getEndTime();

            // Skip if the existing schedule doesn’t have startTime or endTime
            if (!$existingStartTime || !$existingEndTime) {
                continue;
            }

            // Check for exact match
            if ($startTime->format('H:i:s') === $existingStartTime->format('H:i:s') &&
                $endTime->format('H:i:s') === $existingEndTime->format('H:i:s')) {
                $this->context->buildViolation($constraint->exactMatchMessage)
                    ->addViolation();
                return; // No need to check for overlap if there’s an exact match
            }

            // Check for overlap
            // Convert times to DateTime objects for comparison
            $newStart = \DateTime::createFromFormat('H:i:s', $startTime->format('H:i:s'));
            $newEnd = \DateTime::createFromFormat('H:i:s', $endTime->format('H:i:s'));
            $existingStart = \DateTime::createFromFormat('H:i:s', $existingStartTime->format('H:i:s'));
            $existingEnd = \DateTime::createFromFormat('H:i:s', $existingEndTime->format('H:i:s'));

            // Two ranges overlap if: newStart < existingEnd AND newEnd > existingStart
            if ($newStart < $existingEnd && $newEnd > $existingStart) {
                $this->context->buildViolation($constraint->overlapMessage)
                    ->addViolation();
                return;
            }
        }
    }
}