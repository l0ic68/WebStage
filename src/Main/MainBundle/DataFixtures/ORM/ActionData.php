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
        $action1->setNom("Un cabinet dentaire de deux fauteuils pour les réfugiés de Kirkuk :  premier projet réalisé");
        $action1->setDescription("Début 2016, la construction et l’équipement d’un cabinet dentaire a été mené sur  
        les fonds propres de l’association, au travers de ses membres. Ce cabinet basé à Kirkuk offre aujourd’hui aux 
        déplacés-déracinés de Mossoul  (ville sous contrôle de Daech depuis 3 ans) des soins dentaires gratuits sur la base 
        du bénévolat de 3 dentistes Irakiens. Deux chrétiens et un musulman.");
        $action1->setCout(0);
        $action1->setDateDebut(new \DateTime("01-01-2016"), new \DateTimeZone('Europe/Paris'));
        $action1->setDateFin(new \DateTime("15-04-2016"), new \DateTimeZone('Europe/Paris'));
        $action1->setRecolte(0);
        $action1->setType("Passée");
        $action1->setMedia($this->getReference('equipe_groupe'));
        $manager->persist($action1);

        $action2 = new Action();
        $action2->setNom("Parrainage de 50 étudiants en Architecture et Ingénierie à Kirkuk ");
        $action2->setDescription("L’université de Kirkuk donne accès aux filières suivantes : 
        médecine; pharmacie; dentaire; ingénierie et architecture. En 2015/2016, 
        Mgr Yousif avait accueilli 400 étudiants.  La rentrée universitaire s’annonce avec un 
        effectif plus important de 550 étudiants. Nous avons retenus pour une nouvelle action, 
        de soutenir les étudiants en architectes. Nos métiers, et notre sensibilité n’y sont pas étranger ! 
        L’opération va consister à financer leur hébergement à Kirkuk; cela représente un budget de 2000 euros 
        par an et par étudiant, soit total de 100.000 €. Les capitaux pour les  25 premiers étudiants sont en place. 
        Nous cherchons des parrainages pour  les autres 25 étudiants. Parrainer par exemple 2 étudiants vous coûte, 
        avoir fiscal déduit de 66 %, 1360 €  (dans la limite de 20% du revenu imposable)");
        $action2->setCout(10000);
        $action2->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action2->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action2->setRecolte(5000);
        $action2->setType("Passée");
        $action2->setMedia($this->getReference('kirkouk'));
        $manager->persist($action2);

        $action3 = new Action();
        $action3->setNom("Parrainage de 50 étudiants en Architecture et Ingénierie à Kirkuk");
        $action3->setDescription("L’université de Kirkuk donne accès aux filières suivantes : 
        médecine; pharmacie; dentaire; ingénierie et architecture. En 2015/2016, 
        Mgr Yousif avait accueilli 400 étudiants.  La rentrée universitaire s’annonce avec un 
        effectif plus important de 550 étudiants. Nous avons retenus pour une nouvelle action, 
        de soutenir les étudiants en architectes. Nos métiers, et notre sensibilité n’y sont pas étranger ! 
        L’opération va consister à financer leur hébergement à Kirkuk; cela représente un budget de 2000 euros 
        par an et par étudiant, soit total de 100.000 €. Les capitaux pour les  25 premiers étudiants sont en place. 
        Nous cherchons des parrainages pour  les autres 25 étudiants. Parrainer par exemple 2 étudiants vous coûte, 
        avoir fiscal déduit de 66 %, 1360 €  (dans la limite de 20% du revenu imposable)");
        $action3->setCout(10000);
        $action3->setDateDebut(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action3->setDateFin(new \DateTime("08-05-2017"), new \DateTimeZone('Europe/Paris'));
        $action3->setRecolte(5000);
        $action3->setType("Passée");
        $action3->setMedia($this->getReference('irakG_media'));
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