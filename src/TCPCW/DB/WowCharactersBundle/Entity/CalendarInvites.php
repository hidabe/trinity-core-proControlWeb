<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendarInvites
 *
 * @ORM\Table(name="calendar_invites")
 * @ORM\Entity
 */
class CalendarInvites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="event", type="bigint", nullable=false)
     */
    private $event = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invitee", type="integer", nullable=false)
     */
    private $invitee = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sender", type="integer", nullable=false)
     */
    private $sender = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="statustime", type="integer", nullable=false)
     */
    private $statustime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set event
     *
     * @param integer $event
     *
     * @return CalendarInvites
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return integer
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set invitee
     *
     * @param integer $invitee
     *
     * @return CalendarInvites
     */
    public function setInvitee($invitee)
    {
        $this->invitee = $invitee;

        return $this;
    }

    /**
     * Get invitee
     *
     * @return integer
     */
    public function getInvitee()
    {
        return $this->invitee;
    }

    /**
     * Set sender
     *
     * @param integer $sender
     *
     * @return CalendarInvites
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return integer
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return CalendarInvites
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statustime
     *
     * @param integer $statustime
     *
     * @return CalendarInvites
     */
    public function setStatustime($statustime)
    {
        $this->statustime = $statustime;

        return $this;
    }

    /**
     * Get statustime
     *
     * @return integer
     */
    public function getStatustime()
    {
        return $this->statustime;
    }

    /**
     * Set rank
     *
     * @param boolean $rank
     *
     * @return CalendarInvites
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return boolean
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return CalendarInvites
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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
