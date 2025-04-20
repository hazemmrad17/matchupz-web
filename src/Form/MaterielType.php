<?php

namespace App\Form;

use App\Entity\Materiel;
use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;

class MaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du Matériel',
                'required' => true,
                'empty_data' => '',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom du matériel'],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'required' => true,
                'choices' => [
                    'Équipement Sportif' => 'EQUIPEMENT_SPORTIF',
                    'Accessoire d’Entraînement' => 'ACCESSOIRE_ENTRAINEMENT',
                    'Matériel de Jeu' => 'MATERIEL_JEU',
                    'Tenue Sportive' => 'TENUE_SPORTIVE',
                    'Équipement de Protection' => 'EQUIPEMENT_PROTECTION',
                    'Infrastructure' => 'INFRASTRUCTURE',
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => true,
                'empty_data' => 6,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Quantité en stock (> 5)'],
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'required' => true,
                'choices' => [
                    'Neuf' => 'NEUF',
                    'Usé' => 'USÉ',
                    'Endommagé' => 'ENDOMMAGÉ',
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix Unitaire (€)',
                'required' => true,
                'empty_data' => 0.0,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Prix unitaire'],
            ])
            ->add('barcode', TextType::class, [
                'label' => 'Code-barres',
                'required' => true,
                'empty_data' => '',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Code-barres'],
            ])
            ->add('fournisseur', EntityType::class, [
                'label' => 'Fournisseur',
                'class' => Fournisseur::class,
                'choice_label' => 'nom',
                'required' => true,
                'placeholder' => 'Sélectionnez un fournisseur',
                'empty_data' => null,
                'attr' => ['class' => 'form-select'],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new File([
                        'maxSize' => '5m',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG, JPEG, PNG).',
                        'maxSizeMessage' => 'L\'image ne doit pas dépasser 5 Mo.',
                    ])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
        ]);
    }
}