<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailLevelReward
 *
 * @ORM\Table(name="mail_level_reward")
 * @ORM\Entity
 */
class MailLevelReward
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mailTemplateId", type="integer", nullable=false)
     */
    private $mailtemplateid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="senderEntry", type="integer", nullable=false)
     */
    private $senderentry = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="raceMask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $racemask;



    /**
     * Set mailtemplateid
     *
     * @param integer $mailtemplateid
     *
     * @return MailLevelReward
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
     * Set senderentry
     *
     * @param integer $senderentry
     *
     * @return MailLevelReward
     */
    public function setSenderentry($senderentry)
    {
        $this->senderentry = $senderentry;

        return $this;
    }

    /**
     * Get senderentry
     *
     * @return integer
     */
    public function getSenderentry()
    {
        return $this->senderentry;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return MailLevelReward
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set racemask
     *
     * @param integer $racemask
     *
     * @return MailLevelReward
     */
    public function setRacemask($racemask)
    {
        $this->racemask = $racemask;

        return $this;
    }

    /**
     * Get racemask
     *
     * @return integer
     */
    public function getRacemask()
    {
        return $this->racemask;
    }
}
