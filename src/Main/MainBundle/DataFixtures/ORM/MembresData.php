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
        $Bernhart_Martin = new Membres();
        $Bernhart_Martin->setNom('Bernhart');
        $Bernhart_Martin->setPrenom('Martin');
        $Bernhart_Martin->setDescription("Notaire à Wasselonne. ");
        $Bernhart_Martin->setRole("1er Vice-Président ");
        $Bernhart_Martin->setMedia($this->getReference("inconnu"));
        $manager->persist($Bernhart_Martin);

        $Brokmann_Bernard = new Membres();
        $Brokmann_Bernard->setNom('Brokmann');
        $Brokmann_Bernard->setPrenom('Bernard');
        $Brokmann_Bernard->setRole(" Secrétaire Général ");
        $Brokmann_Bernard->setDescription("cadre retraité.");
        $Brokmann_Bernard->setMedia($this->getReference("inconnu"));
        $manager->persist($Brokmann_Bernard);

        $Busy_Laurent = new Membres();
        $Busy_Laurent->setNom('Busy');
        $Busy_Laurent->setRole("Membre");
        $Busy_Laurent->setPrenom('Laurent');
        $Busy_Laurent->setDescription("architecte, à l’origine de l’agence Architectura, spécialisée  dans l’urbanisme et les projets de l’univers professionnel, tel le parc des Forges  de Strasbourg");
        $Busy_Laurent->setMedia($this->getReference("inconnu"));
        $manager->persist($Busy_Laurent);

        $Eric= new Membres();
        $Eric->setNom('de Clermont Tonnerre');
        $Eric->setRole("Membre");
        $Eric->setPrenom('Eric');
        $Eric->setDescription("dominicain ; ancien prieur provincial, puis directeur général des éditions du Cerf, et actuel prieur du Couvent de l’Annonciation à Paris ");
        $Eric->setMedia($this->getReference("inconnu"));
        $manager->persist($Eric);

        $Geyler_Bernard= new Membres();
        $Geyler_Bernard->setNom('Geyler');
        $Geyler_Bernard->setRole("Présiden");
        $Geyler_Bernard->setPrenom('Bernard');
        $Geyler_Bernard->setDescription(" chef d’entreprise à la retraite, bâtisseur, en France et en Orient, fondateur de l’agence d’architecture BGL, amateur de théologie et plus particulièrement de Maurice Zundel qui a été pour lui l’objet d’une maîtrise soutenue en 2014 à Metz sous la direction du professeur Marie Anne Vannier. ");
        $Geyler_Bernard->setMedia($this->getReference("inconnu"));
        $manager->persist($Geyler_Bernard);

        $Kayser_Serge= new Membres();
        $Kayser_Serge->setNom('Kayser');
        $Kayser_Serge->setRole("2ème Vice-Président ");
        $Kayser_Serge->setPrenom('Serge ');
        $Kayser_Serge->setDescription("assureur à Wasselonne ");
        $Kayser_Serge->setMedia($this->getReference("inconnu"));
        $manager->persist($Kayser_Serge);

        $Legorgeu_Christophe= new Membres();
        $Legorgeu_Christophe->setNom('Legorgeu');
        $Legorgeu_Christophe->setRole("Trésorier");
        $Legorgeu_Christophe->setPrenom('Christophe');
        $Legorgeu_Christophe->setDescription("géomètre, spécialiste des questions environnementales");
        $Legorgeu_Christophe->setMedia($this->getReference("inconnu"));
        $manager->persist($Legorgeu_Christophe);

        $Ruhlmann_François= new Membres();
        $Ruhlmann_François->setNom('Ruhlmann');
        $Ruhlmann_François->setRole("Membre");
        $Ruhlmann_François->setPrenom('François');
        $Ruhlmann_François->setDescription(" avocat au barreau de Paris, spécialisé en droit commercial, des affaires et de la concurrence et en droit international de l’Union Européenne. ");
        $Ruhlmann_François->setMedia($this->getReference("inconnu"));
        $manager->persist($Ruhlmann_François);

        $Wild_Michel= new Membres();
        $Wild_Michel->setNom('Wild ');
        $Wild_Michel->setRole("Membre");
        $Wild_Michel->setPrenom('Michel ');
        $Wild_Michel->setDescription(" fiscaliste à la retraite ");
        $Wild_Michel->setMedia($this->getReference("inconnu"));
        $manager->persist($Wild_Michel);

        $Wolf_Patrick= new Membres();
        $Wolf_Patrick->setNom('Wolf');
        $Wolf_Patrick->setRole("Membre");
        $Wolf_Patrick->setPrenom('Patrick ');
        $Wolf_Patrick->setDescription(" ingénieur BTP, gérant d’un bureau d’étude");
        $Wolf_Patrick->setMedia($this->getReference("inconnu"));
        $manager->persist($Wolf_Patrick);


        $manager->flush();

        $this->addReference('Bernhart_Martin',$Bernhart_Martin);
        $this->addReference('Brokmann_Bernard',$Brokmann_Bernard);
        $this->addReference('Busy_Laurent',$Busy_Laurent);
        $this->addReference('Eric',$Eric);
        $this->addReference('Geyler_Bernard',$Geyler_Bernard);
        $this->addReference('Kayser_Serge',$Kayser_Serge);
        $this->addReference('Legorgeu_Christophe',$Legorgeu_Christophe);
        $this->addReference('Ruhlmann_François',$Ruhlmann_François);
        $this->addReference('Wild_Michel',$Wild_Michel);
        $this->addReference('Wolf_Patrick',$Wolf_Patrick);

    }

    public function getOrder()
    {
        return 5;
    }
}