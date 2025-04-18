<?php

namespace App\Form;

use App\Entity\MatchEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('c1', null, [
                'label' => 'Competitor 1',
                'required' => false,
            ])
            ->add('c2', null, [
                'label' => 'Competitor 2',
                'required' => false,
            ])
            ->add('sportType', ChoiceType::class, [
                'label' => 'Type de Sport',
                'required' => false,
                'choices' => [
                    'Football' => 'Football',
                    'Basketball' => 'Basketball',
                    'Tennis' => 'Tennis',
                    'Volleyball' => 'Volleyball',
                    'Rugby' => 'Rugby',
                ],
                'placeholder' => 'Sélectionnez un sport', // Optional: Adds a default "Select a sport" option
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MatchEntity::class,
        ]);
    }
}