<?php
namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du Fournisseur',
                'required' => true,
                'empty_data' => '',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => false,
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => false,
            ])
            ->add('categorie_produit', ChoiceType::class, [
                'label' => 'Catégorie de Produit',
                'choices' => [
                    'Équipement Sportif' => 'EQUIPEMENT_SPORTIF',
                    'Accessoire Entraînement' => 'ACCESSOIRE_ENTRAINEMENT',
                    'Matériel de Jeu' => 'MATERIEL_JEU',
                    'Tenue Sportive' => 'TENUE_SPORTIVE',
                    'Équipement de Protection' => 'EQUIPEMENT_PROTECTION',
                    'Infrastructure' => 'INFRASTRUCTURE',
                ],
                'required' => true,
                'empty_data' => '',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}