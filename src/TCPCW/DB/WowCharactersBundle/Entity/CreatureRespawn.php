<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureRespawn
 *
 * @ORM\Table(name="creature_respawn", indexes={@ORM\Index(name="idx_instance", columns={"instanceId"})})
 * @ORM\Entity
 */
class CreatureRespawn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="respawnTime", type="bigint", nullable=false)
     */
    private $respawntime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid = '0';

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
     * @ORM\Column(name="instanceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $instanceid;



    /**
     * Set respawntime
     *
     * @param integer $respawntime
     *
     * @return CreatureRespawn
     */
    public function setRespawntime($respawntime)
    {
        $this->respawntime = $respawntime;

        return $this;
    }

    /**
     * Get respawntime
     *
     * @return integer
     */
    public function getRespawntime()
    {
        return $this->respawntime;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return CreatureRespawn
     */
    public function setMapid($mapid)
    {
        $this->mapid = $mapid;

        return $this;
    }

    /**
     * Get mapid
     *
     * @return integer
     */
    public function getMapid()
    {
        return $this->mapid;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CreatureRespawn
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
     * Set instanceid
     *
     * @param integer $instanceid
     *
     * @return CreatureRespawn
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer
     */
    public function getInstanceid()
    {
        return $this->instanceid;
    }
}
