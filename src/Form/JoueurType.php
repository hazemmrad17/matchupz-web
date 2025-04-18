<?php

namespace App\Form;

use App\Entity\Joueur;
use App\Entity\Sport;
use App\Form\EvaluationPhysiqueType;
use App\Form\PerformanceJoueurType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', null, ['widget' => 'single_text'])
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
                'placeholder' => 'Sélectionner un poste',
                'required' => true,
            ])
            ->add('taille')
            ->add('poids')
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Actif' => 'Actif',
                    'Blessé' => 'Blessé',
                    'Suspendu' => 'Suspendu',
                    'Inactif' => '',
                ],
                'placeholder' => 'Sélectionner un statut',
                'required' => true,
            ])
            ->add('email')
            ->add('telephone')
            ->add('profilePicture', FileType::class, [
                'label' => 'Photo du joueur',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image JPEG ou PNG',
                    ])
                ],
            ])
            ->add('sport', EntityType::class, [
                'class' => Sport::class,
                'choice_label' => 'nomSport',
                'placeholder' => 'Sélectionner un sport',
                'required' => true,
            ])
            ->add('evaluationPhysique', EvaluationPhysiqueType::class, [
                'label' => 'Évaluation Physique',
                'required' => false,
                'mapped' => false,
                'data' => $options['evaluation_physique_data'] ?? null,
            ])
            ->add('performanceJoueur', PerformanceJoueurType::class, [
                'label' => 'Performance du Joueur',
                'required' => false,
                'mapped' => false,
                'data' => $options['performance_joueur_data'] ?? null,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
            'evaluation_physique_data' => null,
            'performance_joueur_data' => null,
        ]);
    }
}