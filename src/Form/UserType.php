<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
            ],
            'label' => 'E-mail',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ],
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Email(),
                new Assert\Length(['min' => 2, 'max' => 255]),
            ]
        ])
            //->add('roles')
            //->add('password')
            ->add('lastname', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
                
            ],
            'label' => 'Nom',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('firstname', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
                
                
            ],
            'label' => 'Prénom',
        ])
            ->add('telephone', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '10',
                'maxlength' => '50',
                
            ],
            'label' => 'Téléphone',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            //->add('created_at')
            ->add('company', EntityType::class, [
                'class'=> Company::class,
                'choice_label'=> 'name', 
                'label'=> 'Société',
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