<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventPrerequisite
 *
 * @ORM\Table(name="game_event_prerequisite")
 * @ORM\Entity
 */
class GameEventPrerequisite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prerequisite_event", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prerequisiteEvent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evententry;



    /**
     * Set prerequisiteEvent
     *
     * @param integer $prerequisiteEvent
     *
     * @return GameEventPrerequisite
     */
    public function setPrerequisiteEvent($prerequisiteEvent)
    {
        $this->prerequisiteEvent = $prerequisiteEvent;

        return $this;
    }

    /**
     * Get prerequisiteEvent
     *
     * @return integer
     */
    public function getPrerequisiteEvent()
    {
        return $this->prerequisiteEvent;
    }

    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventPrerequisite
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
