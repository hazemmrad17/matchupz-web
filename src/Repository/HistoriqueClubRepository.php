<?php

namespace App\Repository;

use App\Entity\HistoriqueClub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HistoriqueClub>
 */
class HistoriqueClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoriqueClub::class);
    }

    public function countDistinctPlayers(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.joueur)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    public function countNewPlayersThisMonth(): int
    {
        $startOfMonth = new \DateTime('first day of this month 00:00:00');
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.joueur)')
            ->where('h.saisonDebut >= :startOfMonth')
            ->setParameter('startOfMonth', $startOfMonth)
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    public function countActiveClubs(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.nomClub)')
            ->where('h.saisonFin IS NULL OR h.saisonFin > :now')
            ->setParameter('now', new \DateTime())
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    public function countClubsWithPlayers(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.nomClub)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    public function getAverageDuration(): float
    {
        $results = $this->createQueryBuilder('h')
            ->select('h.saisonDebut, h.saisonFin')
            ->getQuery()
            ->getResult();

        if (empty($results)) {
            return 0.0;
        }

        $totalDays = 0;
        $count = count($results);

        foreach ($results as $row) {
            $start = $row['saisonDebut'];
            $end = $row['saisonFin'] ?? new \DateTime();
            $interval = $start->diff($end);
            $totalDays += $interval->days;
        }

        return $count > 0 ? ($totalDays / $count) : 0.0;
    }

    public function getMaxDuration(): float
    {
        $results = $this->createQueryBuilder('h')
            ->select('h.saisonDebut, h.saisonFin')
            ->getQuery()
            ->getResult();

        if (empty($results)) {
            return 0.0;
        }

        $maxDays = 0;

        foreach ($results as $row) {
            $start = $row['saisonDebut'];
            $end = $row['saisonFin'] ?? new \DateTime();
            $interval = $start->diff($end);
            $days = $interval->days;
            if ($days > $maxDays) {
                $maxDays = $days;
            }
        }

        return (float) $maxDays;
    }

    public function countRecentUpdates(): int
    {
        $sevenDaysAgo = new \DateTime('-7 days');
        return $this->createQueryBuilder('h')
            ->select('COUNT(h.idHistorique)')
            ->where('h.saisonDebut >= :sevenDaysAgo OR h.saisonFin >= :sevenDaysAgo')
            ->setParameter('sevenDaysAgo', $sevenDaysAgo)
            ->getQuery()
            ->getSingleScalarResult() ?? 0;
    }

    public function getClubDistribution(): array
    {
        return $this->createQueryBuilder('h')
            ->select('h.nomClub AS club, COUNT(h.joueur) AS playerCount')
            ->groupBy('h.nomClub')
            ->getQuery()
            ->getResult() ?: [];
    }

    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
            ->getQuery()
            ->getResult();
    }

    public function findCurrentPlayersByClub(string $clubName): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.nomClub = :clubName')
            ->andWhere('h.saisonFin IS NULL')
            ->setParameter('clubName', $clubName)
            ->getQuery()
            ->getResult();
    }
}