<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestOfferReward
 *
 * @ORM\Table(name="quest_offer_reward")
 * @ORM\Entity
 */
class QuestOfferReward
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Emote1", type="smallint", nullable=false)
     */
    private $emote1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Emote2", type="smallint", nullable=false)
     */
    private $emote2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Emote3", type="smallint", nullable=false)
     */
    private $emote3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Emote4", type="smallint", nullable=false)
     */
    private $emote4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay1", type="integer", nullable=false)
     */
    private $emotedelay1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay2", type="integer", nullable=false)
     */
    private $emotedelay2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay3", type="integer", nullable=false)
     */
    private $emotedelay3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay4", type="integer", nullable=false)
     */
    private $emotedelay4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RewardText", type="text", length=65535, nullable=true)
     */
    private $rewardtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=false)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set emote1
     *
     * @param integer $emote1
     *
     * @return QuestOfferReward
     */
    public function setEmote1($emote1)
    {
        $this->emote1 = $emote1;

        return $this;
    }

    /**
     * Get emote1
     *
     * @return integer
     */
    public function getEmote1()
    {
        return $this->emote1;
    }

    /**
     * Set emote2
     *
     * @param integer $emote2
     *
     * @return QuestOfferReward
     */
    public function setEmote2($emote2)
    {
        $this->emote2 = $emote2;

        return $this;
    }

    /**
     * Get emote2
     *
     * @return integer
     */
    public function getEmote2()
    {
        return $this->emote2;
    }

    /**
     * Set emote3
     *
     * @param integer $emote3
     *
     * @return QuestOfferReward
     */
    public function setEmote3($emote3)
    {
        $this->emote3 = $emote3;

        return $this;
    }

    /**
     * Get emote3
     *
     * @return integer
     */
    public function getEmote3()
    {
        return $this->emote3;
    }

    /**
     * Set emote4
     *
     * @param integer $emote4
     *
     * @return QuestOfferReward
     */
    public function setEmote4($emote4)
    {
        $this->emote4 = $emote4;

        return $this;
    }

    /**
     * Get emote4
     *
     * @return integer
     */
    public function getEmote4()
    {
        return $this->emote4;
    }

    /**
     * Set emotedelay1
     *
     * @param integer $emotedelay1
     *
     * @return QuestOfferReward
     */
    public function setEmotedelay1($emotedelay1)
    {
        $this->emotedelay1 = $emotedelay1;

        return $this;
    }

    /**
     * Get emotedelay1
     *
     * @return integer
     */
    public function getEmotedelay1()
    {
        return $this->emotedelay1;
    }

    /**
     * Set emotedelay2
     *
     * @param integer $emotedelay2
     *
     * @return QuestOfferReward
     */
    public function setEmotedelay2($emotedelay2)
    {
        $this->emotedelay2 = $emotedelay2;

        return $this;
    }

    /**
     * Get emotedelay2
     *
     * @return integer
     */
    public function getEmotedelay2()
    {
        return $this->emotedelay2;
    }

    /**
     * Set emotedelay3
     *
     * @param integer $emotedelay3
     *
     * @return QuestOfferReward
     */
    public function setEmotedelay3($emotedelay3)
    {
        $this->emotedelay3 = $emotedelay3;

        return $this;
    }

    /**
     * Get emotedelay3
     *
     * @return integer
     */
    public function getEmotedelay3()
    {
        return $this->emotedelay3;
    }

    /**
     * Set emotedelay4
     *
     * @param integer $emotedelay4
     *
     * @return QuestOfferReward
     */
    public function setEmotedelay4($emotedelay4)
    {
        $this->emotedelay4 = $emotedelay4;

        return $this;
    }

    /**
     * Get emotedelay4
     *
     * @return integer
     */
    public function getEmotedelay4()
    {
        return $this->emotedelay4;
    }

    /**
     * Set rewardtext
     *
     * @param string $rewardtext
     *
     * @return QuestOfferReward
     */
    public function setRewardtext($rewardtext)
    {
        $this->rewardtext = $rewardtext;

        return $this;
    }

    /**
     * Get rewardtext
     *
     * @return string
     */
    public function getRewardtext()
    {
        return $this->rewardtext;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return QuestOfferReward
     */
    public function setVerifiedbuild($verifiedbuild)
    {
        $this->verifiedbuild = $verifiedbuild;

        return $this;
    }

    /**
     * Get verifiedbuild
     *
     * @return integer
     */
    public function getVerifiedbuild()
    {
        return $this->verifiedbuild;
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
