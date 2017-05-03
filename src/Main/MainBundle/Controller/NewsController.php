<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Main\MainBundle\Entity\Contact;
use Main\MainBundle\Entity\Carousel;
use Main\MainBundle\Form\ContactType;

class NewsController extends Controller
{
    public function NewsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('MainBundle:News')->findall();
        return $this->render('MainBundle:News:layout\news.html.twig',array('news'=> $news));
    }
    public function DisplayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('MainBundle:News')->findall();
        return $this->render('MainBundle:News:layout\display.html.twig',array('news'=> $news));
    }
}
