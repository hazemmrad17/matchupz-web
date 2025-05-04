<?php

namespace App\Entity;

use App\Repository\PerformanceJoueurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PerformanceJoueurRepository::class)]
#[ORM\Table(name: "performancejoueur")]
class PerformanceJoueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idPerformance = null;

    #[ORM\OneToOne(inversedBy: 'performanceJoueur', targetEntity: Joueur::class)]
    #[ORM\JoinColumn(name: 'id_joueur', referencedColumnName: 'id_joueur', nullable: false)]
    #[Assert\NotNull(message: "Le joueur est requis.")]
    private ?Joueur $joueur = null;

    #[ORM\Column(length: 9)]
    #[Assert\NotBlank(message: "Le champ saison est requis.")]
    #[Assert\Length(max: 9, maxMessage: "La saison ne doit pas dépasser {{ limit }} caractères (ex: 2023-2024).")]
    #[Assert\Regex(pattern: "/^\d{4}-\d{4}$/", message: "La saison doit être au format AAAA-AAAA (ex: 2023-2024).")]
    private ?string $saison = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ nombre de matches est requis.")]
    #[Assert\GreaterThanOrEqual(0, message: "Le nombre de matches doit être un entier positif ou zéro.")]
    private ?int $nombreMatches = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ minutes jouées est requis.")]
    #[Assert\GreaterThanOrEqual(0, message: "Les minutes jouées doivent être un entier positif ou zéro.")]
    private ?int $minutesJouees = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ buts marqués est requis.")]
    #[Assert\GreaterThanOrEqual(0, message: "Les buts marqués doivent être un entier positif ou zéro.")]
    private ?int $butsMarques = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ passes décisives est requis.")]
    #[Assert\GreaterThanOrEqual(0, message: "Les passes décisives doivent être un entier positif ou zéro.")]
    private ?int $passesDecisives = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ cartons jaunes est requis.")]
    #[Assert\GreaterThanOrEqual(0, message: "Les cartons jaunes doivent être un entier positif ou zéro.")]
    private ?int $cartonsJaunes = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le champ cartons rouges est requis.")]
    #[Assert\GreaterThanOrEqual(0, message: "Les cartons rouges doivent être un entier positif ou zéro.")]
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