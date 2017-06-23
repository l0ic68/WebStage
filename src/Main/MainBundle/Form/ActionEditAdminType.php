<?php

namespace Main\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActionEditAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('description', 'textarea',array('attr' => array('class' => 'ckeditor')))
                ->add('date_debut')
                ->add('date_fin')
                ->add('cout')
                ->add('recolte')
                ->add('picture',new MediaType(),array('required' => false))
                ->add('type',"choice",array('choices' => array('Passée' => "Passée",
                                                               'En cours' => "En cours",
                                                               'Future' => "Future")))
                ->add('submit','submit');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\MainBundle\Entity\Action'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_mainbundle_action';
    }


}
