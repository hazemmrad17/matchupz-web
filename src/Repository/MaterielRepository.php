<?php

namespace App\Repository;

use App\Entity\Materiel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MaterielRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Materiel::class);
    }

    public function countUniqueTypes(): int
    {
        $result = $this->createQueryBuilder('m')
            ->select('COUNT(DISTINCT m.type)')
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $result;
    }

    public function calculateBarcodeCoverage(): float
    {
        $total = $this->count([]);
        if ($total === 0) {
            return 0;
        }

        $withBarcode = $this->createQueryBuilder('m')
            ->select('COUNT(m.id_materiel)')
            ->where('m.barcode IS NOT NULL')
            ->andWhere("m.barcode != ''")
            ->getQuery()
            ->getSingleScalarResult();

        return round(($withBarcode / $total) * 100, 2);
    }

    public function findMostCommonEtat(): array
    {
        $result = $this->createQueryBuilder('m')
            ->select('m.etat as etat, COUNT(m.id_materiel) as count')
            ->groupBy('m.etat')
            ->orderBy('count', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $result ?: ['etat' => 'N/A', 'count' => 0];
    }

    public function findMostPopularType(): array
    {
        $result = $this->createQueryBuilder('m')
            ->select('m.type as type, COUNT(m.id_materiel) as count')
            ->groupBy('m.type')
            ->orderBy('count', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $result ?: ['type' => 'N/A', 'count' => 0];
    }

    public function countRecentMateriels(): int
    {
        return $this->createQueryBuilder('m')
            ->select('COUNT(m.id_materiel)')
            ->orderBy('m.id_materiel', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getTypeDistribution(): array
    {
        $results = $this->createQueryBuilder('m')
            ->select('m.type as type, COUNT(m.id_materiel) as count')
            ->groupBy('m.type')
            ->getQuery()
            ->getArrayResult();

        $distribution = [];
        foreach ($results as $result) {
            $distribution[$result['type']] = $result['count'];
        }

        return $distribution;
    }

    public function getEtatDistribution(): array
    {
        $results = $this->createQueryBuilder('m')
            ->select('m.etat as etat, COUNT(m.id_materiel) as count')
            ->groupBy('m.etat')
            ->getQuery()
            ->getArrayResult();

        $distribution = [];
        foreach ($results as $result) {
            $distribution[$result['etat']] = $result['count'];
        }

        return $distribution;
    }

    public function findRecentMateriels(int $max = 5): array
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.id_materiel', 'DESC')
            ->setMaxResults($max)
            ->getQuery()
            ->getResult();
    }
}