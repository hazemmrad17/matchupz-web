<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    /**
     * Find upcoming confirmed reservations.
     *
     * @param int $limit Maximum number of results to return
     * @return Reservation[]
     */
    public function findUpcomingConfirmed(int $limit = 5): array
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.status = :status')
            ->andWhere('r.date_reservee >= :now')
            ->setParameter('status', 'confirmée')
            ->setParameter('now', new \DateTime())
            ->orderBy('r.date_reservee', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get the distribution of reservations by status.
     *
     * @return array
     */
    public function getStatusDistribution(): array
    {
        $result = $this->createQueryBuilder('r')
            ->select('r.status, COUNT(r.id_reservation) as count')
            ->groupBy('r.status')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($result as $data) {
            $distribution[$data['status']] = (int) $data['count'];
        }

        return $distribution;
    }

    /**
     * Get the distribution of reservations by motif.
     *
     * @return array
     */
    public function getMotifDistribution(): array
    {
        $result = $this->createQueryBuilder('r')
            ->select('r.motif, COUNT(r.id_reservation) as count')
            ->groupBy('r.motif')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($result as $data) {
            $distribution[$data['motif']] = (int) $data['count'];
        }

        return $distribution;
    }

    /**
     * Get the distribution of reservations by espace sportif.
     *
     * @return array
     */
    public function getEspaceDistribution(): array
    {
        $result = $this->createQueryBuilder('r')
            ->select('e.nom_espace as nomEspace, COUNT(r.id_reservation) as count')
            ->join('r.espacesportif', 'e')
            ->groupBy('e.id_lieu')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($result as $data) {
            $distribution[$data['nomEspace']] = (int) $data['count'];
        }

        return $distribution;
    }
}