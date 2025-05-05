<?php

namespace App\Repository;

use App\Entity\Schedule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Schedule>
 */
class ScheduleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Schedule::class);
    }
    // src/Repository/ScheduleRepository.php
public function findOngoingSchedules(\DateTime $currentTime): array
{
    $allSchedules = $this->createQueryBuilder('s')
        ->leftJoin('s.matchEntity', 'm')
        ->leftJoin('s.espaceSportif', 'e')
        ->addSelect('m')
        ->addSelect('e')
        ->getQuery()
        ->getResult();

    return array_filter($allSchedules, function (Schedule $schedule) use ($currentTime) {
        $startDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getStartTime()->format('H'),
            (int) $schedule->getStartTime()->format('i')
        );
        $endDateTime = (clone $schedule->getDateMatch())->setTime(
            (int) $schedule->getEndTime()->format('H'),
            (int) $schedule->getEndTime()->format('i')
        );
        return $currentTime >= $startDateTime && $currentTime <= $endDateTime;
    });
}

//    /**
//     * @return Schedule[] Returns an array of Schedule objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Schedule
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
