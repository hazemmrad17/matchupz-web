<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "performancejoueur")]
class PerformanceJoueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer", name: "id_performance")]
    private ?int $idPerformance = null;

    #[ORM\ManyToOne(targetEntity: Joueur::class)]
    #[ORM\JoinColumn(name: "id_joueur", referencedColumnName: "id_joueur", nullable: false)]
    private ?Joueur $joueur = null;

    #[ORM\Column(type: "string", length: 20, nullable: false, name: "saison")]
    private ?string $saison = null;

    #[ORM\Column(type: "integer", nullable: true, name: "nombre_matches")]
    private ?int $nombreMatches = null;

    #[ORM\Column(type: "integer", nullable: true, name: "minutes_jouees")]
    private ?int $minutesJouees = null;

    #[ORM\Column(type: "integer", nullable: true, name: "buts_marques")]
    private ?int $butsMarques = null;

    #[ORM\Column(type: "integer", nullable: true, name: "passes_decisives")]
    private ?int $passesDecisives = null;

    #[ORM\Column(type: "integer", nullable: true, name: "cartons_jaunes")]
    private ?int $cartonsJaunes = null;

    #[ORM\Column(type: "integer", nullable: true, name: "cartons_rouges")]
    private ?int $cartonsRouges = null;

    // Getters and Setters
    public function getIdPerformance(): ?int
    {
        return $this->idPerformance;
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

    public function getSaison(): ?string
    {
        return $this->saison;
    }

    public function setSaison(string $saison): self
    {
        $this->saison = $saison;
        return $this;
    }

    public function getNombreMatches(): ?int
    {
        return $this->nombreMatches;
    }

    public function setNombreMatches(?int $nombreMatches): self
    {
        $this->nombreMatches = $nombreMatches;
        return $this;
    }

    public function getMinutesJouees(): ?int
    {
        return $this->minutesJouees;
    }

    public function setMinutesJouees(?int $minutesJouees): self
    {
        $this->minutesJouees = $minutesJouees;
        return $this;
    }

    public function getButsMarques(): ?int
    {
        return $this->butsMarques;
    }

    public function setButsMarques(?int $butsMarques): self
    {
        $this->butsMarques = $butsMarques;
        return $this;
    }

    public function getPassesDecisives(): ?int
    {
        return $this->passesDecisives;
    }

    public function setPassesDecisives(?int $passesDecisives): self
    {
        $this->passesDecisives = $passesDecisives;
        return $this;
    }

    public function getCartonsJaunes(): ?int
    {
        return $this->cartonsJaunes;
    }

    public function setCartonsJaunes(?int $cartonsJaunes): self
    {
        $this->cartonsJaunes = $cartonsJaunes;
        return $this;
    }

    public function getCartonsRouges(): ?int
    {
        return $this->cartonsRouges;
    }

    public function setCartonsRouges(?int $cartonsRouges): self
    {
        $this->cartonsRouges = $cartonsRouges;
        return $this;
    }
}