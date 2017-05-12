<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaypointData
 *
 * @ORM\Table(name="waypoint_data")
 * @ORM\Entity
 */
class WaypointData
{
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
     * @var integer
     *
     * @ORM\Column(name="delay", type="integer", nullable=false)
     */
    private $delay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="move_type", type="integer", nullable=false)
     */
    private $moveType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action", type="integer", nullable=false)
     */
    private $action = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_chance", type="smallint", nullable=false)
     */
    private $actionChance = '100';

    /**
     * @var integer
     *
     * @ORM\Column(name="wpguid", type="integer", nullable=false)
     */
    private $wpguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="point", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $point;



    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return WaypointData
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
     * @return WaypointData
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
     * @return WaypointData
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
     * @return WaypointData
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
     * Set delay
     *
     * @param integer $delay
     *
     * @return WaypointData
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Get delay
     *
     * @return integer
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Set moveType
     *
     * @param integer $moveType
     *
     * @return WaypointData
     */
    public function setMoveType($moveType)
    {
        $this->moveType = $moveType;

        return $this;
    }

    /**
     * Get moveType
     *
     * @return integer
     */
    public function getMoveType()
    {
        return $this->moveType;
    }

    /**
     * Set action
     *
     * @param integer $action
     *
     * @return WaypointData
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return integer
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set actionChance
     *
     * @param integer $actionChance
     *
     * @return WaypointData
     */
    public function setActionChance($actionChance)
    {
        $this->actionChance = $actionChance;

        return $this;
    }

    /**
     * Get actionChance
     *
     * @return integer
     */
    public function getActionChance()
    {
        return $this->actionChance;
    }

    /**
     * Set wpguid
     *
     * @param integer $wpguid
     *
     * @return WaypointData
     */
    public function setWpguid($wpguid)
    {
        $this->wpguid = $wpguid;

        return $this;
    }

    /**
     * Get wpguid
     *
     * @return integer
     */
    public function getWpguid()
    {
        return $this->wpguid;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return WaypointData
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set point
     *
     * @param integer $point
     *
     * @return WaypointData
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return integer
     */
    public function getPoint()
    {
        return $this->point;
    }
}
