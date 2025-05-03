<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('resetCode', NumberType::class, [
                'label' => 'Code de réinitialisation',
                'attr' => ['placeholder' => 'Entrez le code reçu'],
            ])
            ->add('newPassword', PasswordType::class, [
                'label' => 'Nouveau mot de passe',
                'attr' => ['placeholder' => 'Entrez votre nouveau mot de passe'],
            ]);
    }
}