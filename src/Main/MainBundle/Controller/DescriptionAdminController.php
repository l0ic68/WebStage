<?php

namespace Main\MainBundle\Controller;

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
    public function OriginesAction(Request $request)
    {
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

    public function LieuAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $lieu1 = $em->getRepository('MainBundle:Description')->find('9');
        $lieu2 = $em->getRepository('MainBundle:Description')->find('10');


        $formTypeA = new DescriptionAdminType();
        $formTypeB = new DescriptionAdminType();

        $form1 = $this->get('form.factory')->createNamedBuilder('form1name',$formTypeA,$lieu1)
            ->getForm();
        $form2 = $this->get('form.factory')->createNamedBuilder('form2name',$formTypeB,$lieu2)
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('form1name')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($lieu1);
                    $em->flush();
                }
            }
            if ($request->request->has('form2name')) {
                $form2->handleRequest($request);
                if ($form2->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($lieu2);
                    $em->flush();
                }
            }
        }

        return $this->render('MainBundle:Admin:description\lieu.html.twig', array(
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
        ));
    }

    public function ObjectifAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $objectif = $em->getRepository('MainBundle:Description')->find('11');


        $formTypeA = new DescriptionAdminType();

        $form1 = $this->get('form.factory')->createNamedBuilder('form1name',$formTypeA,$objectif)
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('form1name')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($objectif);
                    $em->flush();
                }
            }
        }

        return $this->render('MainBundle:Admin:description\objectif.html.twig', array(
            'form1' => $form1->createView(),
        ));
    }

    public function MembresAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository('MainBundle:Membres')->findAll();
        return $this->render('MainBundle:Description:layout\membres.html.twig',array('membres'=> $membres));
    }
}
