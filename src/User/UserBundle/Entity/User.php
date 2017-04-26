<?php
// src/AppBundle/Entity/User.php

namespace User\UserBundle\Entity; //changer le namespace en fonction du votre (dans notre cas : namespace Utilisateurs\UtilisateursBundle\Entity;)

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateurs")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}