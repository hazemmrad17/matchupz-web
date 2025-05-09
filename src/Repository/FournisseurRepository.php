<?php

namespace App\Repository;

use App\Entity\Fournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fournisseur>
 */
class FournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fournisseur::class);
    }

    /**
     * Find suppliers with search, category filter, and sorting.
     *
     * @param string $searchTerm
     * @param string $filter
     * @param string $sort
     * @param string $order
     * @return Fournisseur[]
     */
    public function findFilteredSuppliers(string $searchTerm = '', string $filter = '', string $sort = 'nom', string $order = 'asc'): array
    {
        $queryBuilder = $this->createQueryBuilder('f');

        // Apply search
        if ($searchTerm) {
            $queryBuilder
                ->where('f.nom LIKE :search')
                ->orWhere('f.email LIKE :search')
                ->orWhere('f.adresse LIKE :search')
                ->setParameter('search', '%' . $searchTerm . '%');
        }

        // Apply category filter
        if ($filter) {
            $queryBuilder
                ->andWhere('f.categorie_produit = :filter')
                ->setParameter('filter', $filter);
        }

        // Apply sorting
        $queryBuilder->orderBy('f.' . $sort, $order);

        return $queryBuilder->getQuery()->getResult();
    }

    public function getTotalSuppliers(): int
    {
        return $this->count([]);
    }

    public function getSuppliersWithEmailCount(): int
    {
        return $this->createQueryBuilder('f')
            ->select('COUNT(f.id_fournisseur)')
            ->where('f.email IS NOT NULL')
            ->andWhere('f.email != :empty')
            ->setParameter('empty', '')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getCategoriesCount(): int
    {
        return $this->createQueryBuilder('f')
            ->select('COUNT(DISTINCT f.categorie_produit)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getRegionsCount(): int
    {
        $regions = $this->createQueryBuilder('f')
            ->select("SUBSTRING(f.adresse, 1, LOCATE(',', f.adresse)) AS region")
            ->where('f.adresse IS NOT NULL')
            ->andWhere('f.adresse != :empty')
            ->setParameter('empty', '')
            ->groupBy('region')
            ->getQuery()
            ->getResult();

        return count($regions);
    }

    public function getAverageNameLength(): float
    {
        $result = $this->createQueryBuilder('f')
            ->select('AVG(LENGTH(f.nom))')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) $result ?: 0.0;
    }

    public function getSuppliersWithAddressCount(): int
    {
        return $this->createQueryBuilder('f')
            ->select('COUNT(f.id_fournisseur)')
            ->where('f.adresse IS NOT NULL')
            ->andWhere('f.adresse != :empty')
            ->setParameter('empty', '')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getCategoryDistribution(): array
    {
        $results = $this->createQueryBuilder('f')
            ->select('f.categorie_produit, COUNT(f.id_fournisseur) AS count')
            ->groupBy('f.categorie_produit')
            ->getQuery()
            ->getResult();

        $distribution = [];
        foreach ($results as $result) {
            $category = $result['categorie_produit'] ?: 'Non défini';
            $distribution[$category] = (int) $result['count'];
        }

        return $distribution;
    }

    public function getLocationDistribution(): array
    {
        // Récupérer toutes les adresses non vides
        $results = $this->createQueryBuilder('f')
            ->select('f.adresse AS adresse')
            ->where('f.adresse IS NOT NULL')
            ->andWhere('f.adresse != :empty')
            ->setParameter('empty', '')
            ->getQuery()
            ->getScalarResult();

        $distribution = [];
        foreach ($results as $row) {
            $adresse = $row['adresse'] ?? '';
            $parts = explode(',', $adresse);
            $ville = trim(end($parts)) ?: 'Non défini';
            $distribution[$ville] = ($distribution[$ville] ?? 0) + 1;
        }

        return $distribution;
    }

    public function getTopSuppliersByNameLength(): array
    {
        return $this->createQueryBuilder('f')
            ->select('f.id_fournisseur, f.nom, LENGTH(f.nom) AS nameLength')
            ->orderBy('nameLength', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

    public function getSuppliersWithEmail(): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.email IS NOT NULL')
            ->andWhere('f.email != :empty')
            ->setParameter('empty', '')
            ->getQuery()
            ->getResult();
    }

    public function getRecentSuppliers(): array
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.id_fournisseur', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

    /**
     * Distribution des domaines d'email (après @)
     */
    public function getEmailDomainDistribution(): array
    {
        // Récupère tous les emails non vides
        $emails = $this->createQueryBuilder('f')
            ->select('f.email')
            ->where('f.email IS NOT NULL')
            ->andWhere('f.email != :empty')
            ->setParameter('empty', '')
            ->getQuery()
            ->getScalarResult();

        $distribution = [];
        foreach ($emails as $row) {
            $email = $row['email'] ?? '';
            // Extraire la partie après '@'
            [$local, $domain] = array_pad(explode('@', $email), 2, '');
            $domain = trim($domain) ?: 'Non défini';
            $distribution[$domain] = ($distribution[$domain] ?? 0) + 1;
        }

        return $distribution;
    }

    /**
     * Moyenne de matériels par fournisseur
     */
    public function getAverageMaterialsPerSupplier(): float
    {
        $results = $this->createQueryBuilder('f')
            ->select('COUNT(m.id) AS materialCount')
            ->leftJoin('f.materiels', 'm')
            ->groupBy('f.id_fournisseur')
            ->getQuery()
            ->getScalarResult();

        $total = 0;
        foreach ($results as $row) {
            $total += (int) ($row['materialCount'] ?? 0);
        }
        $count = count($results);

        return $count > 0 ? $total / $count : 0;
    }

    /**
     * Top 5 des fournisseurs par nombre de matériels
     */
    public function getTopSuppliersByMaterialCount(): array
    {
        return $this->createQueryBuilder('f')
            ->select('f.id_fournisseur, f.nom, COUNT(m.id) AS materialCount')
            ->leftJoin('f.materiels', 'm')
            ->groupBy('f.id_fournisseur')
            ->orderBy('materialCount', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }
}