<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "historiqueclub")]
class HistoriqueClub
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_historique", type: "integer")]
    private ?int $idHistorique = null;

    #[ORM\ManyToOne(targetEntity: Joueur::class)]
    #[ORM\JoinColumn(name: "id_joueur", referencedColumnName: "id_joueur", nullable: false)]
    private ?Joueur $joueur = null;

    #[ORM\Column(name: "nom_club", type: "string", length: 100)]
    private ?string $nomClub = null;

    #[ORM\Column(name: "saison_debut", type: "date")]
    private ?\DateTimeInterface $saisonDebut = null;

    #[ORM\Column(name: "saison_fin", type: "date", nullable: true)]
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

    public function setJoueur(?Joueur $joueur): self
    {
        $this->joueur = $joueur;
        return $this;
    }

    public function getNomClub(): ?string
    {
        return $this->nomClub;
    }

    public function setNomClub(string $nomClub): self
    {
        $this->nomClub = $nomClub;
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