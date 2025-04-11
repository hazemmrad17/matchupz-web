<?php

namespace App\Form;

use App\Entity\PerformanceJoueur;
use App\Entity\Joueur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PerformanceJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('joueur', EntityType::class, [
                'class' => Joueur::class,
                'choice_label' => 'nom', // Assuming Joueur has a nom property, adjust as needed
                'placeholder' => 'Select a player',
            ])
            ->add('saison', TextType::class, [
                'label' => 'Season'
            ])
            ->add('nombreMatches', IntegerType::class, [
                'label' => 'Number of Matches',
                'required' => false
            ])
            ->add('minutesJouees', IntegerType::class, [
                'label' => 'Minutes Played',
                'required' => false
            ])
            ->add('butsMarques', IntegerType::class, [
                'label' => 'Goals Scored',
                'required' => false
            ])
            ->add('passesDecisives', IntegerType::class, [
                'label' => 'Assists',
                'required' => false
            ])
            ->add('cartonsJaunes', IntegerType::class, [
                'label' => 'Yellow Cards',
                'required' => false
            ])
            ->add('cartonsRouges', IntegerType::class, [
                'label' => 'Red Cards',
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PerformanceJoueur::class,
        ]);
    }
}