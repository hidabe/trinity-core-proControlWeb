<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementReward
 *
 * @ORM\Table(name="achievement_reward")
 * @ORM\Entity
 */
class AchievementReward
{
    /**
     * @var integer
     *
     * @ORM\Column(name="title_A", type="integer", nullable=false)
     */
    private $titleA = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="title_H", type="integer", nullable=false)
     */
    private $titleH = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer", nullable=false)
     */
    private $item = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sender", type="integer", nullable=false)
     */
    private $sender = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="mailTemplate", type="integer", nullable=true)
     */
    private $mailtemplate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set titleA
     *
     * @param integer $titleA
     *
     * @return AchievementReward
     */
    public function setTitleA($titleA)
    {
        $this->titleA = $titleA;

        return $this;
    }

    /**
     * Get titleA
     *
     * @return integer
     */
    public function getTitleA()
    {
        return $this->titleA;
    }

    /**
     * Set titleH
     *
     * @param integer $titleH
     *
     * @return AchievementReward
     */
    public function setTitleH($titleH)
    {
        $this->titleH = $titleH;

        return $this;
    }

    /**
     * Get titleH
     *
     * @return integer
     */
    public function getTitleH()
    {
        return $this->titleH;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return AchievementReward
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set sender
     *
     * @param integer $sender
     *
     * @return AchievementReward
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
     * Set subject
     *
     * @param string $subject
     *
     * @return AchievementReward
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
     * Set text
     *
     * @param string $text
     *
     * @return AchievementReward
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
     * Set mailtemplate
     *
     * @param integer $mailtemplate
     *
     * @return AchievementReward
     */
    public function setMailtemplate($mailtemplate)
    {
        $this->mailtemplate = $mailtemplate;

        return $this;
    }

    /**
     * Get mailtemplate
     *
     * @return integer
     */
    public function getMailtemplate()
    {
        return $this->mailtemplate;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
