<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('email')
            ->add('adresse')
            ->add('categorie_produit', ChoiceType::class, [
                'choices' => [
                    'Équipement Sportif' => 'EQUIPEMENT_SPORTIF',
                    'Accessoire d\'Entraînement' => 'ACCESSOIRE_ENTRAINEMENT',
                    'Matériel de Jeu' => 'MATERIEL_JEU',
                    'Tenue Sportive' => 'TENUE_SPORTIVE',
                    'Équipement de Protection' => 'EQUIPEMENT_PROTECTION',
                    'Infrastructure' => 'INFRASTRUCTURE',
                ],
                'placeholder' => 'Sélectionnez une catégorie',
                'required' => true,
                'label' => 'Catégorie de Produits'
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
