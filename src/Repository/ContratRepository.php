<?php

namespace App\Repository;

use App\Entity\Contrat;
use App\Entity\Sponsor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contrat>
 */
class ContratRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contrat::class);
    }

    /**
     * Find contracts by a specific sponsor.
     *
     * @param Sponsor $sponsor The sponsor to filter by
     * @return Contrat[] Returns an array of Contrat objects
     */
    public function findBySponsor(Sponsor $sponsor): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.sponsor = :sponsor')
            ->setParameter('sponsor', $sponsor)
            ->orderBy('c.DateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find contracts within a specific date range.
     *
     * @param \DateTimeInterface $startDate The start date
     * @param \DateTimeInterface $endDate The end date
     * @return Contrat[] Returns an array of Contrat objects
     */
    public function findByDateRange(\DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.DateDebut >= :startDate')
            ->andWhere('c.DateFin <= :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('c.DateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find contracts with a minimum montant.
     *
     * @param float $minMontant The minimum montant
     * @return Contrat[] Returns an array of Contrat objects
     */
    public function findByMinMontant(float $minMontant): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.Montant >= :minMontant')
            ->setParameter('minMontant', $minMontant)
            ->orderBy('c.Montant', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find the most recent contracts.
     *
     * @param int $limit The maximum number of contracts to return
     * @return Contrat[] Returns an array of Contrat objects
     */
    public function findRecentContracts(int $limit = 5): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.DateDebut', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find a single contract by its title.
     *
     * @param string $titre The title of the contract
     * @return Contrat|null Returns a Contrat object or null if not found
     */
    public function findOneByTitre(string $titre): ?Contrat
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.Titre = :titre')
            ->setParameter('titre', $titre)
            ->getQuery()
            ->getOneOrNullResult();
    }
}