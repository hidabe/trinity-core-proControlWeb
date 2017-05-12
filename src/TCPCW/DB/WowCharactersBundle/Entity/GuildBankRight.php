<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankRight
 *
 * @ORM\Table(name="guild_bank_right", indexes={@ORM\Index(name="guildid_key", columns={"guildid"})})
 * @ORM\Entity
 */
class GuildBankRight
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="gbright", type="integer", nullable=false)
     */
    private $gbright = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SlotPerDay", type="integer", nullable=false)
     */
    private $slotperday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guildid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TabId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;



    /**
     * Set gbright
     *
     * @param boolean $gbright
     *
     * @return GuildBankRight
     */
    public function setGbright($gbright)
    {
        $this->gbright = $gbright;

        return $this;
    }

    /**
     * Get gbright
     *
     * @return boolean
     */
    public function getGbright()
    {
        return $this->gbright;
    }

    /**
     * Set slotperday
     *
     * @param integer $slotperday
     *
     * @return GuildBankRight
     */
    public function setSlotperday($slotperday)
    {
        $this->slotperday = $slotperday;

        return $this;
    }

    /**
     * Get slotperday
     *
     * @return integer
     */
    public function getSlotperday()
    {
        return $this->slotperday;
    }

    /**
     * Set guildid
     *
     * @param integer $guildid
     *
     * @return GuildBankRight
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
     * Set rid
     *
     * @param boolean $rid
     *
     * @return GuildBankRight
     */
    public function setRid($rid)
    {
        $this->rid = $rid;

        return $this;
    }

    /**
     * Get rid
     *
     * @return boolean
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set tabid
     *
     * @param boolean $tabid
     *
     * @return GuildBankRight
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
