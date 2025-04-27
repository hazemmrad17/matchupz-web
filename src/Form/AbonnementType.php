<?php

namespace App\Form;

use App\Entity\Abonnement;
use App\Entity\Club;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('club', EntityType::class, [
                'class' => Club::class,
                'choice_label' => 'nomClub',
                'label' => 'Club',
                'placeholder' => 'Sélectionner un club',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un club.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('typeAbonnement', ChoiceType::class, [
                'label' => 'Type d\'Abonnement',
                'choices' => [
                    'Mensuel' => 'Mensuel',
                    'Trimestriel' => 'Trimestriel',
                    'Annuel' => 'Annuel',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un type d\'abonnement.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de Début',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d'),
                ],
                'required' => true,
                'data' => new \DateTime(),
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date de début.']),
                    new GreaterThanOrEqual([
                        'value' => new \DateTime(),
                        'message' => 'La date de début doit être aujourd\'hui ou dans le futur.',
                    ]),
                ],
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de Fin',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer une date de fin.']),
                    new GreaterThanOrEqual([
                        'propertyPath' => 'parent.all[dateDebut].data',
                        'message' => 'La date de fin doit être postérieure ou égale à la date de début.',
                    ]),
                ],
            ])
            ->add('tarif', NumberType::class, [
                'label' => 'Tarif',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'step' => '1',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez entrer un tarif.']),
                    new GreaterThanOrEqual([
                        'value' => 0,
                        'message' => 'Le tarif doit être supérieur ou égal à 0.',
                    ]),
                ],
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'choices' => [
                    'Actif' => 'Actif',
                    'Expiré' => 'Expiré',
                    'Suspendu' => 'Suspendu',
                ],
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un état.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}