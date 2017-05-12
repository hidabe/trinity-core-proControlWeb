<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventCreatureQuest
 *
 * @ORM\Table(name="game_event_creature_quest")
 * @ORM\Entity
 */
class GameEventCreatureQuest
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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $quest;



    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventCreatureQuest
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
     * Set id
     *
     * @param integer $id
     *
     * @return GameEventCreatureQuest
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quest
     *
     * @param integer $quest
     *
     * @return GameEventCreatureQuest
     */
    public function setQuest($quest)
    {
        $this->quest = $quest;

        return $this;
    }

    /**
     * Get quest
     *
     * @return integer
     */
    public function getQuest()
    {
        return $this->quest;
    }
}
