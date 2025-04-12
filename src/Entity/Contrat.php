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

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le titre du contrat est obligatoire.")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9\s]+$/',
        message: "Le titre doit être alphanumérique (lettres, chiffres et espaces uniquement)."
    )]
    private ?string $Titre = null;

    #[ORM\Column(name: 'DateDebut', type: 'date', nullable: false)]
    #[Assert\NotBlank(message: "La date de début est obligatoire.")]
    // Removed Assert\Date to avoid string type validation
    private ?\DateTimeInterface $DateDebut = null;

    #[ORM\Column(name: 'DateFin', type: 'date', nullable: false)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire.")]
    // Removed Assert\Date to avoid string type validation
    #[Assert\GreaterThan(
        propertyPath: "DateDebut",
        message: "La date de fin doit être postérieure à la date de début."
    )]
    private ?\DateTimeInterface $DateFin = null;

    #[ORM\Column(type: 'float', nullable: false)]
    #[Assert\NotBlank(message: "Le montant est obligatoire.")]
    #[Assert\Positive(message: "Le montant doit être un nombre positif.")]
    private ?float $Montant = null;

    #[ORM\ManyToOne(targetEntity: Sponsor::class, inversedBy: 'contrats')]
    #[ORM\JoinColumn(name: 'Id_sponsor', referencedColumnName: 'Id_sponsor', nullable: false)]
    #[Assert\NotBlank(message: "Vous devez sélectionner un sponsor.")]
    private ?Sponsor $sponsor = null;

    #[ORM\OneToMany(targetEntity: Transaction::class, mappedBy: 'contrat')]
    private Collection $transactions;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "La signature est obligatoire.")]
    private ?string $signature = null;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
    }

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
        if ($DateDebut === null) {
            throw new \InvalidArgumentException("La date de début est obligatoire et ne peut pas être vide.");
        }
        $this->DateDebut = $DateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(?\DateTimeInterface $DateFin): self
    {
        if ($DateFin === null) {
            throw new \InvalidArgumentException("La date de fin est obligatoire et ne peut pas être vide.");
        }
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

    /**
     * @return Collection<int, Transaction>
     */
    public function getTransactions(): Collection
    {
        if (!$this->transactions instanceof Collection) {
            $this->transactions = new ArrayCollection();
        }
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->getTransactions()->contains($transaction)) {
            $this->getTransactions()->add($transaction);
            $transaction->setContrat($this);
        }
        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->getTransactions()->removeElement($transaction)) {
            if ($transaction->getContrat() === $this) {
                $transaction->setContrat(null);
            }
        }
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
}