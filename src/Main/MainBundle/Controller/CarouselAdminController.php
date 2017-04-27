<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Carousel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Carousel controller.
 *
 */
class CarouselAdminController extends Controller
{
    /**
     * Lists all carousel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $carousels = $em->getRepository('MainBundle:Carousel')->findAll();

        return $this->render('MainBundle:Admin:carousel/index.html.twig', array(
            'carousels' => $carousels,
        ));
    }

    /**
     * Creates a new carousel entity.
     *
     */
    public function newAction(Request $request)
    {
        $carousel = new Carousel();
        $form = $this->createForm('Main\MainBundle\Form\CarouselAdminType', $carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carousel);
            $em->flush();

            return $this->redirectToRoute('admin_carousel_show', array('id' => $carousel->getId()));
        }

        return $this->render('MainBundle:Admin:carousel/new.html.twig', array(
            'carousel' => $carousel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a carousel entity.
     *
     */
    public function showAction(Carousel $carousel)
    {
        $deleteForm = $this->createDeleteForm($carousel);

        return $this->render('MainBundle:Admin:carousel/show.html.twig', array(
            'carousel' => $carousel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing carousel entity.
     *
     */
    public function editAction(Request $request, Carousel $carousel)
    {
        $deleteForm = $this->createDeleteForm($carousel);
        $editForm = $this->createForm('Main\MainBundle\Form\CarouselAdminType', $carousel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_carousel_edit', array('id' => $carousel->getId()));
        }

        return $this->render('MainBundle:Admin:carousel/edit.html.twig', array(
            'carousel' => $carousel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a carousel entity.
     *
     */
    public function deleteAction(Request $request, Carousel $carousel)
    {
        $form = $this->createDeleteForm($carousel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carousel);
            $em->flush();
        }

        return $this->redirectToRoute('admin_carousel_index');
    }

    /**
     * Creates a form to delete a carousel entity.
     *
     * @param Carousel $carousel The carousel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Carousel $carousel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_carousel_delete', array('id' => $carousel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
