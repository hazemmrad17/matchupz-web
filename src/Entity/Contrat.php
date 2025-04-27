<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ContratRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
#[ORM\Table(name: 'contrats')]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'Id_Contrat')]
    public ?int $Id_Contrat = null;

    #[ORM\Column(name : 'Titre', type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le titre du contrat est obligatoire.")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9\s]+$/',
        message: "Le titre doit être alphanumérique (lettres, chiffres et espaces uniquement)."
    )]
    private ?string $Titre = null;

    #[ORM\Column(name: 'DateDebut', type: 'date', nullable: false)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de début ne peut pas être antérieure à aujourd'hui.")]
    private ?\DateTimeInterface $DateDebut = null;


    #[ORM\Column(name: 'DateFin', type: 'date', nullable: false)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    // Removed Assert\Date to avoid string type validation
    #[Assert\GreaterThan(
        propertyPath: "DateDebut",
        message: "La date de fin doit être postérieure à la date de début."
    )]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(name: 'Montant', type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "Le montant est obligatoire.")]
    #[Assert\Positive(message: "Le montant doit être un nombre positif.")]
    private ?float $Montant = null;

    #[ORM\ManyToOne(targetEntity: Sponsor::class, inversedBy: 'contrats')]
    #[ORM\JoinColumn(name: 'Id_sponsor', referencedColumnName: 'Id_sponsor', nullable: false)]
    #[Assert\NotBlank(message: "Vous devez sélectionner un sponsor.")]
    private ?Sponsor $sponsor = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $signature = null;

    #[ORM\Column(type: 'text', nullable: false)]
    #[Assert\NotBlank(message: "L'article du contrat est obligatoire.")]
    private string $article = '';


   
    public function getIdContrat(): ?int
    {
        return $this->Id_Contrat;
    }

    public function setIdContrat(int $Id_Contrat): self
    {
        $this->Id_Contrat = $Id_Contrat;
        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $DateDebut): self
    {
        $this->DateDebut = $DateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(?\DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;
        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(float $Montant): self
    {
        $this->Montant = $Montant;
        return $this;
    }

    public function getSponsor(): ?Sponsor
    {
        return $this->sponsor;
    }

    public function setSponsor(?Sponsor $sponsor): self
    {
        $this->sponsor = $sponsor;
        return $this;
    }
    
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    public function getArticle(): string
    {
        return $this->article;
    }

    public function setArticle(string $article): self
    {
        $this->article = $article;
        return $this;
    }
}