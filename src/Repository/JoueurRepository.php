<?php

namespace App\Repository;

use App\Entity\Joueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Joueur>
 */
class JoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Joueur::class);
    }

    public function findBySport(int $sportId): array
    {
        return $this->createQueryBuilder('j')
            ->where('j.sport = :sportId')
            ->setParameter('sportId', $sportId)
            ->orderBy('j.nom', 'ASC')
            ->addOrderBy('j.prenom', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByName(string $searchTerm): array
    {
        return $this->createQueryBuilder('j')
            ->where('j.nom LIKE :searchTerm OR j.prenom LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('j.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}