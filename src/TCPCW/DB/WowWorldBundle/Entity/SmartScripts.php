<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmartScripts
 *
 * @ORM\Table(name="smart_scripts")
 * @ORM\Entity
 */
class SmartScripts
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="event_type", type="boolean", nullable=false)
     */
    private $eventType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="event_phase_mask", type="smallint", nullable=false)
     */
    private $eventPhaseMask = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="event_chance", type="boolean", nullable=false)
     */
    private $eventChance = '100';

    /**
     * @var integer
     *
     * @ORM\Column(name="event_flags", type="smallint", nullable=false)
     */
    private $eventFlags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="event_param1", type="integer", nullable=false)
     */
    private $eventParam1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="event_param2", type="integer", nullable=false)
     */
    private $eventParam2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="event_param3", type="integer", nullable=false)
     */
    private $eventParam3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="event_param4", type="integer", nullable=false)
     */
    private $eventParam4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="action_type", type="boolean", nullable=false)
     */
    private $actionType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_param1", type="integer", nullable=false)
     */
    private $actionParam1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_param2", type="integer", nullable=false)
     */
    private $actionParam2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_param3", type="integer", nullable=false)
     */
    private $actionParam3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_param4", type="integer", nullable=false)
     */
    private $actionParam4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_param5", type="integer", nullable=false)
     */
    private $actionParam5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_param6", type="integer", nullable=false)
     */
    private $actionParam6 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="target_type", type="boolean", nullable=false)
     */
    private $targetType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="target_param1", type="integer", nullable=false)
     */
    private $targetParam1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="target_param2", type="integer", nullable=false)
     */
    private $targetParam2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="target_param3", type="integer", nullable=false)
     */
    private $targetParam3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_o", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetO = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="entryorguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entryorguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="source_type", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="link", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $link;



    /**
     * Set eventType
     *
     * @param boolean $eventType
     *
     * @return SmartScripts
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return boolean
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set eventPhaseMask
     *
     * @param integer $eventPhaseMask
     *
     * @return SmartScripts
     */
    public function setEventPhaseMask($eventPhaseMask)
    {
        $this->eventPhaseMask = $eventPhaseMask;

        return $this;
    }

    /**
     * Get eventPhaseMask
     *
     * @return integer
     */
    public function getEventPhaseMask()
    {
        return $this->eventPhaseMask;
    }

    /**
     * Set eventChance
     *
     * @param boolean $eventChance
     *
     * @return SmartScripts
     */
    public function setEventChance($eventChance)
    {
        $this->eventChance = $eventChance;

        return $this;
    }

    /**
     * Get eventChance
     *
     * @return boolean
     */
    public function getEventChance()
    {
        return $this->eventChance;
    }

    /**
     * Set eventFlags
     *
     * @param integer $eventFlags
     *
     * @return SmartScripts
     */
    public function setEventFlags($eventFlags)
    {
        $this->eventFlags = $eventFlags;

        return $this;
    }

    /**
     * Get eventFlags
     *
     * @return integer
     */
    public function getEventFlags()
    {
        return $this->eventFlags;
    }

    /**
     * Set eventParam1
     *
     * @param integer $eventParam1
     *
     * @return SmartScripts
     */
    public function setEventParam1($eventParam1)
    {
        $this->eventParam1 = $eventParam1;

        return $this;
    }

    /**
     * Get eventParam1
     *
     * @return integer
     */
    public function getEventParam1()
    {
        return $this->eventParam1;
    }

    /**
     * Set eventParam2
     *
     * @param integer $eventParam2
     *
     * @return SmartScripts
     */
    public function setEventParam2($eventParam2)
    {
        $this->eventParam2 = $eventParam2;

        return $this;
    }

    /**
     * Get eventParam2
     *
     * @return integer
     */
    public function getEventParam2()
    {
        return $this->eventParam2;
    }

    /**
     * Set eventParam3
     *
     * @param integer $eventParam3
     *
     * @return SmartScripts
     */
    public function setEventParam3($eventParam3)
    {
        $this->eventParam3 = $eventParam3;

        return $this;
    }

    /**
     * Get eventParam3
     *
     * @return integer
     */
    public function getEventParam3()
    {
        return $this->eventParam3;
    }

    /**
     * Set eventParam4
     *
     * @param integer $eventParam4
     *
     * @return SmartScripts
     */
    public function setEventParam4($eventParam4)
    {
        $this->eventParam4 = $eventParam4;

        return $this;
    }

    /**
     * Get eventParam4
     *
     * @return integer
     */
    public function getEventParam4()
    {
        return $this->eventParam4;
    }

    /**
     * Set actionType
     *
     * @param boolean $actionType
     *
     * @return SmartScripts
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return boolean
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set actionParam1
     *
     * @param integer $actionParam1
     *
     * @return SmartScripts
     */
    public function setActionParam1($actionParam1)
    {
        $this->actionParam1 = $actionParam1;

        return $this;
    }

    /**
     * Get actionParam1
     *
     * @return integer
     */
    public function getActionParam1()
    {
        return $this->actionParam1;
    }

    /**
     * Set actionParam2
     *
     * @param integer $actionParam2
     *
     * @return SmartScripts
     */
    public function setActionParam2($actionParam2)
    {
        $this->actionParam2 = $actionParam2;

        return $this;
    }

    /**
     * Get actionParam2
     *
     * @return integer
     */
    public function getActionParam2()
    {
        return $this->actionParam2;
    }

    /**
     * Set actionParam3
     *
     * @param integer $actionParam3
     *
     * @return SmartScripts
     */
    public function setActionParam3($actionParam3)
    {
        $this->actionParam3 = $actionParam3;

        return $this;
    }

    /**
     * Get actionParam3
     *
     * @return integer
     */
    public function getActionParam3()
    {
        return $this->actionParam3;
    }

    /**
     * Set actionParam4
     *
     * @param integer $actionParam4
     *
     * @return SmartScripts
     */
    public function setActionParam4($actionParam4)
    {
        $this->actionParam4 = $actionParam4;

        return $this;
    }

    /**
     * Get actionParam4
     *
     * @return integer
     */
    public function getActionParam4()
    {
        return $this->actionParam4;
    }

    /**
     * Set actionParam5
     *
     * @param integer $actionParam5
     *
     * @return SmartScripts
     */
    public function setActionParam5($actionParam5)
    {
        $this->actionParam5 = $actionParam5;

        return $this;
    }

    /**
     * Get actionParam5
     *
     * @return integer
     */
    public function getActionParam5()
    {
        return $this->actionParam5;
    }

    /**
     * Set actionParam6
     *
     * @param integer $actionParam6
     *
     * @return SmartScripts
     */
    public function setActionParam6($actionParam6)
    {
        $this->actionParam6 = $actionParam6;

        return $this;
    }

    /**
     * Get actionParam6
     *
     * @return integer
     */
    public function getActionParam6()
    {
        return $this->actionParam6;
    }

    /**
     * Set targetType
     *
     * @param boolean $targetType
     *
     * @return SmartScripts
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

        return $this;
    }

    /**
     * Get targetType
     *
     * @return boolean
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * Set targetParam1
     *
     * @param integer $targetParam1
     *
     * @return SmartScripts
     */
    public function setTargetParam1($targetParam1)
    {
        $this->targetParam1 = $targetParam1;

        return $this;
    }

    /**
     * Get targetParam1
     *
     * @return integer
     */
    public function getTargetParam1()
    {
        return $this->targetParam1;
    }

    /**
     * Set targetParam2
     *
     * @param integer $targetParam2
     *
     * @return SmartScripts
     */
    public function setTargetParam2($targetParam2)
    {
        $this->targetParam2 = $targetParam2;

        return $this;
    }

    /**
     * Get targetParam2
     *
     * @return integer
     */
    public function getTargetParam2()
    {
        return $this->targetParam2;
    }

    /**
     * Set targetParam3
     *
     * @param integer $targetParam3
     *
     * @return SmartScripts
     */
    public function setTargetParam3($targetParam3)
    {
        $this->targetParam3 = $targetParam3;

        return $this;
    }

    /**
     * Get targetParam3
     *
     * @return integer
     */
    public function getTargetParam3()
    {
        return $this->targetParam3;
    }

    /**
     * Set targetX
     *
     * @param float $targetX
     *
     * @return SmartScripts
     */
    public function setTargetX($targetX)
    {
        $this->targetX = $targetX;

        return $this;
    }

    /**
     * Get targetX
     *
     * @return float
     */
    public function getTargetX()
    {
        return $this->targetX;
    }

    /**
     * Set targetY
     *
     * @param float $targetY
     *
     * @return SmartScripts
     */
    public function setTargetY($targetY)
    {
        $this->targetY = $targetY;

        return $this;
    }

    /**
     * Get targetY
     *
     * @return float
     */
    public function getTargetY()
    {
        return $this->targetY;
    }

    /**
     * Set targetZ
     *
     * @param float $targetZ
     *
     * @return SmartScripts
     */
    public function setTargetZ($targetZ)
    {
        $this->targetZ = $targetZ;

        return $this;
    }

    /**
     * Get targetZ
     *
     * @return float
     */
    public function getTargetZ()
    {
        return $this->targetZ;
    }

    /**
     * Set targetO
     *
     * @param float $targetO
     *
     * @return SmartScripts
     */
    public function setTargetO($targetO)
    {
        $this->targetO = $targetO;

        return $this;
    }

    /**
     * Get targetO
     *
     * @return float
     */
    public function getTargetO()
    {
        return $this->targetO;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return SmartScripts
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set entryorguid
     *
     * @param integer $entryorguid
     *
     * @return SmartScripts
     */
    public function setEntryorguid($entryorguid)
    {
        $this->entryorguid = $entryorguid;

        return $this;
    }

    /**
     * Get entryorguid
     *
     * @return integer
     */
    public function getEntryorguid()
    {
        return $this->entryorguid;
    }

    /**
     * Set sourceType
     *
     * @param boolean $sourceType
     *
     * @return SmartScripts
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * Get sourceType
     *
     * @return boolean
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return SmartScripts
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
     * Set link
     *
     * @param integer $link
     *
     * @return SmartScripts
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return integer
     */
    public function getLink()
    {
        return $this->link;
    }
}
