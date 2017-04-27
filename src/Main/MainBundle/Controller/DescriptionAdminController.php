<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Description;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * DescriptionAdmin controller.
 *
 */
class DescriptionAdminController extends Controller
{
    /**
     * Lists all DescriptionAdmin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $descriptions = $em->getRepository('MainBundle:Description')->findAll();
        return $this->render('MainBundle:Admin:description/index.html.twig', array(
            'descriptions' => $descriptions,
        ));
    }

    /**
     * Creates a new entreprise entity.
     *
     */
    public function newAction(Request $request)
    {
        $descriptions = new Description();
        $form = $this->createForm('Main\MainBundle\Form\DescriptionAdminType', $descriptions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($descriptions);
            $em->flush();

            return $this->redirectToRoute('admin_description_show', array('id' => $descriptions->getId()));
        }

        return $this->render('MainBundle:Admin:description/new.html.twig', array(
            'descriptions' => $descriptions,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a entreprise entity.
     *
     */
    public function showAction(Description $description)
    {
        $deleteForm = $this->createDeleteForm($description);

        return $this->render('entreprise/show.html.twig', array(
            'description' => $description,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing entreprise entity.
     *
     */
    public function editAction(Request $request, Description $description)
    {
        $deleteForm = $this->createDeleteForm($description);
        $editForm = $this->createForm('Main\MainBundle\Form\DescriptionAdminType', $description);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_description_edit', array('id' => $description->getId()));
        }

        return $this->render('MainBundle:Admin:description/edit.html.twig', array(
            'description' => $description,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a entreprise entity.
     *
     */
    public function deleteAction(Request $request, Description $description)
    {
        $form = $this->createDeleteForm($description);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($description);
            $em->flush();
        }

        return $this->redirectToRoute('admin_description_index');
    }

    /**
     * Creates a form to delete a description entity.
     *
     * @param Description $description The entreprise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Description $description)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_description_delete', array('id' => $description->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
