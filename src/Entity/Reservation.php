<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\ReservationRepository;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservation')]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_reservation = null;

    public function getId_reservation(): ?int
    {
        return $this->id_reservation;
    }

    public function setId_reservation(int $id_reservation): self
    {
        $this->id_reservation = $id_reservation;
        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Espacesportif::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'id_lieu', referencedColumnName: 'id_lieu')]
    private ?Espacesportif $espacesportif = null;

    public function getEspacesportif(): ?Espacesportif
    {
        return $this->espacesportif;
    }

    public function setEspacesportif(?Espacesportif $espacesportif): self
    {
        $this->espacesportif = $espacesportif;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $date_reservee = null;

    public function getDate_reservee(): ?\DateTimeInterface
    {
        return $this->date_reservee;
    }

    public function setDate_reservee(\DateTimeInterface $date_reservee): self
    {
        $this->date_reservee = $date_reservee;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $motif = null;

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;
        return $this;
    }

    #[ORM\Column(type: 'string', nullable: false)]
    private ?string $status = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getIdReservation(): ?int
    {
        return $this->id_reservation;
    }

    public function getDateReservee(): ?\DateTimeInterface
    {
        return $this->date_reservee;
    }

    public function setDateReservee(\DateTimeInterface $date_reservee): static
    {
        $this->date_reservee = $date_reservee;

        return $this;
    }

}
