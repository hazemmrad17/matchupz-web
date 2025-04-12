<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "historiqueclub")]
class HistoriqueClub
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idHistorique = null;

    #[ORM\ManyToOne(targetEntity: Joueur::class)]
    #[ORM\JoinColumn(name: "id_joueur", referencedColumnName: "id_joueur", nullable: false)]
    private ?Joueur $joueur = null;

    #[ORM\ManyToOne(targetEntity: Club::class)]
    #[ORM\JoinColumn(name: "id_club", referencedColumnName: "id_club", nullable: false)]
    private ?Club $club = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $saisonDebut = null;

    #[ORM\Column(type: "date", nullable: true)]
    private ?\DateTimeInterface $saisonFin = null;

    // Getters and Setters
    public function getIdHistorique(): ?int
    {
        return $this->idHistorique;
    }

    public function getJoueur(): ?Joueur
    {
        return $this->joueur;
    }

    public function setJoueur(Joueur $joueur): self
    {
        $this->joueur = $joueur;
        return $this;
    }

    public function getClub(): ?Club
    {
        return $this->club;
    }

    public function setClub(Club $club): self
    {
        $this->club = $club;
        return $this;
    }

    public function getSaisonDebut(): ?\DateTimeInterface
    {
        return $this->saisonDebut;
    }

    public function setSaisonDebut(\DateTimeInterface $saisonDebut): self
    {
        $this->saisonDebut = $saisonDebut;
        return $this;
    }

    public function getSaisonFin(): ?\DateTimeInterface
    {
        return $this->saisonFin;
    }

    public function setSaisonFin(?\DateTimeInterface $saisonFin): self
    {
        $this->saisonFin = $saisonFin;
        return $this;
    }
}