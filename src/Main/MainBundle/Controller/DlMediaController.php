<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Form\ContactType;
use Main\MainBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DlMediaController extends Controller
{

    public function DlMediaAction()
    {

        $photos = $this->getDoctrine()->getManager()->getRepository('MainBundle:Media')->findAll();
        $pathImgActivities = "http://localhost/projet_web_A2/web/img/";

        $imgs = [];

        foreach($photos as $photo)
        {        	
			$filename = $photo->getUrl();

			$imgs[] = $pathImgActivities.$filename;
        }

        $zip = new \ZipArchive();
        $zipName = 'Images'.date("dmY").".zip";
        $zip->open($zipName, \ZipArchive::CREATE);

        foreach($imgs as $img)
        {
        	$zip->addFromString(basename($img), file_get_contents($img));
        }

        $zip->close();

        header('Content-Type', 'application/zip');
		header('Content-disposition: attachment; filename="' . $zipName . '"');
		header('Content-Length: ' . filesize($zipName));
		readfile($zipName);

        return $this->redirectToRoute('accueil');
    }
}
