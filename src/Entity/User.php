<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
class User implements UserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id_user = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le nom ne doit contenir que des lettres"
    )]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire")]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s\-']+$/",
        message: "Le prénom ne doit contenir que des lettres"
    )]
    private ?string $prenom = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "L'email est obligatoire")]
    #[Assert\Email(message: "L'email doit être valide")]
    private ?string $email = null;

    #[ORM\Column(type: 'string', nullable: true)] // Nullable pour Google auth
    private ?string $password = null;

    #[ORM\Column(type: 'string', length: 8, nullable: false)]
    #[Assert\NotBlank(message: "Le téléphone est obligatoire")]
    #[Assert\Regex(
        pattern: "/^\d{8}$/",
        message: "Le téléphone doit contenir exactement 8 chiffres"
    )]
    private ?string $num_telephone = null;

    #[ORM\Column(type: 'date', nullable: false)]
    #[Assert\NotBlank(message: "La date de naissance est obligatoire")]
    #[Assert\LessThanOrEqual(
        value: "today",
        message: "La date de naissance ne peut pas être dans le futur"
    )]
    #[Assert\LessThan(
        value: "-18 years",
        message: "L'utilisateur doit avoir au moins 18 ans"
    )]
    private ?\DateTimeInterface $date_de_naissance = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le genre est obligatoire")]
    #[Assert\Choice(
        choices: ['Homme', 'Femme'],
        message: "Le genre doit être Homme ou Femme"
    )]
    private ?string $genre = null;

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "Le rôle est obligatoire")]
    private string $role = 'ROLE_USER'; // Utilisation du format Symfony pour les rôles

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    private ?int $reset_code = 0;

    // Implémentation de UserInterface

    public function getRoles(): array
    {
        // Convertir le rôle en tableau pour respecter le format attendu par Symfony
        return [$this->role];
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getSalt(): ?string
    {
        // Pas nécessaire si vous utilisez bcrypt ou un algorithme moderne
        return null;
    }

    public function eraseCredentials(): void
    {
        // Supprimer les données sensibles si nécessaire (par exemple, mot de passe temporaire)
    }

    public function getUsername(): string
    {
        // Retourner l'email comme identifiant unique
        return $this->email;
    }

    // Pour Symfony 5.3+ (optionnel, remplace getUsername)
    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    // Getters et Setters (inchangés, sauf pour ceux nécessaires)
    public function getId_user(): ?int
    {
        return $this->id_user;
    }

    public function setId_user(int $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getNum_telephone(): ?string
    {
        return $this->num_telephone;
    }

    public function setNum_telephone(string $num_telephone): self
    {
        $this->num_telephone = $num_telephone;
        return $this;
    }

    public function getDate_de_naissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDate_de_naissance(\DateTimeInterface $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;
        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getReset_code(): ?int
    {
        return $this->reset_code;
    }

    public function setReset_code(int $reset_code): self
    {
        $this->reset_code = $reset_code;
        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function getNumTelephone(): ?string
    {
        return $this->num_telephone;
    }

    public function setNumTelephone(string $num_telephone): self
    {
        $this->num_telephone = $num_telephone;
        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;
        return $this;
    }

    public function getResetCode(): ?int
    {
        return $this->reset_code;
    }

    public function setResetCode(int $reset_code): self
    {
        $this->reset_code = $reset_code;
        return $this;
    }
}