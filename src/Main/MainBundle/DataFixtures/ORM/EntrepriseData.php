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
use Main\MainBundle\Entity\Entreprise;


class EntrepriseData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $qui = new Entreprise();
        $qui->setNom("Qui");
        $qui->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $qui->setPage("accueil");
        $manager->persist($qui);

        $ou = new Entreprise();
        $ou->setNom("OU");
        $ou->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $ou->setPage("accueil");
        $manager->persist($ou);

        $pourquoi = new Entreprise();
        $pourquoi->setNom("Pourquoi");
        $pourquoi->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $pourquoi->setPage("accueil");
        $manager->persist($pourquoi);

        $comment = new Entreprise();
        $comment->setNom("Comment");
        $comment->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $comment->setPage("accueil");
        $manager->persist($comment);

        $aujourdhui = new Entreprise();
        $aujourdhui->setNom("Qui sommes nous Aujourd'hui");
        $aujourdhui->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $aujourdhui->setPage("origine");
        $manager->persist($aujourdhui);

        $volonte = new Entreprise();
        $volonte->setNom("Nos volontés");
        $volonte->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $volonte->setPage("origine");
        $manager->persist($volonte);

        $irakG = new Entreprise();
        $irakG->setNom("Irak (en général) ");
        $irakG->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $irakG->setPage("lieu");
        $manager->persist($irakG);

        $irakS = new Entreprise();
        $irakS->setNom("Irak (précisement) ");
        $irakS->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $irakS->setPage("lieu");
        $manager->persist($irakS);

        $objectif = new Entreprise();
        $objectif->setNom("Quel est le but de l'association");
        $objectif->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc orci mi, 
        sollicitudin eleifend metus porttitor, aliquam euismod purus. Sed a lacinia odio, at 
        lobortis dolor. Fusce rutrum quam ut ullamcorper ultricies. Ut blandit cursus mauris, 
        id congue quam euismod eget. Nullam aliquet ultrices ante, nec facilisis risus fringilla non. 
        Integer et libero et ipsum molestie ultricies eu ut risus. Curabitur eget velit non dolor lobortis malesuada. 
        Suspendisse mauris ligula, fermentum sit amet dapibus non, gravida id sapien. Vestibulum imperdiet mauris elit, 
        quis ornare massa cursus eget.");
        $objectif->setPage("objectif");
        $manager->persist($objectif);


        $manager->flush();

        $this->addReference('qui',$qui);
        $this->addReference('ou',$ou);
        $this->addReference('pourquoi',$pourquoi);
        $this->addReference('comment',$comment);
        $this->addReference('aujourdhui',$aujourdhui);
        $this->addReference('volonte',$volonte);
        $this->addReference('irakG',$irakG);
        $this->addReference('irakS',$irakS);
        $this->addReference('objectif',$objectif);

    }

    public function getOrder()
    {
        return 4;
    }
}