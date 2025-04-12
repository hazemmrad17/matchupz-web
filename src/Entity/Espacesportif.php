<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\EspacesportifRepository;

#[ORM\Entity(repositoryClass: EspacesportifRepository::class)]
#[ORM\Table(name: 'espacesportif')]
class Espacesportif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_lieu = null;

    public function getId_lieu(): ?int
    {
        return $this->id_lieu;
    }

    public function setId_lieu(int $id_lieu): self
    {
        $this->id_lieu = $id_lieu;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom_espace = null;

    public function getNom_espace(): ?string
    {
        return $this->nom_espace;
    }

    public function setNom_espace(string $nom_espace): self
    {
        $this->nom_espace = $nom_espace;
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
    private ?string $categorie = null;

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    private ?float $capacite = null;

    public function getCapacite(): ?float
    {
        return $this->capacite;
    }

    public function setCapacite(float $capacite): self
    {
        $this->capacite = $capacite;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'espacesportif')]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
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

}
