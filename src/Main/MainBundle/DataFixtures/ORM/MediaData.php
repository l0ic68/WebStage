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
        $academie_cathedrale = new Media();
        $academie_cathedrale->setPath('/img/Academie.jpg');
        $academie_cathedrale->setUrl('Academie.jpg');
        $manager->persist($academie_cathedrale);

        $roadtrip_auvergne = new Media();
        $roadtrip_auvergne->setPath('/img/Auvergne.jpg');
        $roadtrip_auvergne->setUrl('Auvergne.jpg');
        $manager->persist($roadtrip_auvergne);

        $email = new Media();
        $email->setPath('/img/email.png');
        $email->setUrl('email.png');
        $manager->persist($email);

        $epitech = new Media();
        $epitech->setPath('/img/Epitech.jpg');
        $epitech->setUrl('Epitech.jpg');
        $manager->persist($epitech);

        $europapark = new Media();
        $europapark->setPath('/img/Europapark.jpg');
        $europapark->setUrl('Europapark.jpg');
        $manager->persist($europapark);

        $facebook = new Media();
        $facebook->setPath('/img/facebook.png');
        $facebook->setUrl('facebook.png');
        $manager->persist($facebook);

        $gallifrey = new Media();
        $gallifrey->setPath('/img/Gallifrey.jpg');
        $gallifrey->setUrl('Gallifrey.jpg');
        $manager->persist($gallifrey);

        $google = new Media();
        $google->setPath('/img/google.png');
        $google->setUrl('google.png');
        $manager->persist($google);

        $linkedin = new Media();
        $linkedin->setPath('/img/linkedin.png');
        $linkedin->setUrl('linkedin.png');
        $manager->persist($linkedin);

        $meyer_cedric = new Media();
        $meyer_cedric->setPath('/img/meyer-cedric.jpg');
        $meyer_cedric->setUrl('meyer-cedric.jpg');
        $manager->persist($meyer_cedric);

        $oulerich_loic = new Media();
        $oulerich_loic->setPath('/img/oulerich-loic.jpg');
        $oulerich_loic->setUrl('oulerich-loic.jpg');
        $manager->persist($oulerich_loic);

        $reddit = new Media();
        $reddit->setPath('/img/reddit.png');
        $reddit->setUrl('reddit.png');
        $manager->persist($reddit);

        $shrek = new Media();
        $shrek->setPath('/img/Shrek.jpg');
        $shrek->setUrl('Shrek.jpg');
        $manager->persist($shrek);

        $sniadach_cyril = new Media();
        $sniadach_cyril->setPath('/img/sniadach-cyril.jpg');
        $sniadach_cyril->setUrl('sniadach-cyril.jpg');
        $manager->persist($sniadach_cyril);

        $strinati_quentin = new Media();
        $strinati_quentin->setPath('/img/strinati-quentin.jpg');
        $strinati_quentin->setUrl('strinati-quentin.jpg');
        $manager->persist($strinati_quentin);

        $tumblr = new Media();
        $tumblr->setPath('/img/tumblr.png');
        $tumblr->setUrl('tumblr.png');
        $manager->persist($tumblr);

        $twitter = new Media();
        $twitter->setPath('/img/twitter.png');
        $twitter->setUrl('twitter.png');
        $manager->persist($twitter);

        $urschenheim = new Media();
        $urschenheim->setPath('/img/Urschenheim.jpg');
        $urschenheim->setUrl('Urschenheim.jpg');
        $manager->persist($urschenheim);

        $vk = new Media();
        $vk->setPath('/img/vk.png');
        $vk->setUrl('vk.png');
        $manager->persist($vk);

        $car = new Media();
        $car->setPath('/img/car.png');
        $car->setUrl('car.png');
        $manager->persist($car);

        $tshirt = new Media();
        $tshirt->setPath('/img/tshirt.png');
        $tshirt->setUrl('tshirt.png');
        $manager->persist($tshirt);

        $ramen = new Media();
        $ramen->setPath('/img/ramen.png');
        $ramen->setUrl('ramen.png');
        $manager->persist($ramen);

        $carouselMedia1 = new Media();
        $carouselMedia1->setPath('/img/ramen.png');
        $carouselMedia1->setUrl('ramen.png');
        $manager->persist($carouselMedia1);

        $carouselMedia2 = new Media();
        $carouselMedia2->setPath('/img/tshirt.png');
        $carouselMedia2->setUrl('ramen.png');
        $manager->persist($carouselMedia2);

        $carouselMedia3 = new Media();
        $carouselMedia3->setPath('/img/car.png');
        $carouselMedia3->setUrl('ramen.png');
        $manager->persist($carouselMedia3);

        $carouselMedia4 = new Media();
        $carouselMedia4->setPath('/img/vk.png');
        $carouselMedia4->setUrl('ramen.png');
        $manager->persist($carouselMedia4);

        $carouselMedia5 = new Media();
        $carouselMedia5->setPath('/img/ramen.png');
        $carouselMedia5->setUrl('ramen.png');
        $manager->persist($carouselMedia5);

        $manager->flush();

        $this->addReference('academie_cathedrale',$academie_cathedrale);
        $this->addReference('roadtrip_auvergne',$roadtrip_auvergne);
        $this->addReference('europapark',$europapark);
        $this->addReference('epitech',$epitech);
        $this->addReference('email',$email);
        $this->addReference('facebook',$facebook);
        $this->addReference('gallifrey',$gallifrey);
        $this->addReference('google',$google);
        $this->addReference('linkedin',$linkedin);
        $this->addReference('meyer_cedric',$meyer_cedric);
        $this->addReference('oulerich_loic',$oulerich_loic);
        $this->addReference('reddit',$reddit);
        $this->addReference('shrek',$shrek);
        $this->addReference('sniadach_cyril',$sniadach_cyril);
        $this->addReference('strinati_quentin',$strinati_quentin);
        $this->addReference('tumblr',$tumblr);
        $this->addReference('twitter',$twitter);
        $this->addReference('urschenheim',$urschenheim);
        $this->addReference('vk',$vk);
        $this->addReference('car',$car);
        $this->addReference('tshirt',$tshirt);
        $this->addReference('ramen',$ramen);
        $this->addReference('carouselMedia1',$carouselMedia1);
        $this->addReference('carouselMedia2',$carouselMedia2);
        $this->addReference('carouselMedia3',$carouselMedia3);
        $this->addReference('carouselMedia4',$carouselMedia4);
        $this->addReference('carouselMedia5',$carouselMedia5);
    }

    public function getOrder()
    {
        return 1;
    }
}