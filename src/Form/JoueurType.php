<?php

namespace App\Form;

use App\Entity\Joueur;
use App\Entity\Sport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', null, ['widget' => 'single_text'])
            ->add('poste')
            ->add('taille')
            ->add('poids')
            ->add('statut')
            ->add('email')
            ->add('telephone')
            ->add('profilePicture', FileType::class, [
                'label' => 'Photo de Profil',
                'mapped' => false,
                'required' => false,
                'attr' => ['accept' => 'image/*'] // Accept only image files
            ])
            ->add('sport', EntityType::class, [
                'class' => Sport::class,
                'choice_label' => 'nomSport',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}