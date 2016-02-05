<?php

namespace SA\siteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenido
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contenido
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
     * @ORM\Column(name="cuerpo", type="text")
     */
    private $cuerpo;


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
     * Set cuerpo
     *
     * @param string $cuerpo
     *
     * @return Contenido
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }
}

