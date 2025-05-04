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
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: Dupont'],
                'constraints' => [new NotBlank(['message' => 'Le nom ne peut pas être vide.'])],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: Jean'],
                'constraints' => [new NotBlank(['message' => 'Le prénom ne peut pas être vide.'])],
            ])
            ->add('dateNaissance', DateType::class, [
                'label' => 'Date de Naissance',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'La date de naissance ne peut pas être vide.']),
                    new LessThanOrEqual(['value' => 'today', 'message' => 'La date de naissance ne peut pas être dans le futur.']),
                ],
            ])
            ->add('poste', ChoiceType::class, [
                'choices' => [
                    'Gardien de but' => 'GK',
                    'Arrière droit' => 'RB',
                    'Arrière gauche' => 'LB',
                    'Ailier droit défensif' => 'RWB',
                    'Ailier gauche défensif' => 'LWB',
                    'Libéro' => 'SW',
                    'Milieu défensif' => 'DM',
                    'Milieu central' => 'CM',
                    'Milieu offensif' => 'AM',
                    'Milieu droit' => 'RM',
                    'Milieu gauche' => 'LM',
                    'Ailier droit' => 'RW',
                    'Ailier gauche' => 'LW',
                    'Avant-centre' => 'CF',
                    'Attaquant' => 'ST',
                    'Second attaquant' => 'SS',
                ],
                'label' => 'Poste',
                'placeholder' => 'Sélectionner un poste',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [new NotBlank(['message' => 'Le poste ne peut pas être vide.'])],
            ])
            ->add('taille', NumberType::class, [
                'label' => 'Taille (m)',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 1.85', 'step' => '0.01'],
                'constraints' => [new NotBlank(['message' => 'La taille ne peut pas être vide.'])],
            ])
            ->add('poids', NumberType::class, [
                'label' => 'Poids (kg)',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: 75', 'step' => '0.1'],
                'constraints' => [new NotBlank(['message' => 'Le poids ne peut pas être vide.'])],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: email@exemple.com'],
                'constraints' => [new NotBlank(['message' => 'L\'email ne peut pas être vide.'])],
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'required' => true,
                'attr' => ['class' => 'form-control phone-mask', 'placeholder' => 'ex: +33 6 12 34 56 78'],
                'constraints' => [new NotBlank(['message' => 'Le téléphone ne peut pas être vide.'])],
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Actif' => 'Actif',
                    'Blessé' => 'Blessé',
                    'Suspendu' => 'Suspendu',
                    'Inactif' => '',
                ],
                'label' => 'Statut',
                'placeholder' => 'Sélectionner un statut',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'constraints' => [new NotBlank(['message' => 'Le statut ne peut pas être vide.'])],
            ])
            ->add('profilePicture', FileType::class, [
                'label' => 'Photo du joueur',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image JPEG ou PNG.',
                    ]),
                ],
                'attr' => ['class' => 'form-control'],
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