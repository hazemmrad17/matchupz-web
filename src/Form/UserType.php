<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'empty_data' => '',
            ])
            ->add('prenom', TextType::class, [
                'empty_data' => '',
            ])
            ->add('email', TextType::class, [
                'empty_data' => '',
            ])
            ->add('password', PasswordType::class, [
                'empty_data' => '',
            ])
            ->add('num_telephone', TextType::class, [
                'required' => false,
                'empty_data' => '',
            ])
            ->add('date_de_naissance', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'empty_data' => null,
                'attr' => [
                    'placeholder' => 'jj/mm/aaaa',
                ],
            ])
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
                'expanded' => true,
                'multiple' => false,
                'required' => true,
                'empty_data' => '',
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Utilisateur' => 'Utilisateur',
                    'Admin' => 'ADMIN',
                ],
                'multiple' => false,
                'required' => true,
                'data' => 'Utilisateur', // Valeur par défaut
            ])
            ->add('image', FileType::class, [
                'required' => false,
                'mapped' => false, // We'll handle the mapping manually in the controller
                'data_class' => null, // Fix the error by allowing the field to handle string values
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}