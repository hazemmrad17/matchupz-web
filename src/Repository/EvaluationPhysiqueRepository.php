<?php

namespace App\Repository;

use App\Entity\EvaluationPhysique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EvaluationPhysique>
 */
class EvaluationPhysiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvaluationPhysique::class);
    }

    // Find evaluations for a specific player
    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
            ->orderBy('e.dateEvaluation', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // Find recent evaluations (e.g., last 30 days)
    public function findRecentEvaluations(): array
    {
        $date = new \DateTime('-30 days');
        return $this->createQueryBuilder('e')
            ->where('e.dateEvaluation >= :date')
            ->setParameter('date', $date)
            ->orderBy('e.dateEvaluation', 'DESC')
            ->getQuery()
            ->getResult();
    }
}