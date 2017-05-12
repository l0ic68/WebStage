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

    public function editAction(Request $request, Description $description)
    {
//        $deleteForm = $this->createDeleteForm($description);
        $editForm = $this->createForm('Main\MainBundle\Form\DescriptionAdminType', $description);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

//            return $this->redirectToRoute('admin_description_edit', array('id' => $description->getId()));
        }

        return $this->render('MainBundle:Admin:description/edit.html.twig', array(
//            'description' => $description,
            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function OriginesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $origine1 = $em->getRepository('MainBundle:Description')->findOneById('5');
        $origine2 = $em->getRepository('MainBundle:Description')->findOneById('7');
        $origine3 = $em->getRepository('MainBundle:Description')->findOneById('8');
        $form1 = $this->get('form.factory')->createNamedBuilder('form',new DescriptionAdminType());
        $form2 = $this->createForm(new DescriptionAdminType(),$origine2);
        $form3 = $this->createForm(new DescriptionAdminType(),$origine3);

        if('POST' === $request->getMethod()) {
//            $form1->handleRequest($request);
            $form2->handleRequest($request);
//            $form3->handleRequest($request);
            if($form1->get('submit')->isClicked()){
                echo "<script>alert(\"la variable est nulle\")</script>";
            }
                if ($form1->isSubmitted() && $form1->isValid()) {
                     // On l'enregistre notre objet $advert dans la base de données, par exemple
               /*      $em = $this->getDoctrine()->getManager();
                     $em->persist($origine1);
                     $em->flush();*/
//                     return $this->redirectToRoute('originesAdmin');
                 }
                if($request->request->has('form2') ) {
                    if ($form2->isSubmitted()) {
                        // On l'enregistre notre objet $advert dans la base de données, par exemple
                        /*  $em = $this->getDoctrine()->getManager();
                          $em->persist($origine2);
                          $em->flush();*/
                        return $this->redirectToRoute('origines');
                    }
                }

                 if ($form3->isSubmitted()) {
                     // On l'enregistre notre objet $advert dans la base de données, par exemple
                    /* $em = $this->getDoctrine()->getManager();
                     $em->persist($origine3);
                     $em->flush();*/
//                     return $this->redirectToRoute('lieux');
                 }
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
