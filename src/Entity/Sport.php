<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: "sport")]
class Sport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idSport = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom du sport est requis.")]
    #[Assert\Length(
        max: 100,
        maxMessage: "Le nom du sport ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $nomSport = null;

    #[ORM\Column(type: "text", nullable: true, name: "description")]
    #[Assert\Length(
        max: 1000,
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $description = null;

    // Getters and Setters
    public function getIdSport(): ?int
    {
        return $this->idSport;
    }

    public function getNomSport(): ?string
    {
        return $this->nomSport;
    }

    public function setNomSport(string $nomSport): self
    {
        $this->nomSport = $nomSport;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}