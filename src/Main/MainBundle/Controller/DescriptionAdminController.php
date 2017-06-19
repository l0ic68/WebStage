<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Media;
use Main\MainBundle\Entity\Carousel;
use Main\MainBundle\Form\CarouselAdminType;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\DescriptionImageAdminType;
use Main\MainBundle\Form\BandeauAdminType;
use Main\MainBundle\Form\MediaAdminType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * DescriptionAdmin controller.
 *
 */
class DescriptionAdminController extends Controller
{
    public function AccueilAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /* Ce qu'on doit pouvoir modifier
            -Carousel (mettre de l'ajax )
            -description( a notre propos)
            -Changer le projet de la page principale
        */
//        $aPropos = $em->getRepository('MainBundle:Description')->findOneByOrdre('1');
//        $descriptions = $em->getRepository('MainBundle:Description')->findByOrdre(array('2','3','4'));
//        $actionC = $em->getRepository('MainBundle:Action')->findOneByFrontPage('cours');
//        $actionR = $em->getRepository('MainBundle:Action')->findOneByFrontPage('realisé');
        $active = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('0');
        $images = $em->getRepository('MainBundle:Carousel')->ByOrder();

        $aPropos = $em->getRepository('MainBundle:Description')->findOneByOrdre('1');
        $soutien = $em->getRepository('MainBundle:Description')->findOneByOrdre('2');
        $quotidient = $em->getRepository('MainBundle:Description')->findOneByOrdre('3');
        $financement = $em->getRepository('MainBundle:Description')->findOneByOrdre('4');
        $bandeau = $em->getRepository('MainBundle:Description')->findOneByOrdre('5');

        $formTypeA = new DescriptionAdminType();
        $formTypeB = new DescriptionImageAdminType();
        $formTypeC = new BandeauAdminType();

        $form1 = $this->get('form.factory')->createNamedBuilder('apropos',$formTypeA,$aPropos)
            ->getForm();
        $form2 = $this->get('form.factory')->createNamedBuilder('soutien',$formTypeB,$soutien)
            ->getForm();
        $form3 = $this->get('form.factory')->createNamedBuilder('quotidient',$formTypeB,$quotidient)
            ->getForm();
        $form4 = $this->get('form.factory')->createNamedBuilder('financement',$formTypeB,$financement)
            ->getForm();

        $form6 = $this->get('form.factory')->createNamedBuilder('bandeau',$formTypeC,$bandeau)
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('apropos')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($aPropos);
                    $em->flush();
                }
            }
            if ($request->request->has('soutien')) {
                $form2->handleRequest($request);
                if ($form2->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($soutien);
                    $em->flush();
                }
            }
            if ($request->request->has('quotidient')) {
                $form3->handleRequest($request);
                if ($form3->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($quotidient);
                    $em->flush();
                }
            }
            if ($request->request->has('financement')) {
                $form4->handleRequest($request);
                if ($form4->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($financement);
                    $em->flush();
                }
            }
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

        return $this->render('MainBundle:Admin:accueil.html.twig', array(
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
            'form3' => $form3->createView(),
            'form4' => $form4->createView(),
            'active' => $active,
            'images' => $images,
            'soutien' => $soutien,
            'quotidient' => $quotidient,
            'financement' => $financement,
            'bandeau' => $bandeau,

        ));
    }

    public function CarouselAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $active = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('0');
        $images = $em->getRepository('MainBundle:Carousel')->ByOrder();
        $image  = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('0');
        $image1 = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('1');
        $image2 = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('2');
        $image3 = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('3');
        $image4 = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('4');
        $formType = new CarouselAdminType();
        if($image != null) {
            $form = $this->get('form.factory')->createNamedBuilder('image', $formType, $image)
                ->getForm();
        }
        else
        {
            $image = new Carousel();
            $form = $this->get('form.factory')->createNamedBuilder('image',$formType,$image)
                ->getForm();
            $image->setOrdre(0);

        }
        if($image1 != null) {
            $form1 = $this->get('form.factory')->createNamedBuilder('image1', $formType, $image1)
                ->getForm();
        }
        else
        {
            $image1 = new Carousel();
            $form1 = $this->get('form.factory')->createNamedBuilder('image1',$formType,$image1)
                ->getForm();
            $image1->setOrdre(1);
        }
        if($image2 != null)
            {
            $form2 = $this->get('form.factory')->createNamedBuilder('image2',$formType,$image2)
                ->getForm();
            }
        else
            {
                $image2 = new Carousel();
            $form2 = $this->get('form.factory')->createNamedBuilder('image2',$formType,$image2)
                ->getForm();
                $image2->setOrdre(2);
            }
        if($image3 != null) {
            $form3 = $this->get('form.factory')->createNamedBuilder('image3', $formType, $image3)
                ->getForm();
        }
        else
        {
            $image3 = new Carousel();
            $form3 = $this->get('form.factory')->createNamedBuilder('image3',$formType,$image3)
                ->getForm();
            $image3->setOrdre(3);
//            var_dump($image3);
        }
        if($image4 != null) {
            $form4 = $this->get('form.factory')->createNamedBuilder('image4', $formType, $image4)
                ->getForm();
        }
        else
        {
            $image4 = new Carousel();
            $form4 = $this->get('form.factory')->createNamedBuilder('image4',$formType,$image4)
                ->getForm();
            $image4->setOrdre(4);

        }

        if('POST' === $request->getMethod()) {
            if($image != null)
            {
                if ($request->request->has('image')) {
                $form->handleRequest($request);
                if ($form->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($image);
                    $em->flush();
                }
                }
            }
            if($image1 != null) {
                if ($request->request->has('image1')) {

                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($image1);
                    $em->flush();
                }
            }
            }
            if($image2 != null) {
                if ($request->request->has('image2')) {
                $form2->handleRequest($request);
                if ($form2->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($image2);
                    $em->flush();
                }
                }
            }
            if($image3 != null) {
                if ($request->request->has('image3')) {
            }
                $form3->handleRequest($request);
                if ($form3->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($image3);
                    $em->flush();
                }
            }
            }

                if ($request->request->has('image4')) {

                $form4->handleRequest($request);
                if ($form4->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($image4);
                    $em->flush();
                }
                }


        return $this->render('MainBundle:Admin:carousel.html.twig', array(
            'active' => $active,
            'image' => $image,
            'images' => $images,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'form'   => $form ->createView(),
            'form1'  => $form1->createView(),
            'form2'  => $form2->createView(),
            'form3'  => $form3->createView(),
            'form4'  => $form4->createView()

        ));
    }
    public function OriginesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $description1 = $em->getRepository('MainBundle:Description')->findOneByOrdre('5');
        $description2 = $em->getRepository('MainBundle:Description')->findOneByOrdre('7');
        $description3 = $em->getRepository('MainBundle:Description')->findOneByOrdre('8');

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
        $lieu1 = $em->getRepository('MainBundle:Description')->findOneByOrdre('9');
        $lieu2 = $em->getRepository('MainBundle:Description')->findOneByOrdre('10');


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
        $objectif = $em->getRepository('MainBundle:Description')->findOneByOrdre('11');


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
}
