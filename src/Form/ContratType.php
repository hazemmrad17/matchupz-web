<?php

namespace App\Form;

use App\Entity\Contrat;
use App\Entity\Sponsor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre', TextType::class, [
                'label' => 'Titre du contrat',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('DateDebut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd', // Format for rendering the DateTime object as a string
                'input' => 'datetime', // Tell Symfony the data is a DateTime object
                'attr' => [
                    'class' => 'form-control',
                    'type' => 'date',
                    'required' => true,
                ],
                'required' => true,
            ])
            ->add('DateFin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'input' => 'datetime',
                'attr' => [
                    'class' => 'form-control',
                    'type' => 'date',
                    'required' => true,
                ],
                'required' => true,
            ])
            ->add('Montant', NumberType::class, [
                'label' => 'Montant',
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'step' => 0.01,
                ],
                'required' => true,
            ])
            ->add('sponsor', EntityType::class, [
                'class' => Sponsor::class,
                'choice_label' => 'nom',
                'label' => 'Sponsor',
                'placeholder' => 'Sélectionner un sponsor',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
            ->add('signature', TextType::class, [
                'label' => 'Signature',
                'attr' => ['class' => 'form-control'],
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
            // Disable strict type checking for form data
            'allow_extra_fields' => true,
        ]);
    }
}