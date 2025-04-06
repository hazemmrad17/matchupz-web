<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\MatchEntityRepository;

#[ORM\Entity(repositoryClass: MatchEntityRepository::class)]
#[ORM\Table(name: 'matchs')] // La table reste "matchs"
class MatchEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $idMatch = null;

    #[ORM\Column(type: 'string', nullable: false)]
    private string $c1 = '';

    #[ORM\Column(type: 'string', nullable: false)]
    private string $c2 = '';

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $sportType = null;

    #[ORM\OneToMany(targetEntity: Schedule::class, mappedBy: 'matchEntity')]
    private Collection $schedules;

    public function __construct()
    {
        $this->schedules = new ArrayCollection();
    }

    public function getIdMatch(): ?int
    {
        return $this->idMatch;
    }

    public function setIdMatch(int $idMatch): self
    {
        $this->idMatch = $idMatch;
        return $this;
    }

    public function getC1(): string
    {
        return $this->c1;
    }

    public function setC1(string $c1): self
    {
        $this->c1 = $c1;
        return $this;
    }

    public function getC2(): string
    {
        return $this->c2;
    }

    public function setC2(string $c2): self
    {
        $this->c2 = $c2;
        return $this;
    }

    public function getSportType(): ?string
    {
        return $this->sportType;
    }

    public function setSportType(?string $sportType): self
    {
        $this->sportType = $sportType;
        return $this;
    }

    /**
     * @return Collection<int, Schedule>
     */
    public function getSchedules(): Collection
    {
        return $this->schedules;
    }

    public function addSchedule(Schedule $schedule): self
    {
        if (!$this->schedules->contains($schedule)) {
            $this->schedules->add($schedule);
            $schedule->setMatchEntity($this);
        }
        return $this;
    }

    public function removeSchedule(Schedule $schedule): self
    {
        if ($this->schedules->removeElement($schedule)) {
            if ($schedule->getMatchEntity() === $this) {
                $schedule->setMatchEntity(null);
            }
        }
        return $this;
    }
}