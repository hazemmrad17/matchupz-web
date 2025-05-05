<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class VideoUploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('videoFile', FileType::class, [
                'label' => 'Video File',
                'required' => true,
                'attr' => ['class' => 'form-control', 'accept' => 'video/mp4,video/avi'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Please upload a video file.']),
                    new Assert\File([
                        'maxSize' => '500m',
                        'mimeTypes' => ['video/mp4', 'video/avi'],
                        'maxSizeMessage' => 'The video file is too large (max {{ limit }}).',
                        'mimeTypesMessage' => 'Please upload a valid video file (.mp4 or .avi).',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}