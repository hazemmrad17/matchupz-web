<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('password')
            ->add('num_telephone')
            ->add('date_de_naissance', null, [
                'widget' => 'single_text',
            ])
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme'
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => 'Genre'
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'ADMIN' => 'ADMIN',
                    'RESPONSABLE_SPORTIF' => 'RESPONSABLE_SPORTIF',
                    'RESERVATEUR' => 'RESERVATEUR',
                    'RESPONSABLE_SPONSORING' => 'RESPONSABLE_SPONSORING',
                    'RESPONSABLE_LOGISTIQUE' => 'RESPONSABLE_LOGISTIQUE',
                    'RESPONSABLE_ESPACE_SPORTIF' => 'RESPONSABLE_ESPACE_SPORTIF',
                    'RESPONSABLE_COACH' => 'RESPONSABLE_COACH',
                    'UTILISATEUR' => 'UTILISATEUR'
                ],
                'label' => 'Rôle'
            ])
            ->add('image', FileType::class, [
                'label' => 'Photo de profil',
                'mapped' => false,
                'required' => false
            ])
            // reset_code a été supprimé comme demandé
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}