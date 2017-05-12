<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Playercreateinfo
 *
 * @ORM\Table(name="playercreateinfo")
 * @ORM\Entity
 */
class Playercreateinfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint", nullable=false)
     */
    private $map = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone", type="integer", nullable=false)
     */
    private $zone = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="orientation", type="float", precision=10, scale=0, nullable=false)
     */
    private $orientation = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="race", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $race;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;



    /**
     * Set map
     *
     * @param integer $map
     *
     * @return Playercreateinfo
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set zone
     *
     * @param integer $zone
     *
     * @return Playercreateinfo
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return integer
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Playercreateinfo
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get positionX
     *
     * @return float
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set positionY
     *
     * @param float $positionY
     *
     * @return Playercreateinfo
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }

    /**
     * Get positionY
     *
     * @return float
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set positionZ
     *
     * @param float $positionZ
     *
     * @return Playercreateinfo
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = $positionZ;

        return $this;
    }

    /**
     * Get positionZ
     *
     * @return float
     */
    public function getPositionZ()
    {
        return $this->positionZ;
    }

    /**
     * Set orientation
     *
     * @param float $orientation
     *
     * @return Playercreateinfo
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return float
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set race
     *
     * @param boolean $race
     *
     * @return Playercreateinfo
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return boolean
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return Playercreateinfo
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
}
