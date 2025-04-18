<?php

namespace App\Form;

use App\Entity\Schedule;
use App\Entity\MatchEntity;
use App\Entity\Espacesportif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ScheduleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateMatch', DateType::class, [
                'label' => 'Date du Match',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('startTime', TimeType::class, [
                'label' => 'Heure de Début',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('endTime', TimeType::class, [
                'label' => 'Heure de Fin',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('matchEntity', EntityType::class, [
                'label' => 'Match',
                'class' => MatchEntity::class,
                'choice_label' => function (MatchEntity $match) {
                    return sprintf('%s vs %s', $match->getC1(), $match->getC2());
                },
                'required' => false,
                'placeholder' => 'Sélectionnez un match',
            ])
            ->add('espaceSportif', EntityType::class, [
                'label' => 'Espace Sportif',
                'class' => Espacesportif::class,
                'choice_label' => 'nomEspace',
                'required' => false,
                'placeholder' => 'Sélectionnez un espace sportif',
            ])
        ;

        // Add validation for startTime, endTime, and dateMatch
        $builder->addEventListener(\Symfony\Component\Form\FormEvents::POST_SUBMIT, function (\Symfony\Component\Form\FormEvent $event) {
            $form = $event->getForm();
            $schedule = $form->getData();

            if ($schedule instanceof Schedule) {
                // Validate startTime and endTime
                $startTime = $schedule->getStartTime();
                $endTime = $schedule->getEndTime();

                if ($startTime && $endTime && $endTime <= $startTime) {
                    $form->get('endTime')->addError(new \Symfony\Component\Form\FormError('L\'heure de fin doit être après l\'heure de début.'));
                }

                // Validate dateMatch (not in the past)
                $dateMatch = $schedule->getDateMatch();
                $today = new \DateTime('today');

                if ($dateMatch && $dateMatch < $today) {
                    $form->get('dateMatch')->addError(new \Symfony\Component\Form\FormError('La date du match ne peut pas être dans le passé.'));
                }
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Schedule::class,
        ]);
    }
}