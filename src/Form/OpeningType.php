<?php

namespace App\Form;

use App\Entity\Company;
use App\Entity\Opening;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class OpeningType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hours = [
            'Fermé' => 'Fermé',
            '6h' => '6h',
            '7h' => '7h',
            '8h' => '8h',
            '9h' => '9h',
            '10h' => '10h',
            '11h' => '11h',
            '12h' => '12h',
            '13h' => '13h',
            '14h' => '14h',
            '15h' => '15h',
            '16h' => '16h',
            '17h' => '17h',
            '18h' => '18h',
            '19h' => '19h',
            '20h' => '20h',
        ];
        $days = [
            'Lundi' => 'Lundi',
            'Mardi' => 'Mardi',
            'Mercredi' => 'Mercredi',
            'Jeudi' => 'Jeudi',
            'Vendredi' => 'Vendredi',
            'Samedi' => 'Samedi',
            'Dimanche' => 'Dimanche',
        ];
        $builder
            ->add('company', EntityType::class, [
                'class'=> Company::class,
                'choice_label'=> 'name',
                'label' => 'Société concernée',
            ])
            ->add('day', ChoiceType::class, [
                'choices'  => $days,
                'label' => 'Jour de la semaine',
                'label_attr' => [
                    'class' => 'form-label mb-3',
                ]
            ])
            ->add('am_opening', ChoiceType::class, [
            'choices'  => $hours,
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '255',
            ],
            'label' => 'Horaire d\'ouverture du matin',
        ])
            ->add('am_closing', ChoiceType::class, [
            'choices'  => $hours,
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '255',
            ],
            'label' => 'Horaire de fermeture du matin',
            ] )
            ->add('pm_opening', ChoiceType::class, [
            'choices'  => $hours,
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '255',
            ],
            'label' => 'Horaire d\'ouverture de l\'après-midi',
            ])
            ->add('pm_closing', ChoiceType::class, [
            'choices'  => $hours,
            'attr' => [
                'class' => 'form-control',
                'minlength' => '1',
                'maxlength' => '255',
            ],
            'label' => 'Horaire de fermeture de l\'après-midi',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Opening::class,
        ]);
    }
}