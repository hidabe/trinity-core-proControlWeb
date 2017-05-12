<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestMailSender
 *
 * @ORM\Table(name="quest_mail_sender")
 * @ORM\Entity
 */
class QuestMailSender
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RewardMailSenderEntry", type="integer", nullable=false)
     */
    private $rewardmailsenderentry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="QuestId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questid;



    /**
     * Set rewardmailsenderentry
     *
     * @param integer $rewardmailsenderentry
     *
     * @return QuestMailSender
     */
    public function setRewardmailsenderentry($rewardmailsenderentry)
    {
        $this->rewardmailsenderentry = $rewardmailsenderentry;

        return $this;
    }

    /**
     * Get rewardmailsenderentry
     *
     * @return integer
     */
    public function getRewardmailsenderentry()
    {
        return $this->rewardmailsenderentry;
    }

    /**
     * Get questid
     *
     * @return integer
     */
    public function getQuestid()
    {
        return $this->questid;
    }
}
