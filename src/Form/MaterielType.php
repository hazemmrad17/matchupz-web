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

class MaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du Matériel',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom du matériel'],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'required' => true,
                'choices' => [
                    'Équipement' => 'EQUIPEMENT',
                    'Accessoire' => 'ACCESSOIRE',
                    'Tenue' => 'TENUE',
                    'Infrastructure' => 'INFRASTRUCTURE',
                ],
                'placeholder' => false, // No empty option
                'attr' => ['class' => 'form-select'],
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Quantité en stock',
                    'min' => 0,
                ],
                'invalid_message' => 'Veuillez entrer une quantité valide.',
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'required' => true,
                'choices' => [
                    'Neuf' => 'NEUF',
                    'Usé' => 'USÉ',
                    'Endommagé' => 'ENDOMMAGÉ',
                ],
                'placeholder' => false, // No empty option
                'attr' => ['class' => 'form-select'],
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix Unitaire (€)',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prix unitaire',
                    'step' => '0.01',
                ],
                'invalid_message' => 'Veuillez entrer un prix valide.',
            ])
            ->add('barcode', TextType::class, [
                'label' => 'Code-barres',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Code-barres'],
            ])
            ->add('fournisseur', EntityType::class, [
                'label' => 'Fournisseur',
                'class' => Fournisseur::class,
                'choice_label' => 'nom',
                'required' => false,
                'placeholder' => 'Sélectionnez un fournisseur',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
        ]);
    }
}