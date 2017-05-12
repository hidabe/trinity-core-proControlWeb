<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildEventlog
 *
 * @ORM\Table(name="guild_eventlog", indexes={@ORM\Index(name="Idx_PlayerGuid1", columns={"PlayerGuid1"}), @ORM\Index(name="Idx_PlayerGuid2", columns={"PlayerGuid2"}), @ORM\Index(name="Idx_LogGuid", columns={"LogGuid"})})
 * @ORM\Entity
 */
class GuildEventlog
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="EventType", type="integer", nullable=false)
     */
    private $eventtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlayerGuid1", type="integer", nullable=false)
     */
    private $playerguid1;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlayerGuid2", type="integer", nullable=false)
     */
    private $playerguid2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NewRank", type="integer", nullable=false)
     */
    private $newrank;

    /**
     * @var integer
     *
     * @ORM\Column(name="TimeStamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guildid;

    /**
     * @var integer
     *
     * @ORM\Column(name="LogGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $logguid;



    /**
     * Set eventtype
     *
     * @param boolean $eventtype
     *
     * @return GuildEventlog
     */
    public function setEventtype($eventtype)
    {
        $this->eventtype = $eventtype;

        return $this;
    }

    /**
     * Get eventtype
     *
     * @return boolean
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Set playerguid1
     *
     * @param integer $playerguid1
     *
     * @return GuildEventlog
     */
    public function setPlayerguid1($playerguid1)
    {
        $this->playerguid1 = $playerguid1;

        return $this;
    }

    /**
     * Get playerguid1
     *
     * @return integer
     */
    public function getPlayerguid1()
    {
        return $this->playerguid1;
    }

    /**
     * Set playerguid2
     *
     * @param integer $playerguid2
     *
     * @return GuildEventlog
     */
    public function setPlayerguid2($playerguid2)
    {
        $this->playerguid2 = $playerguid2;

        return $this;
    }

    /**
     * Get playerguid2
     *
     * @return integer
     */
    public function getPlayerguid2()
    {
        return $this->playerguid2;
    }

    /**
     * Set newrank
     *
     * @param boolean $newrank
     *
     * @return GuildEventlog
     */
    public function setNewrank($newrank)
    {
        $this->newrank = $newrank;

        return $this;
    }

    /**
     * Get newrank
     *
     * @return boolean
     */
    public function getNewrank()
    {
        return $this->newrank;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return GuildEventlog
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set guildid
     *
     * @param integer $guildid
     *
     * @return GuildEventlog
     */
    public function setGuildid($guildid)
    {
        $this->guildid = $guildid;

        return $this;
    }

    /**
     * Get guildid
     *
     * @return integer
     */
    public function getGuildid()
    {
        return $this->guildid;
    }

    /**
     * Set logguid
     *
     * @param integer $logguid
     *
     * @return GuildEventlog
     */
    public function setLogguid($logguid)
    {
        $this->logguid = $logguid;

        return $this;
    }

    /**
     * Get logguid
     *
     * @return integer
     */
    public function getLogguid()
    {
        return $this->logguid;
    }
}
