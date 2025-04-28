<?php

namespace App\Repository;

use App\Entity\Abonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Abonnement>
 */
class AbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abonnement::class);
    }

<<<<<<< HEAD
    /**
     * Find active abonnements.
     *
     * @param int $limit Maximum number of results to return
     * @return Abonnement[]
     */
    public function findActiveAbonnements(int $limit = 5): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.etat = :etat')
            ->andWhere('a.dateFin >= :now')
            ->setParameter('etat', 'Actif')
            ->setParameter('now', new \DateTime())
            ->orderBy('a.dateDebut', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get the distribution of abonnements by etat.
     *
     * @return array
     */
    public function getEtatDistribution(): array
    {
        $result = $this->createQueryBuilder('a')
            ->select('a.etat, COUNT(a.id_abonnement) as count')
            ->groupBy('a.etat')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($result as $data) {
            $distribution[$data['etat']] = (int) $data['count'];
        }

        return $distribution;
    }

    /**
     * Get the distribution of abonnements by type.
     *
     * @return array
     */
    public function getTypeDistribution(): array
    {
        $result = $this->createQueryBuilder('a')
            ->select('a.typeAbonnement, COUNT(a.id_abonnement) as count')
            ->groupBy('a.typeAbonnement')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($result as $data) {
            $distribution[$data['typeAbonnement']] = (int) $data['count'];
        }

        return $distribution;
    }

    /**
     * Get the distribution of abonnements by club.
     *
     * @return array
     */
    public function getClubDistribution(): array
    {
        $result = $this->createQueryBuilder('a')
            ->select('c.nomClub as nomClub, COUNT(a.id_abonnement) as count')
            ->join('a.club', 'c')
            ->groupBy('c.idClub') // Changed from c.id_club to c.idClub
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($result as $data) {
            $distribution[$data['nomClub']] = (int) $data['count'];
        }

        return $distribution;
    }
}
=======
//    /**
//     * @return Abonnement[] Returns an array of Abonnement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Abonnement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
>>>>>>> match
