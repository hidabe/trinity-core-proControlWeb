<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterInstance
 *
 * @ORM\Table(name="character_instance", indexes={@ORM\Index(name="instance", columns={"instance"})})
 * @ORM\Entity
 */
class CharacterInstance
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="permanent", type="integer", nullable=false)
     */
    private $permanent = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="extendState", type="integer", nullable=false)
     */
    private $extendstate = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="instance", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $instance;



    /**
     * Set permanent
     *
     * @param boolean $permanent
     *
     * @return CharacterInstance
     */
    public function setPermanent($permanent)
    {
        $this->permanent = $permanent;

        return $this;
    }

    /**
     * Get permanent
     *
     * @return boolean
     */
    public function getPermanent()
    {
        return $this->permanent;
    }

    /**
     * Set extendstate
     *
     * @param boolean $extendstate
     *
     * @return CharacterInstance
     */
    public function setExtendstate($extendstate)
    {
        $this->extendstate = $extendstate;

        return $this;
    }

    /**
     * Get extendstate
     *
     * @return boolean
     */
    public function getExtendstate()
    {
        return $this->extendstate;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterInstance
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set instance
     *
     * @param integer $instance
     *
     * @return CharacterInstance
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;

        return $this;
    }

    /**
     * Get instance
     *
     * @return integer
     */
    public function getInstance()
    {
        return $this->instance;
    }
}
