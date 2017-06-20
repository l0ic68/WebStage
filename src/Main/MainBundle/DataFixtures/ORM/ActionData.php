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
        $action1->setNom("Un cabinet dentaire pour les réfugiés de Kirkuk");
        $action1->setDescription("Début 2016, la construction et l’équipement d’un cabinet dentaire a été mené sur  
        les fonds propres de l’association, au travers de ses membres. Ce cabinet basé à Kirkuk offre aujourd’hui aux 
        déplacés-déracinés de Mossoul  (ville sous contrôle de Daech depuis 3 ans) des soins dentaires gratuits sur la base 
        du bénévolat de 3 dentistes Irakiens. Deux chrétiens et un musulman.");
        $action1->setCout(35000);
        $action1->setDateDebut(new \DateTime("01-01-2016"), new \DateTimeZone('Europe/Paris'));
        $action1->setDateFin(new \DateTime("15-04-2016"), new \DateTimeZone('Europe/Paris'));
        $action1->setRecolte(0);
        $action1->setType("Passée");
//        $action1->addMedia($this->getReference('equipe_groupe'));
//        $action1->addMedia($this->getReference('kirkouk'));
//        $action1->addMedia($this->getReference('irakG_media'));
        $action1->setPicture($this->getReference("cabinetDentaire"));
        $action1->setFrontPage('realisé');
        $manager->persist($action1);

        $action8 = new Action();
        $action8->setNom("Parrainage de 50 étudiants en Architecture et Ingénierie à Kirkuk");
        $action8->setDescription("Nous avons déja l'année dernière financé l’hébergement de 50 étudiants pour un budget 
        de 100 000€ qui a été mis à disposition de Mgr Yousif suite à nos actions en Alsace mais aussi en Suisse.
        Cet argent à permis à Mgr Yousif a loué des maisons, les a équipées, meublées, de façon à héberger d’une part des
        garçons, d’autre par des filles. Ils sont souvent dix par pièce. Leur lit est également leur
        bureau, dessous se trouve la valise avec les habits. Un responsable de maison est élu par ses
        co-locataires. C’est lui qui va chercher au marché hebdomadaire, accompagné par un
        collaborateur de l’archevêque la nourriture pour la maisonnée pour une semaine
");
        $action8->setCout(0);
        $action8->setDateDebut(new \DateTime("01-09-2015"), new \DateTimeZone('Europe/Paris'));
        $action8->setDateFin(new \DateTime("29-06-2016"), new \DateTimeZone('Europe/Paris'));
        $action8->setRecolte(0);
        $action8->setType("Passée");
//        $action1->addMedia($this->getReference('equipe_groupe'));
//        $action1->addMedia($this->getReference('kirkouk'));
//        $action1->addMedia($this->getReference('irakG_media'));
        $action8->setPicture($this->getReference("etudiant"));
        $action8->setFrontPage('realisé');
        $manager->persist($action8);

        $action5 = new Action();
        $action5->setNom("Parrainage de 50 étudiants en Architecture et Ingénierie à Kirkuk ");
        $action5->setDescription("L’université de Kirkuk donne accès aux filières suivantes : 
        médecine; pharmacie; dentaire; ingénierie et architecture. 
        L’opération va consister à financer leur hébergement à Kirkuk; cela représente un budget de 2000 euros 
        par an et par étudiant, soit total de 100.000 €. Les capitaux pour les  25 premiers étudiants sont en place. 
        Nous cherchons des parrainages pour  les autres 25 étudiants. Parrainer par exemple 2 étudiants vous coûte, 
        avoir fiscal déduit de 66 %, 1360 €  (dans la limite de 20% du revenu imposable)");
        $action5->setCout(100000);
        $action5->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action5->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action5->setRecolte(0);
        $action5->setType("En cours");
//        $action2->addMedia($this->getReference('kirkouk'));
        $action5->setPicture($this->getReference("etudiant"));
        $action5->setFrontPage('Cours');
        $manager->persist($action5);

        $action6 = new Action();
        $action6->setNom("Construction d'une maison pour alzheimer");
        $action6->setDescription("Développer à partir d’un terrain mis à disposition par la collectivité de Sulaimanyiah;
        c'est à dire dessiner le projet de la Miséricorde ; un projet pour une maison alzheimer
        destinée aux séniors. Ce projet sera accompagné par une maison de la petite
        enfance. L’idée consiste à permettre aux familles dont un membre est touché par
        cette maladie de vaquer à leurs occupations de recherche de travail, sans être bloqué
        par un malade qui nécessite une présence continue. Lors du dernier passage de Mr Geyler en Irak,
        ils as pu rencontrer l’épouse du Président, Monsieur Jalal Talabani
        afin de la sensibiliser au projet.");
        $action6->setCout(2500000);
        $action6->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action6->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action6->setRecolte(100000);
        $action6->setType("En cours");
        $action6->setPicture($this->getReference("qualite"));
        $action6->setFrontPage('null');
        $manager->persist($action6);

        $action7 = new Action();
        $action7->setNom("Elargissement de l'action \"Aux Porteurs de Lumière\"");
        $action7->setDescription("L'association est en phase d'aggrantissement avec l'ouverture d'une nouvelle branche à Paris aux frais des membres");
        $action7->setCout(0);
        $action7->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action7->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action7->setRecolte(0);
        $action7->setType("En cours");
        $action7->setPicture($this->getReference("paris"));
        $action7->setFrontPage('null');
        $manager->persist($action7);



        $manager->flush();

        $this->addReference('action1',$action1);
        $this->addReference('action5',$action5);

    }

    public function getOrder()
    {
        return 5;
    }
}