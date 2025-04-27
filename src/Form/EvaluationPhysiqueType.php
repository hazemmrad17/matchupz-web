<?php

namespace App\Form;

use App\Entity\Joueur;
use App\Entity\EvaluationPhysique;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvaluationPhysiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('joueur', EntityType::class, [
                'class' => Joueur::class,
                'choice_label' => function (Joueur $joueur) {
                    return $joueur->getPrenom() . ' ' . $joueur->getNom();
                },
                'label' => 'Joueur',
                'required' => true,
                'placeholder' => 'Sélectionner un joueur',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateEvaluation', DateType::class, [
                'label' => 'Date d\'Évaluation',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('niveauEndurance', NumberType::class, [
                'label' => 'Niveau d\'Endurance',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 8.5', 'step' => '0.1'],
            ])
            ->add('forcePhysique', NumberType::class, [
                'label' => 'Force Physique',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 7.0', 'step' => '0.1'],
            ])
            ->add('vitesse', NumberType::class, [
                'label' => 'Vitesse',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 9.0', 'step' => '0.1'], // Fixed typo: 'client' to 'class'
            ])
            ->add('etatBlessure', TextType::class, [
                'label' => 'État de Blessure',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: Aucun'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EvaluationPhysique::class,
        ]);
    }
}