<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaypointScripts
 *
 * @ORM\Table(name="waypoint_scripts")
 * @ORM\Entity
 */
class WaypointScripts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="delay", type="integer", nullable=false)
     */
    private $delay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="command", type="integer", nullable=false)
     */
    private $command = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="datalong", type="integer", nullable=false)
     */
    private $datalong = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="datalong2", type="integer", nullable=false)
     */
    private $datalong2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dataint", type="integer", nullable=false)
     */
    private $dataint = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=false)
     */
    private $z = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="o", type="float", precision=10, scale=0, nullable=false)
     */
    private $o = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return WaypointScripts
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
     * Set delay
     *
     * @param integer $delay
     *
     * @return WaypointScripts
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
     * Set command
     *
     * @param integer $command
     *
     * @return WaypointScripts
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return integer
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set datalong
     *
     * @param integer $datalong
     *
     * @return WaypointScripts
     */
    public function setDatalong($datalong)
    {
        $this->datalong = $datalong;

        return $this;
    }

    /**
     * Get datalong
     *
     * @return integer
     */
    public function getDatalong()
    {
        return $this->datalong;
    }

    /**
     * Set datalong2
     *
     * @param integer $datalong2
     *
     * @return WaypointScripts
     */
    public function setDatalong2($datalong2)
    {
        $this->datalong2 = $datalong2;

        return $this;
    }

    /**
     * Get datalong2
     *
     * @return integer
     */
    public function getDatalong2()
    {
        return $this->datalong2;
    }

    /**
     * Set dataint
     *
     * @param integer $dataint
     *
     * @return WaypointScripts
     */
    public function setDataint($dataint)
    {
        $this->dataint = $dataint;

        return $this;
    }

    /**
     * Get dataint
     *
     * @return integer
     */
    public function getDataint()
    {
        return $this->dataint;
    }

    /**
     * Set x
     *
     * @param float $x
     *
     * @return WaypointScripts
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     *
     * @return WaypointScripts
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set z
     *
     * @param float $z
     *
     * @return WaypointScripts
     */
    public function setZ($z)
    {
        $this->z = $z;

        return $this;
    }

    /**
     * Get z
     *
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set o
     *
     * @param float $o
     *
     * @return WaypointScripts
     */
    public function setO($o)
    {
        $this->o = $o;

        return $this;
    }

    /**
     * Get o
     *
     * @return float
     */
    public function getO()
    {
        return $this->o;
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
}
