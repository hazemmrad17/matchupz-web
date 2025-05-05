<?php

namespace App\Form;

use App\Entity\Joueur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'attr' => ['maxlength' => 50],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => ['maxlength' => 50],
            ])
            ->add('dateNaissance', DateType::class, [
                'label' => 'Date de Naissance',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('poste', ChoiceType::class, [
                'label' => 'Poste',
                'choices' => [
                    'Gardien' => 'GK',
                    'Arrière droit' => 'RB',
                    'Arrière gauche' => 'LB',
                    'Ailier droit défensif' => 'RWB',
                    'Ailier gauche défensif' => 'LWB',
                    'Libéro' => 'SW',
                    'Milieu défensif' => 'DM',
                    'Milieu central' => 'CM',
                    'Milieu offensif' => 'AM',
                    'Ailier droit' => 'RM',
                    'Ailier gauche' => 'LM',
                    'Ailier droit offensif' => 'RW',
                    'Ailier gauche offensif' => 'LW',
                    'Avant-centre' => 'CF',
                    'Buteur' => 'ST',
                    'Second attaquant' => 'SS',
                ],
                'required' => true,
            ])
            ->add('taille', NumberType::class, [
                'label' => 'Taille (m)',
                'scale' => 2,
                'required' => true,
                'attr' => ['step' => '0.01', 'min' => '0', 'max' => '3'],
            ])
            ->add('poids', NumberType::class, [
                'label' => 'Poids (kg)',
                'scale' => 1,
                'required' => true,
                'attr' => ['step' => '0.1', 'min' => '0', 'max' => '500'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => ['maxlength' => 100],
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'required' => true,
                'attr' => ['maxlength' => 20],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Actif' => 'Actif',
                    'Blessé' => 'Blessé',
                    'Suspendu' => 'Suspendu',
                ],
                'required' => true,
            ])
            ->add('profilePicture', FileType::class, [
                'label' => 'Photo de Profil',
                'mapped' => false, // Not directly mapped to entity property
                'required' => false,
                'attr' => ['accept' => 'image/jpeg,image/png'],
            ])
            ->add('evaluationPhysique', EvaluationPhysiqueType::class, [
                'label' => false,
                'required' => true,
            ])
            ->add('performanceJoueur', PerformanceJoueurType::class, [
                'label' => false,
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}