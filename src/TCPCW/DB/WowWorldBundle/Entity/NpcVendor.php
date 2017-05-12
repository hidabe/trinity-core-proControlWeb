<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcVendor
 *
 * @ORM\Table(name="npc_vendor", indexes={@ORM\Index(name="slot", columns={"slot"})})
 * @ORM\Entity
 */
class NpcVendor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="slot", type="smallint", nullable=false)
     */
    private $slot = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxcount", type="boolean", nullable=false)
     */
    private $maxcount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="incrtime", type="integer", nullable=false)
     */
    private $incrtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

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
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="ExtendedCost", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $extendedcost;



    /**
     * Set slot
     *
     * @param integer $slot
     *
     * @return NpcVendor
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return integer
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set maxcount
     *
     * @param boolean $maxcount
     *
     * @return NpcVendor
     */
    public function setMaxcount($maxcount)
    {
        $this->maxcount = $maxcount;

        return $this;
    }

    /**
     * Get maxcount
     *
     * @return boolean
     */
    public function getMaxcount()
    {
        return $this->maxcount;
    }

    /**
     * Set incrtime
     *
     * @param integer $incrtime
     *
     * @return NpcVendor
     */
    public function setIncrtime($incrtime)
    {
        $this->incrtime = $incrtime;

        return $this;
    }

    /**
     * Get incrtime
     *
     * @return integer
     */
    public function getIncrtime()
    {
        return $this->incrtime;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return NpcVendor
     */
    public function setVerifiedbuild($verifiedbuild)
    {
        $this->verifiedbuild = $verifiedbuild;

        return $this;
    }

    /**
     * Get verifiedbuild
     *
     * @return integer
     */
    public function getVerifiedbuild()
    {
        return $this->verifiedbuild;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return NpcVendor
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
     * Set item
     *
     * @param integer $item
     *
     * @return NpcVendor
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
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
     * Set extendedcost
     *
     * @param integer $extendedcost
     *
     * @return NpcVendor
     */
    public function setExtendedcost($extendedcost)
    {
        $this->extendedcost = $extendedcost;

        return $this;
    }

    /**
     * Get extendedcost
     *
     * @return integer
     */
    public function getExtendedcost()
    {
        return $this->extendedcost;
    }
}
