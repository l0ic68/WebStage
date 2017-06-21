<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Action;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Main\MainBundle\Form\ActionAdminType;
use Main\MainBundle\Form\ActionEditAdminType;

/**
 * Action controller.
 *
 */
class ActionAdminController extends Controller
{
    /**
     * Lists all action entities.
     *
     */
    public function show_ActualAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('En cours');
        return $this->render('MainBundle:Admin:actual_action.html.twig',array(
            'actions'=> $actions
        ));
    }
    public function show_PastAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Passée');
        return $this->render('MainBundle:Admin:past_action.html.twig',array(
            'actions'=> $actions
        ));
    }

    public function Edit_PastAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $pastAction = $em->getRepository('MainBundle:Action')->findOneById($id);
        $form1 =$this->createForm(new ActionEditAdminType(),$pastAction);

        if('POST' === $request->getMethod()) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($pastAction);
                    $em->flush();
                    return $this->redirectToRoute("show_past_action");
                }
            }
        return $this->render('MainBundle:Admin:new_past_action.html.twig',array(
            'form1'=> $form1
        ));
    }

    public function Edit_ActualAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $actualAction = $em->getRepository('MainBundle:Action')->findOneById($id);
        $form1 =$this->createForm(new ActionEditAdminType(),$actualAction);

        if('POST' === $request->getMethod()) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($actualAction);
                    $em->flush();
                    return $this->redirectToRoute("show_actual_action");
                }
            }
        return $this->render('MainBundle:Admin:new_actual_action.html.twig',array(
            'form1'=> $form1->createView()
        ));

    }
    public function New_PastAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $pastAction = new Action();
        $form1 =$this->createForm(new ActionAdminType(),$pastAction);
        if('POST' === $request->getMethod()) {
            $form1->handleRequest($request);
            if ($form1->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $pastAction->setType('Passée');
                $pastAction->setFrontPage('null');
                $em->persist($pastAction);
                $em->flush();
                return $this->redirectToRoute("show_past_action");
            }
        }
        return $this->render('MainBundle:Admin:new_past_action.html.twig',array(
            'form1'=> $form1
        ));
    }

    public function New_ActualAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $actualAction = new Action();
        $form1 =$this->createForm(new ActionAdminType(),$actualAction);

        if('POST' === $request->getMethod()) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $actualAction->setType('En cours');
                    $actualAction->setFrontPage('null');
                    $em->persist($actualAction);
                    $em->flush();
                    return $this->redirectToRoute("show_actual_action");
                }
            }
        return $this->render('MainBundle:Admin:new_actual_action.html.twig',array(
            'form1'=> $form1->createView()
        ));
    }
    public function Delete_PastAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $pastAction = $em->getRepository('MainBundle:Action')->findOneById($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($pastAction);
        $em->flush();
        return $this->redirectToRoute("show_past_action");
    }

    public function Delete_ActualAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actualAction = $em->getRepository('MainBundle:Action')->find($id);

                $em = $this->getDoctrine()->getManager();
                $em->remove($actualAction);
                $em->flush();
                return $this->redirectToRoute("show_actual_action");
    }

}
