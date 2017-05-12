<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankItem
 *
 * @ORM\Table(name="guild_bank_item", indexes={@ORM\Index(name="guildid_key", columns={"guildid"}), @ORM\Index(name="Idx_item_guid", columns={"item_guid"})})
 * @ORM\Entity
 */
class GuildBankItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer", nullable=false)
     */
    private $itemGuid = '0';

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
     * @ORM\Column(name="TabId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SlotId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $slotid;



    /**
     * Set itemGuid
     *
     * @param integer $itemGuid
     *
     * @return GuildBankItem
     */
    public function setItemGuid($itemGuid)
    {
        $this->itemGuid = $itemGuid;

        return $this;
    }

    /**
     * Get itemGuid
     *
     * @return integer
     */
    public function getItemGuid()
    {
        return $this->itemGuid;
    }

    /**
     * Set guildid
     *
     * @param integer $guildid
     *
     * @return GuildBankItem
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
     * Set tabid
     *
     * @param boolean $tabid
     *
     * @return GuildBankItem
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

    /**
     * Set slotid
     *
     * @param boolean $slotid
     *
     * @return GuildBankItem
     */
    public function setSlotid($slotid)
    {
        $this->slotid = $slotid;

        return $this;
    }

    /**
     * Get slotid
     *
     * @return boolean
     */
    public function getSlotid()
    {
        return $this->slotid;
    }
}
