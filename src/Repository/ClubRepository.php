<?php

namespace App\Repository;

use App\Entity\Club;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Club>
 */
class ClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Club::class);
    }

    // Find all clubs alphabetically by name
    public function findAllOrderedByName(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.nomClub', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Find a club by name (case-insensitive)
    public function findByName(string $nomClub): ?Club
    {
        return $this->createQueryBuilder('c')
            ->where('LOWER(c.nomClub) = LOWER(:nomClub)')
            ->setParameter('nomClub', $nomClub)
            ->getQuery()
            ->getOneOrNullResult();
    }
}