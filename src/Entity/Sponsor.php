<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\SponsorRepository;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
#[ORM\Table(name: 'sponsors')]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $Id_sponsor = null;

    public function getId_sponsor(): ?int
    {
        return $this->Id_sponsor;
    }

    public function setId_sponsor(int $Id_sponsor): self
    {
        $this->Id_sponsor = $Id_sponsor;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $contact = null;

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $pack = null;

    public function getPack(): ?string
    {
        return $this->pack;
    }

    public function setPack(string $pack): self
    {
        $this->pack = $pack;
        return $this;
    }

    #[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'sponsor')]
    private Collection $contrats;

    public function __construct()
    {
        $this->contrats = new ArrayCollection();
    }

    /**
     * @return Collection<int, Contrat>
     */
    public function getContrats(): Collection
    {
        if (!$this->contrats instanceof Collection) {
            $this->contrats = new ArrayCollection();
        }
        return $this->contrats;
    }

    public function addContrat(Contrat $contrat): self
    {
        if (!$this->getContrats()->contains($contrat)) {
            $this->getContrats()->add($contrat);
        }
        return $this;
    }

    public function removeContrat(Contrat $contrat): self
    {
        $this->getContrats()->removeElement($contrat);
        return $this;
    }

    public function getIdSponsor(): ?int
    {
        return $this->Id_sponsor;
    }

}
