<?php

namespace Main\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarouselAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('media', new MediaType(), array('required' => false))
                ->add('text','text')
                ->add('placement','choice',array('choices' => array('TextCarousel1' => "Bas Gauche",
                                                                    'TextCarousel2' => "Haut Gauche",
                                                                    'TextCarousel3' => "Haut Droite",
                                                                    'TextCarousel4' => "Bas Droite"
                    )))
                ->add('submit','submit',array('label'=>'Edit'))
                ->add('delete','submit',array('label'=>'delete'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Main\MainBundle\Entity\Carousel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'main_mainbundle_carousel';
    }


}
