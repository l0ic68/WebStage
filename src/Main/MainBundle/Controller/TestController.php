<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Description;
use Main\MainBundle\Form\description\OriginesAdminType;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\MediaAdminType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    public function testAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $origine1 = $em->getRepository('MainBundle:Description')->findOneById('5');
        $form1 = $this->createForm(new OriginesAdminType(), $origine1);
        $form1->handleRequest($request);
        if ($form1->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($origine1);
            $em->flush();
            return $this->redirectToRoute('originesAdmin');
        }
        return $this->render('MainBundle:Admin:description\form\form1.html.twig', array(
            'form1' => $form1->createView(),
        ));
    }

    public function test2Action(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $origine2 = $em->getRepository('MainBundle:Description')->findOneById('7');
        $form2 = $this->createForm(new OriginesAdminType(), $origine2);
        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($origine2);
            $em->flush();
            return $this->redirectToRoute('originesAdmin');

        }
        return $this->render('MainBundle:Admin:description\form\form2.html.twig', array(
            'form2' => $form2->createView(),
        ));
    }
}
