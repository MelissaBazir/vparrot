<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;


class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '255',

            ],
            'label' => 'Nom',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('email', EmailType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '3',
                'maxlength' => '255',

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
            ->add('telephone', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '10',
                'maxlength' => '10',

            ],
            'label' => 'Téléphone',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('address', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '255',

            ],
            'label' => 'Adresse',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('zipcode', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '5',
                'maxlength' => '5',

            ],
            'label' => 'Code Postal',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('city', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '150',

            ],
            'label' => 'Ville',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}