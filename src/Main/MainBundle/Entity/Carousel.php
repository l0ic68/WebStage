<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carousel
 *
 * @ORM\Table(name="carousel")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\CarouselRepository")
 */
class Carousel
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
     * @ORM\OneToOne(targetEntity="Main\MainBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     *
     */
    private $text;
    
    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer",unique=true)
     */
    private $ordre;


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
     * Set ordre
     *
     * @param integer $ordre
     * @return Carousel
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set media
     *
     * @param \Main\MainBundle\Entity\Media $media
     * @return Carousel
     */
    public function setMedia(\Main\MainBundle\Entity\Media $media = null)
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
     * Set text
     *
     * @param string $text
     * @return Carousel
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}
