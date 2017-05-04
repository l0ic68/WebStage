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
        $Bernhart_Martin->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Bernhart_Martin->setRole("1er Vice-Président ");
        $Bernhart_Martin->setMedia($this->getReference("inconnu"));
        $manager->persist($Bernhart_Martin);

        $Brokmann_Bernard = new Membres();
        $Brokmann_Bernard->setNom('Brokmann');
        $Brokmann_Bernard->setPrenom('Bernard');
        $Brokmann_Bernard->setRole(" Secrétaire Général ");
        $Brokmann_Bernard->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Brokmann_Bernard->setMedia($this->getReference("inconnu"));
        $manager->persist($Brokmann_Bernard);

        $Busy_Laurent = new Membres();
        $Busy_Laurent->setNom('Busy');
        $Busy_Laurent->setRole("Membre");
        $Busy_Laurent->setPrenom('Laurent');
        $Busy_Laurent->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Busy_Laurent->setMedia($this->getReference("inconnu"));
        $manager->persist($Busy_Laurent);

        $Eric= new Membres();
        $Eric->setNom('de Clermont Tonnerre');
        $Eric->setRole("Membre");
        $Eric->setPrenom('Eric');
        $Eric->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Eric->setMedia($this->getReference("inconnu"));
        $manager->persist($Eric);

        $Geyler_Bernard= new Membres();
        $Geyler_Bernard->setNom('Geyler');
        $Geyler_Bernard->setRole("Présiden");
        $Geyler_Bernard->setPrenom('Bernard');
        $Geyler_Bernard->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Geyler_Bernard->setMedia($this->getReference("inconnu"));
        $manager->persist($Geyler_Bernard);

        $Kayser_Serge= new Membres();
        $Kayser_Serge->setNom('Kayser');
        $Kayser_Serge->setRole("2ème Vice-Président ");
        $Kayser_Serge->setPrenom('Serge ');
        $Kayser_Serge->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Kayser_Serge->setMedia($this->getReference("inconnu"));
        $manager->persist($Kayser_Serge);

        $Legorgeu_Christophe= new Membres();
        $Legorgeu_Christophe->setNom('Legorgeu');
        $Legorgeu_Christophe->setRole("Trésorier");
        $Legorgeu_Christophe->setPrenom('Christophe');
        $Legorgeu_Christophe->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Legorgeu_Christophe->setMedia($this->getReference("inconnu"));
        $manager->persist($Legorgeu_Christophe);

        $Ruhlmann_François= new Membres();
        $Ruhlmann_François->setNom('Ruhlmann');
        $Ruhlmann_François->setRole("Membre");
        $Ruhlmann_François->setPrenom('François');
        $Ruhlmann_François->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Ruhlmann_François->setMedia($this->getReference("inconnu"));
        $manager->persist($Ruhlmann_François);

        $Wild_Michel= new Membres();
        $Wild_Michel->setNom('Wild ');
        $Wild_Michel->setRole("Membre");
        $Wild_Michel->setPrenom('Michel ');
        $Wild_Michel->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
        $Wild_Michel->setMedia($this->getReference("inconnu"));
        $manager->persist($Wild_Michel);

        $Wolf_Patrick= new Membres();
        $Wolf_Patrick->setNom('Wolf');
        $Wolf_Patrick->setRole("Membre");
        $Wolf_Patrick->setPrenom('Patrick ');
        $Wolf_Patrick->setDescription("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à l");
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