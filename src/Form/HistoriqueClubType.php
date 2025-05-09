<?php

namespace App\Form;

use App\Entity\HistoriqueClub;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Joueur;

class HistoriqueClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('joueur', EntityType::class, [
                'class' => Joueur::class,
                'choice_label' => 'nom', // à adapter selon ton entité Joueur
                'label' => 'Joueur',
            ])
            ->add('nomClub', TextType::class, [
                'label' => 'Nom du Club',
            ])
            ->add('saisonDebut', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Saison Début',
                'required' => true,
            ])
            ->add('saisonFin', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Saison Fin',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HistoriqueClub::class,
        ]);
    }
}
