<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "sport")]
class Sport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idSport = null;

    #[ORM\Column(type: "string", length: 100)]
    private ?string $nomSport = null;

    #[ORM\Column(type: "text", nullable: true, name: "description")]
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