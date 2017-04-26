<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DescriptionController extends Controller
{
    public function OriginesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $origines = $em->getRepository('MainBundle:Entreprise')->findByPage('origine');
        return $this->render('MainBundle:Description:layout\origines.html.twig',array('origines'=> $origines));
    }

    public function LieuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lieux = $em->getRepository('MainBundle:Entreprise')->findByPage('lieu');
        return $this->render('MainBundle:Description:layout\lieu.html.twig',array('lieux'=> $lieux));
    }

    public function ObjectifAction()
    {
        $em = $this->getDoctrine()->getManager();
        $objectifs = $em->getRepository('MainBundle:Entreprise')->findByPage('objectif');
        return $this->render('MainBundle:Description:layout\objectif.html.twig',array('objectifs'=> $objectifs));
    }

    public function EquipeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository('UserBundle:User')->findAll();
        return $this->render('MainBundle:Description:layout\equipe.html.twig',array('equipes'=> $equipes));
    }
}
