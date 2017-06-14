<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActionController extends Controller
{
    public function ActualAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('En cours');
        return $this->render('MainBundle:Action:layout\actual_action.html.twig',array('actions'=> $actions));
    }

    public function PastAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Passée');
        return $this->render('MainBundle:Action:layout\past_action.html.twig',array('actions'=> $actions));
    }
    public function PastActionModalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Passée');
        return $this->render('MainBundle:Action:layout\past_action.html.twig',array('actions'=> $actions,'id' =>$id));
    }

    function actualActionModalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('En cours');
        return $this->render('MainBundle:Action:layout\actual_action.html.twig',array('actions'=> $actions,'id' =>$id));
    }

    public function FutureAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Future');
        return $this->render('MainBundle:Action:layout\future_action.html.twig',array('actions'=> $actions));
    }
}
