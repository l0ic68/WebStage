<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActionController extends Controller
{
    public function ActualAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('En cours');
        $description = $em->getRepository('MainBundle:Description')->findOneByOrdre('18');
        $description2 = $em->getRepository('MainBundle:Description')->findOneByOrdre('19');
        return $this->render('MainBundle:Action:layout\actual_action.html.twig',array(
            'actions'=> $actions,
            'description'=>$description,
            'description2'=>$description2
        ));
    }

    public function PastAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Passée');
        $description = $em->getRepository('MainBundle:Description')->findOneByOrdre('17');
        return $this->render('MainBundle:Action:layout\past_action.html.twig',array(
            'actions'=> $actions,
            'description'=>$description
        ));
    }
    public function PastActionModalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Passée');
        $description = $em->getRepository('MainBundle:Description')->findOneByOrdre('17');
        return $this->render('MainBundle:Action:layout\past_action.html.twig',array(
            'actions'=> $actions,
            'id' =>$id,
            'description'=>$description
        ));
    }

    function actualActionModalAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('En cours');
        $description = $em->getRepository('MainBundle:Description')->findOneByOrdre('18');
        $description2 = $em->getRepository('MainBundle:Description')->findOneByOrdre('19');
        return $this->render('MainBundle:Action:layout\actual_action.html.twig',array(
            'actions'=> $actions,
            'id' =>$id,
            'description'=>$description,
            'description2'=>$description2
            ));
    }

    public function FutureAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Future');
        return $this->render('MainBundle:Action:layout\future_action.html.twig',array('actions'=> $actions));
    }
}
