<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScriptSplineChainMeta
 *
 * @ORM\Table(name="script_spline_chain_meta")
 * @ORM\Entity
 */
class ScriptSplineChainMeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="expectedDuration", type="integer", nullable=false)
     */
    private $expectedduration;

    /**
     * @var integer
     *
     * @ORM\Column(name="msUntilNext", type="integer", nullable=false)
     */
    private $msuntilnext;

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
     * Set expectedduration
     *
     * @param integer $expectedduration
     *
     * @return ScriptSplineChainMeta
     */
    public function setExpectedduration($expectedduration)
    {
        $this->expectedduration = $expectedduration;

        return $this;
    }

    /**
     * Get expectedduration
     *
     * @return integer
     */
    public function getExpectedduration()
    {
        return $this->expectedduration;
    }

    /**
     * Set msuntilnext
     *
     * @param integer $msuntilnext
     *
     * @return ScriptSplineChainMeta
     */
    public function setMsuntilnext($msuntilnext)
    {
        $this->msuntilnext = $msuntilnext;

        return $this;
    }

    /**
     * Get msuntilnext
     *
     * @return integer
     */
    public function getMsuntilnext()
    {
        return $this->msuntilnext;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return ScriptSplineChainMeta
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
     * @return ScriptSplineChainMeta
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
     * @return ScriptSplineChainMeta
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
}
