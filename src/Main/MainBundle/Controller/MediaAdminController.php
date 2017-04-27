<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Medium controller.
 *
 */
class MediaAdminController extends Controller
{
    /**
     * Lists all medium entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $media = $em->getRepository('MainBundle:Media')->findAll();

        return $this->render('MainBundle:Admin:media/index.html.twig', array(
            'media' => $media,
        ));
    }

    /**
     * Creates a new medium entity.
     *
     */
    public function newAction(Request $request)
    {
        $medium = new Media();
        $form = $this->createForm('Main\MainBundle\Form\MediaAdminType', $medium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medium);
            $em->flush();

            return $this->redirectToRoute('admin_media_show', array('id' => $medium->getId()));
        }

        return $this->render('MainBundle:Admin:media/new.html.twig', array(
            'medium' => $medium,
            'form' => $form->createView(),
        ));
    }

    public function downloadAction()
    {
        $response = new Response();
        $em = $this->getDoctrine()->getManager();
        $medias = $em->getRepository('MainBundle:Media')->findAll();
        $directory = __DIR__ . '/../../../../web/uploads/';
        $filename = 'all.zip';
        $zip = new \ZipArchive();
        $zip->open($filename, \ZipArchive::CREATE);

        foreach ($medias as $media) {
            $zip->addFile($directory . '/' . $media->getFile());
        }

        $zip->close();

        $response->headers->set('Cache-Control', 'private');
        $response->headers->set('Content-type', mime_content_type($filename));
        $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($filename) . '"');
        $response->headers->set('Content-length', filesize($filename));

        // Send headers before outputting anything
        $response->sendHeaders();

        $response->setContent(readfile($filename));

        return $response;
    }

    /**
     * Finds and displays a medium entity.
     *
     */
    public function showAction(Media $medium)
    {
        $deleteForm = $this->createDeleteForm($medium);

        return $this->render('MainBundle:Admin:media/show.html.twig', array(
            'medium' => $medium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing medium entity.
     *
     */
    public function editAction(Request $request, Media $medium)
    {
        $deleteForm = $this->createDeleteForm($medium);
        $editForm = $this->createForm('Main\MainBundle\Form\MediaAdminType', $medium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_media_edit', array('id' => $medium->getId()));
        }

        return $this->render('MainBundle:Admin:media/edit.html.twig', array(
            'medium' => $medium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a medium entity.
     *
     */
    public function deleteAction(Request $request, Media $medium)
    {
        $form = $this->createDeleteForm($medium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($medium);
            $em->flush();
        }

        return $this->redirectToRoute('admin_media_index');
    }

    /**
     * Creates a form to delete a medium entity.
     *
     * @param Media $medium The medium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Media $medium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_media_delete', array('id' => $medium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
