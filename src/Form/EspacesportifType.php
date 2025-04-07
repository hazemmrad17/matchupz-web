<?php

namespace App\Form;

use App\Entity\Espacesportif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EspacesportifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_espace', TextType::class, [
                'label' => 'Nom de l\'Espace',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom de l\'espace sportif',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez l\'adresse de l\'espace sportif',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Terrain Foot' => 'terrain foot',
                    'Terrain Basket' => 'terrain basket',
                    'Salle Gym' => 'salle gym',
                    'Football' => 'football',
                    // Removed 'Football\'' => 'Football\''
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            ->add('capacite', NumberType::class, [
                'label' => 'Capacité',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'step' => '1',
                    'min' => '0',
                    'placeholder' => 'Entrez la capacité de l\'espace',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            // Add a field to display related statistics (e.g., number of reservations)
            // This is a read-only field, as statistics are typically calculated, not user-editable
            ->add('nombre_reservations', NumberType::class, [
                'label' => 'Nombre de Réservations',
                'mapped' => false, // This field is not mapped to the entity
                'required' => false,
                'disabled' => true,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true,
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
                'data' => $options['data'] ? $options['data']->getReservations()->count() : 0, // Calculate the number of reservations
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Espacesportif::class,
        ]);
    }
}