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
use Main\MainBundle\Entity\Actu;


class ActuData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $actu1 = new Actu();
        $actu1->setTitre("Mgr Yousif Thomas Mirkis distribue de la nourriture et des médicaments.");
        $actu1->setDescription("Mardi 11 Avril, 2017 Mgr Yousif Thomas MIRKIS, archevêque chaldéen de Kirkouk & Sulaimanyah, accompagné par un groupe de son diocèse, a visité le quartier Al-Mamoun, du côté droite de Mossoul, pour fournir une aide alimentaire et médicale. Cette aide d'urgence pour un grand nombre de fugitifs des quartiers de Mossoul où on entendait des tirs et des bombardements de mortiers.  Les affamés étaient heureux d’avoir des repas chauds, n’ayant pas les moyens de faire la cuisine. Il rencontré des familles fatiguées qui ont fui, libérées par les forces irakiennes qui étaient en train de les transférer dans différents camps mis en place par les Nations Unies, le Haut-Commissariat pour les réfugiés HCR, pour les héberger. Il a également visité le dispensaire de fortune installé à la hâte, qui dispense – autant que possible – les aides d'urgence, les opérations, la radiologie et la pharmacie, où une équipe de médecins qui travaillent avec dévouement ...
L'évêque et sa délégation, étaient aussi accompagnés par des journalistes de la chaîne satellitaire Ishtar et la télévision irakienne pour couvrir l'événement, de même des visiteurs étrangers pour voir le travail humanitaire et médical qui sont procurés. Les blessés par les combats viennent à ce centre, ils sont aussi contents de s’être débarrassés de l'enfer Daesh, ce qui se passe à quelques kilomètres de là. Et tout le monde a été étonné de la dévastation et la destruction qui ont eu lieu et ce que passe encore dans le centre de cette ville chère, la seconde de l’Irak en taille et en importance après Bagdad.
Mgr Mirkis a également donné plusieurs entretiens avec la presse et les medias, où il a déclaré : « Nous sommes venus dans ces jours de la semaine Sainte, pour soulager un peu la douleur de nos frères et sœurs qui souffrent. Pour répondre aussi à l’appel de SB Louis Sako, Patriarche des Chaldéens, à une semaine de paix. Pour que la prière et la solidarité avec nos frères et sœurs qui souffrent à Mossoul (et aussi l’église d’Egypte, qui a été frappée aussi). Mgr Yousif a dits aux gens : « Nous voulons être près de vous et avec vous, nous restons des frères dans ce pays, dans l'humanité avant tout, et nous devons tous travailler à rejeter l'extrémisme et la violence, ce cancer, et contribuer à la construction d'un nouvel Irak, et notre chère ville Mossoul qui était jadis un refuge et une protection pour les pauvres et les nécessiteux, regardez ce que l'extrémisme et le terrorisme en ont fait !
La délégation sur son chemin a visité aussi la ville chrétienne de Qaraqosh, vidée de ses habitants depuis Aout 2014, Il a constaté son état de destruction, il a visité la Grande Croix, qui a été érigée à l'entrée de la ville, et apprécié l’expression artistique de cette Croix « … comme si cette Croix avait subi une opération, mais semblait que la blessure ne l’a pas achevée, elle était en train de guérir, symbole de notre situation en ce pays ».
");
        $actu1->setAuteur("Aux porteurs de lumiere");
        $actu1->setMedia($this->getReference('aide'));
        $actu1->setType("fa fa-calendar-check-o fa-2x fa-inverse");
        $actu1->setLien("https://www.google.fr");
        $manager->persist($actu1);

        $actu2 = new Actu();
        $actu2->setTitre("Elargissement de l'action \"Aux Porteurs de Lumière\"");
        $actu2->setDescription("L'association est en phase d'aggrantissement avec l'ouverture d'une nouvelle branche à 
        Paris aux frais des membres");
        $actu2->setAuteur("Aux Porteurs de Lumière");
        $actu2->setMedia($this->getReference('paris'));
        $actu2->setType("fa fa fa-university fa-2x fa-inverse");
        $actu2->setLien("https://www.google.fr");
        $manager->persist($actu2);

        $actu4 = new Actu();
        $actu4->setTitre("Conférence des évêques de France");
        $actu4->setDescription("Message des évêques de France sur la situation des chrétiens d’Orient, à l’issue de 
        l’Assemblée plénière de printemps qui s’est tenue  du 15 au 18 mars 2016 à Lourdes. Le bilan des guerres qui 
        ravagent le Moyen Orient se compte aujourd’hui en centaines de milliers de morts, en millions de blessés, de 
        déplacés, de réfugiés. En Syrie, la guerre civile a éclaté depuis cinq ans. Il y a 18 mois, les chrétiens ont 
        été chassés de Mossoul et de la Plaine de Ninive en Irak. Des familles sont brisées, des enfants sont déscolarisés.
         La situation des personnes réfugiées et déplacées en Turquie comme en Jordanie ou au Liban est très préoccupante.
          Avec eux tous, nous crions pour la paix ! Des liens d’amitié et des échanges fructueux se sont renforcés entre 
          les épiscopats d’Orient et l’épiscopat français, notamment par des visites réciproques. Dans les diocèses de 
          France, la mobilisation des fidèles et des communautés est réelle pour l’accueil et le soutien des réfugiés et
           déplacés qui nous enrichissent par leur foi et leur culture. Avec les organisations caritatives liées au Conseil
            épiscopal de la Solidarité, nous continuons à manifester à nos frères d’Orient notre soutien et notre proximité.
             A la suite du Pape François et des évêques d’Orient, nous demandons que tout soit fait pour l’arrêt des combats
             , pour l’acheminement de l’aide humanitaire aux populations sinistrées et pour le retour des populations déplacées
              sur leur terre. Les chrétiens irakiens et syriens sont facteurs de paix dans leur pays ; il serait dramatique 
              qu’ils disparaissent de la carte du Moyen-Orient. Nous manifestons notre vive inquiétude face aux lenteurs et
               aux difficultés d’obtention de visas pour la France pour les réfugiés et les déplacés à Erbil en Irak. Aux
                autorités publiques françaises et internationales, nous demandons de ne pas relâcher leurs efforts pour
                 aider les minorités vulnérables, comme les Yézidis et les Chrétiens. Il est urgent de retirer aux groupes
                  terroristes les moyens de nuire, en Orient comme ailleurs. Prochainement, Mgr Georges Pontier, archevêque
                   de Marseille, Président de la Conférence des évêques de France, se rendra au Kurdistan pour signifier
                    concrètement le soutien de l’Eglise de France à nos frères d’Orient. Conscients de leur détresse, 
                    au moment où les communautés chrétiennes célébreront les fêtes de Pâques, nous prions pour que les
                     chrétiens en Orient gardent des raisons de croire et d’espérer. Nous rendons grâce pour leur témoignage
                      de foi qui encourage les chrétiens de notre pays à vivre leur propre foi de manière plus profonde
                       et plus explicite encore. Les évêques de France réunis en Assemblée plénière Mars 2016");
        $actu4->setAuteur("Les évêques de France");
        $actu4->setMedia($this->getReference('conf'));
        $actu4->setType("fa fa-newspaper-o fa-2x fa-inverse");
        $actu4->setLien("https://www.google.fr");
        $manager->persist($actu4);

        $actu3 = new Actu();
        $actu3->setTitre("Avec l'église de France, soutenez les etudiants en Irak");
        $actu3->setDescription("Avec l’Église de France, soutenez les #EtudiantsEnIrak 03/12/2015 Ce projet s’inscrit
         dans un partenariat entre l’Église de France, représentée par la Conférence des évêques de France, et l’OEuvre 
         d’Orient. Depuis le 3 décembre 2015, l’Église de France a mis en place un partenariat avec l’OEuvre d’Orient 
         pour permettre à 380 étudiants d’Irak de poursuivre leurs études dans leur langue cette année. Des futurs médecins,
          pharmaciens, architectes et ingénieurs Ces étudiants font partie des milliers de chrétiens qui ont ont du fuir
           Mossoul et la plaine de Ninive en août 2014. Ils ont ensuite été transféré d’Erbil à Kirkouk, où l’enseignement
            est donné dans leur langue, l’arabe. Il s’y préparent à être médecin, pharmacien, architecte ou ingénieur. Sur
             place, c’est Mgr Youssif Thomas Mirkis, archevêque chaldéen de Kirkouk et de Souleymanieh, qui s’occupe du projet.
              « Aider les futurs cadres à poursuivre leurs études, c’est essentiel pour reconstruire notre pays. En soutenant
               les jeunes, nous les maintenons dans le pays » explique-t-il. Fournir un logement, nourriture, accès aux soins,
                fournitures scolaires et une connexion internet L’objectif est de leur fournir un logement, de la nourriture,
                 l’accès aux soins, des fournitures scolaires et une connexion internet. Depuis décembre, près de 900 000 euros
                  ont déjà été levés grâce à la générosité des donateurs. L’objectif est de trouver encore 240 000 euros 
                   pour financer les besoins de tous les étudiants. Le 18 avril 2016, une délégation d’évêques français 
                   (Mgr Georges Pontier,  Mgr Pascal Gollnisch, Mgr Stanislas Lalanne, et Mgr Olivier Ribadeau Dumas) 
                   ont pu rencontrer ces étudiants irakiens.
");
        $actu3->setAuteur("L'Oeuvre d'Orient");
        $actu3->setMedia($this->getReference('oeuvre'));
        $actu3->setType("fa fa-newspaper-o fa-2x fa-inverse");
        $manager->persist($actu3);


        $manager->flush();

        $this->addReference('actu1',$actu1);
        $this->addReference('actu2',$actu2);
        $this->addReference('actu3',$actu3);

    }

    public function getOrder()
    {
        return 4;
    }
}