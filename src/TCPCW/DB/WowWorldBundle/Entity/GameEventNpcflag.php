<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventNpcflag
 *
 * @ORM\Table(name="game_event_npcflag")
 * @ORM\Entity
 */
class GameEventNpcflag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="npcflag", type="integer", nullable=false)
     */
    private $npcflag = '0';

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
     * Set npcflag
     *
     * @param integer $npcflag
     *
     * @return GameEventNpcflag
     */
    public function setNpcflag($npcflag)
    {
        $this->npcflag = $npcflag;

        return $this;
    }

    /**
     * Get npcflag
     *
     * @return integer
     */
    public function getNpcflag()
    {
        return $this->npcflag;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return GameEventNpcflag
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
     * @return GameEventNpcflag
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
