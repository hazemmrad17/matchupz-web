<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use App\Repository\AbonnementRepository;

use Symfony\Component\Validator\Constraints as Assert;
=======
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\AbonnementRepository;

>>>>>>> match
#[ORM\Entity(repositoryClass: AbonnementRepository::class)]
#[ORM\Table(name: 'abonnement')]
class Abonnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
<<<<<<< HEAD
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
=======
    #[ORM\Column(type: 'integer')]
    private ?int $id_abonnement = null;

    public function getId_abonnement(): ?int
>>>>>>> match
    {
        return $this->id_abonnement;
    }

<<<<<<< HEAD
    public function setIdAbonnement(int $id_abonnement): self
=======
    public function setId_abonnement(int $id_abonnement): self
>>>>>>> match
    {
        $this->id_abonnement = $id_abonnement;
        return $this;
    }

<<<<<<< HEAD
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
=======
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
>>>>>>> match
    {
        return $this->tarif;
    }

<<<<<<< HEAD
    public function setTarif(string $tarif): self
=======
    public function setTarif(float $tarif): self
>>>>>>> match
    {
        $this->tarif = $tarif;
        return $this;
    }

<<<<<<< HEAD
=======
    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $etat = null;

>>>>>>> match
    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;
        return $this;
    }
<<<<<<< HEAD
}
=======

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
>>>>>>> match
