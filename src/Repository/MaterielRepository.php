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
    /**
     * Check if the fournisseur's categorie_produit matches the materiel's type.
     *
     * @param Fournisseur $fournisseur
     * @param string $type
     * @return bool
     */
    public function checkFournisseurCategoryMatch($fournisseur, string $type): bool
    {
        return $fournisseur instanceof Fournisseur && $fournisseur->getCategorieProduit() === $type;
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





    /**
     * Get the distribution of materials by state (etat).
     *
     * @return array<string, int> Array with state as key and count as value
     */
    public function getStateDistribution(): array
    {
        $result = $this->createQueryBuilder('m')
            ->select('m.etat, COUNT(m.id) as count')
            ->groupBy('m.etat')
            ->getQuery()
            ->getResult();

        return array_column($result, 'count', 'etat');
    }

    /**
     * Get the total number of materials.
     *
     * @return int
     */
    public function getTotalMaterials(): int
    {
        return (int) $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Get the number of materials with a barcode.
     *
     * @return int
     */
    public function getMaterialsWithBarcodeCount(): int
    {
        return (int) $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.barcode IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Get materials that have a barcode.
     *
     * @return Materiel[]
     */
    public function getMaterialsWithBarcode(): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.barcode IS NOT NULL')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get the average length of material names.
     *
     * @return float
     */
    public function getAverageNameLength(): float
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = 'SELECT AVG(CHAR_LENGTH(nom)) as avg_length FROM materiel';
        $stmt = $connection->executeQuery($sql);
        return (float) $stmt->fetchOne();
    }

    /**
     * Get the total inventory value (sum of prix * quantite).
     *
     * @return float
     */
    public function getInventoryValue(): float
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = 'SELECT SUM(prix * quantite) as total_value FROM materiel';
        $stmt = $connection->executeQuery($sql);
        return (float) $stmt->fetchOne();
    }

    /**
     * Get materials sorted by name length (descending), limited to a specified number.
     *
     * @param int $limit
     * @return array
     */
    public function getTopMaterialsByNameLength(int $limit = 5): array
    {
        $connection = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT id, nom, type, CHAR_LENGTH(nom) as nameLength
            FROM materiel
            ORDER BY nameLength DESC
            LIMIT :limit
        ';
        $stmt = $connection->executeQuery($sql, ['limit' => $limit]);
        return $stmt->fetchAllAssociative();
    }

    /**
     * Create a query builder for paginated material listing with optional search, filter, and sort.
     *
     * @param string|null $searchTerm
     * @param string|null $filter
     * @param string|null $sort
     * @param string|null $order
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function createPaginatedQuery(?string $searchTerm = '', ?string $filter = '', ?string $sort = 'nom', ?string $order = 'asc'): QueryBuilder
    {
        $qb = $this->createQueryBuilder('m');

        // Apply search term
        if ($searchTerm) {
            $qb->andWhere('m.nom LIKE :searchTerm OR m.barcode LIKE :searchTerm')
               ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        // Apply filter (example: filter by type)
        if ($filter) {
            $qb->andWhere('m.type = :filter')
               ->setParameter('filter', $filter);
        }

        // Apply sorting
        if ($sort && $order) {
            // Ensure the sort field is valid
            $allowedSortFields = ['nom', 'type', 'quantite', 'etat', 'prix', 'barcode'];
            if (in_array($sort, $allowedSortFields)) {
                $qb->orderBy('m.' . $sort, $order === 'asc' ? 'ASC' : 'DESC');
            }
        }

        return $qb;
    }
}
