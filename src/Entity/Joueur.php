<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\Table(name: "joueur")]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer", name: "id_joueur")]
    private ?int $idJoueur = null;

    #[ORM\ManyToOne(targetEntity: Sport::class)]
    #[ORM\JoinColumn(name: "id_sport", referencedColumnName: "id_sport", nullable: true)]
    private ?Sport $sport = null;

    #[ORM\OneToMany(mappedBy: "joueur", targetEntity: PerformanceJoueur::class)]
    private Collection $performances;

    #[ORM\OneToOne(mappedBy: "joueur", targetEntity: EvaluationPhysique::class, cascade: ["persist", "remove"])]
    private ?EvaluationPhysique $evaluationPhysique = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $nom;

    #[ORM\Column(type: "string", length: 255)]
    private string $prenom;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $dateNaissance;

    #[ORM\Column(type: "string", columnDefinition: "ENUM('GK', 'RB', 'LB', 'RWB', 'LWB', 'SW', 'DM', 'CM', 'AM', 'RM', 'LM', 'RW', 'LW', 'CF', 'ST', 'SS') NOT NULL")]
    private string $poste;

    #[ORM\Column(type: "float")]
    private float $taille;

    #[ORM\Column(type: "float")]
    private float $poids;

    #[ORM\Column(type: "string", columnDefinition: "ENUM('Actif', 'Blessé', 'Suspendu', '') NOT NULL")]
    private string $statut;

    #[ORM\Column(type: "string", length: 255)]
    private string $email;

    #[ORM\Column(type: "string", length: 255)]
    private string $telephone;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $profilePictureUrl = null;

    public function __construct()
    {
        $this->performances = new ArrayCollection();
    }

    public function getIdJoueur(): ?int
    {
        return $this->idJoueur;
    }

    public function getSport(): ?Sport
    {
        return $this->sport;
    }

    public function setSport(?Sport $sport): self
    {
        $this->sport = $sport;
        return $this;
    }

    /**
     * @return Collection<int, PerformanceJoueur>
     */
    public function getPerformances(): Collection
    {
        return $this->performances;
    }

    public function addPerformance(PerformanceJoueur $performance): self
    {
        if (!$this->performances->contains($performance)) {
            $this->performances->add($performance);
            $performance->setJoueur($this);
        }
        return $this;
    }

    public function removePerformance(PerformanceJoueur $performance): self
    {
        if ($this->performances->removeElement($performance)) {
            if ($performance->getJoueur() === $this) {
                $performance->setJoueur(null);
            }
        }
        return $this;
    }

    public function getEvaluationPhysique(): ?EvaluationPhysique
    {
        return $this->evaluationPhysique;
    }

    public function setEvaluationPhysique(?EvaluationPhysique $evaluationPhysique): self
    {
        if ($evaluationPhysique !== null && $evaluationPhysique->getJoueur() !== $this) {
            $evaluationPhysique->setJoueur($this);
        }
        $this->evaluationPhysique = $evaluationPhysique;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getDateNaissance(): \DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getPoste(): string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;
        return $this;
    }

    public function getTaille(): float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;
        return $this;
    }

    public function getPoids(): float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getProfilePictureUrl(): ?string
    {
        return $this->profilePictureUrl;
    }

    public function setProfilePictureUrl(?string $profilePictureUrl): self
    {
        $this->profilePictureUrl = $profilePictureUrl;
        return $this;
    }
}