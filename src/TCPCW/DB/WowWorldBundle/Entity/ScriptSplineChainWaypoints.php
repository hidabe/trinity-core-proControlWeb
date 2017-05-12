<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScriptSplineChainWaypoints
 *
 * @ORM\Table(name="script_spline_chain_waypoints")
 * @ORM\Entity
 */
class ScriptSplineChainWaypoints
{
    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=false)
     */
    private $z;

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
     * @ORM\Column(name="chainId", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $chainid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="splineId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $splineid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="wpId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $wpid;



    /**
     * Set x
     *
     * @param float $x
     *
     * @return ScriptSplineChainWaypoints
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
     * @return ScriptSplineChainWaypoints
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
     * @return ScriptSplineChainWaypoints
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return ScriptSplineChainWaypoints
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
     * Set chainid
     *
     * @param integer $chainid
     *
     * @return ScriptSplineChainWaypoints
     */
    public function setChainid($chainid)
    {
        $this->chainid = $chainid;

        return $this;
    }

    /**
     * Get chainid
     *
     * @return integer
     */
    public function getChainid()
    {
        return $this->chainid;
    }

    /**
     * Set splineid
     *
     * @param boolean $splineid
     *
     * @return ScriptSplineChainWaypoints
     */
    public function setSplineid($splineid)
    {
        $this->splineid = $splineid;

        return $this;
    }

    /**
     * Get splineid
     *
     * @return boolean
     */
    public function getSplineid()
    {
        return $this->splineid;
    }

    /**
     * Set wpid
     *
     * @param boolean $wpid
     *
     * @return ScriptSplineChainWaypoints
     */
    public function setWpid($wpid)
    {
        $this->wpid = $wpid;

        return $this;
    }

    /**
     * Get wpid
     *
     * @return boolean
     */
    public function getWpid()
    {
        return $this->wpid;
    }
}
