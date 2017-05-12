<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventCondition
 *
 * @ORM\Table(name="game_event_condition")
 * @ORM\Entity
 */
class GameEventCondition
{
    /**
     * @var float
     *
     * @ORM\Column(name="req_num", type="float", precision=10, scale=0, nullable=true)
     */
    private $reqNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_world_state_field", type="smallint", nullable=false)
     */
    private $maxWorldStateField = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="done_world_state_field", type="smallint", nullable=false)
     */
    private $doneWorldStateField = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=25, nullable=false)
     */
    private $description = '';

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
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evententry;



    /**
     * Set reqNum
     *
     * @param float $reqNum
     *
     * @return GameEventCondition
     */
    public function setReqNum($reqNum)
    {
        $this->reqNum = $reqNum;

        return $this;
    }

    /**
     * Get reqNum
     *
     * @return float
     */
    public function getReqNum()
    {
        return $this->reqNum;
    }

    /**
     * Set maxWorldStateField
     *
     * @param integer $maxWorldStateField
     *
     * @return GameEventCondition
     */
    public function setMaxWorldStateField($maxWorldStateField)
    {
        $this->maxWorldStateField = $maxWorldStateField;

        return $this;
    }

    /**
     * Get maxWorldStateField
     *
     * @return integer
     */
    public function getMaxWorldStateField()
    {
        return $this->maxWorldStateField;
    }

    /**
     * Set doneWorldStateField
     *
     * @param integer $doneWorldStateField
     *
     * @return GameEventCondition
     */
    public function setDoneWorldStateField($doneWorldStateField)
    {
        $this->doneWorldStateField = $doneWorldStateField;

        return $this;
    }

    /**
     * Get doneWorldStateField
     *
     * @return integer
     */
    public function getDoneWorldStateField()
    {
        return $this->doneWorldStateField;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return GameEventCondition
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set conditionId
     *
     * @param integer $conditionId
     *
     * @return GameEventCondition
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
     * @return GameEventCondition
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
