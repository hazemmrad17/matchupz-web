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

    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
            ->orderBy('h.saisonDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findCurrentPlayersByClub(string $clubName): array
    {
        return $this->createQueryBuilder('h')
            ->where('h.nomClub = :clubName')
            ->andWhere('h.saisonFin IS NULL')
            ->setParameter('clubName', $clubName)
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
            ->getQuery()
            ->getResult();
    }
}