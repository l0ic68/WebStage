<?php
// src/AppBundle/Form/RegistrationType.php

namespace User\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Main\MainBundle\Form\MediaType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nom', 'text', array('label' => 'Last name',
                             'attr' => array('class' => 'input-medium search-query form-control',
                             'placeholder' => 'Last name',)))
                ->add('prenom', 'text', array('label' => 'First name',
                                'attr' => array('class' => 'input-medium search-query form-control',
                                'placeholder' => 'First name',)))
               // ->add('username', null, array('label' => 'username', 'translation_domain' => 'FOSUserBundle'))
                ->add('email', EmailType::class, array('label' => 'email',
                                            'attr' => array('class' => 'input-medium search-query form-control',
                                            'placeholder' => 'Email',)))
                ->add('media', new MediaType(), array('label' => 'change',
                                                'attr' => array('class' => 'custom-file-input',
                                                'placeholder' => 'change',
                                                'required' => false )))
                ->add('submit','submit')
        ;
    }

    /*public function getParent()
    {
        return 'fos_user_registration';
    }*/
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'User\UserBundle\Entity\User'
        ));
    }
    public function getName()
    {
        return 'app_user_profile';
    }
}