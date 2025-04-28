<?php

namespace App\Form;

use App\Entity\Espacesportif;
<<<<<<< HEAD
use App\Repository\EspacesportifRepository;
=======
>>>>>>> match
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
=======
>>>>>>> match

class EspacesportifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
<<<<<<< HEAD
        // Get the repository from options
        $repository = $options['espace_repository'];

=======
>>>>>>> match
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
<<<<<<< HEAD
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
=======
>>>>>>> match
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
<<<<<<< HEAD
            ->add('nombre_reservations', NumberType::class, [
                'label' => 'Nombre de Réservations',
                'mapped' => false,
=======
            // Add a field to display related statistics (e.g., number of reservations)
            // This is a read-only field, as statistics are typically calculated, not user-editable
            ->add('nombre_reservations', NumberType::class, [
                'label' => 'Nombre de Réservations',
                'mapped' => false, // This field is not mapped to the entity
>>>>>>> match
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
<<<<<<< HEAD
                'data' => $options['data'] ? $options['data']->getReservations()->count() : 0,
=======
                'data' => $options['data'] ? $options['data']->getReservations()->count() : 0, // Calculate the number of reservations
>>>>>>> match
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Espacesportif::class,
<<<<<<< HEAD
            'espace_repository' => null,
        ]);

        $resolver->setRequired('espace_repository');
        $resolver->setAllowedTypes('espace_repository', [EspacesportifRepository::class]);
=======
        ]);
>>>>>>> match
    }
}