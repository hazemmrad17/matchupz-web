<?php

namespace App\Repository;

use App\Entity\Espacesportif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Espacesportif>
 *
 * @method Espacesportif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Espacesportif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Espacesportif[]    findAll()
 * @method Espacesportif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EspacesportifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Espacesportif::class);
    }

    /**
     * Retourne les espaces triés par capacité décroissante (top n)
     */
    public function findTopCapacite(int $limit = 5): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.capacite', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Retourne les espaces par catégorie
     */
    public function findByCategorie(string $categorie): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.categorie = :cat')
            ->setParameter('cat', $categorie)
            ->orderBy('e.nom_espace', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques : nombre total d'espaces
     */
    public function countTotalEspaces(): int
    {
        return $this->createQueryBuilder('e')
            ->select('COUNT(e.id_lieu)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Statistiques : moyenne de capacité
     */
    public function averageCapacite(): float
    {
        return (float) $this->createQueryBuilder('e')
            ->select('AVG(e.capacite)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Retourne la distribution des réservations par espace sportif
     */
    public function getReservationDistribution(): array
    {
        $results = $this->createQueryBuilder('e')
            ->select('e.nom_espace AS espace, COUNT(r.id_reservation) AS reservation_count')
            ->leftJoin('e.reservations', 'r')
            ->groupBy('e.id_lieu, e.nom_espace')
            ->orderBy('reservation_count', 'DESC')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($results as $result) {
            $distribution[$result['espace']] = (int) $result['reservation_count'];
        }

        return $distribution;
    }

    /**
     * Retourne la distribution des espaces avec vs sans réservations
     */
    public function getReservationStatusDistribution(): array
    {
        $espaces = $this->findAll();
        $withReservations = 0;
        $withoutReservations = 0;

        foreach ($espaces as $espace) {
            if (count($espace->getReservations()) > 0) {
                $withReservations++;
            } else {
                $withoutReservations++;
            }
        }

        return [
            'Avec Réservations' => $withReservations,
            'Sans Réservations' => $withoutReservations,
        ];
    }
}