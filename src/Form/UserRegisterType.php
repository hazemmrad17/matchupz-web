<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;

class UserRegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom*',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre nom',
                    'autofocus' => true,
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom*',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre prénom',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email*',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre email',
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe*',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '············',
                ],
            ])
            ->add('num_telephone', TelType::class, [
                'label' => 'Téléphone',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez votre numéro',
                ],
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
                'label' => 'Genre*',
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*',
                ],
            ])
            ->add('role', HiddenType::class, [
                'data' => 'Utilisateur',
            ])
            ->add('terms', CheckboxType::class, [
                'label' => 'J\'accepte la politique de confidentialité et les termes',
                'mapped' => false,
                'constraints' => [
                    new IsTrue(['message' => 'Veuillez accepter les conditions d\'utilisation.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}