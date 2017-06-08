<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DescriptionController extends Controller
{
    public function OriginesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $origines = $em->getRepository('MainBundle:Description')->findByPage('origine');
        return $this->render('MainBundle:Description:layout\origines.html.twig',array('origines'=> $origines));
    }

    public function LieuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lieux = $em->getRepository('MainBundle:Description')->findByPage('lieu');
        return $this->render('MainBundle:Description:layout\lieu.html.twig',array('lieux'=> $lieux));
    }

    public function ObjectifAction()
    {
        $em = $this->getDoctrine()->getManager();
        $objectifs = $em->getRepository('MainBundle:Description')->findByPage('objectif');
        return $this->render('MainBundle:Description:layout\objectif.html.twig',array('objectifs'=> $objectifs));
    }

    public function DescriptionAction()
    {
//        $em = $this->getDoctrine()->getManager();
//        $objectifs = $em->getRepository('MainBundle:Description')->findByPage('objectif');
        return $this->render('MainBundle:Description:layout\description.html.twig');
    }
}
