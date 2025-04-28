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

<<<<<<< HEAD
=======
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

>>>>>>> match
    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
<<<<<<< HEAD
            ->orderBy('h.saisonDebut', 'DESC')
=======
>>>>>>> match
            ->getQuery()
            ->getResult();
    }

    public function findCurrentPlayersByClub(string $clubName): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.nomClub = :clubName')
            ->andWhere('h.saisonFin IS NULL')
            ->setParameter('clubName', $clubName)
<<<<<<< HEAD
            ->orderBy('h.saisonDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function countDistinctPlayers(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.joueur)')
            ->getQuery()
            ->getSingleScalarResult();
    }

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

    public function countActiveClubs(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.nomClub)')
            ->where('h.saisonFin IS NULL')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countClubsWithPlayers(): int
    {
        return $this->createQueryBuilder('h')
            ->select('COUNT(DISTINCT h.nomClub)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getAverageDuration(): float
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT AVG(TIMESTAMPDIFF(DAY, saison_debut, COALESCE(saison_fin, CURRENT_TIMESTAMP))) 
                FROM historiqueclub';
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute()->fetch();
        return (float) ($result[0] ?? 0);
    }

    public function getMaxDuration(): int
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT MAX(TIMESTAMPDIFF(DAY, saison_debut, COALESCE(saison_fin, CURRENT_TIMESTAMP))) 
                FROM historiqueclub';
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute()->fetch();
        return (int) ($result[0] ?? 0);
    }

    public function countRecentUpdates(): int
    {
        $conn = $this->getEntityManager()->getConnection();
        $lastWeek = new \DateTime('-7 days');
        $sql = 'SELECT COUNT(id_historique) 
                FROM historiqueclub 
                WHERE saison_debut >= :lastWeek';
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute(['lastWeek' => $lastWeek->format('Y-m-d H:i:s')])->fetch();
        return (int) ($result[0] ?? 0);
    }

    public function getClubDistribution(): array
    {
        return $this->createQueryBuilder('h')
            ->select('h.nomClub as club, COUNT(DISTINCT h.joueur) as playerCount')
            ->groupBy('h.nomClub')
            ->orderBy('playerCount', 'DESC')
=======
>>>>>>> match
            ->getQuery()
            ->getResult();
    }
}