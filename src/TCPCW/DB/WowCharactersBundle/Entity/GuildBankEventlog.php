<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankEventlog
 *
 * @ORM\Table(name="guild_bank_eventlog", indexes={@ORM\Index(name="guildid_key", columns={"guildid"}), @ORM\Index(name="Idx_PlayerGuid", columns={"PlayerGuid"}), @ORM\Index(name="Idx_LogGuid", columns={"LogGuid"})})
 * @ORM\Entity
 */
class GuildBankEventlog
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="EventType", type="integer", nullable=false)
     */
    private $eventtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PlayerGuid", type="integer", nullable=false)
     */
    private $playerguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemOrMoney", type="integer", nullable=false)
     */
    private $itemormoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemStackCount", type="smallint", nullable=false)
     */
    private $itemstackcount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="DestTabId", type="integer", nullable=false)
     */
    private $desttabid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TimeStamp", type="integer", nullable=false)
     */
    private $timestamp = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="TabId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;



    /**
     * Set eventtype
     *
     * @param boolean $eventtype
     *
     * @return GuildBankEventlog
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
     * Set playerguid
     *
     * @param integer $playerguid
     *
     * @return GuildBankEventlog
     */
    public function setPlayerguid($playerguid)
    {
        $this->playerguid = $playerguid;

        return $this;
    }

    /**
     * Get playerguid
     *
     * @return integer
     */
    public function getPlayerguid()
    {
        return $this->playerguid;
    }

    /**
     * Set itemormoney
     *
     * @param integer $itemormoney
     *
     * @return GuildBankEventlog
     */
    public function setItemormoney($itemormoney)
    {
        $this->itemormoney = $itemormoney;

        return $this;
    }

    /**
     * Get itemormoney
     *
     * @return integer
     */
    public function getItemormoney()
    {
        return $this->itemormoney;
    }

    /**
     * Set itemstackcount
     *
     * @param integer $itemstackcount
     *
     * @return GuildBankEventlog
     */
    public function setItemstackcount($itemstackcount)
    {
        $this->itemstackcount = $itemstackcount;

        return $this;
    }

    /**
     * Get itemstackcount
     *
     * @return integer
     */
    public function getItemstackcount()
    {
        return $this->itemstackcount;
    }

    /**
     * Set desttabid
     *
     * @param boolean $desttabid
     *
     * @return GuildBankEventlog
     */
    public function setDesttabid($desttabid)
    {
        $this->desttabid = $desttabid;

        return $this;
    }

    /**
     * Get desttabid
     *
     * @return boolean
     */
    public function getDesttabid()
    {
        return $this->desttabid;
    }

    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return GuildBankEventlog
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
     * @return GuildBankEventlog
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
     * @return GuildBankEventlog
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

    /**
     * Set tabid
     *
     * @param boolean $tabid
     *
     * @return GuildBankEventlog
     */
    public function setTabid($tabid)
    {
        $this->tabid = $tabid;

        return $this;
    }

    /**
     * Get tabid
     *
     * @return boolean
     */
    public function getTabid()
    {
        return $this->tabid;
    }
}
