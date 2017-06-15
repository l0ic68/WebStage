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
        $action1->setCout(0);
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


        $action5 = new Action();
        $action5->setNom("Parrainage de 50 étudiants en Architecture et Ingénierie à Kirkuk ");
        $action5->setDescription("L’université de Kirkuk donne accès aux filières suivantes : 
        médecine; pharmacie; dentaire; ingénierie et architecture. En 2015/2016, 
        Mgr Yousif avait accueilli 400 étudiants.  La rentrée universitaire s’annonce avec un 
        effectif plus important de 550 étudiants. Nous avons retenus pour une nouvelle action, 
        de soutenir les étudiants en architectes. Nos métiers, et notre sensibilité n’y sont pas étranger ! 
        L’opération va consister à financer leur hébergement à Kirkuk; cela représente un budget de 2000 euros 
        par an et par étudiant, soit total de 100.000 €. Les capitaux pour les  25 premiers étudiants sont en place. 
        Nous cherchons des parrainages pour  les autres 25 étudiants. Parrainer par exemple 2 étudiants vous coûte, 
        avoir fiscal déduit de 66 %, 1360 €  (dans la limite de 20% du revenu imposable)");
        $action5->setDescriptionP2("Début 2016, la construction et l’équipement d’un cabinet dentaire a été mené sur  
        les fonds propres de l’association, au travers de ses membres. Ce cabinet basé à Kirkuk offre aujourd’hui aux 
        déplacés-déracinés de Mossoul  (ville sous contrôle de Daech depuis 3 ans) des soins dentaires gratuits sur la base 
        du bénévolat de 3 dentistes Irakiens. Deux chrétiens et un musulman.");
        $action5->setCout(10000);
        $action5->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action5->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action5->setRecolte(5000);
        $action5->setType("En cours");
//        $action2->addMedia($this->getReference('kirkouk'));
        $action5->setPicture($this->getReference("etudiant"));
        $action5->setFrontPage('Cours');
        $manager->persist($action5);

        $action6 = new Action();
        $action6->setNom("Construction d'une maison pour alzheimer");
        $action6->setDescription("L'association à comme objectif de construire une maison pour alzheimer, le permit de construire à déjà était validé grâce au plan fournit par l'association.");
        $action6->setCout(0);
        $action6->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action6->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action6->setRecolte(0);
        $action6->setType("En cours");
        $action6->setPicture($this->getReference("irakG_media"));
        $action6->setFrontPage('null');
        $manager->persist($action6);

        $action7 = new Action();
        $action7->setNom("Elargissement de l'action \"Aux Porteurs de Lumière\"");
        $action7->setDescription("L'association est en phase d'aggrantissement avec l'ouverture d'une nouvelle branche à Paris aux frai des membres");
        $action7->setCout(0);
        $action7->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action7->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action7->setRecolte(0);
        $action7->setType("En cours");
<<<<<<< HEAD
        $action7->setPicture($this->getReference("irakG_media"));
=======
        $action7->setPicture($this->getReference("google"));
>>>>>>> 413abbc322295cad2ec15dedfa5a9afb23554e9c
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