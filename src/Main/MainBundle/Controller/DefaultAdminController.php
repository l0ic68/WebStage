<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Actu;
use Main\MainBundle\Form\ActuAdminType;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\DescriptionImageAdminType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Main\MainBundle\Entity\Contact;
use Main\MainBundle\Entity\Carousel;
use Main\MainBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Main\MainBundle\Form\BandeauAdminType;

class DefaultAdminController extends Controller
{

public function bandeauAdminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bandeau = $em->getRepository('MainBundle:Description')->findOneByOrdre('5');
        $formTypeA=new BandeauAdminType();
        $form6 = $this->get('form.factory')->createNamedBuilder('bandeau',$formTypeA,$bandeau)
            ->setMethod('POST')
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('bandeau')) {
                $form6->handleRequest($request);
                if ($form6->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($bandeau);
                    $em->flush();
                }
            }
        }


        return $this->render('MainBundle:Admin:moduleUsed\bandeauAdmin.html.twig', array(
            'form6' => $form6->createView(),
        ));

    }
    public function show_actuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actus = $em->getRepository('MainBundle:Actu')->findAll();
        return $this->render('MainBundle:Admin:actu.html.twig',array(
            'actus'=>$actus
        ));

    }

    public function delete_actuAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actu= $em->getRepository('MainBundle:Actu')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($actu);
        $em->flush();
        return $this->redirectToRoute("show_actu");
    }

    public function new_actuAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $actu = new Actu();
        $form1 =$this->createForm(new ActuAdminType(),$actu);

        if('POST' === $request->getMethod()) {
            $form1->handleRequest($request);
            if ($form1->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($actu);
                $em->flush();
                return $this->redirectToRoute("show_actu");
            }
        }
        return $this->render('MainBundle:Admin:new_actu.html.twig',array(
            'form1'=> $form1->createView()
        ));
    }

    public function edit_actuAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $actu = $em->getRepository('MainBundle:Actu')->findOneById($id);
        $form1 =$this->createForm(new ActuAdminType(),$actu);

        if('POST' === $request->getMethod()) {
            $form1->handleRequest($request);
            if ($form1->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($actu);
                $em->flush();
                return $this->redirectToRoute("show_actu");
            }
        }
        return $this->render('MainBundle:Admin:new_actu.html.twig',array(
            'form1'=> $form1->createView()
        ));
    }

    public function DonAdminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository('MainBundle:Description')->findOneByOrdre('23');
        $crowdfounding = $em->getRepository('MainBundle:Description')->findOneByOrdre('20');
        $virement = $em->getRepository('MainBundle:Description')->findOneByOrdre('21');
        $cheque = $em->getRepository('MainBundle:Description')->findOneByOrdre('22');
        $formTypeA=new DescriptionImageAdminType();
        $formTypeB=new DescriptionAdminType();
        $form1 = $this->get('form.factory')->createNamedBuilder('don',$formTypeA,$don)
            ->setMethod('POST')
            ->getForm();
        $form2 = $this->get('form.factory')->createNamedBuilder('crowdfounding',$formTypeB,$crowdfounding)
            ->setMethod('POST')
            ->getForm();
        $form3 = $this->get('form.factory')->createNamedBuilder('virement',$formTypeB,$virement)
            ->setMethod('POST')
            ->getForm();
        $form4 = $this->get('form.factory')->createNamedBuilder('cheque',$formTypeB,$cheque)
            ->setMethod('POST')
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('don')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $don->setDescription("rien");
                    $em->persist($don);
                    $em->flush();
                }
            }
            if ($request->request->has('crowdfounding')) {
                $form2->handleRequest($request);
                if ($form2->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($crowdfounding);
                    $em->flush();
                }
            }
            if ($request->request->has('virement')) {
                $form3->handleRequest($request);
                if ($form3->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($virement);
                    $em->flush();
                }
            }
            if ($request->request->has('cheque')) {
                $form4->handleRequest($request);
                if ($form4->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($cheque);
                    $em->flush();
                }
            }
        }
        return $this->render('MainBundle:Admin:don.html.twig', array(
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView(),
            'form4' => $form4->createView(),
            'don'   => $don
        ));

    }
}
