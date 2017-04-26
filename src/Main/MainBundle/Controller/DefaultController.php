<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function EntrepriseAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entreprises = $em->getRepository('MainBundle:Entreprise')->findByPage('accueil');
        return $this->render('MainBundle:Default:layout\accueil.html.twig',array('entreprises'=> $entreprises));
    }

    public function GalerieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $medias = $em->getRepository('MainBundle:Media')->findall();
        return $this->render('MainBundle:Default:layout\media.html.twig',array('medias'=> $medias));
    }

    public function DonAction()
    {
        return $this->render('MainBundle:Default:layout\don.html.twig');
    }
}
