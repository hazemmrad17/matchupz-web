<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\SponsorRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
#[ORM\Table(name: 'sponsors')]
#[UniqueEntity(fields: ['nom'], message: 'Ce nom de sponsor existe déjà.')]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'Id_sponsor', type: 'integer')] 
    public ?int $idSponsor = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom du sponsor est obligatoire.")]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z0-9]+$/',
        message: "Le nom doit être alphanumérique (lettres et chiffres uniquement)."
    )]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le contact est obligatoire.")]
    #[Assert\Length(
        exactly: 8,
        exactMessage: "Le contact doit contenir exactement 8 chiffres."
    )]
    #[Assert\Regex(
        pattern: '/^\d{8}$/',
        message: "Le contact doit contenir uniquement 8 chiffres."
    )]
    private ?string $contact = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Vous devez sélectionner un pack.")]
    private ?string $pack = null;

    #[ORM\OneToMany(targetEntity: Contrat::class, mappedBy: 'sponsor')]
    private Collection $contrats;

    public function __construct()
    {
        $this->contrats = new ArrayCollection();
    }

    public function getId_sponsor(): ?int
    {
        return $this->Id_sponsor;
    }

    public function setId_sponsor(int $Id_sponsor): self
    {
        $this->Id_sponsor = $Id_sponsor;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    public function getPack(): ?string
    {
        return $this->pack;
    }

    public function setPack(string $pack): self
    {
        $this->pack = $pack;
        return $this;
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