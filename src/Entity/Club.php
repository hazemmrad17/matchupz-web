<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "club")]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $idClub = null;

    #[ORM\Column(type: "string", length: 100)]
    private ?string $nomClub = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $photoUrl = null;

    // Getters and Setters
    public function getIdClub(): ?int
    {
        return $this->idClub;
    }

    public function getNomClub(): ?string
    {
        return $this->nomClub;
    }

    public function setNomClub(string $nomClub): self
    {
        $this->nomClub = $nomClub;
        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;
        return $this;
    }
}