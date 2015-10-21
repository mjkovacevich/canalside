<?php

// src/Canalside/Bundle/SchoolTermBundle/Form/Type/SchoolTermType.php
namespace Canalside\Bundle\SchoolTermBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * School Term form type.
 *
 * @author Mike Kovacevich
 */
class SchoolTermType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label')
            ->add('countryCode')
            ->add('region')
            ->add('year')
            ->add('term')
            ->add('start', 'date', array(
                'input'  => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('finish', 'date', array(
                'input'  => 'datetime',
                'widget' => 'choice',
            ))
            ->add('days')
            ->add('save', 'submit')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Canalside\Bundle\SchoolTermBundle\Entity\SchoolTerm',
        ));
    }

    public function getName()
    {
        return 'canalside_school_term';
    }
}