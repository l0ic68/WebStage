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
        $em = $this->getDoctrine()->getManager();
        $histoire = $em->getRepository('MainBundle:Description')->findOneByOrdre('6');
        $but = $em->getRepository('MainBundle:Description')->findOneByOrdre('7');
        $volonte = $em->getRepository('MainBundle:Description')->findOneByOrdre('8');
        $valeur = $em->getRepository('MainBundle:Description')->findOneByOrdre('9');
        return $this->render('MainBundle:Description:layout\description.html.twig', array('histoire'=>$histoire,'valeur'=>$valeur,'volonte'=>$volonte,'but'=>$but));
    }
}
