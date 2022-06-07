<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('firstname', TextType::class, [
            'label'=>'votre prénom',
            'constraints'=> new Length([
                'min'=>2,
                'max'=>30
            ]),
            'attr'=>[
                'placeholder'=> 'merci de saisir votre prénom',
            ]
        ])
        ->add('lastname', TextType::class, [
            'label' => 'votre nom',
            'constraints'=> new Length([
                'min'=>2,
                'max'=>30
            ]),
            'attr'=> [
                'placeholder'=> 'merci de saisir votre nom',
            ]
        ])
            ->add('email', EmailType::class, [
                'label'=> 'votre email',
                'constraints'=> new Length([
                    'min'=>2,
                    'max'=>60
                ]),
                'attr'=> [
                    'placeholder'=>'merci de saisir votre email',
                ]
            ])

            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message'=> "Le mot de passe et la confirmation doivent être identiques",
                'required'=> true,
                'label'=>'votre mot de passe',
                'first_options'=> [
                    'attr'=>['placeholder'=>'merci de saisir votre mot de passe'],
                    'label'=> 'mot de passe'],
                    
                'second_options' => [
                    'label'=> 'confirmez votre mot de passe',
                    'attr'=>['placeholder'=>'merci de confirmer votre mot de passe']
                ],
            ])




            ->add('submit', SubmitType::class, [
                'label'=>'S\'inscrire'
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
