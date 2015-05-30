<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ArticleRepository")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

	/**
	 * @ORM\ManyToOne(targetEntity="Menus", inversedBy="article")
	 */
	private $menu;

	/**
	 * @ORM\ManyToOne(targetEntity="SubMenus", inversedBy="article")
	 */
	private $submenu;

	/**
	 * @ORM\OneToMany(targetEntity="Gallery", mappedBy="article")
	 */
	private $images;

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
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
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
     * Set menu
     *
     * @param \AppBundle\Entity\Menus $menu
     * @return Article
     */
    public function setMenu(\AppBundle\Entity\Menus $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \AppBundle\Entity\Menus 
     */
    public function getMenu()
    {
        return $this->menu;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add images
     *
     * @param \AppBundle\Entity\Gallery $images
     * @return Article
     */
    public function addImage(\AppBundle\Entity\Gallery $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \AppBundle\Entity\Gallery $images
     */
    public function removeImage(\AppBundle\Entity\Gallery $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set submenu
     *
     * @param \AppBundle\Entity\SubMenus $submenu
     * @return Article
     */
    public function setSubmenu(\AppBundle\Entity\SubMenus $submenu = null)
    {
        $this->submenu = $submenu;

        return $this;
    }

    /**
     * Get submenu
     *
     * @return \AppBundle\Entity\SubMenus 
     */
    public function getSubmenu()
    {
        return $this->submenu;
    }
}
