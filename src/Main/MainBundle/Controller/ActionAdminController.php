<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Action;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actions = $em->getRepository('MainBundle:Action')->findAll();

        return $this->render('MainBundle:Admin:action/index.html.twig', array(
            'actions' => $actions,
        ));
    }

    /**
     * Creates a new action entity.
     *
     */
    public function newAction(Request $request)
    {
        $action = new Action();
        $form = $this->createForm('Main\MainBundle\Form\ActionAdminType', $action);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($action);
            $em->flush();

            return $this->redirectToRoute('admin_action_show', array('id' => $action->getId()));
        }

        return $this->render('MainBundle:Admin:action/new.html.twig', array(
            'action' => $action,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a action entity.
     *
     */
    public function showAction(Action $action)
    {
        $deleteForm = $this->createDeleteForm($action);

        return $this->render('MainBundle:Admin:action/show.html.twig', array(
            'action' => $action,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing action entity.
     *
     */
    public function editAction(Request $request, Action $action)
    {
        $deleteForm = $this->createDeleteForm($action);
        $editForm = $this->createForm('Main\MainBundle\Form\ActionAdminType', $action);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_action_edit', array('id' => $action->getId()));
        }

        return $this->render('MainBundle:Admin:action/edit.html.twig', array(
            'action' => $action,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a action entity.
     *
     */
    public function deleteAction(Request $request, Action $action)
    {
        $form = $this->createDeleteForm($action);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($action);
            $em->flush();
        }

        return $this->redirectToRoute('admin_action_index');
    }

    /**
     * Creates a form to delete a action entity.
     *
     * @param Action $action The action entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Action $action)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_action_delete', array('id' => $action->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
