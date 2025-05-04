<?php

namespace App\Form;

use App\Entity\Sponsor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'empty_data' => '',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer le nom du sponsor',
                    'class' => 'form-control',
                ],
            ])
            ->add('contact', TextType::class, [
                'label' => 'Contact',
                'empty_data' => '',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrer le numéro du sponsor',
                    'class' => 'form-control',
                ],
            ])
            ->add('pack', ChoiceType::class, [
                'label' => 'Pack',
                'choices' => [
                    'Bronze' => 'Bronze',
                    'Silver' => 'Silver',
                    'Gold' => 'Gold',
                ],
                'required' => true, 
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('sponsorPicture', FileType::class, [
                'label' => 'Sponsor Picture',
                'mapped' => false, 
                'required' => false, 
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image JPEG ou PNG',
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}