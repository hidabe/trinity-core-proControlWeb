<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waypoints
 *
 * @ORM\Table(name="waypoints")
 * @ORM\Entity
 */
class Waypoints
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
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Waypoints
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
     * @return Waypoints
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
     * @return Waypoints
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
     * Set pointComment
     *
     * @param string $pointComment
     *
     * @return Waypoints
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
     * @return Waypoints
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
     * @return Waypoints
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
