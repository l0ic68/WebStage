<?php

namespace Main\MainBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;



class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //ici nous allons faire notre formulaire en PHP
        $builder
            ->add('firstname', 'text', array('label' => 'First name',
                                          'attr' => array('class' => 'input-medium search-query form-control',
                                          'placeholder' => 'First name',)))
                                          
            ->add('lastname', 'text', array('label' => 'Last name',
                                          'attr' => array('class' => 'input-medium search-query form-control',
                                          'placeholder' => 'Last name',)))
                                          
            ->add('email', EmailType::class, array('label' => 'Email',
                                          'attr' => array('class' => 'input-medium search-query form-control',
                                          'placeholder' => 'Email Adress',)))
                                          
            ->add('phone', 'text', array('label' => 'Phone #',
                                          'attr' => array('class' => 'input-medium search-query form-control',
                                          'placeholder' => 'Phone',)))
                                          
            ->add('message', 'textarea', array('label' => 'Message',
                                          'attr' => array('class' => 'input-medium search-query form-control',
                                          'placeholder' => 'Your message',)))
            ->add('Send', 'submit', array('label' => 'Send',
                                          'attr' => array('class' => 'btn btn-danger raised',
                                          'placeholder' => 'Send',)));

    }

    public function getName()
    {
        return 'main_mainbundle_contact';
    }
}