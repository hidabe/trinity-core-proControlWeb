<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailItems
 *
 * @ORM\Table(name="mail_items", indexes={@ORM\Index(name="idx_receiver", columns={"receiver"}), @ORM\Index(name="idx_mail_id", columns={"mail_id"})})
 * @ORM\Entity
 */
class MailItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mail_id", type="integer", nullable=false)
     */
    private $mailId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="receiver", type="integer", nullable=false)
     */
    private $receiver = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemGuid;



    /**
     * Set mailId
     *
     * @param integer $mailId
     *
     * @return MailItems
     */
    public function setMailId($mailId)
    {
        $this->mailId = $mailId;

        return $this;
    }

    /**
     * Get mailId
     *
     * @return integer
     */
    public function getMailId()
    {
        return $this->mailId;
    }

    /**
     * Set receiver
     *
     * @param integer $receiver
     *
     * @return MailItems
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
     * Get itemGuid
     *
     * @return integer
     */
    public function getItemGuid()
    {
        return $this->itemGuid;
    }
}
