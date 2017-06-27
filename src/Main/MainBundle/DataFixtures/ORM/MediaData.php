<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 08/02/2017
 * Time: 11:48
 */

namespace Main\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Main\MainBundle\Entity\Media;



class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $email = new Media();
        $email->setPath('/img/email.png');
        $email->setUrl('email.png');
        $manager->persist($email);

        $facebook = new Media();
        $facebook->setPath('/img/facebook.png');
        $facebook->setUrl('facebook.png');
        $manager->persist($facebook);

        $google = new Media();
        $google->setPath('/img/google.png');
        $google->setUrl('google.png');
        $manager->persist($google);

        $twitter = new Media();
        $twitter->setPath('/img/twitter.png');
        $twitter->setUrl('twitter.png');
        $manager->persist($twitter);

        $carouselMedia1 = new Media();
        $carouselMedia1->setPath('/img/Carousel1Small3.jpg');
        $carouselMedia1->setUrl('1.jpg');
        $manager->persist($carouselMedia1);

        $carouselMedia2 = new Media();
        $carouselMedia2->setPath('/img/Carousel4Small.jpg');
        $carouselMedia2->setUrl('4.jpg');
        $manager->persist($carouselMedia2);

        $carouselMedia3 = new Media();
        $carouselMedia3->setPath('/img/Carousel3Small.jpg');
        $carouselMedia3->setUrl('3.jpg');
        $manager->persist($carouselMedia3);


        $equipe_groupe = new Media();
        $equipe_groupe->setPath('img/ImageGroupe.JPG');
        $equipe_groupe->setUrl('ImageGroupe.JPG');
        $manager->persist($equipe_groupe);

        $inconnu = new Media();
        $inconnu->setPath('img/Inconnue.jpg');
        $inconnu->setUrl('Inconnue.jpg');
        $manager->persist($inconnu);

        $irakG = new Media();
        $irakG->setPath('img/irakLast.png');
        $irakG->setUrl('irakLast.png');
        $manager->persist($irakG);

        $kirkouk = new Media();
        $kirkouk->setPath('img/kirkouk.png');
        $kirkouk->setUrl('kirkouk.png');
        $manager->persist($kirkouk);

        $soutenir = new Media();
        $soutenir->setPath('img/Carousel2Small.jpg');
        $soutenir->setUrl('Carousel2Small.png');
        $manager->persist($soutenir);

        $qualite = new Media();
        $qualite->setPath('img/P1060953.jpg');
        $qualite->setUrl('P1060953.png');
        $manager->persist($qualite);

        $collecte = new Media();
        $collecte->setPath('img/charity.jpg');
        $collecte->setUrl('charity.png');
        $manager->persist($collecte);

        $etudiantG = new Media();
        $etudiantG->setPath('img/etudiantGroupe.png');
        $etudiantG->setUrl('etudiantGroupe.png');
        $manager->persist($etudiantG);

        $cabinetDentaire = new Media();
        $cabinetDentaire->setPath('img/cabinetDentaire.jpg');
        $cabinetDentaire->setUrl('cabinetDentaire.jpg');
        $manager->persist($cabinetDentaire);

        $etudiant = new Media();
        $etudiant->setPath('img/P1070667.jpg');
        $etudiant->setUrl('P1070667.jpg');
        $manager->persist($etudiant);

        $paris = new Media();
        $paris->setPath('img/france.jpg');
        $paris->setUrl('france.jpg');
        $manager->persist($paris);

        $conf = new Media();
        $conf->setPath('img/Conf.png');
        $conf->setUrl('Conf.png');
        $manager->persist($conf);

        $oeuvre = new Media();
        $oeuvre->setPath('img/oeuvreorient.png');
        $oeuvre->setUrl('oeuvreorient.png');
        $manager->persist($oeuvre);

        $histoire = new Media();
        $histoire->setPath('img/histoire.jpg');
        $histoire->setUrl('histoire.jpg');
        $manager->persist($histoire);

        $action_past = new Media();
        $action_past->setPath('img/ActionPast.jpg');
        $action_past->setUrl('ActionPast.jpg');
        $manager->persist($action_past);

        $unicef = new Media();
        $unicef->setPath('img/unicef.jpg');
        $unicef->setUrl('unicef.jpg');
        $manager->persist($unicef);

        $manager->flush();

        $this->addReference('email',$email);
        $this->addReference('facebook',$facebook);
        $this->addReference('google',$google);
        $this->addReference('carouselMedia1',$carouselMedia1);
        $this->addReference('carouselMedia2',$carouselMedia2);
        $this->addReference('carouselMedia3',$carouselMedia3);
        $this->addReference('equipe_groupe',$equipe_groupe);
        $this->addReference('collecte',$collecte);
        $this->addReference('qualite',$qualite);
        $this->addReference('soutenir',$soutenir);
        $this->addReference('inconnu',$inconnu);
        $this->addReference('irakG_media',$irakG);
        $this->addReference('kirkouk',$kirkouk);
        $this->addReference('etudiantG',$etudiantG);
        $this->addReference('cabinetDentaire',$cabinetDentaire);
        $this->addReference('etudiant',$etudiant);
        $this->addReference('paris',$paris);
        $this->addReference('conf',$conf);
        $this->addReference('oeuvre',$oeuvre);
        $this->addReference('histoireMedia',$histoire);
        $this->addReference('action_past',$action_past);
        $this->addReference('unicef',$unicef);
    }

    public function getOrder()
    {
        return 1;
    }
}