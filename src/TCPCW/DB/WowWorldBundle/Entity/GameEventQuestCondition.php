<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventQuestCondition
 *
 * @ORM\Table(name="game_event_quest_condition")
 * @ORM\Entity
 */
class GameEventQuestCondition
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
     * @ORM\Column(name="condition_id", type="integer", nullable=false)
     */
    private $conditionId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="num", type="float", precision=10, scale=0, nullable=true)
     */
    private $num = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $quest;



    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventQuestCondition
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
     * Set conditionId
     *
     * @param integer $conditionId
     *
     * @return GameEventQuestCondition
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
     * Set num
     *
     * @param float $num
     *
     * @return GameEventQuestCondition
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return float
     */
    public function getNum()
    {
        return $this->num;
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
