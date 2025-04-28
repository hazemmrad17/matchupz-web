<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Espacesportif;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
=======
>>>>>>> match

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('espacesportif', EntityType::class, [
                'class' => Espacesportif::class,
                'choice_label' => 'nom_espace',
                'label' => 'Lieu Sportif',
                'placeholder' => 'Sélectionner un lieu sportif',
                'required' => true,
<<<<<<< HEAD
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un lieu sportif.']),
                ],
=======
>>>>>>> match
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('date_reservee', DateTimeType::class, [
                'label' => 'Date et Heure Réservée',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i'), // Ensures future dates
                ],
                'required' => true,
<<<<<<< HEAD
                'data' => new \DateTime(), // Set a default value to prevent null
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner une date et une heure.']),
                    new GreaterThanOrEqual([
                        'value' => new \DateTime(),
                        'message' => 'La date de réservation doit être dans le futur.',
                    ]),
                ],
=======
>>>>>>> match
            ])
            ->add('motif', ChoiceType::class, [
                'label' => 'Motif',
                'choices' => [
                    'Match' => 'match',
                    'Entraînement' => 'entraînement',
                    'Tournoi' => 'tournoi',
                    'Autre' => 'autre',
                ],
                'required' => true,
<<<<<<< HEAD
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un motif.']),
                ],
=======
>>>>>>> match
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Confirmée' => 'confirmée',
                    'Annulée' => 'annulée',
                    'En attente' => 'en attente',
                ],
                'required' => true,
<<<<<<< HEAD
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un statut.']),
                ],
=======
>>>>>>> match
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}