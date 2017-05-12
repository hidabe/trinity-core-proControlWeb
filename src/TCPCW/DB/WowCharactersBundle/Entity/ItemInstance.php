<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemInstance
 *
 * @ORM\Table(name="item_instance", indexes={@ORM\Index(name="idx_owner_guid", columns={"owner_guid"})})
 * @ORM\Entity
 */
class ItemInstance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="itemEntry", type="integer", nullable=false)
     */
    private $itementry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_guid", type="integer", nullable=false)
     */
    private $ownerGuid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="creatorGuid", type="integer", nullable=false)
     */
    private $creatorguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="giftCreatorGuid", type="integer", nullable=false)
     */
    private $giftcreatorguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="charges", type="text", length=255, nullable=true)
     */
    private $charges;

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="enchantments", type="text", length=65535, nullable=false)
     */
    private $enchantments;

    /**
     * @var integer
     *
     * @ORM\Column(name="randomPropertyId", type="smallint", nullable=false)
     */
    private $randompropertyid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="durability", type="smallint", nullable=false)
     */
    private $durability = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="playedTime", type="integer", nullable=false)
     */
    private $playedtime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;

    /**
     * @ORM\OneToOne(targetEntity="CharacterInventory", inversedBy="itemInstance")
     * @ORM\JoinColumn(name="guid", referencedColumnName="item")
     */
    private $characterInventory;



    /**
     * Set itementry
     *
     * @param integer $itementry
     *
     * @return ItemInstance
     */
    public function setItementry($itementry)
    {
        $this->itementry = $itementry;

        return $this;
    }

    /**
     * Get itementry
     *
     * @return integer
     */
    public function getItementry()
    {
        return $this->itementry;
    }

    /**
     * Set ownerGuid
     *
     * @param integer $ownerGuid
     *
     * @return ItemInstance
     */
    public function setOwnerGuid($ownerGuid)
    {
        $this->ownerGuid = $ownerGuid;

        return $this;
    }

    /**
     * Get ownerGuid
     *
     * @return integer
     */
    public function getOwnerGuid()
    {
        return $this->ownerGuid;
    }

    /**
     * Set creatorguid
     *
     * @param integer $creatorguid
     *
     * @return ItemInstance
     */
    public function setCreatorguid($creatorguid)
    {
        $this->creatorguid = $creatorguid;

        return $this;
    }

    /**
     * Get creatorguid
     *
     * @return integer
     */
    public function getCreatorguid()
    {
        return $this->creatorguid;
    }

    /**
     * Set giftcreatorguid
     *
     * @param integer $giftcreatorguid
     *
     * @return ItemInstance
     */
    public function setGiftcreatorguid($giftcreatorguid)
    {
        $this->giftcreatorguid = $giftcreatorguid;

        return $this;
    }

    /**
     * Get giftcreatorguid
     *
     * @return integer
     */
    public function getGiftcreatorguid()
    {
        return $this->giftcreatorguid;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return ItemInstance
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return ItemInstance
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set charges
     *
     * @param string $charges
     *
     * @return ItemInstance
     */
    public function setCharges($charges)
    {
        $this->charges = $charges;

        return $this;
    }

    /**
     * Get charges
     *
     * @return string
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return ItemInstance
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set enchantments
     *
     * @param string $enchantments
     *
     * @return ItemInstance
     */
    public function setEnchantments($enchantments)
    {
        $this->enchantments = $enchantments;

        return $this;
    }

    /**
     * Get enchantments
     *
     * @return string
     */
    public function getEnchantments()
    {
        return $this->enchantments;
    }

    /**
     * Set randompropertyid
     *
     * @param integer $randompropertyid
     *
     * @return ItemInstance
     */
    public function setRandompropertyid($randompropertyid)
    {
        $this->randompropertyid = $randompropertyid;

        return $this;
    }

    /**
     * Get randompropertyid
     *
     * @return integer
     */
    public function getRandompropertyid()
    {
        return $this->randompropertyid;
    }

    /**
     * Set durability
     *
     * @param integer $durability
     *
     * @return ItemInstance
     */
    public function setDurability($durability)
    {
        $this->durability = $durability;

        return $this;
    }

    /**
     * Get durability
     *
     * @return integer
     */
    public function getDurability()
    {
        return $this->durability;
    }

    /**
     * Set playedtime
     *
     * @param integer $playedtime
     *
     * @return ItemInstance
     */
    public function setPlayedtime($playedtime)
    {
        $this->playedtime = $playedtime;

        return $this;
    }

    /**
     * Get playedtime
     *
     * @return integer
     */
    public function getPlayedtime()
    {
        return $this->playedtime;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return ItemInstance
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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
     * Set characterInventory
     *
     * @param \TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory $characterInventory
     *
     * @return ItemInstance
     */
    public function setCharacterInventory(\TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory $characterInventory = null)
    {
        $this->characterInventory = $characterInventory;

        return $this;
    }

    /**
     * Get characterInventory
     *
     * @return \TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory
     */
    public function getCharacterInventory()
    {
        return $this->characterInventory;
    }
}
