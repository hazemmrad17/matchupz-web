<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\MaterielRepository;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
#[ORM\Table(name: 'materiel')]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_materiel', type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class)]
    #[ORM\JoinColumn(name: 'id_fournisseur', referencedColumnName: 'id_fournisseur', nullable: true)]
    private ?Fournisseur $fournisseur = null;
    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom du fournisseur est requis.")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    private string $nom = '';

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le type de matériel est requis.")]
    #[Assert\Choice(
        choices: ['EQUIPEMENT', 'ACCESSOIRE', 'TENUE', 'INFRASTRUCTURE'],
        message: "Veuillez sélectionner un type valide."
    )]
    private ?string $type = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "La quantité ne peut pas être vide.")]
    #[Assert\PositiveOrZero(message: "La quantité doit être un nombre positif ou zéro.")]
    private ?int $quantite = null;

    #[ORM\Column(type: 'string', columnDefinition: "ENUM('NEUF', 'USE', 'ENDOMMAGE')")]
    #[Assert\NotBlank(message: "L'état du matériel ne peut pas être vide.")]
    private ?string $etat = null;

    #[ORM\Column(name: 'prix_unitaire', type: 'float')]
    #[Assert\NotBlank(message: "Le prix unitaire ne peut pas être vide.")]
    #[Assert\Positive(message: "Le prix unitaire doit être un nombre positif.")]
    private ?float $prix = null;

    #[ORM\Column(type: 'string', length: 200)]
    #[Assert\NotBlank(message: "Le code-barres ne peut pas être vide.")]
    #[Assert\Length(
        min: 2,
        max: 200,
        minMessage: "Le code-barres doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le code-barres ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $barcode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_data = null;

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;
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

    public function getType(): ?string
{
    return $this->type;
}

    public function setType(string $type): self
    {
         $this->type = $type;
        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image_data;
    }

    public function setImage(?string $image_data): self
    {
        $this->image_data = $image_data;
        return $this;
    }
}