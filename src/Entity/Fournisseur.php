<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\FournisseurRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
#[ORM\Table(name: 'fournisseur')]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_fournisseur = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom du fournisseur est requis.")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', nullable: true)]
    #[Assert\Email(
        message: "L'email '{{ value }}' n'est pas valide.",
        mode: 'html5' // Enforces HTML5 email validation
    )]
    private ?string $email = null;

    #[ORM\Column(type: 'string', nullable: true)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "L'adresse doit contenir au moins {{ limit }} caractères si fournie.",
        maxMessage: "L'adresse ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $adresse = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La catégorie de produit est requise.")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "La catégorie doit contenir au moins {{ limit }} caractères.",
        maxMessage: "La catégorie ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $categorie_produit = null;

    #[ORM\OneToMany(targetEntity: Materiel::class, mappedBy: 'fournisseur')]
    private Collection $materiels;

    public function __construct()
    {
        $this->materiels = new ArrayCollection();
    }

    public function getId_fournisseur(): ?int
    {
        return $this->id_fournisseur;
    }

    public function setId_fournisseur(int $id_fournisseur): self
    {
        $this->id_fournisseur = $id_fournisseur;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getCategorie_produit(): ?string
    {
        return $this->categorie_produit;
    }

    public function setCategorie_produit(string $categorie_produit): self
    {
        $this->categorie_produit = $categorie_produit;
        return $this;
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