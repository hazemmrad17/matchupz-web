<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\FournisseurRepository;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
#[ORM\Table(name: 'fournisseur')]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_fournisseur = null;

    public function getId_fournisseur(): ?int
    {
        return $this->id_fournisseur;
    }

    public function setId_fournisseur(int $id_fournisseur): self
    {
        $this->id_fournisseur = $id_fournisseur;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $adresse = null;

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $categorie_produit = null;

    public function getCategorie_produit(): ?string
    {
        return $this->categorie_produit;
    }

    public function setCategorie_produit(string $categorie_produit): self
    {
        $this->categorie_produit = $categorie_produit;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Materiel::class, mappedBy: 'fournisseur')]
    private Collection $materiels;

    public function __construct()
    {
        $this->materiels = new ArrayCollection();
    }

    /**
     * @return Collection<int, Materiel>
     */
    public function getMateriels(): Collection
    {
        if (!$this->materiels instanceof Collection) {
            $this->materiels = new ArrayCollection();
        }
        return $this->materiels;
    }

    public function addMateriel(Materiel $materiel): self
    {
        if (!$this->getMateriels()->contains($materiel)) {
            $this->getMateriels()->add($materiel);
        }
        return $this;
    }

    public function removeMateriel(Materiel $materiel): self
    {
        $this->getMateriels()->removeElement($materiel);
        return $this;
    }

    public function getIdFournisseur(): ?int
    {
        return $this->id_fournisseur;
    }

    public function getCategorieProduit(): ?string
    {
        return $this->categorie_produit;
    }

    public function setCategorieProduit(string $categorie_produit): static
    {
        $this->categorie_produit = $categorie_produit;

        return $this;
    }

}
