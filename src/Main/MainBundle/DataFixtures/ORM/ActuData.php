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
        $actu1->setTitre("Une actualité de qualité");
        $actu1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus pharetr a lorem, non volutpat augue egestas sed. Donec at purus eros. Integer eu pretium leo. Duis consequat diam ec leo commodo lacinia. Nunc rhoncus, arcu at euismod suscipi.. ");
        $actu1->setAuteur("Le monde");
        $actu1->setMedia($this->getReference('etudiantG'));
        $actu1->setType("fa fa-calendar-check-o fa-2x fa-inverse");
        $actu1->setLien("http:://google.com");
        $manager->persist($actu1);



        $manager->flush();

        $this->addReference('actu1',$actu1);

    }

    public function getOrder()
    {
        return 4;
    }
}