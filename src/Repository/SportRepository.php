<?php

namespace App\Repository;

use App\Entity\Sport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sport>
 */
class SportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sport::class);
    }

    // Find sports with a specific name
    public function findByNomSport(string $nomSport): array
    {
        return $this->createQueryBuilder('s')
            ->where('s.nomSport LIKE :nomSport')
            ->setParameter('nomSport', '%' . $nomSport . '%')
            ->orderBy('s.nomSport', 'ASC')
            ->getQuery()
            ->getResult();
    }
}