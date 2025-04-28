<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\TransactionRepository;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ORM\Table(name: 'transactions')]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $Id_Transaction = null;

    public function getId_Transaction(): ?int
    {
        return $this->Id_Transaction;
    }

    public function setId_Transaction(int $Id_Transaction): self
    {
        $this->Id_Transaction = $Id_Transaction;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $Type = null;

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;
        return $this;
    }

    #[ORM\Column(type: 'float', nullable: false)]
    private ?float $SommeArgent = null;

    public function getSommeArgent(): ?float
    {
        return $this->SommeArgent;
    }

    public function setSommeArgent(float $SommeArgent): self
    {
        $this->SommeArgent = $SommeArgent;
        return $this;
    }

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $Date = null;

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $Description = null;

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Contrat::class, inversedBy: 'transactions')]
    #[ORM\JoinColumn(name: 'Id_Contrat', referencedColumnName: 'Id_Contrat')]
    private ?Contrat $contrat = null;

    public function getContrat(): ?Contrat
    {
        return $this->contrat;
    }

    public function setContrat(?Contrat $contrat): self
    {
        $this->contrat = $contrat;
        return $this;
    }

    public function getIdTransaction(): ?int
    {
        return $this->Id_Transaction;
    }

}
