<?php

namespace GSB\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ReportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('date', 'date', array(
                'label' => "Date",
                'widget' => 'single_text',    // field is rendered as a simple input of type 'date'
            ))
            ->add('assessment', 'text', array(
                'label' => "Motif",
            ))
           
            ->add('save', 'submit', array(
                'label' => 'Ajouter',
            ));
    }

    public function getName()
    {
        return 'report';
    }
}
