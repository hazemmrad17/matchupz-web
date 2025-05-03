<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\AbonnementRepository;

use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
#[ORM\Table(name: 'abonnement')]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'id_abonnement')]
    private ?int $id_abonnement = null;

    #[ORM\ManyToOne(targetEntity: Club::class, inversedBy: 'abonnements')]
    #[ORM\JoinColumn(name: 'id_club', referencedColumnName: 'id_club', nullable: false)]
    private ?Club $club = null;

    #[ORM\Column(type: 'string', length: 50, name: 'type_abonnement')]
    private ?string $typeAbonnement = null;

    #[ORM\Column(type: 'date', name: 'date_debut', nullable: false)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: 'date', name: 'date_fin', nullable: false)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 0, nullable: false)]
    private ?string $tarif = null;

    #[ORM\Column(type: 'string', length: 20, name: 'etat')]
    private ?string $etat = null;

    // Getters and Setters

    public function getIdAbonnement(): ?int
    {
        return $this->id_abonnement;
    }

    public function setIdAbonnement(int $id_abonnement): self
    {
        $this->id_abonnement = $id_abonnement;
        return $this;
    }

    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(?Club $club): self
    {
        $this->club = $club;
        return $this;
    }

    public function getTypeAbonnement(): ?string
    {
        return $this->typeAbonnement;
    }

    public function setTypeAbonnement(string $typeAbonnement): self
    {
        $this->typeAbonnement = $typeAbonnement;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(string $tarif): self
    {
        $this->tarif = $tarif;
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
}