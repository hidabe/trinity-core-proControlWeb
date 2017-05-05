<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mail", indexes={@ORM\Index(name="idx_receiver", columns={"receiver"})})
 * @ORM\Entity
 */
class Mail
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="messageType", type="integer", nullable=false)
     */
    private $messagetype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stationery", type="integer", nullable=false)
     */
    private $stationery = '41';

    /**
     * @var integer
     *
     * @ORM\Column(name="mailTemplateId", type="smallint", nullable=false)
     */
    private $mailtemplateid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sender", type="integer", nullable=false)
     */
    private $sender = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="receiver", type="integer", nullable=false)
     */
    private $receiver = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=true)
     */
    private $body;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_items", type="integer", nullable=false)
     */
    private $hasItems = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expire_time", type="integer", nullable=false)
     */
    private $expireTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deliver_time", type="integer", nullable=false)
     */
    private $deliverTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cod", type="integer", nullable=false)
     */
    private $cod = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="checked", type="integer", nullable=false)
     */
    private $checked = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set messagetype
     *
     * @param boolean $messagetype
     *
     * @return Mail
     */
    public function setMessagetype($messagetype)
    {
        $this->messagetype = $messagetype;

        return $this;
    }

    /**
     * Get messagetype
     *
     * @return boolean
     */
    public function getMessagetype()
    {
        return $this->messagetype;
    }

    /**
     * Set stationery
     *
     * @param boolean $stationery
     *
     * @return Mail
     */
    public function setStationery($stationery)
    {
        $this->stationery = $stationery;

        return $this;
    }

    /**
     * Get stationery
     *
     * @return boolean
     */
    public function getStationery()
    {
        return $this->stationery;
    }

    /**
     * Set mailtemplateid
     *
     * @param integer $mailtemplateid
     *
     * @return Mail
     */
    public function setMailtemplateid($mailtemplateid)
    {
        $this->mailtemplateid = $mailtemplateid;

        return $this;
    }

    /**
     * Get mailtemplateid
     *
     * @return integer
     */
    public function getMailtemplateid()
    {
        return $this->mailtemplateid;
    }

    /**
     * Set sender
     *
     * @param integer $sender
     *
     * @return Mail
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
     * Set receiver
     *
     * @param integer $receiver
     *
     * @return Mail
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return integer
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Mail
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set hasItems
     *
     * @param boolean $hasItems
     *
     * @return Mail
     */
    public function setHasItems($hasItems)
    {
        $this->hasItems = $hasItems;

        return $this;
    }

    /**
     * Get hasItems
     *
     * @return boolean
     */
    public function getHasItems()
    {
        return $this->hasItems;
    }

    /**
     * Set expireTime
     *
     * @param integer $expireTime
     *
     * @return Mail
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;

        return $this;
    }

    /**
     * Get expireTime
     *
     * @return integer
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Set deliverTime
     *
     * @param integer $deliverTime
     *
     * @return Mail
     */
    public function setDeliverTime($deliverTime)
    {
        $this->deliverTime = $deliverTime;

        return $this;
    }

    /**
     * Get deliverTime
     *
     * @return integer
     */
    public function getDeliverTime()
    {
        return $this->deliverTime;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return Mail
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set cod
     *
     * @param integer $cod
     *
     * @return Mail
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return integer
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * Set checked
     *
     * @param boolean $checked
     *
     * @return Mail
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean
     */
    public function getChecked()
    {
        return $this->checked;
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
