<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerClasslevelstats
 *
 * @ORM\Table(name="player_classlevelstats")
 * @ORM\Entity
 */
class PlayerClasslevelstats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="basehp", type="smallint", nullable=false)
     */
    private $basehp;

    /**
     * @var integer
     *
     * @ORM\Column(name="basemana", type="smallint", nullable=false)
     */
    private $basemana;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $level;



    /**
     * Set basehp
     *
     * @param integer $basehp
     *
     * @return PlayerClasslevelstats
     */
    public function setBasehp($basehp)
    {
        $this->basehp = $basehp;

        return $this;
    }

    /**
     * Get basehp
     *
     * @return integer
     */
    public function getBasehp()
    {
        return $this->basehp;
    }

    /**
     * Set basemana
     *
     * @param integer $basemana
     *
     * @return PlayerClasslevelstats
     */
    public function setBasemana($basemana)
    {
        $this->basemana = $basemana;

        return $this;
    }

    /**
     * Get basemana
     *
     * @return integer
     */
    public function getBasemana()
    {
        return $this->basemana;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return PlayerClasslevelstats
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return PlayerClasslevelstats
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }
}
