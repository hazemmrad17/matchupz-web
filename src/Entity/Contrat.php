<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ContratRepository;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
#[ORM\Table(name: 'contrats')]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $Id_Contrat = null;

    public function getId_Contrat(): ?int
    {
        return $this->Id_Contrat;
    }

    public function setId_Contrat(int $Id_Contrat): self
    {
        $this->Id_Contrat = $Id_Contrat;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $Titre = null;

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $DateDebut = null;

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(\DateTimeInterface $DateDebut): self
    {
        $this->DateDebut = $DateDebut;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $DateFin = null;

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(\DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    private ?float $Montant = null;

    public function getMontant(): ?float
    {
        return $this->Montant;
    }

    public function setMontant(float $Montant): self
    {
        $this->Montant = $Montant;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Sponsor::class, inversedBy: 'contrats')]
    #[ORM\JoinColumn(name: 'Id_sponsor', referencedColumnName: 'Id_sponsor')]
    private ?Sponsor $sponsor = null;

    public function getSponsor(): ?Sponsor
    {
        return $this->sponsor;
    }

    public function setSponsor(?Sponsor $sponsor): self
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Transaction::class, mappedBy: 'contrat')]
    private Collection $transactions;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
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
        }
        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        $this->getTransactions()->removeElement($transaction);
        return $this;
    }

    public function getIdContrat(): ?int
    {
        return $this->Id_Contrat;
    }

}
