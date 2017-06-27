<?php

namespace Main\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActuAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Titre')
                ->add('description','textarea',array('attr' => array('class' => 'ckeditor')))
                ->add('lien','text',array('required' => false))
                ->add('auteur')
                ->add('media',new MediaType(),array('required' => false))
                ->add('type',"choice",array('choices' => array('fa fa-university fa-2x fa-inverse' => "conférence",
                                                               'fa fa-calendar-check-o fa-2x fa-inverse' => "Evenement",
                                                               'fa fa-newspaper-o fa-2x fa-inverse' => "Presse")))
                ->add('submit','submit');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\MainBundle\Entity\Actu'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_mainbundle_actu';
    }


}
