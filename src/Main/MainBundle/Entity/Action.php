<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table(name="action")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\ActionRepository")
 */
class Action
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $date_debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $date_fin;

    /**
     * @var integer
     *
     * @ORM\Column(name="cout", type="integer")
     */
    private $cout;

    /**
     * @var integer
     *
     * @ORM\Column(name="recolte", type="integer")
     */
    private $recolte;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="frontPage", type="string", length=255)
     * @ORM\JoinColumn(nullable=true)
     */

    private $frontPage;

    /**
     * @ORM\ManyToMany(targetEntity="Main\MainBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $media;

    /**
     * @ORM\ManyToOne(targetEntity="Main\MainBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $picture;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Action
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Action
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date_debut
     *
     * @param \DateTime $dateDebut
     * @return Action
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;

        return $this;
    }

    /**
     * Get date_debut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set date_fin
     *
     * @param \DateTime $dateFin
     * @return Action
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;

        return $this;
    }

    /**
     * Get date_fin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set cout
     *
     * @param integer $cout
     * @return Action
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return integer 
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set recolte
     *
     * @param integer $recolte
     * @return Action
     */
    public function setRecolte($recolte)
    {
        $this->recolte = $recolte;

        return $this;
    }

    /**
     * Get recolte
     *
     * @return integer 
     */
    public function getRecolte()
    {
        return $this->recolte;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Action
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set media
     *
     * @param \Main\MainBundle\Entity\Media $media
     * @return Action
     */
    public function setMedia(\Main\MainBundle\Entity\Media $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Main\MainBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add media
     *
     * @param \Main\MainBundle\Entity\Media $media
     * @return Action
     */
    public function addMedia(\Main\MainBundle\Entity\Media $media)
    {
        $this->media[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \Main\MainBundle\Entity\Media $media
     */
    public function removeMedia(\Main\MainBundle\Entity\Media $media)
    {
        $this->media->removeElement($media);
    }

    /**
     * Set picture
     *
     * @param \Main\MainBundle\Entity\Media $picture
     * @return Action
     */
    public function setPicture(\Main\MainBundle\Entity\Media $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \Main\MainBundle\Entity\Media 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set frontPage
     *
     * @param string $frontPage
     * @return Action
     */
    public function setFrontPage($frontPage)
    {
        $this->frontPage = $frontPage;

        return $this;
    }

    /**
     * Get frontPage
     *
     * @return string
     */
    public function getFrontPage()
    {
        return $this->frontPage;
    }
}
