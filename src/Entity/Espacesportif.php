<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\EspacesportifRepository;

#[ORM\Entity(repositoryClass: EspacesportifRepository::class)]
#[ORM\Table(name: 'espacesportif')]
class Espacesportif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_lieu = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom de l'espace est requis.")]
    #[Assert\Length(max: 250, maxMessage: "Le nom de l'espace ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $nom_espace = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "L'adresse est requise.")]
    #[Assert\Length(max: 250, maxMessage: "L'adresse ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $adresse = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La catégorie est requise.")]
    #[Assert\Choice(
        choices: ['terrain foot', 'terrain basket', 'salle gym', 'football', 'Football\''],
        message: "La catégorie doit être l'une des suivantes : terrain foot, terrain basket, salle gym, football."
    )]
    private ?string $categorie = null;

    #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "La capacité est requise.")]
    #[Assert\GreaterThanOrEqual(value: 0, message: "La capacité doit être supérieure ou égale à 0.")]
    private ?float $capacite = null;

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'espacesportif')]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId_lieu(): ?int
    {
        return $this->id_lieu;
    }

    public function setId_lieu(int $id_lieu): self
    {
        $this->id_lieu = $id_lieu;
        return $this;
    }

    public function getNom_espace(): ?string
    {
        return $this->nom_espace;
    }

    public function setNom_espace(string $nom_espace): self
    {
        $this->nom_espace = $nom_espace;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getCapacite(): ?float
    {
        return $this->capacite;
    }

    public function setCapacite(float $capacite): self
    {
        $this->capacite = $capacite;
        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        if (!$this->reservations instanceof Collection) {
            $this->reservations = new ArrayCollection();
        }
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->getReservations()->contains($reservation)) {
            $this->getReservations()->add($reservation);
        }
        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        $this->getReservations()->removeElement($reservation);
        return $this;
    }

    public function getIdLieu(): ?int
    {
        return $this->id_lieu;
    }

    public function getNomEspace(): ?string
    {
        return $this->nom_espace;
    }

    public function setNomEspace(string $nom_espace): static
    {
        $this->nom_espace = $nom_espace;
        return $this;
    }

    public function __toString(): string
    {
        return $this->nom_espace ?? '';
    }
}