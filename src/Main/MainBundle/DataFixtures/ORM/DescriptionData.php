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
        $qui = new Description();
        $qui->setNom("Qui");
        $qui->setDescription("A la faveur de la rencontre de Mgr Yousif et d’un ancien bâtisseur alsacien ;
          Bernard Geyler, celui-ci a fait le voyage de Kirkuk en décembre 2015.  
          Préoccupé par la situation et l’action de Mgr Yousif Thomas Mirkis, B. Geyler  a décidé avec quelques amis de créer début 2016 
          une association dénommée  « Aux porteurs de lumière-solidarité Irak ».");
        $qui->setPage("accueil");
        $qui->setOrdre("1");
        $manager->persist($qui);

        $ou = new Description();
        $ou->setNom("Ou");
        $ou->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $ou->setPage("accueil");
        $ou->setOrdre("2");
        $manager->persist($ou);

        $pourquoi = new Description();
        $pourquoi->setNom("Pourquoi");
        $pourquoi->setDescription("Daech mène une guerre folle contre tous ceux qui ne sont pas avec lui, 
        les chrétiens, mais aussi les musulmans. Il n’y a aucune logique rationnelle au combat mené par Daech. 
        Ce sont des barbares, ils veulent le chaos. Dans l’islam comme chez les chrétiens, on n’a pas le droit de tuer l’autre. 
        Il faut donc éduquer les plus jeunes en leur montrant l’impasse des discours guerriers. 
        C’est la responsabilité de chacun et de tous, car Daech ne profite pas d’un prétendu choc des 
        civilisations, mais de l’inculture.Beaucoup de réfugiés ont voulu venir en Europe pour fuir le chaos, 
        mais Daech les poursuit et leur montre qu’il peut venir combattre en tout point du globe.
        Fuir n’est donc pas la solution ; quand l’Allemagne nazie dominait l’Europe, il a fallu résister en restant sur place. ");
        $pourquoi->setPage("accueil");
        $pourquoi->setOrdre("3");
        $manager->persist($pourquoi);

        $comment = new Description();
        $comment->setNom("Comment");
        $comment->setDescription("Nous avons pour but de soutenir financièrement la formation des générations futures, 
        de témoigner des valeurs humaines, de dialogue et de solidarité face au fanatisme destructeur et sectaire.");
        $comment->setPage("accueil");
        $comment->setOrdre("4");
        $manager->persist($comment);

        $aujourdhui = new Description();
        $aujourdhui->setNom("Qui sommes nous Aujourd'hui");
        $aujourdhui->setDescription("Aujourd'hui nous sommes une association comportant 11 membres, qui à déja réaliser X projet depuis ces 1ans et demie d'existance. 
            {citation des projet.}
        Nous avons toujours le meme objectifs : Le pari, c'est que Daesh sera finalement vaincu et qu'il faut préparer la 
        reconstruction de l'Irak dès aujourd'hui. Rester c'est refuser que ce pays perde l'une de ses cimposantes humaines qui forment la richesse
        d'une population multiculturelles.");
        $aujourdhui->setPage("origine");
        $aujourdhui->setOrdre("5");
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
        $don->setPage("don");
        $don->setOrdre("6");
        $manager->persist($don);

        $volonte = new Description();
        $volonte->setNom("Nos volontés");
        $volonte->setDescription("Notre volonté est de permettre à cette jeunesse plein de promesse, triplement déracinée, d’abord de Mossoul vers la vallée de 
        Ninive, puis de là vers le nord Kurdistan, souvent à Erbil, dans des camps, et enfin de là-bas, séparés de leurs familles vers 
        Kirkuk afin de poursuivre leurs études et pourvoir devenir les cadres de l’Irak de demain.
          Bref, dès aujourd’hui se préparer pour construire l’après Daech.");
        $volonte->setPage("origine");
        $volonte->setOrdre("7");
        $manager->persist($volonte);

        $valeur = new Description();
        $valeur->setNom("Nos valeurs");
        $valeur->setDescription("Notre association se donne pour mission de lever des fonds dans une démarche chrétienne éthique 
        et oblative afin de financer les actions et projets humanitaires  de Mgr Yousif Thomas Mirkis en Irak: 
        Pas de frais généraux, pas de charges de publicité, de secrétariat. Notre action  est le fruit d’un engagement où 
        chaque membre prend à sa charge ses frais.  La conséquence est immédiate :  1 euro collecté = 1 euro en faveur de l’Irak.");
        $valeur->setPage("origine");
        $valeur->setOrdre("8");
        $manager->persist($valeur);

        $irakG = new Description();
        $irakG->setNom("Irak (en général) ");
        $irakG->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $irakG->setPage("lieu");
        $irakG->setMedia($this->getReference('irakG_media'));
        $irakG->setOrdre("9");
        $manager->persist($irakG);

        $irakS = new Description();
        $irakS->setNom("Irak (précisement) ");
        $irakS->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $irakS->setPage("lieu");
        $irakS->setMedia($this->getReference('kirkouk'));
        $irakS->setOrdre("10");
        $manager->persist($irakS);

        $objectif = new Description();
        $objectif->setNom("Quel est le but de l'association");
        $objectif->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $objectif->setPage("objectif");
        $objectif->setOrdre("11");
        $objectif->setMedia($this->getReference('carouselMedia1'));
        $manager->persist($objectif);


        $manager->flush();

        $this->addReference('qui',$qui);
        $this->addReference('ou',$ou);
        $this->addReference('pourquoi',$pourquoi);
        $this->addReference('comment',$comment);
        $this->addReference('don',$don);
        $this->addReference('aujourdhui',$aujourdhui);
        $this->addReference('volonte',$volonte);
        $this->addReference('valeur',$valeur);
        $this->addReference('irakG',$irakG);
        $this->addReference('irakS',$irakS);
        $this->addReference('objectif',$objectif);

    }

    public function getOrder()
    {
        return 4;
    }
}