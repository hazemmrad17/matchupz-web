<?php

namespace App\Form;

use App\Entity\Club;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomClub', TextType::class, [
                'label' => 'Club Name',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter club name'],
            ])
            ->add('photoUrl', FileType::class, [
                'label' => 'Club Photo',
                'mapped' => false, // We'll handle the file upload manually
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Save',
                'attr' => ['class' => 'btn btn-primary mt-3'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Club::class,
        ]);
    }
}