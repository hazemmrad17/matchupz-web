<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[Assert\NotNull(message: "Le joueur est requis.")]
    private ?Joueur $joueur = null;

    #[ORM\Column(name: "nom_club", type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom du club est requis.")]
    #[Assert\Length(
        max: 100,
        maxMessage: "Le nom du club ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nomClub = null;

    #[ORM\Column(name: "saison_debut", type: "date")]
    #[Assert\NotNull(message: "La saison de début est requise.")]
    private ?\DateTimeInterface $saisonDebut = null;

    #[ORM\Column(name: "saison_fin", type: "date", nullable: true)]
    #[Assert\Expression(
        "this.getSaisonFin() === null or this.getSaisonFin() >= this.getSaisonDebut()",
        message: "La saison de fin doit être postérieure ou égale à la saison de début."
    )]
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

    public function setSaisonDebut(?\DateTimeInterface $saisonDebut): self
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
