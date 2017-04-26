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
use Main\MainBundle\Entity\Media;



class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
//        $academie_cathedrale = new Media();
//        $academie_cathedrale->setPath('/img/Academie.jpg');
//        $academie_cathedrale->setUrl('Academie.jpg');
//        $manager->persist($academie_cathedrale);



        $manager->flush();

//        $this->addReference('academie_cathedrale',$academie_cathedrale);
    }

    public function getOrder()
    {
        return 1;
    }
}