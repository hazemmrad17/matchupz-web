<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\StatistiquespostmatchRepository;

#[ORM\Entity(repositoryClass: StatistiquespostmatchRepository::class)]
#[ORM\Table(name: 'statistiquespostmatch')]
class Statistiquespostmatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_stat_post_match = null;

    public function getId_stat_post_match(): ?int
    {
        return $this->id_stat_post_match;
    }

    public function setId_stat_post_match(int $id_stat_post_match): self
    {
        $this->id_stat_post_match = $id_stat_post_match;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Joueur::class, inversedBy: 'statistiquespostmatchs')]
    #[ORM\JoinColumn(name: 'id_joueur', referencedColumnName: 'id_joueur')]
    private ?Joueur $joueur = null;

    public function getJoueur(): ?Joueur
    {
        return $this->joueur;
    }

    public function setJoueur(?Joueur $joueur): self
    {
        $this->joueur = $joueur;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $id_match = null;

    public function getId_match(): ?int
    {
        return $this->id_match;
    }

    public function setId_match(int $id_match): self
    {
        $this->id_match = $id_match;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $buts_marques = null;

    public function getButs_marques(): ?int
    {
        return $this->buts_marques;
    }

    public function setButs_marques(?int $buts_marques): self
    {
        $this->buts_marques = $buts_marques;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $passes_decisives = null;

    public function getPasses_decisives(): ?int
    {
        return $this->passes_decisives;
    }

    public function setPasses_decisives(?int $passes_decisives): self
    {
        $this->passes_decisives = $passes_decisives;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    private ?float $distance_parcourue = null;

    public function getDistance_parcourue(): ?float
    {
        return $this->distance_parcourue;
    }

    public function setDistance_parcourue(float $distance_parcourue): self
    {
        $this->distance_parcourue = $distance_parcourue;
        return $this;
    }

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $tirs_cadres = null;

    public function getTirs_cadres(): ?int
    {
        return $this->tirs_cadres;
    }

    public function setTirs_cadres(?int $tirs_cadres): self
    {
        $this->tirs_cadres = $tirs_cadres;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    private ?float $note_match = null;

    public function getNote_match(): ?float
    {
        return $this->note_match;
    }

    public function setNote_match(float $note_match): self
    {
        $this->note_match = $note_match;
        return $this;
    }

    public function getIdStatPostMatch(): ?int
    {
        return $this->id_stat_post_match;
    }

    public function getIdMatch(): ?int
    {
        return $this->id_match;
    }

    public function setIdMatch(int $id_match): static
    {
        $this->id_match = $id_match;

        return $this;
    }

    public function getButsMarques(): ?int
    {
        return $this->buts_marques;
    }

    public function setButsMarques(?int $buts_marques): static
    {
        $this->buts_marques = $buts_marques;

        return $this;
    }

    public function getPassesDecisives(): ?int
    {
        return $this->passes_decisives;
    }

    public function setPassesDecisives(?int $passes_decisives): static
    {
        $this->passes_decisives = $passes_decisives;

        return $this;
    }

    public function getDistanceParcourue(): ?float
    {
        return $this->distance_parcourue;
    }

    public function setDistanceParcourue(float $distance_parcourue): static
    {
        $this->distance_parcourue = $distance_parcourue;

        return $this;
    }

    public function getTirsCadres(): ?int
    {
        return $this->tirs_cadres;
    }

    public function setTirsCadres(?int $tirs_cadres): static
    {
        $this->tirs_cadres = $tirs_cadres;

        return $this;
    }

    public function getNoteMatch(): ?float
    {
        return $this->note_match;
    }

    public function setNoteMatch(float $note_match): static
    {
        $this->note_match = $note_match;

        return $this;
    }

}
