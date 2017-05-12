<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Description;
use Main\MainBundle\Form\DescriptionAdminType;
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

        $origine1 = $em->getRepository('MainBundle:Description')->findOneById('5');
        $origine2 = $em->getRepository('MainBundle:Description')->findOneById('7');
        $origine3 = $em->getRepository('MainBundle:Description')->findOneById('8');
        $form1Type = new DescriptionAdminType();
        $form1Type ->setName('form1');
        $form2Type = new DescriptionAdminType();
        $form2Type ->setName('form2');
        $form3Type = new DescriptionAdminType();
        $form3Type ->setName('form3');

        $form1 = $this->createForm($form1Type, $origine1);
        $form2 = $this->createForm($form2Type, $origine2);
        $form3 = $this->createForm($form3Type, $origine3);
        if ('POST' === $request->getMethod()) {
            var_dump($form1->get('submit')->isClicked());
            var_dump($form2->get('submit')->isClicked());
            $form1->handleRequest($request);
            $form2->handleRequest($request);
            $form3->handleRequest($request);
            if ($form1->isSubmitted() && $form1->isValid()) {
                if($form1->get('submit')->isClicked()){
                    var_dump($form1->get('submit')->isClicked());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($origine1);
                    $em->flush();
                }
                return $this->redirectToRoute('originesAdmin');

            }
            if ($form2->isSubmitted() && $form2->isValid()) {
                if($form2->get('submit')->isClicked()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($origine2);
                    $em->flush();
                    return $this->redirectToRoute('origines');
                }
            }

//            if ($form3->isSubmitted()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            /* $em = $this->getDoctrine()->getManager();
             $em->persist($origine3);
             $em->flush();*/
//                     return $this->redirectToRoute('lieux');
//            }
//        }
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
