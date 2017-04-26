<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Main\MainBundle\Entity\Contact;
use Main\MainBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function EntrepriseAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entreprises = $em->getRepository('MainBundle:Entreprise')->findByPage('accueil');
        return $this->render('MainBundle:Default:layout\accueil.html.twig',array('entreprises'=> $entreprises));
    }

    public function GalerieAction()
    {
        $em = $this->getDoctrine()->getManager();
        $medias = $em->getRepository('MainBundle:Media')->findall();
        return $this->render('MainBundle:Default:layout\media.html.twig',array('medias'=> $medias));
    }

    public function DonAction()
    {
        return $this->render('MainBundle:Default:layout\don.html.twig');
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
}
