<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Data\SearchData;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class SearchForm extends AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('q', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder'=> 'Rechercher',
            ]
            ]);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}