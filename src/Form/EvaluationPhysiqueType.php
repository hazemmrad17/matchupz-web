<?php

namespace App\Form;

use App\Entity\EvaluationPhysique;
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
            ->add('dateEvaluation', DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control'],
                'label' => 'Date d\'évaluation',
            ])
            ->add('niveauEndurance', NumberType::class, [
                'label' => 'Niveau d\'endurance (0-10)',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ])
            ->add('forcePhysique', NumberType::class, [
                'label' => 'Force physique (0-10)',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ])
            ->add('vitesse', NumberType::class, [
                'label' => 'Vitesse (0-10)',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 10,
                    'step' => 0.1,
                ],
            ])
            ->add('etatBlessure', TextType::class, [
                'label' => 'État de blessure',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EvaluationPhysique::class,
        ]);
    }
}