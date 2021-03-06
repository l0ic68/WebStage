<?php

namespace Main\MainBundle\Form\description;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OriginesAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description','text',array('attr' => array('class' => 'DescriptionOrigines ckeditor',)))
                ->add('nom','text',array('attr' => array('class' => 'TitreOrigines')))
                ->add('submit','submit',array('label'=>'rouge'))
                ->getForm();
//                ->add('page',array('attr' => array('class' => 'custom-file-input',)));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\MainBundle\Entity\Description'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_mainbundle_description';
    }
}
