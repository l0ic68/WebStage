<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Description;
use Main\MainBundle\Form\description\OriginesAdminType;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\MediaAdminType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\Event;

/**
 * DescriptionAdmin controller.
 *
 */
class DescriptionAdminController extends Controller
{
    public function OriginesAction(Request $request)
    {

//        $formTypeB = new DescriptionAdminType();
        $em = $this->getDoctrine()->getManager();
        $description1 = $em->getRepository('MainBundle:Description')->find('5');
        $description2 = $em->getRepository('MainBundle:Description')->find('7');
        $description3 = $em->getRepository('MainBundle:Description')->find('8');

        $formTypeA = new DescriptionAdminType();
        $formTypeB = new DescriptionAdminType();
        $formTypeC = new DescriptionAdminType();

        $form1 = $this->get('form.factory')->createNamedBuilder('form1name',$formTypeA,$description1)
            ->getForm();
        $form2 = $this->get('form.factory')->createNamedBuilder('form2name',$formTypeB,$description2)
            ->getForm();
        $form3 = $this->get('form.factory')->createNamedBuilder('form3name',$formTypeC,$description3)
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('form1name')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($description1);
                    $em->flush();
                }
            }
            if ($request->request->has('form2name')) {
                $form2->handleRequest($request);
                if ($form2->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($description2);
                    $em->flush();
                }
            }
            if ($request->request->has('form3name')) {
                $form3->handleRequest($request);
                if ($form3->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($description3);
                    $em->flush();
                }
            }
        }

        return $this->render('MainBundle:Admin:description\origines.html.twig', array(
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView()
        ));
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
