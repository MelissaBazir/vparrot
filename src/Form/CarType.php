<?php

namespace App\Form;

use App\Entity\Car;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CarType extends AbstractType
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
            'label' => 'Titre de l\'annonce',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('year', IntegerType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '4',
                'maxlength' => '4',

            ],
            'label' => 'Année de mise en circulation',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('mileage', IntegerType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '10',
                

            ],
            'label' => 'Kilométrage',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('price', IntegerType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
            ],
            'label' => 'Prix',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('image', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',
                'placeholder' => 'Indiquer uniquement le chemin de la photo',
            ],
            'label' => 'Photo',
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}