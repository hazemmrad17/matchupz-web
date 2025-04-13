<?php

namespace App\Form;

use App\Entity\Espacesportif;
use App\Repository\EspacesportifRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class EspacesportifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Get the repository from options
        $repository = $options['espace_repository'];

        $builder
            ->add('nom_espace', TextType::class, [
                'label' => 'Nom de l\'Espace',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nom de l\'espace sportif',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'Le nom de l\'espace ne peut contenir que des lettres et des espaces.',
                    ]),
                    new Callback([
                        'callback' => function ($value, ExecutionContextInterface $context) use ($repository, $options) {
                            // Get the current entity (if editing)
                            $currentEntity = $options['data'];
                            $currentId = $currentEntity ? $currentEntity->getIdLieu() : null;

                            // Check if the nom_espace already exists for another entity
                            $existing = $repository->findOneBy(['nom_espace' => $value]);
                            if ($existing && (!$currentId || $existing->getIdLieu() !== $currentId)) {
                                $context->buildViolation('Le nom de l\'espace doit être unique.')
                                    ->addViolation();
                            }
                        },
                    ]),
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez l\'adresse de l\'espace sportif',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Terrain Foot' => 'terrain foot',
                    'Terrain Basket' => 'terrain basket',
                    'Salle Gym' => 'salle gym',
                    'Football' => 'football',
                    // Removed 'Football\'' => 'Football\''
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            ->add('capacite', NumberType::class, [
                'label' => 'Capacité',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'step' => '1',
                    'min' => '0',
                    'placeholder' => 'Entrez la capacité de l\'espace',
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
            ])
            ->add('nombre_reservations', NumberType::class, [
                'label' => 'Nombre de Réservations',
                'mapped' => false,
                'required' => false,
                'disabled' => true,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true,
                ],
                'label_attr' => [
                    'class' => 'form-label',
                ],
                'row_attr' => [
                    'class' => 'mb-3',
                ],
                'data' => $options['data'] ? $options['data']->getReservations()->count() : 0,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Espacesportif::class,
            'espace_repository' => null,
        ]);

        $resolver->setRequired('espace_repository');
        $resolver->setAllowedTypes('espace_repository', [EspacesportifRepository::class]);
    }
}