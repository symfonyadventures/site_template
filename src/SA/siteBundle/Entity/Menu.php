<?php

namespace SA\siteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SA\siteBundle\Entity\MenuRepository")
 */
class Menu
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
     * @ORM\Column(name="etiqueta", type="string", length=30)
     */
    private $etiqueta;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=50)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="contenido", type="integer")
     */
    private $contenido;


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
     * Set etiqueta
     *
     * @param string $etiqueta
     *
     * @return Menu
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;

        return $this;
    }

    /**
     * Get etiqueta
     *
     * @return string
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Menu
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set contenido
     *
     * @param integer $contenido
     *
     * @return Menu
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return integer
     */
    public function getContenido()
    {
        return $this->contenido;
    }
}

