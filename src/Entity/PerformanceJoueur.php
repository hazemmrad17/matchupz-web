<?php

namespace App\Entity;

use App\Repository\PerformanceJoueurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PerformanceJoueurRepository::class)]
#[ORM\Table(name: "performancejoueur")]
class PerformanceJoueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idPerformance = null;

    #[ORM\ManyToOne(inversedBy: 'performances')]
    #[ORM\JoinColumn(name: 'id_joueur', referencedColumnName: 'id_joueur', nullable: false)]
    private ?Joueur $joueur = null;

    #[ORM\Column(length: 9)]
    private ?string $saison = null;

    #[ORM\Column]
    private ?int $nombreMatches = null;

    #[ORM\Column]
    private ?int $minutesJouees = null;

    #[ORM\Column]
    private ?int $butsMarques = null;

    #[ORM\Column]
    private ?int $passesDecisives = null;

    #[ORM\Column]
    private ?int $cartonsJaunes = null;

    #[ORM\Column]
    private ?int $cartonsRouges = null;

    public function getIdPerformance(): ?int
    {
        return $this->idPerformance;
    }

    public function getJoueur(): ?Joueur
    {
        return $this->joueur;
    }

    public function setJoueur(?Joueur $joueur): static
    {
        $this->joueur = $joueur;
        return $this;
    }

    public function getSaison(): ?string
    {
        return $this->saison;
    }

    public function setSaison(string $saison): static
    {
        $this->saison = $saison;
        return $this;
    }

    public function getNombreMatches(): ?int
    {
        return $this->nombreMatches;
    }

    public function setNombreMatches(int $nombreMatches): static
    {
        $this->nombreMatches = $nombreMatches;
        return $this;
    }

    public function getMinutesJouees(): ?int
    {
        return $this->minutesJouees;
    }

    public function setMinutesJouees(int $minutesJouees): static
    {
        $this->minutesJouees = $minutesJouees;
        return $this;
    }

    public function getButsMarques(): ?int
    {
        return $this->butsMarques;
    }

    public function setButsMarques(int $butsMarques): static
    {
        $this->butsMarques = $butsMarques;
        return $this;
    }

    public function getPassesDecisives(): ?int
    {
        return $this->passesDecisives;
    }

    public function setPassesDecisives(int $passesDecisives): static
    {
        $this->passesDecisives = $passesDecisives;
        return $this;
    }

    public function getCartonsJaunes(): ?int
    {
        return $this->cartonsJaunes;
    }

    public function setCartonsJaunes(int $cartonsJaunes): static
    {
        $this->cartonsJaunes = $cartonsJaunes;
        return $this;
    }

    public function getCartonsRouges(): ?int
    {
        return $this->cartonsRouges;
    }

    public function setCartonsRouges(int $cartonsRouges): static
    {
        $this->cartonsRouges = $cartonsRouges;
        return $this;
    }
}