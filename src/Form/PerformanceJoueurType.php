<?php

namespace App\Form;

use App\Entity\PerformanceJoueur;
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
            ->add('saison', TextType::class, [
                'label' => 'Season',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('nombreMatches', IntegerType::class, [
                'label' => 'Number of Matches',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('minutesJouees', IntegerType::class, [
                'label' => 'Minutes Played',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('butsMarques', IntegerType::class, [
                'label' => 'Goals Scored',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('passesDecisives', IntegerType::class, [
                'label' => 'Assists',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('cartonsJaunes', IntegerType::class, [
                'label' => 'Yellow Cards',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('cartonsRouges', IntegerType::class, [
                'label' => 'Red Cards',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PerformanceJoueur::class,
        ]);
    }
}