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
use Main\MainBundle\Entity\Membres;


class MembresData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $oulerich_loic = new Membres();
        $oulerich_loic->setNom('Oulerich');
        $oulerich_loic->setPrenom('Loic');
        $oulerich_loic->setDescription("Actuellement en fin de prépa ingénieur, je réalise un stage pour cette association, l'objectif étant la réalisation d'un site WEB");
        $oulerich_loic->setMedia($this->getReference("oulerich_loic"));
        $manager->persist($oulerich_loic);

        $meyer_cedric = new Membres();
        $meyer_cedric->setNom('Oulerich');
        $meyer_cedric->setPrenom('Loic');
        $meyer_cedric->setDescription("Actuellement en fin de prépa ingénieur, je réalise un stage pour cette association, l'objectif étant la réalisation d'un site WEB");
        $meyer_cedric->setMedia($this->getReference("meyer_cedric"));
        $manager->persist($meyer_cedric);

        $strinati_quentin = new Membres();
        $strinati_quentin->setNom('Oulerich');
        $strinati_quentin->setPrenom('Loic');
        $strinati_quentin->setDescription("Actuellement en fin de prépa ingénieur, je réalise un stage pour cette association, l'objectif étant la réalisation d'un site WEB");
        $strinati_quentin->setMedia($this->getReference("strinati_quentin"));
        $manager->persist($strinati_quentin);

        $sniadach_cyril = new Membres();
        $sniadach_cyril->setNom('Oulerich');
        $sniadach_cyril->setPrenom('Loic');
        $sniadach_cyril->setDescription("Actuellement en fin de prépa ingénieur, je réalise un stage pour cette association, l'objectif étant la réalisation d'un site WEB");
        $sniadach_cyril->setMedia($this->getReference("sniadach_cyril"));
        $manager->persist($sniadach_cyril);


        $manager->flush();

        $this->addReference('1',$oulerich_loic);
        $this->addReference('2',$meyer_cedric);
        $this->addReference('3',$strinati_quentin);
        $this->addReference('4',$sniadach_cyril);

    }

    public function getOrder()
    {
        return 5;
    }
}