<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uptime
 *
 * @ORM\Table(name="uptime")
 * @ORM\Entity
 */
class Uptime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uptime", type="integer", nullable=false)
     */
    private $uptime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxplayers", type="smallint", nullable=false)
     */
    private $maxplayers = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="revision", type="string", length=255, nullable=false)
     */
    private $revision = 'Trinitycore';

    /**
     * @var integer
     *
     * @ORM\Column(name="realmid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="starttime", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $starttime;



    /**
     * Set uptime
     *
     * @param integer $uptime
     *
     * @return Uptime
     */
    public function setUptime($uptime)
    {
        $this->uptime = $uptime;

        return $this;
    }

    /**
     * Get uptime
     *
     * @return integer
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * Set maxplayers
     *
     * @param integer $maxplayers
     *
     * @return Uptime
     */
    public function setMaxplayers($maxplayers)
    {
        $this->maxplayers = $maxplayers;

        return $this;
    }

    /**
     * Get maxplayers
     *
     * @return integer
     */
    public function getMaxplayers()
    {
        return $this->maxplayers;
    }

    /**
     * Set revision
     *
     * @param string $revision
     *
     * @return Uptime
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set realmid
     *
     * @param integer $realmid
     *
     * @return Uptime
     */
    public function setRealmid($realmid)
    {
        $this->realmid = $realmid;

        return $this;
    }

    /**
     * Get realmid
     *
     * @return integer
     */
    public function getRealmid()
    {
        return $this->realmid;
    }

    /**
     * Set starttime
     *
     * @param integer $starttime
     *
     * @return Uptime
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return integer
     */
    public function getStarttime()
    {
        return $this->starttime;
    }
}
