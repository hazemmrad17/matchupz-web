<?php

namespace App\Form;

use App\Entity\Joueur;
use App\Entity\PerformanceJoueur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PerformanceJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $fields = [
            'nombreMatches' => 'Nombre de Matches',
            'minutesJouees' => 'Minutes Jouées',
            'butsMarques' => 'Buts Marqués',
            'passesDecisives' => 'Passes Décisives',
            'cartonsJaunes' => 'Cartons Jaunes',
            'cartonsRouges' => 'Cartons Rouges',
        ];

        $builder
            ->add('joueur', EntityType::class, [
                'class' => Joueur::class,
                'choice_label' => fn(Joueur $joueur) => $joueur->getPrenom() . ' ' . $joueur->getNom(),
                'label' => 'Joueur',
                'placeholder' => 'Sélectionner un joueur',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('saison', TextType::class, [
                'label' => 'Saison',
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 2023-2024'],
                'required' => true,
            ]);

        foreach ($fields as $field => $label) {
            $builder->add($field, IntegerType::class, [
                'label' => $label,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 0'],
                'required' => true,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PerformanceJoueur::class,
        ]);
    }
}