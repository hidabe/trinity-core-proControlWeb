<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventSave
 *
 * @ORM\Table(name="game_event_save")
 * @ORM\Entity
 */
class GameEventSave
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="next_start", type="integer", nullable=false)
     */
    private $nextStart = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evententry;



    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return GameEventSave
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set nextStart
     *
     * @param integer $nextStart
     *
     * @return GameEventSave
     */
    public function setNextStart($nextStart)
    {
        $this->nextStart = $nextStart;

        return $this;
    }

    /**
     * Get nextStart
     *
     * @return integer
     */
    public function getNextStart()
    {
        return $this->nextStart;
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
