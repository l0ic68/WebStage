<?php
namespace User\UserBundle\DataFixtures\ORM ;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use User\UserBundle\Entity\User;

class UserData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $role = array('ROLE_ADMIN');


        $user_loic = new User();
        $user_loic->setRoles($role);
        $user_loic->setNom('Oulerich');
        $user_loic->setPrenom('Loic');
        $user_loic->setEmail('loic.oulerich@viacesi.fr');
        $user_loic->setPassword($this->container->get('security.encoder_factory')->getEncoder($user_loic)->encodePassword('titi', $user_loic->getSalt()));
        $user_loic->setEnabled(1);
//        $user_loic->setMedia($this->getReference('oulerich_loic'));
        $manager->persist($user_loic);

        $user_Admin = new User();
        $user_Admin->setRoles($role);
        $user_Admin->setNom('Admin');
        $user_Admin->setPrenom('Admin');
        $user_Admin->setEmail('Admin');
        $user_Admin->setPassword($this->container->get('security.encoder_factory')->getEncoder($user_Admin)->encodePassword('AdminLoad1', $user_Admin->getSalt()));
        $user_Admin->setEnabled(1);
//        $user_Admin->setMedia($this->getReference('Admin'));
        $manager->persist($user_Admin);


        $manager->flush();

        $this->addReference('user_loic', $user_loic);
        $this->addReference('user_Admin', $user_Admin);
    }
    public function getOrder()
    {
        return 2;
    }

}