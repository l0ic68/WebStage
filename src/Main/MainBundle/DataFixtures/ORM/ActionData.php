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
        $action1->setDescription("<p>D&eacute;but 2016, la construction et l&rsquo;&eacute;quipement d&rsquo;un cabinet dentaire a &eacute;t&eacute; men&eacute; sur les fonds propres de l&rsquo;association, au travers de ses membres.</p>

<p>Ce cabinet bas&eacute; &agrave; Kirkuk offre aujourd&rsquo;hui aux d&eacute;plac&eacute;s-d&eacute;racin&eacute;s de Mossoul (ville sous contr&ocirc;le de Daech depuis 3 ans) des soins dentaires gratuits sur la base du b&eacute;n&eacute;volat de 3 dentistes Irakiens. Deux chr&eacute;tiens et un musulman.</p>");
        $action1->setCout("35 000");
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
        $action8->setDescription("<p>Nous avons d&eacute;ja l&#39;ann&eacute;e derni&egrave;re financ&eacute; l&rsquo;h&eacute;bergement de 50 &eacute;tudiants pour un budget de 100 000&euro; qui a &eacute;t&eacute; mis &agrave; disposition de Mgr Yousif suite &agrave; nos actions en Alsace mais aussi en Suisse.</p>

<p>Cet argent &agrave; permis &agrave; Mgr Yousif a lou&eacute; des maisons, les a &eacute;quip&eacute;es, meubl&eacute;es, de fa&ccedil;on &agrave; h&eacute;berger d&rsquo;une part des gar&ccedil;ons, d&rsquo;autre par des filles.</p>

<p>Ils sont souvent dix par pi&egrave;ce. Leur lit est &eacute;galement leur bureau, dessous se trouve la valise avec les habits. Un responsable de maison est &eacute;lu par ses co-locataires. C&rsquo;est lui qui va chercher au march&eacute; hebdomadaire, accompagn&eacute; par un collaborateur de l&rsquo;archev&ecirc;que la nourriture pour la maisonn&eacute;e pour une semaine</p>
");
        $action8->setCout("100 000");
        $action8->setDateDebut(new \DateTime("01-09-2015"), new \DateTimeZone('Europe/Paris'));
        $action8->setDateFin(new \DateTime("29-06-2016"), new \DateTimeZone('Europe/Paris'));
        $action8->setRecolte(0);
        $action8->setType("Passée");
        $action8->setPicture($this->getReference("etudiant"));
        $action8->setFrontPage('null');
        $manager->persist($action8);

        $action5 = new Action();
        $action5->setNom("Parrainage de 50 étudiants en Architecture et Ingénierie à Kirkuk ");
        $action5->setDescription("<p>L&rsquo;universit&eacute; de Kirkuk donne acc&egrave;s aux fili&egrave;res suivantes : m&eacute;decine; pharmacie; dentaire; ing&eacute;nierie et architecture.</p>

<p>L&rsquo;op&eacute;ration va consister &agrave; financer leur h&eacute;bergement &agrave; Kirkuk; cela repr&eacute;sente un budget de 2000 euros par an et par &eacute;tudiant, soit total de 100.000 &euro;.</p>

<p>Les capitaux pour les 25 premiers &eacute;tudiants sont en place. Nous cherchons des parrainages pour les autres 25 &eacute;tudiants. Parrainer par exemple 2 &eacute;tudiants vous co&ucirc;te, avoir fiscal d&eacute;duit de 66 %, 1360 &euro; (dans la limite de 20% du revenu imposable)</p>

<p>&nbsp;</p>");
        $action5->setCout("100 000");
        $action5->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action5->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action5->setRecolte(0);
        $action5->setType("En cours");
//        $action2->addMedia($this->getReference('kirkouk'));
        $action5->setPicture($this->getReference("etudiant"));
        $action5->setFrontPage('Cours');
        $manager->persist($action5);

        $action6 = new Action();
        $action6->setNom("Conception d'un établissement dedié au sénior");
        $action6->setDescription("<p>D&eacute;velopper &agrave; partir d&rsquo;un terrain mis &agrave; disposition par la collectivit&eacute; de Sulaimanyiah; c&#39;est &agrave; dire dessiner le projet de la Mis&eacute;ricorde ; un projet pour une maison alzheimer destin&eacute;e aux s&eacute;niors. Ce projet sera accompagn&eacute; par une maison de la petite enfance.</p>

<p>L&rsquo;id&eacute;e consiste &agrave; permettre aux familles dont un membre est touch&eacute; par cette maladie de vaquer &agrave; leurs occupations de recherche de travail, sans &ecirc;tre bloqu&eacute; par un malade qui n&eacute;cessite une pr&eacute;sence continue.</p>

<p>Lors du dernier passage de Mr Geyler en Irak, ils as pu rencontrer l&rsquo;&eacute;pouse du Pr&eacute;sident, Monsieur Jalal Talabani afin de la sensibiliser au projet.</p>");
        $action6->setCout("2 500 000");
        $action6->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
        $action6->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
        $action6->setRecolte(100000);
        $action6->setType("En cours");
        $action6->setPicture($this->getReference("bat3"));
        $action6->setFrontPage('null');
        $manager->persist($action6);

//        $action7 = new Action();
//        $action7->setNom("Elargissement de l'action \"Aux Porteurs de Lumière\"");
//        $action7->setDescription("L'association est en phase d'aggrantissement avec l'ouverture d'une nouvelle branche à Paris aux frais des membres");
//        $action7->setCout(0);
//        $action7->setDateDebut(new \DateTime("01-01-2017"), new \DateTimeZone('Europe/Paris'));
//        $action7->setDateFin(new \DateTime("31-12-2017"), new \DateTimeZone('Europe/Paris'));
//        $action7->setRecolte(0);
//        $action7->setType("En cours");
//        $action7->setPicture($this->getReference("paris"));
//        $action7->setFrontPage('null');
//        $manager->persist($action7);



        $manager->flush();

        $this->addReference('action1',$action1);
        $this->addReference('action5',$action5);

    }

    public function getOrder()
    {
        return 5;
    }
}