<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'disabled' => true,
                'label'=> 'Mon adresse mail'
            ])
            
            ->add('firstname', TextType::class, [
                'disabled' => true,
                'label'=> 'Mon prénom'
            ])
            ->add('lastname', TextType::class, [
                'disabled' => true,
                'label'=> 'Mon nom'
            ])
            
            ->add('old_password', PasswordType::class, [
                'label' => 'mon mot de passe actuel',
                'mapped' => false,
                'attr' => [
                    'placeholder'=> 'veuillez saisir votre mot de passe actuel'
                ]
            ])

            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message'=> "Le mot de passe et la confirmation doivent être identiques",
                'required'=> true,
                'label'=>'nouveau mot de passe',
                'first_options'=> [
                    'attr'=>['placeholder'=>'merci de saisir votre mot de passe'],
                    'label'=> 'nouveau mot de passe'],
                    
                'second_options' => [
                    'label'=> 'confirmez votre mot de passe',
                    'attr'=>['placeholder'=>'merci de confirmer votre mot de passe']
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'Valider'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}