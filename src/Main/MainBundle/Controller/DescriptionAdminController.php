<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Description;
use Main\MainBundle\Form\description\OriginesAdminType;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\MediaAdminType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * DescriptionAdmin controller.
 *
 */
class DescriptionAdminController extends Controller
{
    public function OriginesAction()
    {
         return $this->render('MainBundle:Admin:description\origines.html.twig');
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

    public function MembresAction()
    {
        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository('MainBundle:Membres')->findAll();
        return $this->render('MainBundle:Description:layout\membres.html.twig',array('membres'=> $membres));
    }
}
