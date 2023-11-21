<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',

            ],
            'label' => 'Titre de l\'avis',
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
            ])
            ->add('textReview', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',

            ],
            'label' => 'Partagez votre expérience',
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
            ])
            ->add('score', IntegerType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
            ],
            'label' => 'Note attribuée (de 1 à 4)',
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
            ])
            ->add('isApproved', CheckboxType::class, [
            'label'=> 'Approuvé',
            ])
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'email',
            //     'label' => 'E-mail',
            //     'required' => true,
            // ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '2',
                    'maxlength' => '255',
                ],
                'label' => 'E-mail de l\'auteur',
                'label_attr' => [
                    'class' => 'form-label mb-3',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email(),
                    new Assert\Length(['min' => 2, 'max' => 255]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}