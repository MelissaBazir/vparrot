<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\Service;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ServiceType extends AbstractType
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
            'label' => 'Titre du service',
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('description', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'minlength' => '2',
                'maxlength' => '50',

            ],
            'label' => 'Description du service',
            'required' => true,
            'label_attr' => [
                'class' => 'form-label mb-3',
            ]
        ])
            ->add('company', EntityType::class, [
                'class'=> Company::class,
                'choice_label' => 'name',
                'label' => 'Société',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}