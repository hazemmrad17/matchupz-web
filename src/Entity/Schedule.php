<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\ScheduleRepository;

#[ORM\Entity(repositoryClass: ScheduleRepository::class)]
#[ORM\Table(name: 'schedules')]
class Schedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idSchedule = null;

    #[ORM\Column(type: 'date', nullable: false)]
    private ?\DateTimeInterface $dateMatch = null;

    #[ORM\Column(type: 'time', nullable: false)]
    private ?\DateTimeInterface $startTime = null;

    #[ORM\Column(type: 'time', nullable: false)]
    private ?\DateTimeInterface $endTime = null;

    #[ORM\ManyToOne(targetEntity: MatchEntity::class, inversedBy: 'schedules')]
    #[ORM\JoinColumn(name: 'idMatchFK', referencedColumnName: 'idMatch')]
    private ?MatchEntity $matchEntity = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $idLieu;

    public function getIdSchedule(): ?int
    {
        return $this->idSchedule;
    }

    public function setIdSchedule(int $idSchedule): self
    {
        $this->idSchedule = $idSchedule;
        return $this;
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->dateMatch;
    }

    public function setDateMatch(\DateTimeInterface $dateMatch): self
    {
        $this->dateMatch = $dateMatch;
        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeInterface $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function getMatchEntity(): ?MatchEntity
    {
        return $this->matchEntity;
    }

    public function setMatchEntity(?MatchEntity $matchEntity): self
    {
        $this->matchEntity = $matchEntity;
        return $this;
    }

    public function getIdLieu(): int
    {
        return $this->idLieu;
    }

    public function setIdLieu(int $idLieu): self
    {
        $this->idLieu = $idLieu;
        return $this;
    }
}