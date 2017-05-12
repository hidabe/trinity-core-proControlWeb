<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestTemplateAddon
 *
 * @ORM\Table(name="quest_template_addon")
 * @ORM\Entity
 */
class QuestTemplateAddon
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="MaxLevel", type="boolean", nullable=false)
     */
    private $maxlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AllowableClasses", type="integer", nullable=false)
     */
    private $allowableclasses = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SourceSpellID", type="integer", nullable=false)
     */
    private $sourcespellid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PrevQuestID", type="integer", nullable=false)
     */
    private $prevquestid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NextQuestID", type="integer", nullable=false)
     */
    private $nextquestid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ExclusiveGroup", type="integer", nullable=false)
     */
    private $exclusivegroup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardMailTemplateID", type="integer", nullable=false)
     */
    private $rewardmailtemplateid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardMailDelay", type="integer", nullable=false)
     */
    private $rewardmaildelay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredSkillID", type="smallint", nullable=false)
     */
    private $requiredskillid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredSkillPoints", type="smallint", nullable=false)
     */
    private $requiredskillpoints = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredMinRepFaction", type="smallint", nullable=false)
     */
    private $requiredminrepfaction = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredMaxRepFaction", type="smallint", nullable=false)
     */
    private $requiredmaxrepfaction = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredMinRepValue", type="integer", nullable=false)
     */
    private $requiredminrepvalue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredMaxRepValue", type="integer", nullable=false)
     */
    private $requiredmaxrepvalue = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ProvidedItemCount", type="boolean", nullable=false)
     */
    private $provideditemcount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="SpecialFlags", type="boolean", nullable=false)
     */
    private $specialflags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set maxlevel
     *
     * @param boolean $maxlevel
     *
     * @return QuestTemplateAddon
     */
    public function setMaxlevel($maxlevel)
    {
        $this->maxlevel = $maxlevel;

        return $this;
    }

    /**
     * Get maxlevel
     *
     * @return boolean
     */
    public function getMaxlevel()
    {
        return $this->maxlevel;
    }

    /**
     * Set allowableclasses
     *
     * @param integer $allowableclasses
     *
     * @return QuestTemplateAddon
     */
    public function setAllowableclasses($allowableclasses)
    {
        $this->allowableclasses = $allowableclasses;

        return $this;
    }

    /**
     * Get allowableclasses
     *
     * @return integer
     */
    public function getAllowableclasses()
    {
        return $this->allowableclasses;
    }

    /**
     * Set sourcespellid
     *
     * @param integer $sourcespellid
     *
     * @return QuestTemplateAddon
     */
    public function setSourcespellid($sourcespellid)
    {
        $this->sourcespellid = $sourcespellid;

        return $this;
    }

    /**
     * Get sourcespellid
     *
     * @return integer
     */
    public function getSourcespellid()
    {
        return $this->sourcespellid;
    }

    /**
     * Set prevquestid
     *
     * @param integer $prevquestid
     *
     * @return QuestTemplateAddon
     */
    public function setPrevquestid($prevquestid)
    {
        $this->prevquestid = $prevquestid;

        return $this;
    }

    /**
     * Get prevquestid
     *
     * @return integer
     */
    public function getPrevquestid()
    {
        return $this->prevquestid;
    }

    /**
     * Set nextquestid
     *
     * @param integer $nextquestid
     *
     * @return QuestTemplateAddon
     */
    public function setNextquestid($nextquestid)
    {
        $this->nextquestid = $nextquestid;

        return $this;
    }

    /**
     * Get nextquestid
     *
     * @return integer
     */
    public function getNextquestid()
    {
        return $this->nextquestid;
    }

    /**
     * Set exclusivegroup
     *
     * @param integer $exclusivegroup
     *
     * @return QuestTemplateAddon
     */
    public function setExclusivegroup($exclusivegroup)
    {
        $this->exclusivegroup = $exclusivegroup;

        return $this;
    }

    /**
     * Get exclusivegroup
     *
     * @return integer
     */
    public function getExclusivegroup()
    {
        return $this->exclusivegroup;
    }

    /**
     * Set rewardmailtemplateid
     *
     * @param integer $rewardmailtemplateid
     *
     * @return QuestTemplateAddon
     */
    public function setRewardmailtemplateid($rewardmailtemplateid)
    {
        $this->rewardmailtemplateid = $rewardmailtemplateid;

        return $this;
    }

    /**
     * Get rewardmailtemplateid
     *
     * @return integer
     */
    public function getRewardmailtemplateid()
    {
        return $this->rewardmailtemplateid;
    }

    /**
     * Set rewardmaildelay
     *
     * @param integer $rewardmaildelay
     *
     * @return QuestTemplateAddon
     */
    public function setRewardmaildelay($rewardmaildelay)
    {
        $this->rewardmaildelay = $rewardmaildelay;

        return $this;
    }

    /**
     * Get rewardmaildelay
     *
     * @return integer
     */
    public function getRewardmaildelay()
    {
        return $this->rewardmaildelay;
    }

    /**
     * Set requiredskillid
     *
     * @param integer $requiredskillid
     *
     * @return QuestTemplateAddon
     */
    public function setRequiredskillid($requiredskillid)
    {
        $this->requiredskillid = $requiredskillid;

        return $this;
    }

    /**
     * Get requiredskillid
     *
     * @return integer
     */
    public function getRequiredskillid()
    {
        return $this->requiredskillid;
    }

    /**
     * Set requiredskillpoints
     *
     * @param integer $requiredskillpoints
     *
     * @return QuestTemplateAddon
     */
    public function setRequiredskillpoints($requiredskillpoints)
    {
        $this->requiredskillpoints = $requiredskillpoints;

        return $this;
    }

    /**
     * Get requiredskillpoints
     *
     * @return integer
     */
    public function getRequiredskillpoints()
    {
        return $this->requiredskillpoints;
    }

    /**
     * Set requiredminrepfaction
     *
     * @param integer $requiredminrepfaction
     *
     * @return QuestTemplateAddon
     */
    public function setRequiredminrepfaction($requiredminrepfaction)
    {
        $this->requiredminrepfaction = $requiredminrepfaction;

        return $this;
    }

    /**
     * Get requiredminrepfaction
     *
     * @return integer
     */
    public function getRequiredminrepfaction()
    {
        return $this->requiredminrepfaction;
    }

    /**
     * Set requiredmaxrepfaction
     *
     * @param integer $requiredmaxrepfaction
     *
     * @return QuestTemplateAddon
     */
    public function setRequiredmaxrepfaction($requiredmaxrepfaction)
    {
        $this->requiredmaxrepfaction = $requiredmaxrepfaction;

        return $this;
    }

    /**
     * Get requiredmaxrepfaction
     *
     * @return integer
     */
    public function getRequiredmaxrepfaction()
    {
        return $this->requiredmaxrepfaction;
    }

    /**
     * Set requiredminrepvalue
     *
     * @param integer $requiredminrepvalue
     *
     * @return QuestTemplateAddon
     */
    public function setRequiredminrepvalue($requiredminrepvalue)
    {
        $this->requiredminrepvalue = $requiredminrepvalue;

        return $this;
    }

    /**
     * Get requiredminrepvalue
     *
     * @return integer
     */
    public function getRequiredminrepvalue()
    {
        return $this->requiredminrepvalue;
    }

    /**
     * Set requiredmaxrepvalue
     *
     * @param integer $requiredmaxrepvalue
     *
     * @return QuestTemplateAddon
     */
    public function setRequiredmaxrepvalue($requiredmaxrepvalue)
    {
        $this->requiredmaxrepvalue = $requiredmaxrepvalue;

        return $this;
    }

    /**
     * Get requiredmaxrepvalue
     *
     * @return integer
     */
    public function getRequiredmaxrepvalue()
    {
        return $this->requiredmaxrepvalue;
    }

    /**
     * Set provideditemcount
     *
     * @param boolean $provideditemcount
     *
     * @return QuestTemplateAddon
     */
    public function setProvideditemcount($provideditemcount)
    {
        $this->provideditemcount = $provideditemcount;

        return $this;
    }

    /**
     * Get provideditemcount
     *
     * @return boolean
     */
    public function getProvideditemcount()
    {
        return $this->provideditemcount;
    }

    /**
     * Set specialflags
     *
     * @param boolean $specialflags
     *
     * @return QuestTemplateAddon
     */
    public function setSpecialflags($specialflags)
    {
        $this->specialflags = $specialflags;

        return $this;
    }

    /**
     * Get specialflags
     *
     * @return boolean
     */
    public function getSpecialflags()
    {
        return $this->specialflags;
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
