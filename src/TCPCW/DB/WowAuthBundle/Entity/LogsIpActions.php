<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogsIpActions
 *
 * @ORM\Table(name="logs_ip_actions")
 * @ORM\Entity
 */
class LogsIpActions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="account_id", type="integer", nullable=false)
     */
    private $accountId;

    /**
     * @var integer
     *
     * @ORM\Column(name="character_guid", type="integer", nullable=false)
     */
    private $characterGuid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip = '127.0.0.1';

    /**
     * @var string
     *
     * @ORM\Column(name="systemnote", type="text", length=65535, nullable=true)
     */
    private $systemnote;

    /**
     * @var integer
     *
     * @ORM\Column(name="unixtime", type="integer", nullable=false)
     */
    private $unixtime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false)
     */
    private $time = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return LogsIpActions
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set characterGuid
     *
     * @param integer $characterGuid
     *
     * @return LogsIpActions
     */
    public function setCharacterGuid($characterGuid)
    {
        $this->characterGuid = $characterGuid;

        return $this;
    }

    /**
     * Get characterGuid
     *
     * @return integer
     */
    public function getCharacterGuid()
    {
        return $this->characterGuid;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return LogsIpActions
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
     * Set ip
     *
     * @param string $ip
     *
     * @return LogsIpActions
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set systemnote
     *
     * @param string $systemnote
     *
     * @return LogsIpActions
     */
    public function setSystemnote($systemnote)
    {
        $this->systemnote = $systemnote;

        return $this;
    }

    /**
     * Get systemnote
     *
     * @return string
     */
    public function getSystemnote()
    {
        return $this->systemnote;
    }

    /**
     * Set unixtime
     *
     * @param integer $unixtime
     *
     * @return LogsIpActions
     */
    public function setUnixtime($unixtime)
    {
        $this->unixtime = $unixtime;

        return $this;
    }

    /**
     * Get unixtime
     *
     * @return integer
     */
    public function getUnixtime()
    {
        return $this->unixtime;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return LogsIpActions
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return LogsIpActions
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
