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

    // Find club history for a specific player
    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
            ->orderBy('h.saisonDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Find players currently in a club (no end date)
    public function findCurrentPlayersByClub(int $clubId): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.club = :clubId')
            ->andWhere('h.saisonFin IS NULL')
            ->setParameter('clubId', $clubId)
            ->orderBy('h.saisonDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Count distinct players in the history
    public function countDistinctPlayers(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.joueur)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Count new players this month
    public function countNewPlayersThisMonth(): int
    {
        $startOfMonth = new \DateTime('first day of this month');
        
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.joueur)')
            ->where('h.saisonDebut >= :startOfMonth')
            ->setParameter('startOfMonth', $startOfMonth)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Update other methods that reference 'club' or 'nomClub'
    public function countActiveClubs(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.club)')
            ->where('h.saisonFin IS NULL')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countClubsWithPlayers(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.club)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Get average duration in days
    public function getAverageDuration(): float
    {
        return $this->createQueryBuilder('h')
            ->select('AVG(TIMESTAMPDIFF(DAY, h.saisonDebut, COALESCE(h.saisonFin, CURRENT_TIMESTAMP())))')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Get maximum duration in days
    public function getMaxDuration(): int
    {
        return $this->createQueryBuilder('h')
            ->select('MAX(TIMESTAMPDIFF(DAY, h.saisonDebut, COALESCE(h.saisonFin, CURRENT_TIMESTAMP())))')
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Count recent updates (last 7 days)
    public function countRecentUpdates(): int
    {
        $lastWeek = new \DateTime('-7 days');
        
        return $this->createQueryBuilder('h')
            ->select('COUNT(h.idHistorique)')
            ->where('h.updatedAt >= :lastWeek OR h.createdAt >= :lastWeek')
            ->setParameter('lastWeek', $lastWeek)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // Get club distribution data
    public function getClubDistribution(): array
    {
        return $this->createQueryBuilder('h')
            ->select('h.nomClub as club, COUNT(DISTINCT h.joueur) as playerCount')
            ->groupBy('h.nomClub')
            ->orderBy('playerCount', 'DESC')
            ->getQuery()
            ->getResult();
    }
}