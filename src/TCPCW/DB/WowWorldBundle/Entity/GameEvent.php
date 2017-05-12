<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEvent
 *
 * @ORM\Table(name="game_event")
 * @ORM\Entity
 */
class GameEvent
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_time", type="datetime", nullable=false)
     */
    private $startTime = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=false)
     */
    private $endTime = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="occurence", type="bigint", nullable=false)
     */
    private $occurence = '5184000';

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="bigint", nullable=false)
     */
    private $length = '2592000';

    /**
     * @var integer
     *
     * @ORM\Column(name="holiday", type="integer", nullable=false)
     */
    private $holiday = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="world_event", type="boolean", nullable=false)
     */
    private $worldEvent = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="announce", type="boolean", nullable=true)
     */
    private $announce = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evententry;



    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return GameEvent
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return GameEvent
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set occurence
     *
     * @param integer $occurence
     *
     * @return GameEvent
     */
    public function setOccurence($occurence)
    {
        $this->occurence = $occurence;

        return $this;
    }

    /**
     * Get occurence
     *
     * @return integer
     */
    public function getOccurence()
    {
        return $this->occurence;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return GameEvent
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set holiday
     *
     * @param integer $holiday
     *
     * @return GameEvent
     */
    public function setHoliday($holiday)
    {
        $this->holiday = $holiday;

        return $this;
    }

    /**
     * Get holiday
     *
     * @return integer
     */
    public function getHoliday()
    {
        return $this->holiday;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return GameEvent
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
     * Set worldEvent
     *
     * @param boolean $worldEvent
     *
     * @return GameEvent
     */
    public function setWorldEvent($worldEvent)
    {
        $this->worldEvent = $worldEvent;

        return $this;
    }

    /**
     * Get worldEvent
     *
     * @return boolean
     */
    public function getWorldEvent()
    {
        return $this->worldEvent;
    }

    /**
     * Set announce
     *
     * @param boolean $announce
     *
     * @return GameEvent
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;

        return $this;
    }

    /**
     * Get announce
     *
     * @return boolean
     */
    public function getAnnounce()
    {
        return $this->announce;
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
