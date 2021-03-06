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
use Main\MainBundle\Entity\Carousel;



class CarouselData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {


        $carousel1 = new Carousel();
        $carousel1->setOrdre('0');
        $carousel1->setMedia($this->getReference('carouselMedia1'));
        $carousel1->setText("Ne faisons pas une croix sur les Chrétiens d'Irak.");
        $carousel1->setPlacement("TextCarousel2");
        $manager->persist($carousel1);

        $carousel2 = new Carousel();
        $carousel2->setOrdre('1');
        $carousel2->setMedia($this->getReference('carouselMedia2'));
        $carousel2->setText("Soutenons les jeunes chrétiens d'Irak");
        $carousel2->setPlacement("TextCarousel2");
        $manager->persist($carousel2);

        $carousel3 = new Carousel();
        $carousel3->setOrdre('2');
        $carousel3->setMedia($this->getReference('carouselMedia3'));
        $carousel3->setPlacement("TextCarousel3");
        $carousel3->setText("Parrainez 50 étudiants en Architecture et ingénierie à Kirkuk");
        $manager->persist($carousel3);

        $manager->flush();

        $this->addReference('carousel1',$carousel1);
        $this->addReference('carousel2',$carousel2);
        $this->addReference('carousel3',$carousel3);

}

    public function getOrder()
    {
        return 6;
    }
}