<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
#[ORM\Table(name: 'joueur')]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_joueur', type: Types::INTEGER)]
    private ?int $idJoueur = null;

    #[ORM\Column(type: Types::STRING, length: 50)]
    #[Assert\NotBlank(message: 'Le nom ne peut pas être vide.')]
    #[Assert\Length(max: 50, maxMessage: 'Le nom ne doit pas dépasser 50 caractères.')]
    private ?string $nom = null;

    #[ORM\Column(type: Types::STRING, length: 50)]
    #[Assert\NotBlank(message: 'Le prénom ne peut pas être vide.')]
    #[Assert\Length(max: 50, maxMessage: 'Le prénom ne doit pas dépasser 50 caractères.')]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de naissance ne peut pas être vide.')]
    #[Assert\LessThanOrEqual('today', message: 'La date de naissance ne peut pas être dans le futur.')]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\ManyToOne(targetEntity: Sport::class)]
    #[ORM\JoinColumn(name: 'id_sport', referencedColumnName: 'id_sport', nullable: true)]
    private ?Sport $sport = null;

    #[ORM\Column(type: Types::STRING, length: 3)]
    #[Assert\NotBlank(message: 'Le poste ne peut pas être vide.')]
    #[Assert\Choice(
        choices: ['GK', 'RB', 'LB', 'RWB', 'LWB', 'SW', 'DM', 'CM', 'AM', 'RM', 'LM', 'RW', 'LW', 'CF', 'ST', 'SS'],
        message: 'Veuillez sélectionner un poste valide.'
    )]
    private ?string $poste = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: 'La taille ne peut pas être vide.')]
    #[Assert\GreaterThan(0, message: 'La taille doit être un nombre positif.')]
    #[Assert\LessThanOrEqual(3, message: 'La taille semble irréaliste (max 3m).')]
    private ?float $taille = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: 'Le poids ne peut pas être vide.')]
    #[Assert\GreaterThan(0, message: 'Le poids doit être un nombre positif.')]
    #[Assert\LessThanOrEqual(500, message: 'Le poids semble irréaliste (max 500kg).')]
    private ?float $poids = null;

    #[ORM\Column(type: Types::STRING, length: 100)]
    #[Assert\NotBlank(message: 'L\'email ne peut pas être vide.')]
    #[Assert\Email(message: 'Veuillez entrer un email valide.')]
    #[Assert\Length(max: 100, maxMessage: 'L\'email ne doit pas dépasser 100 caractères.')]
    private ?string $email = null;

    #[ORM\Column(type: Types::STRING, length: 20)]
    #[Assert\NotBlank(message: 'Le téléphone ne peut pas être vide.')]
    #[Assert\Regex(
        pattern: '/^\+?[\d\s-]{9,}$/',
        message: 'Veuillez entrer un numéro de téléphone valide.'
    )]
    #[Assert\Length(max: 20, maxMessage: 'Le numéro ne doit pas dépasser 20 caractères.')]
    private ?string $telephone = null;

    #[ORM\Column(type: Types::STRING, length: 20)]
    #[Assert\NotBlank(message: 'Le statut ne peut pas être vide.')]
    #[Assert\Choice(
        choices: ['Actif', 'Blessé', 'Suspendu', ''],
        message: 'Veuillez sélectionner un statut valide.'
    )]
    private ?string $statut = null;

    #[ORM\Column(name: 'profile_picture_url', type: Types::STRING, length: 255, nullable: true)]
    private ?string $profilePicture = null;

    #[ORM\OneToOne(targetEntity: EvaluationPhysique::class, mappedBy: 'joueur', cascade: ['persist', 'remove'])]
    private ?EvaluationPhysique $evaluationPhysique = null;

    #[ORM\OneToOne(targetEntity: PerformanceJoueur::class, mappedBy: 'joueur', cascade: ['persist', 'remove'])]
    private ?PerformanceJoueur $performanceJoueur = null;

    public function getIdJoueur(): ?int
    {
        return $this->idJoueur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getSport(): ?Sport
    {
        return $this->sport;
    }

    public function setSport(?Sport $sport): static
    {
        $this->sport = $sport;
        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): static
    {
        $this->poste = $poste;
        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): static
    {
        $this->taille = $taille;
        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): static
    {
        $this->poids = $poids;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getProfilePicture(): ?string
    {
        return $this->profilePicture;
    }

    public function setProfilePicture(?string $profilePicture): static
    {
        $this->profilePicture = $profilePicture;
        return $this;
    }

    public function getEvaluationPhysique(): ?EvaluationPhysique
    {
        return $this->evaluationPhysique;
    }

    public function setEvaluationPhysique(?EvaluationPhysique $evaluationPhysique): static
    {
        if ($evaluationPhysique !== null && $evaluationPhysique->getJoueur() !== $this) {
            $evaluationPhysique->setJoueur($this);
        }
        $this->evaluationPhysique = $evaluationPhysique;
        return $this;
    }

    public function getPerformanceJoueur(): ?PerformanceJoueur
    {
        return $this->performanceJoueur;
    }

    public function setPerformanceJoueur(?PerformanceJoueur $performanceJoueur): static
    {
        if ($performanceJoueur !== null && $performanceJoueur->getJoueur() !== $this) {
            $performanceJoueur->setJoueur($this);
        }
        $this->performanceJoueur = $performanceJoueur;
        return $this;
    }
}