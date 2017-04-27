<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * News controller.
 *
 */
class NewsAdminController extends Controller
{
    /**
     * Lists all news entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('MainBundle:News')->findAll();

        return $this->render('MainBundle:Admin:news/index.html.twig', array(
            'news' => $news,
        ));
    }

    /**
     * Creates a new news entity.
     *
     */
    public function newAction(Request $request)
    {
        $news = new News();
        $form = $this->createForm('Main\MainBundle\Form\NewsAdminType', $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            return $this->redirectToRoute('admin_news_show', array('id' => $news->getId()));
        }

        return $this->render('MainBundle:Admin:news/new.html.twig', array(
            'news' => $news,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a news entity.
     *
     */
    public function showAction(News $news)
    {
        $deleteForm = $this->createDeleteForm($news);

        return $this->render('MainBundle:Admin:news/show.html.twig', array(
            'news' => $news,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing news entity.
     *
     */
    public function editAction(Request $request, News $news)
    {
        $deleteForm = $this->createDeleteForm($news);
        $editForm = $this->createForm('Main\MainBundle\Form\NewsAdminType', $news);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_news_edit', array('id' => $news->getId()));
        }

        return $this->render('MainBundle:Admin:news/edit.html.twig', array(
            'news' => $news,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a news entity.
     *
     */
    public function deleteAction(Request $request, News $news)
    {
        $form = $this->createDeleteForm($news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($news);
            $em->flush();
        }

        return $this->redirectToRoute('admin_news_index');
    }

    /**
     * Creates a form to delete a news entity.
     *
     * @param News $news The news entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(News $news)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_news_delete', array('id' => $news->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
