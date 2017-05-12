<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarEvents
 *
 * @ORM\Table(name="calendar_events")
 * @ORM\Entity
 */
class CalendarEvents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="creator", type="integer", nullable=false)
     */
    private $creator = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '4';

    /**
     * @var integer
     *
     * @ORM\Column(name="dungeon", type="integer", nullable=false)
     */
    private $dungeon = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="eventtime", type="integer", nullable=false)
     */
    private $eventtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time2", type="integer", nullable=false)
     */
    private $time2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set creator
     *
     * @param integer $creator
     *
     * @return CalendarEvents
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return integer
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return CalendarEvents
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CalendarEvents
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
     * Set type
     *
     * @param boolean $type
     *
     * @return CalendarEvents
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dungeon
     *
     * @param integer $dungeon
     *
     * @return CalendarEvents
     */
    public function setDungeon($dungeon)
    {
        $this->dungeon = $dungeon;

        return $this;
    }

    /**
     * Get dungeon
     *
     * @return integer
     */
    public function getDungeon()
    {
        return $this->dungeon;
    }

    /**
     * Set eventtime
     *
     * @param integer $eventtime
     *
     * @return CalendarEvents
     */
    public function setEventtime($eventtime)
    {
        $this->eventtime = $eventtime;

        return $this;
    }

    /**
     * Get eventtime
     *
     * @return integer
     */
    public function getEventtime()
    {
        return $this->eventtime;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return CalendarEvents
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set time2
     *
     * @param integer $time2
     *
     * @return CalendarEvents
     */
    public function setTime2($time2)
    {
        $this->time2 = $time2;

        return $this;
    }

    /**
     * Get time2
     *
     * @return integer
     */
    public function getTime2()
    {
        return $this->time2;
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
}
