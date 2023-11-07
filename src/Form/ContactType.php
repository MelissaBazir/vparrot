<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
            ],
            'label'=> 'Prénom',
            'label_attr' => [
                'class'=> 'form-label mb-3',
            ]
        ])
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
            ->add('subject', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
            ],
            'label' => 'Sujet',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ],
            'constraints' => [
                new Assert\Length(['min' => 2, 'max' => 255]),
            ]
        ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'rows' => 6,
                    'class' => 'form-control'
                ],
                'label' => 'Message',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ],
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class'=> 'btn btn-primary my-3'
                ],
                'label' => 'Envoyer'
            ]);
            ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([]);
    }
}