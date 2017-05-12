<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScriptWaypoint
 *
 * @ORM\Table(name="script_waypoint")
 * @ORM\Entity
 */
class ScriptWaypoint
{
    /**
     * @var float
     *
     * @ORM\Column(name="location_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $locationX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="location_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $locationY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="location_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $locationZ = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="waittime", type="integer", nullable=false)
     */
    private $waittime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="point_comment", type="text", length=65535, nullable=true)
     */
    private $pointComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="pointid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pointid;



    /**
     * Set locationX
     *
     * @param float $locationX
     *
     * @return ScriptWaypoint
     */
    public function setLocationX($locationX)
    {
        $this->locationX = $locationX;

        return $this;
    }

    /**
     * Get locationX
     *
     * @return float
     */
    public function getLocationX()
    {
        return $this->locationX;
    }

    /**
     * Set locationY
     *
     * @param float $locationY
     *
     * @return ScriptWaypoint
     */
    public function setLocationY($locationY)
    {
        $this->locationY = $locationY;

        return $this;
    }

    /**
     * Get locationY
     *
     * @return float
     */
    public function getLocationY()
    {
        return $this->locationY;
    }

    /**
     * Set locationZ
     *
     * @param float $locationZ
     *
     * @return ScriptWaypoint
     */
    public function setLocationZ($locationZ)
    {
        $this->locationZ = $locationZ;

        return $this;
    }

    /**
     * Get locationZ
     *
     * @return float
     */
    public function getLocationZ()
    {
        return $this->locationZ;
    }

    /**
     * Set waittime
     *
     * @param integer $waittime
     *
     * @return ScriptWaypoint
     */
    public function setWaittime($waittime)
    {
        $this->waittime = $waittime;

        return $this;
    }

    /**
     * Get waittime
     *
     * @return integer
     */
    public function getWaittime()
    {
        return $this->waittime;
    }

    /**
     * Set pointComment
     *
     * @param string $pointComment
     *
     * @return ScriptWaypoint
     */
    public function setPointComment($pointComment)
    {
        $this->pointComment = $pointComment;

        return $this;
    }

    /**
     * Get pointComment
     *
     * @return string
     */
    public function getPointComment()
    {
        return $this->pointComment;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return ScriptWaypoint
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set pointid
     *
     * @param integer $pointid
     *
     * @return ScriptWaypoint
     */
    public function setPointid($pointid)
    {
        $this->pointid = $pointid;

        return $this;
    }

    /**
     * Get pointid
     *
     * @return integer
     */
    public function getPointid()
    {
        return $this->pointid;
    }
}
