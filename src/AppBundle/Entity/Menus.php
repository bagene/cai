<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\MenusRepository")
 */
class Menus
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

	/**
	 * @ORM\OneToMany(targetEntity="Article", mappedBy="menu")
	 */
	private $article;

	/**
	 * @ORM\OneToMany(targetEntity="SubMenus", mappedBy="menu")
	 */
	private $submenus;

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
     * Set name
     *
     * @param string $name
     * @return Menus
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \AppBundle\Entity\Article $article
     * @return Menus
     */
    public function addArticle(\AppBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Article $article
     */
    public function removeArticle(\AppBundle\Entity\Article $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Add submenus
     *
     * @param \AppBundle\Entity\SubMenus $submenus
     * @return Menus
     */
    public function addSubmenu(\AppBundle\Entity\SubMenus $submenus)
    {
        $this->submenus[] = $submenus;

        return $this;
    }

    /**
     * Remove submenus
     *
     * @param \AppBundle\Entity\SubMenus $submenus
     */
    public function removeSubmenu(\AppBundle\Entity\SubMenus $submenus)
    {
        $this->submenus->removeElement($submenus);
    }

    /**
     * Get submenus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubmenus()
    {
        return $this->submenus;
    }
}
