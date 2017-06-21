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
use Main\MainBundle\Entity\Description;


class DescriptionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $aPropos = new Description();
        $aPropos->setNom("L'association");
        $aPropos->setDescription("Notre association se donne pour mission de lever des fonds afin de financer des actions
         et projets humanitaires en Irak:
         L’association « Aux porteurs de lumière » s’est fixé comme objectif de collecter des moyens financiers. Elle
         rassemble des fonds qu’elle adresse à Mgr Yousif par l’intermédiaire de l’OEuvre d’Orient. Grâce aux premiers
         dons recueillis, Mgr Yousif assure l’hébergement et la subsistance des étudiants: location de maisons, mobilier,
          nourriture. A votre tour, s’il vous plait, aidez-nous à les soutenir ! 
        ");
        $aPropos->setOrdre("1");
        $manager->persist($aPropos);


        $soutenir = new Description();
        $soutenir->setNom("Soutien de 800 étudiants");
        $soutenir->setDescription("Notre volonté est de permettre à cette jeunesse plein de promesse, triplement 
        déracinée, de poursuivre leurs études et pourvoir devenir les cadres de l’Irak de demain.");
               $soutenir->setMedia($this->getReference('etudiantG'));
        $soutenir->setOrdre("2");
        $manager->persist($soutenir);

        $qualite = new Description();
        $qualite->setNom("Amélioration du quotidien");
        $qualite->setDescription("Pour l'amélioration de la qualité de vie via la construction de divers bâtiment 
        nécessaire au quotidien.");
               $qualite->setMedia($this->getReference('qualite'));
        $qualite->setOrdre("3");
        $manager->persist($qualite);

        $collecte = new Description();
        $collecte->setNom("Pour financer nos actions : collecte de dons");
        $collecte->setDescription(" Notre action est le fruit d’un engagement où chaque membre prend à sa charge ses 
        frais.  La conséquence est immédiate : 1 euro collecté = 1 euro en faveur de l’Irak.");
               $collecte->setMedia($this->getReference('collecte'));
        $collecte->setOrdre("4");
        $manager->persist($collecte);

        $bandeau = new Description();
        $bandeau->setNom("Comment pouvez-vous simplement nous aider ?");
        $bandeau->setDescription(" ");
       //        $soutenir->setMedia($this->getReference('$bandeau'));
        $bandeau->setOrdre("5");
        $manager->persist($bandeau);


        $histoire = new Description();
        $histoire->setNom("Notre histoire");
        $histoire->setDescription("Notre équipe de 11 membres est composée d’acteurs économiques et religieux : 
        architecte, assureur, comptable,notaire, publicitaire, personnalités de la société civile et religieuse.
A la faveur de la rencontre de Mgr Yousif et d’un ancien bâtisseur alsacien ; Bernard Geyler, celui-ci a fait le voyage 
de Kirkuk en décembre 2015.
Préoccupé par la situation et l’action de Mgr Yousif Thomas Mirkis, B. Geyler a décidé avec quelques amis de créer début
 2016 une association dénommée « Aux porteurs de lumière-solidarité Irak ».");
//        $histoire->setMedia($this->getReference(''));
        $histoire->setOrdre("6");
        $manager->persist($histoire);

        $but = new Description();
        $but->setNom("Notre but");
        $but->setDescription("Nous avons pour but de soutenir financièrement la formation des générations futures, 
        de témoigner des valeurs humaines, de dialogue et de solidarité face au fanatisme destructeur et sectaire.");
        $but->setOrdre("7");
        $manager->persist($but);
//
        $volontees = new Description();
        $volontees->setNom("Nos volontés");
        $volontees->setDescription("Notre volonté est de permettre à cette jeunesse plein de promesse, triplement 
        déracinée, d’abord de Mossoul vers la vallée de Ninive, puis de là vers le nord Kurdistan, souvent à Erbil, 
        dans des camps, et enfin de là-bas, séparés de leurs familles vers Kirkuk afin de poursuivre leurs études et 
        pourvoir devenir les cadres de l’Irak de demain.  Bref, dès aujourd’hui se préparer pour construire l’après 
        Daech.
");
        $volontees->setOrdre("8");
        $manager->persist($volontees);

        $valeur = new Description();
        $valeur->setNom("Nos valeurs");
        $valeur->setDescription("Notre association se donne pour mission de lever des fonds dans une démarche chrétienne
         éthique et oblative afin de financer les actions et projets humanitaires de Mgr Yousif Thomas Mirkis en Irak.
        Pas de frais généraux, pas de charges de publicité, de secrétariat. Notre action est le fruit d’un engagement où chaque 
        membre prend à sa charge ses frais. La conséquence est immédiate : 1 euro collecté = 1 euro en faveur de l’Irak.");
        $valeur->setOrdre("9");
        $manager->persist($valeur);



        $aujourdhui = new Description();
        $aujourdhui->setNom("Qui sommes nous Aujourd'hui");
        $aujourdhui->setDescription("Aujourd'hui nous sommes une association comportant 11 membres, qui à déja réaliser X projet depuis ces 1ans et demie d'existance. 
            {citation des projet.}
        Nous avons toujours le meme objectifs : Le pari, c'est que Daesh sera finalement vaincu et qu'il faut préparer la 
        reconstruction de l'Irak dès aujourd'hui. Rester c'est refuser que ce pays perde l'une de ses cimposantes humaines qui forment la richesse
        d'une population multiculturelles.");
        $aujourdhui->setOrdre("10");
        $aujourdhui->setMedia($this->getReference('equipe_groupe'));
        $manager->persist($aujourdhui);

        $don = new Description();
        $don->setNom("Don");
        $don->setDescription("Nous vous sollicitons chacun en fonction de vos moyens que vous soyez salarié, profession libérale, retraité, acteur économique, ou chef d’entreprise, persuadés de l’intérêt de notre action.
        Si vous êtes convaincu : • Que l’avenir de l’Irak existe, et qu’il est à portée de main • Qu’il vaut mieux permettre aux réfugiés de trouver leur place dans leur pays, pour y former les cadres de demain plutôt que de les voir venir grossir les flots de populations parquées dans des camps, ou marginalisés dans les quartiers déshérité de nos villes, sans parler notre langue, sans profession reconnue bref, sans avenir. Alors vous avez trouvé à côté de chez vous l’association « aux porteurs de Lumière solidarité Irak » qui pourra grâce à vous être le prolongement solidaire de votre constat. Ensemble, et grâce à votre contribution, nous travaillerons afin de traduire nos espérances et nos convictions en projets concrets.
        • Pour le soutien de notre action au profit des enfants     de la diaspora de Strasbourg, Parrainer un élève ; c’est 1300 € par an soit par un chèque, soit par un virement automatique de 108 € par mois.
        • Pour le soutien des étudiants de Kirkuk Parrainer un étudiant c’est 2000 € par an soit par un chèque, soit par un virement automatique de 168 € par mois.
        Pour les dons destinés aux oeuvres organisées par Mgr Yousif Nous collectons au travers de notre association les montants qui transiteront par l’Œuvre d’Orient pour des raisons fiscales mais aussi pour permettre l’acheminement de l’argent. Cette fondation de notoriété internationale est reconnue d’intérêt général de longue date. Bien rodée aux circuits de financement des Eglises d’Orient, elle délivrera aux donateurs les attestations fiscales qu’ils pourraient souhaiter.
        Nous pouvons recevoir votre générosité : > Soit sous forme de chèques libellés à l’ordre de l’OEuvre d’Orient seront à adresser à :   « Aux porteurs de lumière - Solidarité Irak » 12, rue des cerisiers - 67117 Furdenheim 
        > Soit sous forme de virement à l’adresse du compte suivant :      Caisse d’épargne de Molsheim : 16 705-09017-08001639023 rib 49
        Grand merci pour votre solidarité !");
        $don->setOrdre("11");
        $manager->persist($don);

        $but = new Description();
        $but->setNom("Notre but");
        $but->setDescription("Nous avons pour but de soutenir financièrement la formation des générations futures, 
        de témoigner des valeurs humaines, de dialogue et de solidarité face au fanatisme destructeur et sectaire.");
        $but->setOrdre("12");
        $manager->persist($but);

        $objectif = new Description();
        $objectif->setNom("Quel est le but de l'association");
        $objectif->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $objectif->setOrdre("13");
        $objectif->setMedia($this->getReference('carouselMedia1'));
        $manager->persist($objectif);

        $Irak1= new Description();
        $Irak1->setNom("Histoire de l'irak");
        $Irak1->setDescription("L'association s'interesse à toutes 
        les minorités menacées par Daech, tel les Yazédis, qui tirent 
        leurs racines de l’ancienne Mésopotamie, et qui sont considérées 
        par Daech comme des mécréants, et de ce fait sont menacés de mort. 
        En Irak, ils étaient essentiellement concentrés dans la vallée de Lalish, 
        au Nord de Mossoul. Beaucoup d’entre eux sont désormais réfugiés à Sulaymaniya. 
        La situation créée par la constitution de l’état islamique et sa volonté d’éradiquer par la terreur 
        toute autre forme de religion que la sienne peut conduire à deux attitudes pour les 
        chrétiens : partir ou rester pour résister.");
        $Irak1->setOrdre("14");
        $Irak1->setMedia($this->getReference('irakG_media'));
        $manager->persist($Irak1);

        $Irak2= new Description();
        $Irak2->setNom("");
        $Irak2->setDescription("Mais cela pose un problème majeur aux étudiants émigré, 
        car à Sulaymaniya il ne parle pas la même langue qu'à Mossoul. C'est donc très 
        compliqué pour un étudiant, en architecture par exemple, de continuer ces études dans ces conditions.
         Le problème est que l'université la plus proche qui parle leur langue se trouve à Kirkouk, à 100 Km de leur camps.");
        $Irak2->setOrdre("15");
        $manager->persist($Irak2);

        $Irak3= new Description();
        $Irak3->setNom("");
        $Irak3->setDescription("C'est ici qu'intervient Mgr Yousif Thomas 
        Mirkis qui veut leur permettre de rester pour pouvoir contribuer à la future 
        reconstruction de l'Irak de demain. Il a donc loué pour ces étudiants des maisons 
        près de l'université de Kirkouk et leur achète de quoi 
        subvenir a leur besoin pour qu'ils puissent continuer leurs études plus facilement, sans frontières de langue.");
        $Irak3->setOrdre("16");
        $manager->persist($Irak3);


        $manager->flush();

        $this->addReference('but',$but);
        $this->addReference('histoire',$histoire);
        $this->addReference('don',$don);
        $this->addReference('aujourdhui',$aujourdhui);
        $this->addReference('volontees',$volontees);
        $this->addReference('valeur',$valeur);
        $this->addReference('objectif',$objectif);
        $this->addReference('Irak1',$Irak1);
        $this->addReference('Irak2',$Irak2);
        $this->addReference('Irak3',$Irak3);

    }

    public function getOrder()
    {
        return 4;
    }
}