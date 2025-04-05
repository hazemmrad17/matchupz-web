<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\AbonnementRepository;

#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
#[ORM\Table(name: 'abonnement')]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_abonnement = null;

    public function getId_abonnement(): ?int
    {
        return $this->id_abonnement;
    }

    public function setId_abonnement(int $id_abonnement): self
    {
        $this->id_abonnement = $id_abonnement;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id_club = null;

    public function getId_club(): ?int
    {
        return $this->id_club;
    }

    public function setId_club(int $id_club): self
    {
        $this->id_club = $id_club;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $type_abonnement = null;

    public function getType_abonnement(): ?string
    {
        return $this->type_abonnement;
    }

    public function setType_abonnement(string $type_abonnement): self
    {
        $this->type_abonnement = $type_abonnement;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $date_debut = null;

    public function getDate_debut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDate_debut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $date_fin = null;

    public function getDate_fin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDate_fin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;
        return $this;
    }

    #[ORM\Column(type: 'decimal', nullable: false)]
    private ?float $tarif = null;

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $etat = null;

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }

    public function getIdAbonnement(): ?int
    {
        return $this->id_abonnement;
    }

    public function getIdClub(): ?int
    {
        return $this->id_club;
    }

    public function setIdClub(int $id_club): static
    {
        $this->id_club = $id_club;

        return $this;
    }

    public function getTypeAbonnement(): ?string
    {
        return $this->type_abonnement;
    }

    public function setTypeAbonnement(string $type_abonnement): static
    {
        $this->type_abonnement = $type_abonnement;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): static
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): static
    {
        $this->date_fin = $date_fin;

        return $this;
    }

}
