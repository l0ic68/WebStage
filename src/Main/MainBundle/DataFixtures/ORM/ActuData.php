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
        $actu1->setDescription("<p>Mardi 11 Avril, 2017 Mgr Yousif Thomas MIRKIS, archev&ecirc;que chald&eacute;en de Kirkouk &amp; Sulaimanyah, accompagn&eacute; par un groupe de son dioc&egrave;se, a visit&eacute; le quartier Al-Mamoun, du c&ocirc;t&eacute; droite de Mossoul, pour fournir une aide alimentaire et m&eacute;dicale. Cette aide d&#39;urgence pour un grand nombre de fugitifs des quartiers de Mossoul o&ugrave; on entendait des tirs et des bombardements de mortiers. Les affam&eacute;s &eacute;taient heureux d&rsquo;avoir des repas chauds, n&rsquo;ayant pas les moyens de faire la cuisine. Il rencontr&eacute; des familles fatigu&eacute;es qui ont fui, lib&eacute;r&eacute;es par les forces irakiennes qui &eacute;taient en train de les transf&eacute;rer dans diff&eacute;rents camps mis en place par les Nations Unies, le Haut-Commissariat pour les r&eacute;fugi&eacute;s HCR, pour les h&eacute;berger. Il a &eacute;galement visit&eacute; le dispensaire de fortune install&eacute; &agrave; la h&acirc;te, qui dispense &ndash; autant que possible &ndash; les aides d&#39;urgence, les op&eacute;rations, la radiologie et la pharmacie, o&ugrave; une &eacute;quipe de m&eacute;decins qui travaillent avec d&eacute;vouement ...</p>

<p>L&#39;&eacute;v&ecirc;que et sa d&eacute;l&eacute;gation, &eacute;taient aussi accompagn&eacute;s par des journalistes de la cha&icirc;ne satellitaire Ishtar et la t&eacute;l&eacute;vision irakienne pour couvrir l&#39;&eacute;v&eacute;nement, de m&ecirc;me des visiteurs &eacute;trangers pour voir le travail humanitaire et m&eacute;dical qui sont procur&eacute;s. Les bless&eacute;s par les combats viennent &agrave; ce centre, ils sont aussi contents de s&rsquo;&ecirc;tre d&eacute;barrass&eacute;s de l&#39;enfer Daesh, ce qui se passe &agrave; quelques kilom&egrave;tres de l&agrave;. Et tout le monde a &eacute;t&eacute; &eacute;tonn&eacute; de la d&eacute;vastation et la destruction qui ont eu lieu et ce que passe encore dans le centre de cette ville ch&egrave;re, la seconde de l&rsquo;Irak en taille et en importance apr&egrave;s Bagdad.</p>

<p>Mgr Mirkis a &eacute;galement donn&eacute; plusieurs entretiens avec la presse et les medias, o&ugrave; il a d&eacute;clar&eacute; : &laquo; Nous sommes venus dans ces jours de la semaine Sainte, pour soulager un peu la douleur de nos fr&egrave;res et s&oelig;urs qui souffrent. Pour r&eacute;pondre aussi &agrave; l&rsquo;appel de SB Louis Sako, Patriarche des Chald&eacute;ens, &agrave; une semaine de paix. Pour que la pri&egrave;re et la solidarit&eacute; avec nos fr&egrave;res et s&oelig;urs qui souffrent &agrave; Mossoul (et aussi l&rsquo;&eacute;glise d&rsquo;Egypte, qui a &eacute;t&eacute; frapp&eacute;e aussi). Mgr Yousif a dits aux gens : &laquo; Nous voulons &ecirc;tre pr&egrave;s de vous et avec vous, nous restons des fr&egrave;res dans ce pays, dans l&#39;humanit&eacute; avant tout, et nous devons tous travailler &agrave; rejeter l&#39;extr&eacute;misme et la violence, ce cancer, et contribuer &agrave; la construction d&#39;un nouvel Irak, et notre ch&egrave;re ville Mossoul qui &eacute;tait jadis un refuge et une protection pour les pauvres et les n&eacute;cessiteux, regardez ce que l&#39;extr&eacute;misme et le terrorisme en ont fait !</p>

<p>La d&eacute;l&eacute;gation sur son chemin a visit&eacute; aussi la ville chr&eacute;tienne de Qaraqosh, vid&eacute;e de ses habitants depuis Aout 2014, Il a constat&eacute; son &eacute;tat de destruction, il a visit&eacute; la Grande Croix, qui a &eacute;t&eacute; &eacute;rig&eacute;e &agrave; l&#39;entr&eacute;e de la ville, et appr&eacute;ci&eacute; l&rsquo;expression artistique de cette Croix &laquo; &hellip; comme si cette Croix avait subi une op&eacute;ration, mais semblait que la blessure ne l&rsquo;a pas achev&eacute;e, elle &eacute;tait en train de gu&eacute;rir, symbole de notre situation en ce pays &raquo;.</p>
");
        $actu1->setAuteur("Aux porteurs de lumiere");
        $actu1->setMedia($this->getReference('aide'));
        $actu1->setType("fa fa-calendar-check-o fa-2x fa-inverse");
//        $actu1->setLien("https://www.google.fr");
        $manager->persist($actu1);

        $actu2 = new Actu();
        $actu2->setTitre("Elargissement de l'action \"Aux Porteurs de Lumière\"");
        $actu2->setDescription("L'association est en phase d'aggrantissement avec l'ouverture d'une nouvelle branche à 
        Paris aux frais des membres");
        $actu2->setAuteur("Aux Porteurs de Lumière");
        $actu2->setMedia($this->getReference('paris'));
        $actu2->setType("fa fa fa-university fa-2x fa-inverse");
//        $actu2->setLien("https://www.google.fr");
        $manager->persist($actu2);

        $actu4 = new Actu();
        $actu4->setTitre("Conférence des évêques de France");
        $actu4->setDescription("<p>Message des &eacute;v&ecirc;ques de France sur la situation des chr&eacute;tiens d&rsquo;Orient, &agrave; l&rsquo;issue de l&rsquo;Assembl&eacute;e pl&eacute;ni&egrave;re de printemps qui s&rsquo;est tenue du 15 au 18 mars 2016 &agrave; Lourdes.</p>

<p>Le bilan des guerres qui ravagent le Moyen Orient se compte aujourd&rsquo;hui en centaines de milliers de morts, en millions de bless&eacute;s, de d&eacute;plac&eacute;s, de r&eacute;fugi&eacute;s.</p>

<p>En Syrie, la guerre civile a &eacute;clat&eacute; depuis cinq ans. Il y a 18 mois, les chr&eacute;tiens ont &eacute;t&eacute; chass&eacute;s de Mossoul et de la Plaine de Ninive en Irak. Des familles sont bris&eacute;es, des enfants sont d&eacute;scolaris&eacute;s. La situation des personnes r&eacute;fugi&eacute;es et d&eacute;plac&eacute;es en Turquie comme en Jordanie ou au Liban est tr&egrave;s pr&eacute;occupante.<br />
Avec eux tous, nous crions pour la paix !</p>

<p>Des liens d&rsquo;amiti&eacute; et des &eacute;changes fructueux se sont renforc&eacute;s entre les &eacute;piscopats d&rsquo;Orient et l&rsquo;&eacute;piscopat fran&ccedil;ais, notamment par des visites r&eacute;ciproques. Dans les dioc&egrave;ses de France, la mobilisation des fid&egrave;les et des communaut&eacute;s est r&eacute;elle pour l&rsquo;accueil et le soutien des r&eacute;fugi&eacute;s et d&eacute;plac&eacute;s qui nous enrichissent par leur foi et leur culture. Avec les organisations caritatives li&eacute;es au Conseil &eacute;piscopal de la Solidarit&eacute;, nous continuons &agrave; manifester &agrave; nos fr&egrave;res d&rsquo;Orient notre soutien et notre proximit&eacute;.</p>

<p>A la suite du Pape Fran&ccedil;ois et des &eacute;v&ecirc;ques d&rsquo;Orient, nous demandons que tout soit fait pour l&rsquo;arr&ecirc;t des combats , pour l&rsquo;acheminement de l&rsquo;aide humanitaire aux populations sinistr&eacute;es et pour le retour des populations d&eacute;plac&eacute;es sur leur terre.</p>

<p>Les chr&eacute;tiens irakiens et syriens sont facteurs de paix dans leur pays ; il serait dramatique qu&rsquo;ils disparaissent de la carte du Moyen-Orient.</p>

<p>Nous manifestons notre vive inqui&eacute;tude face aux lenteurs et aux difficult&eacute;s d&rsquo;obtention de visas pour la France pour les r&eacute;fugi&eacute;s et les d&eacute;plac&eacute;s &agrave; Erbil en Irak.</p>

<p>Aux autorit&eacute;s publiques fran&ccedil;aises et internationales, nous demandons de ne pas rel&acirc;cher leurs efforts pour aider les minorit&eacute;s vuln&eacute;rables, comme les Y&eacute;zidis et les Chr&eacute;tiens.</p>

<p>Il est urgent de retirer aux groupes terroristes les moyens de nuire, en Orient comme ailleurs.</p>

<p>Prochainement, Mgr Georges Pontier, archev&ecirc;que de Marseille, Pr&eacute;sident de la Conf&eacute;rence des &eacute;v&ecirc;ques de France, se rendra au Kurdistan pour signifier concr&egrave;tement le soutien de l&rsquo;Eglise de France &agrave; nos fr&egrave;res d&rsquo;Orient.</p>

<p>Conscients de leur d&eacute;tresse, au moment o&ugrave; les communaut&eacute;s chr&eacute;tiennes c&eacute;l&eacute;breront les f&ecirc;tes de P&acirc;ques, nous prions pour que les chr&eacute;tiens en Orient gardent des raisons de croire et d&rsquo;esp&eacute;rer.</p>

<p>Nous rendons gr&acirc;ce pour leur t&eacute;moignage de foi qui encourage les chr&eacute;tiens de notre pays &agrave; vivre leur propre foi de mani&egrave;re plus profonde et plus explicite encore.</p>

<p>Les &eacute;v&ecirc;ques de France r&eacute;unis en Assembl&eacute;e pl&eacute;ni&egrave;re</p>

<p>Mars 2016</p>");
        $actu4->setAuteur("Les évêques de France");
        $actu4->setMedia($this->getReference('conf'));
        $actu4->setType("fa fa-newspaper-o fa-2x fa-inverse");
        $actu4->setLien("http://www.eglise.catholique.fr/conference-des-eveques-de-france/textes-et-declarations/418325-avec-nos-freres-chretiens-dorient-nous-redisons-lurgence-dagir/");
        $manager->persist($actu4);

        $actu3 = new Actu();
        $actu3->setTitre("Avec l'église de France, soutenez les etudiants en Irak");
        $actu3->setDescription("<p>Avec l&rsquo;&Eacute;glise de France, soutenez les #EtudiantsEnIrak 03/12/2015</p>

<p>Ce projet s&rsquo;inscrit dans un partenariat entre l&rsquo;&Eacute;glise de France, repr&eacute;sent&eacute;e par la Conf&eacute;rence des &eacute;v&ecirc;ques de France, et l&rsquo;OEuvre d&rsquo;Orient.</p>

<p>Depuis le 3 d&eacute;cembre 2015, l&rsquo;&Eacute;glise de France a mis en place un partenariat avec l&rsquo;OEuvre d&rsquo;Orient pour permettre &agrave; 380 &eacute;tudiants d&rsquo;Irak de poursuivre leurs &eacute;tudes dans leur langue cette ann&eacute;e.</p>

<p>Des futurs m&eacute;decins, pharmaciens, architectes et ing&eacute;nieurs.</p>

<p>Ces &eacute;tudiants font partie des milliers de chr&eacute;tiens qui ont ont du fuir Mossoul et la plaine de Ninive en ao&ucirc;t 2014. Ils ont ensuite &eacute;t&eacute; transf&eacute;r&eacute; d&rsquo;Erbil &agrave; Kirkouk, o&ugrave; l&rsquo;enseignement est donn&eacute; dans leur langue, l&rsquo;arabe. Il s&rsquo;y pr&eacute;parent &agrave; &ecirc;tre m&eacute;decin, pharmacien, architecte ou ing&eacute;nieur.</p>

<p>Sur place, c&rsquo;est Mgr Youssif Thomas Mirkis, archev&ecirc;que chald&eacute;en de Kirkouk et de Souleymanieh, qui s&rsquo;occupe du projet. &laquo; Aider les futurs cadres &agrave; poursuivre leurs &eacute;tudes, c&rsquo;est essentiel pour reconstruire notre pays. En soutenant les jeunes, nous les maintenons dans le pays &raquo; explique-t-il.</p>

<p>Fournir un logement, nourriture, acc&egrave;s aux soins, fournitures scolaires et une connexion internet L&rsquo;objectif est de leur fournir un logement, de la nourriture, l&rsquo;acc&egrave;s aux soins, des fournitures scolaires et une connexion internet. Depuis d&eacute;cembre, pr&egrave;s de 900 000 euros ont d&eacute;j&agrave; &eacute;t&eacute; lev&eacute;s gr&acirc;ce &agrave; la g&eacute;n&eacute;rosit&eacute; des donateurs. L&rsquo;objectif est de trouver encore 240 000 euros pour financer les besoins de tous les &eacute;tudiants.</p>

<p>Le 18 avril 2016, une d&eacute;l&eacute;gation d&rsquo;&eacute;v&ecirc;ques fran&ccedil;ais (Mgr Georges Pontier, Mgr Pascal Gollnisch, Mgr Stanislas Lalanne, et Mgr Olivier Ribadeau Dumas) ont pu rencontrer ces &eacute;tudiants irakiens.</p>
");
        $actu3->setAuteur("L'Oeuvre d'Orient");
        $actu3->setMedia($this->getReference('oeuvre'));
        $actu3->setType("fa fa-newspaper-o fa-2x fa-inverse");
        $actu3->setLien("https://www.oeuvre-orient.fr/2017/03/03/avec-leglise-de-france-soutenez-les-etudiantsenirak/");
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