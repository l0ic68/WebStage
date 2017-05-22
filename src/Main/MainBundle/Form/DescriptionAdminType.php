<?php

namespace Main\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Main\MainBundle\Entity\Description;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\DataMapperInterface;
use Symfony\Component\Form\FormConfigInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DescriptionAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom','text',array('attr' => array('class' => 'TitreAdmin')))
                ->add('description','textarea',array('attr' => array('class' => 'DescriptionAdmin')));
//                ->add('submit','submit',array('label'=>'Edit'));

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
