<?php

namespace App\Repository;

use App\Entity\PerformanceJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PerformanceJoueur>
 */
class PerformanceJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PerformanceJoueur::class);
    }

    // Find performances for a specific player
    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
            ->orderBy('p.saison', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Find top scorers in a season
    public function findTopScorersBySeason(string $saison, int $limit = 10): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.saison = :saison')
            ->setParameter('saison', $saison)
            ->orderBy('p.butsMarques', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}