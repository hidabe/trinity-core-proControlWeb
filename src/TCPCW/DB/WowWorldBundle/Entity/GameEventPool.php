<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventPool
 *
 * @ORM\Table(name="game_event_pool")
 * @ORM\Entity
 */
class GameEventPool
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
     * @ORM\Column(name="pool_entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $poolEntry;



    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventPool
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
     * Get poolEntry
     *
     * @return integer
     */
    public function getPoolEntry()
    {
        return $this->poolEntry;
    }
}
