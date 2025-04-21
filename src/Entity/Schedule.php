<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: \App\Repository\ScheduleRepository::class)]
#[ORM\Table(name: 'schedules')]
class Schedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'idSchedule')]
    private ?int $idSchedule = null;

    #[ORM\Column(type: 'date', name: 'dateMatch')]
    private ?\DateTimeInterface $dateMatch = null;

    #[ORM\Column(type: 'time', name: 'startTime')]
    private ?\DateTimeInterface $startTime = null;

    #[ORM\Column(type: 'time', name: 'endTime')]
    private ?\DateTimeInterface $endTime = null;

    #[ORM\ManyToOne(targetEntity: MatchEntity::class, inversedBy: 'schedules')]
    #[ORM\JoinColumn(name: 'idMatchFK', referencedColumnName: 'idMatch', nullable: false)]
    private ?MatchEntity $matchEntity = null;

    #[ORM\ManyToOne(targetEntity: Espacesportif::class)]
    #[ORM\JoinColumn(name: 'idLieu', referencedColumnName: 'id_lieu', nullable: true)]
    private ?Espacesportif $espaceSportif = null;

    public function getIdSchedule(): ?int
    {
        return $this->idSchedule;
    }

    public function setIdSchedule(int $idSchedule): self
    {
        $this->idSchedule = $idSchedule;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->getIdSchedule();
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->dateMatch;
    }

    public function setDateMatch(?\DateTimeInterface $dateMatch): self
    {
        $this->dateMatch = $dateMatch;
        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTimeInterface $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(?\DateTimeInterface $endTime): self
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

    public function getEspaceSportif(): ?Espacesportif
    {
        return $this->espaceSportif;
    }

    public function setEspaceSportif(?Espacesportif $espaceSportif): self
    {
        $this->espaceSportif = $espaceSportif;
        return $this;
    }

    public function getIdLieu(): ?int
    {
        return $this->espaceSportif ? $this->espaceSportif->getIdLieu() : null;
    }
}