<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventCreature
 *
 * @ORM\Table(name="game_event_creature")
 * @ORM\Entity
 */
class GameEventCreature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evententry;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return GameEventCreature
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
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventCreature
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
}
