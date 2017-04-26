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
use Main\MainBundle\Entity\Action;


class ActionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $action1 = new Action();
        $action1->setNom("Construction d'une école");
        $action1->setDescription("Nous souhaitons construire une école pour les enfants défavorisé");
        $action1->setCout(10000);
        $action1->setDateDebut(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action1->setDateFin(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action1->setRecolte(5000);
        $action1->setType("En cours");
        $manager->persist($action1);

        $action2 = new Action();
        $action2->setNom("Construction d'un Mur");
        $action2->setDescription("Nous souhaitons construire un mur pour les enfants");
        $action2->setCout(10000);
        $action2->setDateDebut(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action2->setDateFin(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action2->setRecolte(5000);
        $action2->setType("Future");
        $manager->persist($action2);

        $action3 = new Action();
        $action3->setNom("Construction d'une voiture");
        $action3->setDescription("Nous souhaitons construire une voiture pour les enfants défavorisé");
        $action3->setCout(10000);
        $action3->setDateDebut(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action3->setDateFin(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action3->setRecolte(5000);
        $action3->setType("Passée");
        $manager->persist($action3);

        $manager->flush();

        $this->addReference('action1',$action1);
        $this->addReference('action2',$action2);
        $this->addReference('action3',$action3);

    }

    public function getOrder()
    {
        return 5;
    }
}