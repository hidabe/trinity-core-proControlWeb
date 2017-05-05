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
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
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
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterInventory
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
}
