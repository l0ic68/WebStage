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
         et projets humanitaires en Irak: L'association « Aux porteurs de lumière » s'est fixé comme objectif de collecter
          des moyens financiers. Elle rassemble des fonds qu'elle adresse à Mgr Yousif par l'intermédiaire de l'OEuvre d'Orient.
           Grâce aux premiers dons recueillis, Mgr Yousif assure l'hébergement et la subsistance des étudiants: location
            de maisons, mobilier, nourriture. À votre tour, s'il vous plait, aidez-nous à les soutenir ! 
        ");
        $aPropos->setOrdre("1");
        $manager->persist($aPropos);


        $soutenir = new Description();
        $soutenir->setNom("Soutien de 800 étudiants");
        $soutenir->setDescription("Notre volonté est de permettre à cette jeunesse plein de promesse, triplement 
        déracinée, de poursuivre leurs études et pourvoir devenir les cadres de l’Irak de demain.");
               $soutenir->setMedia($this->getReference('etudiantG'));
        $soutenir->setOrdre("2");
        $soutenir->setLien("actual");
        $manager->persist($soutenir);

        $qualite = new Description();
        $qualite->setNom("Amélioration du quotidien");
        $qualite->setDescription("Pour l'amélioration de la qualité de vie via la construction de divers bâtiment 
        nécessaire au quotidien.");
               $qualite->setMedia($this->getReference('qualite'));
        $qualite->setOrdre("3");
        $qualite->setLien("past");
        $manager->persist($qualite);

        $collecte = new Description();
        $collecte->setNom("Pour financer nos actions : collecte de dons");
        $collecte->setDescription(" Notre action est le fruit d’un engagement où chaque membre prend à sa charge ses 
        frais.  La conséquence est immédiate : 1 euro collecté = 1 euro en faveur de l’Irak.");
        $collecte->setMedia($this->getReference('collecte'));
        $collecte->setOrdre("4");
        $collecte->setLien("don");
        $manager->persist($collecte);

        $don = new Description();
        $don->setNom("Comment nous soutenir ?");
        $don->setDescription(" ");
        $don->setMedia($this->getReference('unicef'));
        $don->setOrdre("23");
        $manager->persist($don);

        $bandeau = new Description();
        $bandeau->setNom("Comment pouvez-vous nous aider ?");
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
        $histoire->setMedia($this->getReference('histoireMedia'));
        $histoire->setOrdre("6");
        $manager->persist($histoire);

        $but = new Description();
        $but->setNom("Nos objectifs");
        $but->setDescription("Nous avons pour but de soutenir financièrement la formation des générations futures, 
        de témoigner des valeurs humaines, de dialogue et de solidarité face au fanatisme destructeur et sectaire.");
        $but->setOrdre("7");
        $manager->persist($but);
//
        $volontees = new Description();
        $volontees->setNom("Nos volontés");
        $volontees->setDescription("<p>Notre volont&eacute; est de permettre &agrave; cette jeunesse plein de promesse, triplement d&eacute;racin&eacute;e, d&rsquo;abord de Mossoul vers la vall&eacute;e de Ninive, puis de l&agrave; vers le nord Kurdistan, souvent &agrave; Erbil, dans des camps, et enfin de l&agrave;-bas, s&eacute;par&eacute;s de leurs familles vers Kirkuk afin de poursuivre leurs &eacute;tudes et pourvoir devenir les cadres de l&rsquo;Irak de demain.</p>

<p>Bref, d&egrave;s aujourd&rsquo;hui se pr&eacute;parer pour construire l&rsquo;apr&egrave;s Daech.</p>
");
        $volontees->setOrdre("8");
        $manager->persist($volontees);

        $valeur = new Description();
        $valeur->setNom("Nos valeurs");
        $valeur->setDescription("<p>Notre association se donne pour mission de lever des fonds dans une d&eacute;marche chr&eacute;tienne &eacute;thique et oblative afin de financer les actions et projets humanitaires de Mgr Yousif Thomas Mirkis en Irak.</p>

<p>Pas de frais g&eacute;n&eacute;raux, pas de charges de publicit&eacute;, de secr&eacute;tariat. Notre action est le fruit d&rsquo;un engagement o&ugrave; chaque membre prend &agrave; sa charge ses frais.</p>

<p>La cons&eacute;quence est imm&eacute;diate : 1 euro collect&eacute; = 1 euro en faveur de l&rsquo;Irak.</p>");
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
        $Irak1->setNom("Histoire de l'Irak");
        $Irak1->setDescription("<p>L&#39;association s&#39;int&eacute;resse &agrave; toutes les minorit&eacute;s menac&eacute;es par Daech, pour l&#39;essentiel les chr&eacute;tiens mais aussi&nbsp;les Yaz&eacute;dis, qui tirent leurs racines de l&rsquo;ancienne M&eacute;sopotamie, et qui sont consid&eacute;r&eacute;es par Daech comme des m&eacute;cr&eacute;ants, et de ce fait sont menac&eacute;s de mort. En Irak, ils &eacute;taient essentiellement concentr&eacute;s dans la vall&eacute;e de Lalish, au Nord de Mossoul. Beaucoup d&rsquo;entre eux sont d&eacute;sormais r&eacute;fugi&eacute;s &agrave; Sulaymaniya. La situation cr&eacute;&eacute;e par la constitution de l&rsquo;&eacute;tat islamique et sa volont&eacute; d&rsquo;&eacute;radiquer par la terreur toute autre forme de religion que la sienne peut conduire &agrave; deux attitudes pour les chr&eacute;tiens : partir ou rester pour r&eacute;sister.</p>");
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

        $projetR= new Description();
        $projetR->setNom("Vos réussites");
        $projetR->setDescription("");
        $projetR->setMedia($this->getReference("action_past"));
        $projetR->setOrdre("17");
        $manager->persist($projetR);

        $projetC1= new Description();
        $projetC1->setNom("Formation = Avenir");
        $projetC1->setDescription("Soutenons les jeunes chrétiens d'Irak
        Rester, c’est le choix fait par de nombreux étudiants, qui d’ailleurs 
        n’avaient pas beaucoup d’autres solutions, mais qui ont ainsi fait 
        un magnifique pari sur l’avenir. Leur permettre de rester, c’est contribuer à 
        l’éducation et à la formation, piliers de cette future reconstruction de l’IRAK 
        de demain. Mais pour faire vivre tout ce monde, nous avons absolument besoin de 
        votre solidarité");
        $projetC1->setOrdre("18");
        $projetC1->setlien("actualActionModal");
        $manager->persist($projetC1);

        $projetC2= new Description();
        $projetC2->setNom("Prise en charge des étudiants : ");
        $projetC2->setDescription("<p>&nbsp;</p>

<p>Ann&eacute;e 2014/2015 : 80 &eacute;tudiants</p>

<p><br />
Ann&eacute;e 2015/2016 : 420 &eacute;tudiants</p>

<p><br />
Ann&eacute;e 2016/2017 : 680 &eacute;tudiants</p>

<p><br />
Ann&eacute;e 2017/2018 : 800 &eacute;tudiants</p>");
        $projetC2->setOrdre("19");
        $manager->persist($projetC2);

        $crowdfounding= new Description();
        $crowdfounding->setNom("Crowdfunding");
        $crowdfounding->setDescription("Pour soutenir nos différentes actions auprès des réfugiés d'irak vous pouvez leurs offrir votre don via le site de Crowdfunding.");
        $crowdfounding->setOrdre("20");
        $manager->persist($crowdfounding);

        $virement= new Description();
        $virement->setNom("Virement");
        $virement->setDescription("Virement à l’adresse du compte suivant : Caisse d’épargne de Molsheim : 16 705-09017-08001639023 rib 49");
        $virement->setOrdre("21");
        $manager->persist($virement);

        $cheque= new Description();
        $cheque->setNom("Cheque");
        $cheque->setDescription("Par chèque libellé à l’ordre de l’Œuvre d’Orient* et adressé à l’association « Aux porteurs de lumière » 12, rue des cerisiers - 67117 FURDENHEIM");
        $cheque->setOrdre("22");
        $manager->persist($cheque);

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