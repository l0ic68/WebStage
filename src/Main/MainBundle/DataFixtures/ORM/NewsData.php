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
use Main\MainBundle\Entity\News;


class NewsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $new1 = new News();
        $new1->setNom("Lancement du site WEB !!! ");
        $new1->setDescription("Aujourd'hui est un grand jour, il s'agit du jour ou nous lançons notre site web");
        $manager->persist($new1);

        $manager->flush();

        $this->addReference('new1',$new1);

    }

    public function getOrder()
    {
        return 5;
    }
}