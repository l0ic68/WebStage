<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Main\MainBundle\Entity\Contact;
use Main\MainBundle\Entity\Carousel;
use Main\MainBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function EntrepriseAction()
    {
        $em = $this->getDoctrine()->getManager();
//        $entreprises = $em->getRepository('MainBundle:Description')->findByPage('accueil');
        $aPropos = $em->getRepository('MainBundle:Description')->findOneByOrdre('1');
        $descriptions = $em->getRepository('MainBundle:Description')->findByOrdre(array('2','3','4'));
        $actionC = $em->getRepository('MainBundle:Action')->findOneByFrontPage('cours');
        $actionR = $em->getRepository('MainBundle:Action')->findOneByFrontPage('realisé');
        $active = $em->getRepository('MainBundle:Carousel')->findOneByOrdre('0');
        $images = $em->getRepository('MainBundle:Carousel')->ByOrder();
        return $this->render('MainBundle:Default:layout\accueil.html.twig',array('descriptions' => $descriptions ,'aPropos'=> $aPropos,'active'=>$active,"images" => $images,'actionC' => $actionC,'actionR' => $actionR));
    }
    public function bandeauAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bandeau = $em->getRepository('MainBundle:Description')->findOneByOrdre('5');
        return $this->render('MainBundle:moduleUsed:bandeau.html.twig',array('bandeau'=>$bandeau));

    }
    public function actualiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actus = $em->getRepository('MainBundle:Actu')->findAll();
        return $this->render('MainBundle:Default:layout\actualites.html.twig',array(
            'actus'=>$actus
        ));

    }
    public function GalerieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $medias = $em->getRepository('MainBundle:Media')->findall();
        return $this->render('MainBundle:Default:layout\media.html.twig',array('medias'=> $medias));
    }
    public function searchMediaAction()
    {
        $request = $this->container->get('request');
        $text = $request->query->get('text');
        $em = $this->getDoctrine()->getManager();
        $medias = $em->getRepository('MainBundle:Media')->findByUrl($text);

            $content = $this->RenderView('MainBundle:Default:layout\test.html.twig', array(
                'medias' => $medias,
            ));

        $response = new JsonResponse();
        $response->setData(array('classifiedList' => $content));
        return $response;
    }

    public function searchActuAction()
    {
        $request = $this->container->get('request');
        $text = $request->query->get('text');
        $em = $this->getDoctrine()->getManager();
        $actus = $em->getRepository('MainBundle:Actu')->findByType($text);
        if($actus == null)
        {
            $actus = $em->getRepository('MainBundle:Actu')->findAll();
        }

            $content = $this->RenderView('MainBundle:Default:layout\searchActu.html.twig', array(
                'actus' => $actus,
            ));

        $response = new JsonResponse();
        $response->setData(array('classifiedList' => $content));
        return $response;
    }
    public function NewsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('MainBundle:News')->findall();
        return $this->render('MainBundle:Default:layout\news.html.twig',array('news'=> $news));
    }

    public function DonAction()
    {
        $em = $this->getDoctrine()->getManager();
        $don = $em->getRepository('MainBundle:Description')->findOneByOrdre('11');
        return $this->render('MainBundle:Default:layout\don.html.twig',array('don'=> $don));
    }

    public function contactAction()
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact Test')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo('tnpcclqp@gmail.com')
                    ->setBody($this->renderView('MainBundle:Contact:contactEmail.txt.twig', array('contact' => $contact)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->Add('notice', 'Your contact enquiry was successfully sent. Thank you!');


                return $this->redirect($this->generateUrl('contact'));
            }
        }

        return $this->render('MainBundle:Contact:contact.html.twig',array('form'=>$form->createView()));
    }

    public function AdminAction()
    {
        return $this->render('MainBundle:Admin:admin_pages.html.twig');
    }
}
