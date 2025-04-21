<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: "App\Repository\EvaluationPhysiqueRepository")]
#[ORM\Table(name: "evaluationphysique")]
class EvaluationPhysique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_evaluation", type: "integer")]
    private ?int $idEvaluation = null;

    #[ORM\OneToOne(inversedBy: "evaluationPhysique", targetEntity: "App\Entity\Joueur")]
    #[ORM\JoinColumn(name: "id_joueur", referencedColumnName: "id_joueur", nullable: false)]
    private ?Joueur $joueur = null;

    #[ORM\Column(name: "date_evaluation", type: "date", nullable: true)]
    private ?\DateTimeInterface $dateEvaluation = null;

    #[ORM\Column(name: "niveau_endurance", type: "float", nullable: true)]
    private ?float $niveauEndurance = null;

    #[ORM\Column(name: "force_physique", type: "float", nullable: true)]
    private ?float $forcePhysique = null;

    #[ORM\Column(name: "vitesse", type: "float", nullable: true)]
    private ?float $vitesse = null;

    #[ORM\Column(name: "etat_blessure", type: "string", length: 255, nullable: true)]
    private ?string $etatBlessure = null;

    // Getters and Setters
    public function getIdEvaluation(): ?int { return $this->idEvaluation; }
    public function getJoueur(): ?Joueur { return $this->joueur; }
    public function setJoueur(?Joueur $joueur): self { $this->joueur = $joueur; return $this; }
    public function getDateEvaluation(): ?\DateTimeInterface { return $this->dateEvaluation; }
    public function setDateEvaluation(?\DateTimeInterface $dateEvaluation): self { $this->dateEvaluation = $dateEvaluation; return $this; }
    public function getNiveauEndurance(): ?float { return $this->niveauEndurance; }
    public function setNiveauEndurance(?float $niveauEndurance): self { $this->niveauEndurance = $niveauEndurance; return $this; }
    public function getForcePhysique(): ?float { return $this->forcePhysique; }
    public function setForcePhysique(?float $forcePhysique): self { $this->forcePhysique = $forcePhysique; return $this; }
    public function getVitesse(): ?float { return $this->vitesse; }
    public function setVitesse(?float $vitesse): self { $this->vitesse = $vitesse; return $this; }
    public function getEtatBlessure(): ?string { return $this->etatBlessure; }
    public function setEtatBlessure(?string $etatBlessure): self { $this->etatBlessure = $etatBlessure; return $this; }
}