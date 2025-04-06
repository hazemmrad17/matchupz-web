<?php

namespace App\Repository;

use App\Entity\EvaluationPhysique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EvaluationPhysiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EvaluationPhysique::class);
    }

    public function findByJoueur(int $joueurId): array
    {
        return $this->createQueryBuilder('e')
            ->where('e.joueur = :joueurId')
            ->setParameter('joueurId', $joueurId)
            ->orderBy('e.dateEvaluation', 'DESC')
            ->getQuery()
            ->getResult();
    }

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

    public function countDistinctPlayers(): int
    {
        return (int) $this->createQueryBuilder('e')
            ->select('COUNT(DISTINCT e.joueur)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getAverageScores(): array
    {
        $query = $this->createQueryBuilder('e')
            ->select(
                'AVG(e.niveauEndurance) as niveauEndurance',
                'AVG(e.forcePhysique) as forcePhysique',
                'AVG(e.vitesse) as vitesse'
            )
            ->getQuery();
        
        return $query->getSingleResult();
    }

    public function getPerformanceTrends(): array
    {
        $lastSixMonths = new \DateTime('-6 months');
        $evaluations = $this->createQueryBuilder('e')
            ->where('e.dateEvaluation >= :date')
            ->setParameter('date', $lastSixMonths)
            ->orderBy('e.dateEvaluation', 'ASC')
            ->getQuery()
            ->getResult();

        $monthlyData = [];
        foreach ($evaluations as $evaluation) {
            $month = $evaluation->getDateEvaluation()->format('Y-m');
            
            if (!isset($monthlyData[$month])) {
                $monthlyData[$month] = [
                    'count' => 0,
                    'endurance' => 0,
                    'force' => 0, 
                    'vitesse' => 0
                ];
            }
            
            $monthlyData[$month]['count']++;
            $monthlyData[$month]['endurance'] += $evaluation->getNiveauEndurance();
            $monthlyData[$month]['force'] += $evaluation->getForcePhysique();
            $monthlyData[$month]['vitesse'] += $evaluation->getVitesse();
        }

        $trends = [
            'dates' => [],
            'endurance' => [],
            'force' => [],
            'vitesse' => [] 
        ];

        foreach ($monthlyData as $month => $data) {
            $trends['dates'][] = $month;
            $trends['endurance'][] = $data['count'] > 0 ? $data['endurance'] / $data['count'] : 0;
            $trends['force'][] = $data['count'] > 0 ? $data['force'] / $data['count'] : 0;
            $trends['vitesse'][] = $data['count'] > 0 ? $data['vitesse'] / $data['count'] : 0;
        }

        return $trends;
    }

    public function findTopPlayers(int $limit = 10): array
    {
        return $this->createQueryBuilder('e')
            ->select([
                'j.idJoueur as id',  // Use the property name (idJoueur) not the column name
                'j.nom',
                'j.prenom',
                'AVG((e.niveauEndurance + e.forcePhysique + e.vitesse) / 3) as score'
            ])
            ->join('e.joueur', 'j')
            ->groupBy('j.idJoueur')  // Group by the property name
            ->orderBy('score', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}