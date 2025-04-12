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
}