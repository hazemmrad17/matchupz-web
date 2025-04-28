<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    #[Assert\NotNull(message: "Le joueur est requis.")]
    private ?Joueur $joueur = null;

    #[ORM\Column(name: "date_evaluation", type: "date", nullable: true)]
    #[Assert\NotBlank(message: "Le champ date d'évaluation est requis.")]
    #[Assert\LessThanOrEqual("today", message: "La date d'évaluation ne peut pas être dans le futur.")]
    private ?\DateTimeInterface $dateEvaluation = null;

    #[ORM\Column(name: "niveau_endurance", type: "float", nullable: true)]
    #[Assert\NotBlank(message: "Le champ niveau d'endurance est requis.")]
    #[Assert\Range(
        min: 0,
        max: 10,
        notInRangeMessage: "Le niveau d'endurance doit être entre {{ min }} et {{ max }}."
    )]
    private ?float $niveauEndurance = null;

    #[ORM\Column(name: "force_physique", type: "float", nullable: true)]
    #[Assert\NotBlank(message: "Le champ force physique est requis.")]
    #[Assert\Range(
        min: 0,
        max: 10,
        notInRangeMessage: "La force physique doit être entre {{ min }} et {{ max }}."
    )]
    private ?float $forcePhysique = null;

    #[ORM\Column(name: "vitesse", type: "float", nullable: true)]
    #[Assert\NotBlank(message: "Le champ vitesse est requis.")]
    #[Assert\Range(
        min: 0,
        max: 10,
        notInRangeMessage: "La vitesse doit être entre {{ min }} et {{ max }}."
    )]
    private ?float $vitesse = null;

    #[ORM\Column(name: "etat_blessure", type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Le champ état de blessure est requis.")]
    #[Assert\Length(
        max: 255,
        maxMessage: "L'état de blessure ne doit pas dépasser {{ limit }} caractères."
    )]
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