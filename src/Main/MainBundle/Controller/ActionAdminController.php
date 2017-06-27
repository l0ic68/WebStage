<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Action;
use Main\MainBundle\Form\DescriptionAdminType;
use Main\MainBundle\Form\DescriptionImageAdminType;
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
    public function show_ActualAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('En cours');
        $description = $em->getRepository('MainBundle:Description')->findOneByOrdre('18');
        $description2 = $em->getRepository('MainBundle:Description')->findOneByOrdre('19');

        $formTypeA = new DescriptionAdminType();

        $form1 = $this->get('form.factory')->createNamedBuilder('description',$formTypeA,$description)
            ->getForm();

        $form2 = $this->get('form.factory')->createNamedBuilder('description2',$formTypeA,$description2)
            ->getForm();

        if('POST' === $request->getMethod()) {
            if ($request->request->has('description')) {
                $form1->handleRequest($request);
                if ($form1->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($description);
                    $em->flush();
                }
            }
            if ($request->request->has('description2')) {
                $form2->handleRequest($request);
                if ($form2->isValid()) {
                    // On l'enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($description2);
                    $em->flush();
                }
            }
        }
        return $this->render('MainBundle:Admin:actual_action.html.twig',array(
            'actions'=> $actions,
            'form1'=>$form1->createView(),
            'form2'=>$form2->createView()
        ));
    }
    public function show_PastAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actions = $em->getRepository('MainBundle:Action')->findByType('Passée');
        $description = $em->getRepository('MainBundle:Description')->findOneByOrdre('17');
        $form = $this->createForm(new DescriptionImageAdminType(),$description);
        $form->handleRequest($form);
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($description);
            $em->flush();
        }
        return $this->render('MainBundle:Admin:past_action.html.twig',array(
            'actions'=> $actions,
            'form'=> $form->createView(),
            'description'=> $description,
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
            'form1'=> $form1->createView()
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
            'form1'=> $form1->createView()
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
    public function changeActionRAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actualFront = $em->getRepository('MainBundle:Action')->findOneByFrontPage('realisé');
        $newFront = $em->getRepository('MainBundle:Action')->findOneById($id);

        $em = $this->getDoctrine()->getManager();
        $actualFront->setFrontPage('null');
        $newFront->setFrontPage('realisé');
        $em->persist($actualFront);
        $em->persist($newFront);
        $em->flush();
        return $this->redirectToRoute("accueilAdmin");
    }
    public function changeActionCAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $actualFront = $em->getRepository('MainBundle:Action')->findOneByFrontPage('Cours');
        $newFront = $em->getRepository('MainBundle:Action')->findOneById($id);
        $em = $this->getDoctrine()->getManager();
        $actualFront->setFrontPage('test');
        $newFront->setFrontPage('Cours');
        $em->persist($actualFront);
        $em->persist($newFront);
        $em->flush();
        return $this->redirectToRoute("accueilAdmin");
    }

}
