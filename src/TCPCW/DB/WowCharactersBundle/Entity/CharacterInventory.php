<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterInventory
 *
 * @ORM\Table(name="character_inventory", uniqueConstraints={@ORM\UniqueConstraint(name="guid", columns={"guid", "bag", "slot"})}, indexes={@ORM\Index(name="idx_guid", columns={"guid"})})
 * @ORM\Entity
 */
class CharacterInventory
{
    /**
     * @ORM\ManyToOne(targetEntity="Characters", inversedBy="characterInventories")
     * @ORM\JoinColumn(name="guid", referencedColumnName="guid")
     */
    private $guid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bag", type="integer", nullable=false)
     */
    private $bag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="slot", type="integer", nullable=false)
     */
    private $slot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @ORM\OneToOne(targetEntity="ItemInstance", mappedBy="characterInventory")
     */
    private $itemInstance;

    /**
     * Set bag
     *
     * @param integer $bag
     *
     * @return CharacterInventory
     */
    public function setBag($bag)
    {
        $this->bag = $bag;

        return $this;
    }

    /**
     * Get bag
     *
     * @return integer
     */
    public function getBag()
    {
        return $this->bag;
    }

    /**
     * Set slot
     *
     * @param boolean $slot
     *
     * @return CharacterInventory
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return boolean
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set guid
     *
     * @param \TCPCW\DB\WowCharactersBundle\Entity\Characters $guid
     *
     * @return CharacterInventory
     */
    public function setGuid(\TCPCW\DB\WowCharactersBundle\Entity\Characters $guid = null)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return \TCPCW\DB\WowCharactersBundle\Entity\Characters
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set itemInstance
     *
     * @param \TCPCW\DB\WowCharactersBundle\Entity\ItemInstance $itemInstance
     *
     * @return CharacterInventory
     */
    public function setItemInstance(\TCPCW\DB\WowCharactersBundle\Entity\ItemInstance $itemInstance = null)
    {
        $this->itemInstance = $itemInstance;

        return $this;
    }

    /**
     * Get itemInstance
     *
     * @return \TCPCW\DB\WowCharactersBundle\Entity\ItemInstance
     */
    public function getItemInstance()
    {
        return $this->itemInstance;
    }
}
