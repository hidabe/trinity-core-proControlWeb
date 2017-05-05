<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventConditionSave
 *
 * @ORM\Table(name="game_event_condition_save")
 * @ORM\Entity
 */
class GameEventConditionSave
{
    /**
     * @var float
     *
     * @ORM\Column(name="done", type="float", precision=10, scale=0, nullable=true)
     */
    private $done = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="condition_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditionId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evententry;



    /**
     * Set done
     *
     * @param float $done
     *
     * @return GameEventConditionSave
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return float
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set conditionId
     *
     * @param integer $conditionId
     *
     * @return GameEventConditionSave
     */
    public function setConditionId($conditionId)
    {
        $this->conditionId = $conditionId;

        return $this;
    }

    /**
     * Get conditionId
     *
     * @return integer
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }

    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventConditionSave
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
