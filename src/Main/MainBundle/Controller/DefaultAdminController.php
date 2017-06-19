<?php

namespace Main\MainBundle\Controller;

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
}
