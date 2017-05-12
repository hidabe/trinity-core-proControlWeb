<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventNpcVendor
 *
 * @ORM\Table(name="game_event_npc_vendor", indexes={@ORM\Index(name="slot", columns={"slot"})})
 * @ORM\Entity
 */
class GameEventNpcVendor
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean", nullable=false)
     */
    private $evententry;

    /**
     * @var integer
     *
     * @ORM\Column(name="slot", type="smallint", nullable=false)
     */
    private $slot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxcount", type="integer", nullable=false)
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
     * @ORM\Column(name="ExtendedCost", type="integer", nullable=false)
     */
    private $extendedcost = '0';

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
     * @ORM\Column(name="item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $item;



    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventNpcVendor
     */
    public function setEvententry($evententry)
    {
        $this->evententry = $evententry;

        return $this;
    }

    /**
     * Get evententry
     *
     * @return boolean
     */
    public function getEvententry()
    {
        return $this->evententry;
    }

    /**
     * Set slot
     *
     * @param integer $slot
     *
     * @return GameEventNpcVendor
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
     * @param integer $maxcount
     *
     * @return GameEventNpcVendor
     */
    public function setMaxcount($maxcount)
    {
        $this->maxcount = $maxcount;

        return $this;
    }

    /**
     * Get maxcount
     *
     * @return integer
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
     * @return GameEventNpcVendor
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
     * Set extendedcost
     *
     * @param integer $extendedcost
     *
     * @return GameEventNpcVendor
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

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return GameEventNpcVendor
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
     * Set item
     *
     * @param integer $item
     *
     * @return GameEventNpcVendor
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
}
