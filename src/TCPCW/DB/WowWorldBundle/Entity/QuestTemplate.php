<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestTemplate
 *
 * @ORM\Table(name="quest_template")
 * @ORM\Entity
 */
class QuestTemplate
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="QuestType", type="boolean", nullable=false)
     */
    private $questtype = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="QuestLevel", type="smallint", nullable=false)
     */
    private $questlevel = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MinLevel", type="boolean", nullable=false)
     */
    private $minlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="QuestSortID", type="smallint", nullable=false)
     */
    private $questsortid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="QuestInfoID", type="smallint", nullable=false)
     */
    private $questinfoid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="SuggestedGroupNum", type="boolean", nullable=false)
     */
    private $suggestedgroupnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredFactionId1", type="smallint", nullable=false)
     */
    private $requiredfactionid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredFactionId2", type="smallint", nullable=false)
     */
    private $requiredfactionid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredFactionValue1", type="integer", nullable=false)
     */
    private $requiredfactionvalue1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredFactionValue2", type="integer", nullable=false)
     */
    private $requiredfactionvalue2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardNextQuest", type="integer", nullable=false)
     */
    private $rewardnextquest = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RewardXPDifficulty", type="boolean", nullable=false)
     */
    private $rewardxpdifficulty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardMoney", type="integer", nullable=false)
     */
    private $rewardmoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardBonusMoney", type="integer", nullable=false)
     */
    private $rewardbonusmoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardDisplaySpell", type="integer", nullable=false)
     */
    private $rewarddisplayspell = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardSpell", type="integer", nullable=false)
     */
    private $rewardspell = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardHonor", type="integer", nullable=false)
     */
    private $rewardhonor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="RewardKillHonor", type="float", precision=10, scale=0, nullable=false)
     */
    private $rewardkillhonor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="StartItem", type="integer", nullable=false)
     */
    private $startitem = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RequiredPlayerKills", type="boolean", nullable=false)
     */
    private $requiredplayerkills = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardItem1", type="integer", nullable=false)
     */
    private $rewarditem1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardAmount1", type="smallint", nullable=false)
     */
    private $rewardamount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardItem2", type="integer", nullable=false)
     */
    private $rewarditem2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardAmount2", type="smallint", nullable=false)
     */
    private $rewardamount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardItem3", type="integer", nullable=false)
     */
    private $rewarditem3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardAmount3", type="smallint", nullable=false)
     */
    private $rewardamount3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardItem4", type="integer", nullable=false)
     */
    private $rewarditem4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardAmount4", type="smallint", nullable=false)
     */
    private $rewardamount4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDrop1", type="integer", nullable=false)
     */
    private $itemdrop1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDropQuantity1", type="smallint", nullable=false)
     */
    private $itemdropquantity1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDrop2", type="integer", nullable=false)
     */
    private $itemdrop2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDropQuantity2", type="smallint", nullable=false)
     */
    private $itemdropquantity2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDrop3", type="integer", nullable=false)
     */
    private $itemdrop3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDropQuantity3", type="smallint", nullable=false)
     */
    private $itemdropquantity3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDrop4", type="integer", nullable=false)
     */
    private $itemdrop4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemDropQuantity4", type="smallint", nullable=false)
     */
    private $itemdropquantity4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemID1", type="integer", nullable=false)
     */
    private $rewardchoiceitemid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemQuantity1", type="smallint", nullable=false)
     */
    private $rewardchoiceitemquantity1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemID2", type="integer", nullable=false)
     */
    private $rewardchoiceitemid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemQuantity2", type="smallint", nullable=false)
     */
    private $rewardchoiceitemquantity2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemID3", type="integer", nullable=false)
     */
    private $rewardchoiceitemid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemQuantity3", type="smallint", nullable=false)
     */
    private $rewardchoiceitemquantity3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemID4", type="integer", nullable=false)
     */
    private $rewardchoiceitemid4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemQuantity4", type="smallint", nullable=false)
     */
    private $rewardchoiceitemquantity4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemID5", type="integer", nullable=false)
     */
    private $rewardchoiceitemid5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemQuantity5", type="smallint", nullable=false)
     */
    private $rewardchoiceitemquantity5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemID6", type="integer", nullable=false)
     */
    private $rewardchoiceitemid6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardChoiceItemQuantity6", type="smallint", nullable=false)
     */
    private $rewardchoiceitemquantity6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="POIContinent", type="smallint", nullable=false)
     */
    private $poicontinent = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="POIx", type="float", precision=10, scale=0, nullable=false)
     */
    private $poix = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="POIy", type="float", precision=10, scale=0, nullable=false)
     */
    private $poiy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="POIPriority", type="integer", nullable=false)
     */
    private $poipriority = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RewardTitle", type="boolean", nullable=false)
     */
    private $rewardtitle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RewardTalents", type="boolean", nullable=false)
     */
    private $rewardtalents = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardArenaPoints", type="smallint", nullable=false)
     */
    private $rewardarenapoints = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionID1", type="smallint", nullable=false)
     */
    private $rewardfactionid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionValue1", type="integer", nullable=false)
     */
    private $rewardfactionvalue1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionOverride1", type="integer", nullable=false)
     */
    private $rewardfactionoverride1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionID2", type="smallint", nullable=false)
     */
    private $rewardfactionid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionValue2", type="integer", nullable=false)
     */
    private $rewardfactionvalue2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionOverride2", type="integer", nullable=false)
     */
    private $rewardfactionoverride2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionID3", type="smallint", nullable=false)
     */
    private $rewardfactionid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionValue3", type="integer", nullable=false)
     */
    private $rewardfactionvalue3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionOverride3", type="integer", nullable=false)
     */
    private $rewardfactionoverride3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionID4", type="smallint", nullable=false)
     */
    private $rewardfactionid4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionValue4", type="integer", nullable=false)
     */
    private $rewardfactionvalue4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionOverride4", type="integer", nullable=false)
     */
    private $rewardfactionoverride4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionID5", type="smallint", nullable=false)
     */
    private $rewardfactionid5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionValue5", type="integer", nullable=false)
     */
    private $rewardfactionvalue5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewardFactionOverride5", type="integer", nullable=false)
     */
    private $rewardfactionoverride5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TimeAllowed", type="integer", nullable=false)
     */
    private $timeallowed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AllowableRaces", type="smallint", nullable=false)
     */
    private $allowableraces = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LogTitle", type="text", length=65535, nullable=true)
     */
    private $logtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="LogDescription", type="text", length=65535, nullable=true)
     */
    private $logdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="QuestDescription", type="text", length=65535, nullable=true)
     */
    private $questdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="AreaDescription", type="text", length=65535, nullable=true)
     */
    private $areadescription;

    /**
     * @var string
     *
     * @ORM\Column(name="QuestCompletionLog", type="text", length=65535, nullable=true)
     */
    private $questcompletionlog;

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGo1", type="integer", nullable=false)
     */
    private $requirednpcorgo1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGo2", type="integer", nullable=false)
     */
    private $requirednpcorgo2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGo3", type="integer", nullable=false)
     */
    private $requirednpcorgo3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGo4", type="integer", nullable=false)
     */
    private $requirednpcorgo4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGoCount1", type="smallint", nullable=false)
     */
    private $requirednpcorgocount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGoCount2", type="smallint", nullable=false)
     */
    private $requirednpcorgocount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGoCount3", type="smallint", nullable=false)
     */
    private $requirednpcorgocount3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredNpcOrGoCount4", type="smallint", nullable=false)
     */
    private $requirednpcorgocount4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemId1", type="integer", nullable=false)
     */
    private $requireditemid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemId2", type="integer", nullable=false)
     */
    private $requireditemid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemId3", type="integer", nullable=false)
     */
    private $requireditemid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemId4", type="integer", nullable=false)
     */
    private $requireditemid4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemId5", type="integer", nullable=false)
     */
    private $requireditemid5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemId6", type="integer", nullable=false)
     */
    private $requireditemid6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemCount1", type="smallint", nullable=false)
     */
    private $requireditemcount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemCount2", type="smallint", nullable=false)
     */
    private $requireditemcount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemCount3", type="smallint", nullable=false)
     */
    private $requireditemcount3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemCount4", type="smallint", nullable=false)
     */
    private $requireditemcount4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemCount5", type="smallint", nullable=false)
     */
    private $requireditemcount5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredItemCount6", type="smallint", nullable=false)
     */
    private $requireditemcount6 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Unknown0", type="boolean", nullable=false)
     */
    private $unknown0 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText1", type="text", length=65535, nullable=true)
     */
    private $objectivetext1;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText2", type="text", length=65535, nullable=true)
     */
    private $objectivetext2;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText3", type="text", length=65535, nullable=true)
     */
    private $objectivetext3;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText4", type="text", length=65535, nullable=true)
     */
    private $objectivetext4;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
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
     * Set questtype
     *
     * @param boolean $questtype
     *
     * @return QuestTemplate
     */
    public function setQuesttype($questtype)
    {
        $this->questtype = $questtype;

        return $this;
    }

    /**
     * Get questtype
     *
     * @return boolean
     */
    public function getQuesttype()
    {
        return $this->questtype;
    }

    /**
     * Set questlevel
     *
     * @param integer $questlevel
     *
     * @return QuestTemplate
     */
    public function setQuestlevel($questlevel)
    {
        $this->questlevel = $questlevel;

        return $this;
    }

    /**
     * Get questlevel
     *
     * @return integer
     */
    public function getQuestlevel()
    {
        return $this->questlevel;
    }

    /**
     * Set minlevel
     *
     * @param boolean $minlevel
     *
     * @return QuestTemplate
     */
    public function setMinlevel($minlevel)
    {
        $this->minlevel = $minlevel;

        return $this;
    }

    /**
     * Get minlevel
     *
     * @return boolean
     */
    public function getMinlevel()
    {
        return $this->minlevel;
    }

    /**
     * Set questsortid
     *
     * @param integer $questsortid
     *
     * @return QuestTemplate
     */
    public function setQuestsortid($questsortid)
    {
        $this->questsortid = $questsortid;

        return $this;
    }

    /**
     * Get questsortid
     *
     * @return integer
     */
    public function getQuestsortid()
    {
        return $this->questsortid;
    }

    /**
     * Set questinfoid
     *
     * @param integer $questinfoid
     *
     * @return QuestTemplate
     */
    public function setQuestinfoid($questinfoid)
    {
        $this->questinfoid = $questinfoid;

        return $this;
    }

    /**
     * Get questinfoid
     *
     * @return integer
     */
    public function getQuestinfoid()
    {
        return $this->questinfoid;
    }

    /**
     * Set suggestedgroupnum
     *
     * @param boolean $suggestedgroupnum
     *
     * @return QuestTemplate
     */
    public function setSuggestedgroupnum($suggestedgroupnum)
    {
        $this->suggestedgroupnum = $suggestedgroupnum;

        return $this;
    }

    /**
     * Get suggestedgroupnum
     *
     * @return boolean
     */
    public function getSuggestedgroupnum()
    {
        return $this->suggestedgroupnum;
    }

    /**
     * Set requiredfactionid1
     *
     * @param integer $requiredfactionid1
     *
     * @return QuestTemplate
     */
    public function setRequiredfactionid1($requiredfactionid1)
    {
        $this->requiredfactionid1 = $requiredfactionid1;

        return $this;
    }

    /**
     * Get requiredfactionid1
     *
     * @return integer
     */
    public function getRequiredfactionid1()
    {
        return $this->requiredfactionid1;
    }

    /**
     * Set requiredfactionid2
     *
     * @param integer $requiredfactionid2
     *
     * @return QuestTemplate
     */
    public function setRequiredfactionid2($requiredfactionid2)
    {
        $this->requiredfactionid2 = $requiredfactionid2;

        return $this;
    }

    /**
     * Get requiredfactionid2
     *
     * @return integer
     */
    public function getRequiredfactionid2()
    {
        return $this->requiredfactionid2;
    }

    /**
     * Set requiredfactionvalue1
     *
     * @param integer $requiredfactionvalue1
     *
     * @return QuestTemplate
     */
    public function setRequiredfactionvalue1($requiredfactionvalue1)
    {
        $this->requiredfactionvalue1 = $requiredfactionvalue1;

        return $this;
    }

    /**
     * Get requiredfactionvalue1
     *
     * @return integer
     */
    public function getRequiredfactionvalue1()
    {
        return $this->requiredfactionvalue1;
    }

    /**
     * Set requiredfactionvalue2
     *
     * @param integer $requiredfactionvalue2
     *
     * @return QuestTemplate
     */
    public function setRequiredfactionvalue2($requiredfactionvalue2)
    {
        $this->requiredfactionvalue2 = $requiredfactionvalue2;

        return $this;
    }

    /**
     * Get requiredfactionvalue2
     *
     * @return integer
     */
    public function getRequiredfactionvalue2()
    {
        return $this->requiredfactionvalue2;
    }

    /**
     * Set rewardnextquest
     *
     * @param integer $rewardnextquest
     *
     * @return QuestTemplate
     */
    public function setRewardnextquest($rewardnextquest)
    {
        $this->rewardnextquest = $rewardnextquest;

        return $this;
    }

    /**
     * Get rewardnextquest
     *
     * @return integer
     */
    public function getRewardnextquest()
    {
        return $this->rewardnextquest;
    }

    /**
     * Set rewardxpdifficulty
     *
     * @param boolean $rewardxpdifficulty
     *
     * @return QuestTemplate
     */
    public function setRewardxpdifficulty($rewardxpdifficulty)
    {
        $this->rewardxpdifficulty = $rewardxpdifficulty;

        return $this;
    }

    /**
     * Get rewardxpdifficulty
     *
     * @return boolean
     */
    public function getRewardxpdifficulty()
    {
        return $this->rewardxpdifficulty;
    }

    /**
     * Set rewardmoney
     *
     * @param integer $rewardmoney
     *
     * @return QuestTemplate
     */
    public function setRewardmoney($rewardmoney)
    {
        $this->rewardmoney = $rewardmoney;

        return $this;
    }

    /**
     * Get rewardmoney
     *
     * @return integer
     */
    public function getRewardmoney()
    {
        return $this->rewardmoney;
    }

    /**
     * Set rewardbonusmoney
     *
     * @param integer $rewardbonusmoney
     *
     * @return QuestTemplate
     */
    public function setRewardbonusmoney($rewardbonusmoney)
    {
        $this->rewardbonusmoney = $rewardbonusmoney;

        return $this;
    }

    /**
     * Get rewardbonusmoney
     *
     * @return integer
     */
    public function getRewardbonusmoney()
    {
        return $this->rewardbonusmoney;
    }

    /**
     * Set rewarddisplayspell
     *
     * @param integer $rewarddisplayspell
     *
     * @return QuestTemplate
     */
    public function setRewarddisplayspell($rewarddisplayspell)
    {
        $this->rewarddisplayspell = $rewarddisplayspell;

        return $this;
    }

    /**
     * Get rewarddisplayspell
     *
     * @return integer
     */
    public function getRewarddisplayspell()
    {
        return $this->rewarddisplayspell;
    }

    /**
     * Set rewardspell
     *
     * @param integer $rewardspell
     *
     * @return QuestTemplate
     */
    public function setRewardspell($rewardspell)
    {
        $this->rewardspell = $rewardspell;

        return $this;
    }

    /**
     * Get rewardspell
     *
     * @return integer
     */
    public function getRewardspell()
    {
        return $this->rewardspell;
    }

    /**
     * Set rewardhonor
     *
     * @param integer $rewardhonor
     *
     * @return QuestTemplate
     */
    public function setRewardhonor($rewardhonor)
    {
        $this->rewardhonor = $rewardhonor;

        return $this;
    }

    /**
     * Get rewardhonor
     *
     * @return integer
     */
    public function getRewardhonor()
    {
        return $this->rewardhonor;
    }

    /**
     * Set rewardkillhonor
     *
     * @param float $rewardkillhonor
     *
     * @return QuestTemplate
     */
    public function setRewardkillhonor($rewardkillhonor)
    {
        $this->rewardkillhonor = $rewardkillhonor;

        return $this;
    }

    /**
     * Get rewardkillhonor
     *
     * @return float
     */
    public function getRewardkillhonor()
    {
        return $this->rewardkillhonor;
    }

    /**
     * Set startitem
     *
     * @param integer $startitem
     *
     * @return QuestTemplate
     */
    public function setStartitem($startitem)
    {
        $this->startitem = $startitem;

        return $this;
    }

    /**
     * Get startitem
     *
     * @return integer
     */
    public function getStartitem()
    {
        return $this->startitem;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return QuestTemplate
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set requiredplayerkills
     *
     * @param boolean $requiredplayerkills
     *
     * @return QuestTemplate
     */
    public function setRequiredplayerkills($requiredplayerkills)
    {
        $this->requiredplayerkills = $requiredplayerkills;

        return $this;
    }

    /**
     * Get requiredplayerkills
     *
     * @return boolean
     */
    public function getRequiredplayerkills()
    {
        return $this->requiredplayerkills;
    }

    /**
     * Set rewarditem1
     *
     * @param integer $rewarditem1
     *
     * @return QuestTemplate
     */
    public function setRewarditem1($rewarditem1)
    {
        $this->rewarditem1 = $rewarditem1;

        return $this;
    }

    /**
     * Get rewarditem1
     *
     * @return integer
     */
    public function getRewarditem1()
    {
        return $this->rewarditem1;
    }

    /**
     * Set rewardamount1
     *
     * @param integer $rewardamount1
     *
     * @return QuestTemplate
     */
    public function setRewardamount1($rewardamount1)
    {
        $this->rewardamount1 = $rewardamount1;

        return $this;
    }

    /**
     * Get rewardamount1
     *
     * @return integer
     */
    public function getRewardamount1()
    {
        return $this->rewardamount1;
    }

    /**
     * Set rewarditem2
     *
     * @param integer $rewarditem2
     *
     * @return QuestTemplate
     */
    public function setRewarditem2($rewarditem2)
    {
        $this->rewarditem2 = $rewarditem2;

        return $this;
    }

    /**
     * Get rewarditem2
     *
     * @return integer
     */
    public function getRewarditem2()
    {
        return $this->rewarditem2;
    }

    /**
     * Set rewardamount2
     *
     * @param integer $rewardamount2
     *
     * @return QuestTemplate
     */
    public function setRewardamount2($rewardamount2)
    {
        $this->rewardamount2 = $rewardamount2;

        return $this;
    }

    /**
     * Get rewardamount2
     *
     * @return integer
     */
    public function getRewardamount2()
    {
        return $this->rewardamount2;
    }

    /**
     * Set rewarditem3
     *
     * @param integer $rewarditem3
     *
     * @return QuestTemplate
     */
    public function setRewarditem3($rewarditem3)
    {
        $this->rewarditem3 = $rewarditem3;

        return $this;
    }

    /**
     * Get rewarditem3
     *
     * @return integer
     */
    public function getRewarditem3()
    {
        return $this->rewarditem3;
    }

    /**
     * Set rewardamount3
     *
     * @param integer $rewardamount3
     *
     * @return QuestTemplate
     */
    public function setRewardamount3($rewardamount3)
    {
        $this->rewardamount3 = $rewardamount3;

        return $this;
    }

    /**
     * Get rewardamount3
     *
     * @return integer
     */
    public function getRewardamount3()
    {
        return $this->rewardamount3;
    }

    /**
     * Set rewarditem4
     *
     * @param integer $rewarditem4
     *
     * @return QuestTemplate
     */
    public function setRewarditem4($rewarditem4)
    {
        $this->rewarditem4 = $rewarditem4;

        return $this;
    }

    /**
     * Get rewarditem4
     *
     * @return integer
     */
    public function getRewarditem4()
    {
        return $this->rewarditem4;
    }

    /**
     * Set rewardamount4
     *
     * @param integer $rewardamount4
     *
     * @return QuestTemplate
     */
    public function setRewardamount4($rewardamount4)
    {
        $this->rewardamount4 = $rewardamount4;

        return $this;
    }

    /**
     * Get rewardamount4
     *
     * @return integer
     */
    public function getRewardamount4()
    {
        return $this->rewardamount4;
    }

    /**
     * Set itemdrop1
     *
     * @param integer $itemdrop1
     *
     * @return QuestTemplate
     */
    public function setItemdrop1($itemdrop1)
    {
        $this->itemdrop1 = $itemdrop1;

        return $this;
    }

    /**
     * Get itemdrop1
     *
     * @return integer
     */
    public function getItemdrop1()
    {
        return $this->itemdrop1;
    }

    /**
     * Set itemdropquantity1
     *
     * @param integer $itemdropquantity1
     *
     * @return QuestTemplate
     */
    public function setItemdropquantity1($itemdropquantity1)
    {
        $this->itemdropquantity1 = $itemdropquantity1;

        return $this;
    }

    /**
     * Get itemdropquantity1
     *
     * @return integer
     */
    public function getItemdropquantity1()
    {
        return $this->itemdropquantity1;
    }

    /**
     * Set itemdrop2
     *
     * @param integer $itemdrop2
     *
     * @return QuestTemplate
     */
    public function setItemdrop2($itemdrop2)
    {
        $this->itemdrop2 = $itemdrop2;

        return $this;
    }

    /**
     * Get itemdrop2
     *
     * @return integer
     */
    public function getItemdrop2()
    {
        return $this->itemdrop2;
    }

    /**
     * Set itemdropquantity2
     *
     * @param integer $itemdropquantity2
     *
     * @return QuestTemplate
     */
    public function setItemdropquantity2($itemdropquantity2)
    {
        $this->itemdropquantity2 = $itemdropquantity2;

        return $this;
    }

    /**
     * Get itemdropquantity2
     *
     * @return integer
     */
    public function getItemdropquantity2()
    {
        return $this->itemdropquantity2;
    }

    /**
     * Set itemdrop3
     *
     * @param integer $itemdrop3
     *
     * @return QuestTemplate
     */
    public function setItemdrop3($itemdrop3)
    {
        $this->itemdrop3 = $itemdrop3;

        return $this;
    }

    /**
     * Get itemdrop3
     *
     * @return integer
     */
    public function getItemdrop3()
    {
        return $this->itemdrop3;
    }

    /**
     * Set itemdropquantity3
     *
     * @param integer $itemdropquantity3
     *
     * @return QuestTemplate
     */
    public function setItemdropquantity3($itemdropquantity3)
    {
        $this->itemdropquantity3 = $itemdropquantity3;

        return $this;
    }

    /**
     * Get itemdropquantity3
     *
     * @return integer
     */
    public function getItemdropquantity3()
    {
        return $this->itemdropquantity3;
    }

    /**
     * Set itemdrop4
     *
     * @param integer $itemdrop4
     *
     * @return QuestTemplate
     */
    public function setItemdrop4($itemdrop4)
    {
        $this->itemdrop4 = $itemdrop4;

        return $this;
    }

    /**
     * Get itemdrop4
     *
     * @return integer
     */
    public function getItemdrop4()
    {
        return $this->itemdrop4;
    }

    /**
     * Set itemdropquantity4
     *
     * @param integer $itemdropquantity4
     *
     * @return QuestTemplate
     */
    public function setItemdropquantity4($itemdropquantity4)
    {
        $this->itemdropquantity4 = $itemdropquantity4;

        return $this;
    }

    /**
     * Get itemdropquantity4
     *
     * @return integer
     */
    public function getItemdropquantity4()
    {
        return $this->itemdropquantity4;
    }

    /**
     * Set rewardchoiceitemid1
     *
     * @param integer $rewardchoiceitemid1
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemid1($rewardchoiceitemid1)
    {
        $this->rewardchoiceitemid1 = $rewardchoiceitemid1;

        return $this;
    }

    /**
     * Get rewardchoiceitemid1
     *
     * @return integer
     */
    public function getRewardchoiceitemid1()
    {
        return $this->rewardchoiceitemid1;
    }

    /**
     * Set rewardchoiceitemquantity1
     *
     * @param integer $rewardchoiceitemquantity1
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemquantity1($rewardchoiceitemquantity1)
    {
        $this->rewardchoiceitemquantity1 = $rewardchoiceitemquantity1;

        return $this;
    }

    /**
     * Get rewardchoiceitemquantity1
     *
     * @return integer
     */
    public function getRewardchoiceitemquantity1()
    {
        return $this->rewardchoiceitemquantity1;
    }

    /**
     * Set rewardchoiceitemid2
     *
     * @param integer $rewardchoiceitemid2
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemid2($rewardchoiceitemid2)
    {
        $this->rewardchoiceitemid2 = $rewardchoiceitemid2;

        return $this;
    }

    /**
     * Get rewardchoiceitemid2
     *
     * @return integer
     */
    public function getRewardchoiceitemid2()
    {
        return $this->rewardchoiceitemid2;
    }

    /**
     * Set rewardchoiceitemquantity2
     *
     * @param integer $rewardchoiceitemquantity2
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemquantity2($rewardchoiceitemquantity2)
    {
        $this->rewardchoiceitemquantity2 = $rewardchoiceitemquantity2;

        return $this;
    }

    /**
     * Get rewardchoiceitemquantity2
     *
     * @return integer
     */
    public function getRewardchoiceitemquantity2()
    {
        return $this->rewardchoiceitemquantity2;
    }

    /**
     * Set rewardchoiceitemid3
     *
     * @param integer $rewardchoiceitemid3
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemid3($rewardchoiceitemid3)
    {
        $this->rewardchoiceitemid3 = $rewardchoiceitemid3;

        return $this;
    }

    /**
     * Get rewardchoiceitemid3
     *
     * @return integer
     */
    public function getRewardchoiceitemid3()
    {
        return $this->rewardchoiceitemid3;
    }

    /**
     * Set rewardchoiceitemquantity3
     *
     * @param integer $rewardchoiceitemquantity3
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemquantity3($rewardchoiceitemquantity3)
    {
        $this->rewardchoiceitemquantity3 = $rewardchoiceitemquantity3;

        return $this;
    }

    /**
     * Get rewardchoiceitemquantity3
     *
     * @return integer
     */
    public function getRewardchoiceitemquantity3()
    {
        return $this->rewardchoiceitemquantity3;
    }

    /**
     * Set rewardchoiceitemid4
     *
     * @param integer $rewardchoiceitemid4
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemid4($rewardchoiceitemid4)
    {
        $this->rewardchoiceitemid4 = $rewardchoiceitemid4;

        return $this;
    }

    /**
     * Get rewardchoiceitemid4
     *
     * @return integer
     */
    public function getRewardchoiceitemid4()
    {
        return $this->rewardchoiceitemid4;
    }

    /**
     * Set rewardchoiceitemquantity4
     *
     * @param integer $rewardchoiceitemquantity4
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemquantity4($rewardchoiceitemquantity4)
    {
        $this->rewardchoiceitemquantity4 = $rewardchoiceitemquantity4;

        return $this;
    }

    /**
     * Get rewardchoiceitemquantity4
     *
     * @return integer
     */
    public function getRewardchoiceitemquantity4()
    {
        return $this->rewardchoiceitemquantity4;
    }

    /**
     * Set rewardchoiceitemid5
     *
     * @param integer $rewardchoiceitemid5
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemid5($rewardchoiceitemid5)
    {
        $this->rewardchoiceitemid5 = $rewardchoiceitemid5;

        return $this;
    }

    /**
     * Get rewardchoiceitemid5
     *
     * @return integer
     */
    public function getRewardchoiceitemid5()
    {
        return $this->rewardchoiceitemid5;
    }

    /**
     * Set rewardchoiceitemquantity5
     *
     * @param integer $rewardchoiceitemquantity5
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemquantity5($rewardchoiceitemquantity5)
    {
        $this->rewardchoiceitemquantity5 = $rewardchoiceitemquantity5;

        return $this;
    }

    /**
     * Get rewardchoiceitemquantity5
     *
     * @return integer
     */
    public function getRewardchoiceitemquantity5()
    {
        return $this->rewardchoiceitemquantity5;
    }

    /**
     * Set rewardchoiceitemid6
     *
     * @param integer $rewardchoiceitemid6
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemid6($rewardchoiceitemid6)
    {
        $this->rewardchoiceitemid6 = $rewardchoiceitemid6;

        return $this;
    }

    /**
     * Get rewardchoiceitemid6
     *
     * @return integer
     */
    public function getRewardchoiceitemid6()
    {
        return $this->rewardchoiceitemid6;
    }

    /**
     * Set rewardchoiceitemquantity6
     *
     * @param integer $rewardchoiceitemquantity6
     *
     * @return QuestTemplate
     */
    public function setRewardchoiceitemquantity6($rewardchoiceitemquantity6)
    {
        $this->rewardchoiceitemquantity6 = $rewardchoiceitemquantity6;

        return $this;
    }

    /**
     * Get rewardchoiceitemquantity6
     *
     * @return integer
     */
    public function getRewardchoiceitemquantity6()
    {
        return $this->rewardchoiceitemquantity6;
    }

    /**
     * Set poicontinent
     *
     * @param integer $poicontinent
     *
     * @return QuestTemplate
     */
    public function setPoicontinent($poicontinent)
    {
        $this->poicontinent = $poicontinent;

        return $this;
    }

    /**
     * Get poicontinent
     *
     * @return integer
     */
    public function getPoicontinent()
    {
        return $this->poicontinent;
    }

    /**
     * Set poix
     *
     * @param float $poix
     *
     * @return QuestTemplate
     */
    public function setPoix($poix)
    {
        $this->poix = $poix;

        return $this;
    }

    /**
     * Get poix
     *
     * @return float
     */
    public function getPoix()
    {
        return $this->poix;
    }

    /**
     * Set poiy
     *
     * @param float $poiy
     *
     * @return QuestTemplate
     */
    public function setPoiy($poiy)
    {
        $this->poiy = $poiy;

        return $this;
    }

    /**
     * Get poiy
     *
     * @return float
     */
    public function getPoiy()
    {
        return $this->poiy;
    }

    /**
     * Set poipriority
     *
     * @param integer $poipriority
     *
     * @return QuestTemplate
     */
    public function setPoipriority($poipriority)
    {
        $this->poipriority = $poipriority;

        return $this;
    }

    /**
     * Get poipriority
     *
     * @return integer
     */
    public function getPoipriority()
    {
        return $this->poipriority;
    }

    /**
     * Set rewardtitle
     *
     * @param boolean $rewardtitle
     *
     * @return QuestTemplate
     */
    public function setRewardtitle($rewardtitle)
    {
        $this->rewardtitle = $rewardtitle;

        return $this;
    }

    /**
     * Get rewardtitle
     *
     * @return boolean
     */
    public function getRewardtitle()
    {
        return $this->rewardtitle;
    }

    /**
     * Set rewardtalents
     *
     * @param boolean $rewardtalents
     *
     * @return QuestTemplate
     */
    public function setRewardtalents($rewardtalents)
    {
        $this->rewardtalents = $rewardtalents;

        return $this;
    }

    /**
     * Get rewardtalents
     *
     * @return boolean
     */
    public function getRewardtalents()
    {
        return $this->rewardtalents;
    }

    /**
     * Set rewardarenapoints
     *
     * @param integer $rewardarenapoints
     *
     * @return QuestTemplate
     */
    public function setRewardarenapoints($rewardarenapoints)
    {
        $this->rewardarenapoints = $rewardarenapoints;

        return $this;
    }

    /**
     * Get rewardarenapoints
     *
     * @return integer
     */
    public function getRewardarenapoints()
    {
        return $this->rewardarenapoints;
    }

    /**
     * Set rewardfactionid1
     *
     * @param integer $rewardfactionid1
     *
     * @return QuestTemplate
     */
    public function setRewardfactionid1($rewardfactionid1)
    {
        $this->rewardfactionid1 = $rewardfactionid1;

        return $this;
    }

    /**
     * Get rewardfactionid1
     *
     * @return integer
     */
    public function getRewardfactionid1()
    {
        return $this->rewardfactionid1;
    }

    /**
     * Set rewardfactionvalue1
     *
     * @param integer $rewardfactionvalue1
     *
     * @return QuestTemplate
     */
    public function setRewardfactionvalue1($rewardfactionvalue1)
    {
        $this->rewardfactionvalue1 = $rewardfactionvalue1;

        return $this;
    }

    /**
     * Get rewardfactionvalue1
     *
     * @return integer
     */
    public function getRewardfactionvalue1()
    {
        return $this->rewardfactionvalue1;
    }

    /**
     * Set rewardfactionoverride1
     *
     * @param integer $rewardfactionoverride1
     *
     * @return QuestTemplate
     */
    public function setRewardfactionoverride1($rewardfactionoverride1)
    {
        $this->rewardfactionoverride1 = $rewardfactionoverride1;

        return $this;
    }

    /**
     * Get rewardfactionoverride1
     *
     * @return integer
     */
    public function getRewardfactionoverride1()
    {
        return $this->rewardfactionoverride1;
    }

    /**
     * Set rewardfactionid2
     *
     * @param integer $rewardfactionid2
     *
     * @return QuestTemplate
     */
    public function setRewardfactionid2($rewardfactionid2)
    {
        $this->rewardfactionid2 = $rewardfactionid2;

        return $this;
    }

    /**
     * Get rewardfactionid2
     *
     * @return integer
     */
    public function getRewardfactionid2()
    {
        return $this->rewardfactionid2;
    }

    /**
     * Set rewardfactionvalue2
     *
     * @param integer $rewardfactionvalue2
     *
     * @return QuestTemplate
     */
    public function setRewardfactionvalue2($rewardfactionvalue2)
    {
        $this->rewardfactionvalue2 = $rewardfactionvalue2;

        return $this;
    }

    /**
     * Get rewardfactionvalue2
     *
     * @return integer
     */
    public function getRewardfactionvalue2()
    {
        return $this->rewardfactionvalue2;
    }

    /**
     * Set rewardfactionoverride2
     *
     * @param integer $rewardfactionoverride2
     *
     * @return QuestTemplate
     */
    public function setRewardfactionoverride2($rewardfactionoverride2)
    {
        $this->rewardfactionoverride2 = $rewardfactionoverride2;

        return $this;
    }

    /**
     * Get rewardfactionoverride2
     *
     * @return integer
     */
    public function getRewardfactionoverride2()
    {
        return $this->rewardfactionoverride2;
    }

    /**
     * Set rewardfactionid3
     *
     * @param integer $rewardfactionid3
     *
     * @return QuestTemplate
     */
    public function setRewardfactionid3($rewardfactionid3)
    {
        $this->rewardfactionid3 = $rewardfactionid3;

        return $this;
    }

    /**
     * Get rewardfactionid3
     *
     * @return integer
     */
    public function getRewardfactionid3()
    {
        return $this->rewardfactionid3;
    }

    /**
     * Set rewardfactionvalue3
     *
     * @param integer $rewardfactionvalue3
     *
     * @return QuestTemplate
     */
    public function setRewardfactionvalue3($rewardfactionvalue3)
    {
        $this->rewardfactionvalue3 = $rewardfactionvalue3;

        return $this;
    }

    /**
     * Get rewardfactionvalue3
     *
     * @return integer
     */
    public function getRewardfactionvalue3()
    {
        return $this->rewardfactionvalue3;
    }

    /**
     * Set rewardfactionoverride3
     *
     * @param integer $rewardfactionoverride3
     *
     * @return QuestTemplate
     */
    public function setRewardfactionoverride3($rewardfactionoverride3)
    {
        $this->rewardfactionoverride3 = $rewardfactionoverride3;

        return $this;
    }

    /**
     * Get rewardfactionoverride3
     *
     * @return integer
     */
    public function getRewardfactionoverride3()
    {
        return $this->rewardfactionoverride3;
    }

    /**
     * Set rewardfactionid4
     *
     * @param integer $rewardfactionid4
     *
     * @return QuestTemplate
     */
    public function setRewardfactionid4($rewardfactionid4)
    {
        $this->rewardfactionid4 = $rewardfactionid4;

        return $this;
    }

    /**
     * Get rewardfactionid4
     *
     * @return integer
     */
    public function getRewardfactionid4()
    {
        return $this->rewardfactionid4;
    }

    /**
     * Set rewardfactionvalue4
     *
     * @param integer $rewardfactionvalue4
     *
     * @return QuestTemplate
     */
    public function setRewardfactionvalue4($rewardfactionvalue4)
    {
        $this->rewardfactionvalue4 = $rewardfactionvalue4;

        return $this;
    }

    /**
     * Get rewardfactionvalue4
     *
     * @return integer
     */
    public function getRewardfactionvalue4()
    {
        return $this->rewardfactionvalue4;
    }

    /**
     * Set rewardfactionoverride4
     *
     * @param integer $rewardfactionoverride4
     *
     * @return QuestTemplate
     */
    public function setRewardfactionoverride4($rewardfactionoverride4)
    {
        $this->rewardfactionoverride4 = $rewardfactionoverride4;

        return $this;
    }

    /**
     * Get rewardfactionoverride4
     *
     * @return integer
     */
    public function getRewardfactionoverride4()
    {
        return $this->rewardfactionoverride4;
    }

    /**
     * Set rewardfactionid5
     *
     * @param integer $rewardfactionid5
     *
     * @return QuestTemplate
     */
    public function setRewardfactionid5($rewardfactionid5)
    {
        $this->rewardfactionid5 = $rewardfactionid5;

        return $this;
    }

    /**
     * Get rewardfactionid5
     *
     * @return integer
     */
    public function getRewardfactionid5()
    {
        return $this->rewardfactionid5;
    }

    /**
     * Set rewardfactionvalue5
     *
     * @param integer $rewardfactionvalue5
     *
     * @return QuestTemplate
     */
    public function setRewardfactionvalue5($rewardfactionvalue5)
    {
        $this->rewardfactionvalue5 = $rewardfactionvalue5;

        return $this;
    }

    /**
     * Get rewardfactionvalue5
     *
     * @return integer
     */
    public function getRewardfactionvalue5()
    {
        return $this->rewardfactionvalue5;
    }

    /**
     * Set rewardfactionoverride5
     *
     * @param integer $rewardfactionoverride5
     *
     * @return QuestTemplate
     */
    public function setRewardfactionoverride5($rewardfactionoverride5)
    {
        $this->rewardfactionoverride5 = $rewardfactionoverride5;

        return $this;
    }

    /**
     * Get rewardfactionoverride5
     *
     * @return integer
     */
    public function getRewardfactionoverride5()
    {
        return $this->rewardfactionoverride5;
    }

    /**
     * Set timeallowed
     *
     * @param integer $timeallowed
     *
     * @return QuestTemplate
     */
    public function setTimeallowed($timeallowed)
    {
        $this->timeallowed = $timeallowed;

        return $this;
    }

    /**
     * Get timeallowed
     *
     * @return integer
     */
    public function getTimeallowed()
    {
        return $this->timeallowed;
    }

    /**
     * Set allowableraces
     *
     * @param integer $allowableraces
     *
     * @return QuestTemplate
     */
    public function setAllowableraces($allowableraces)
    {
        $this->allowableraces = $allowableraces;

        return $this;
    }

    /**
     * Get allowableraces
     *
     * @return integer
     */
    public function getAllowableraces()
    {
        return $this->allowableraces;
    }

    /**
     * Set logtitle
     *
     * @param string $logtitle
     *
     * @return QuestTemplate
     */
    public function setLogtitle($logtitle)
    {
        $this->logtitle = $logtitle;

        return $this;
    }

    /**
     * Get logtitle
     *
     * @return string
     */
    public function getLogtitle()
    {
        return $this->logtitle;
    }

    /**
     * Set logdescription
     *
     * @param string $logdescription
     *
     * @return QuestTemplate
     */
    public function setLogdescription($logdescription)
    {
        $this->logdescription = $logdescription;

        return $this;
    }

    /**
     * Get logdescription
     *
     * @return string
     */
    public function getLogdescription()
    {
        return $this->logdescription;
    }

    /**
     * Set questdescription
     *
     * @param string $questdescription
     *
     * @return QuestTemplate
     */
    public function setQuestdescription($questdescription)
    {
        $this->questdescription = $questdescription;

        return $this;
    }

    /**
     * Get questdescription
     *
     * @return string
     */
    public function getQuestdescription()
    {
        return $this->questdescription;
    }

    /**
     * Set areadescription
     *
     * @param string $areadescription
     *
     * @return QuestTemplate
     */
    public function setAreadescription($areadescription)
    {
        $this->areadescription = $areadescription;

        return $this;
    }

    /**
     * Get areadescription
     *
     * @return string
     */
    public function getAreadescription()
    {
        return $this->areadescription;
    }

    /**
     * Set questcompletionlog
     *
     * @param string $questcompletionlog
     *
     * @return QuestTemplate
     */
    public function setQuestcompletionlog($questcompletionlog)
    {
        $this->questcompletionlog = $questcompletionlog;

        return $this;
    }

    /**
     * Get questcompletionlog
     *
     * @return string
     */
    public function getQuestcompletionlog()
    {
        return $this->questcompletionlog;
    }

    /**
     * Set requirednpcorgo1
     *
     * @param integer $requirednpcorgo1
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgo1($requirednpcorgo1)
    {
        $this->requirednpcorgo1 = $requirednpcorgo1;

        return $this;
    }

    /**
     * Get requirednpcorgo1
     *
     * @return integer
     */
    public function getRequirednpcorgo1()
    {
        return $this->requirednpcorgo1;
    }

    /**
     * Set requirednpcorgo2
     *
     * @param integer $requirednpcorgo2
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgo2($requirednpcorgo2)
    {
        $this->requirednpcorgo2 = $requirednpcorgo2;

        return $this;
    }

    /**
     * Get requirednpcorgo2
     *
     * @return integer
     */
    public function getRequirednpcorgo2()
    {
        return $this->requirednpcorgo2;
    }

    /**
     * Set requirednpcorgo3
     *
     * @param integer $requirednpcorgo3
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgo3($requirednpcorgo3)
    {
        $this->requirednpcorgo3 = $requirednpcorgo3;

        return $this;
    }

    /**
     * Get requirednpcorgo3
     *
     * @return integer
     */
    public function getRequirednpcorgo3()
    {
        return $this->requirednpcorgo3;
    }

    /**
     * Set requirednpcorgo4
     *
     * @param integer $requirednpcorgo4
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgo4($requirednpcorgo4)
    {
        $this->requirednpcorgo4 = $requirednpcorgo4;

        return $this;
    }

    /**
     * Get requirednpcorgo4
     *
     * @return integer
     */
    public function getRequirednpcorgo4()
    {
        return $this->requirednpcorgo4;
    }

    /**
     * Set requirednpcorgocount1
     *
     * @param integer $requirednpcorgocount1
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgocount1($requirednpcorgocount1)
    {
        $this->requirednpcorgocount1 = $requirednpcorgocount1;

        return $this;
    }

    /**
     * Get requirednpcorgocount1
     *
     * @return integer
     */
    public function getRequirednpcorgocount1()
    {
        return $this->requirednpcorgocount1;
    }

    /**
     * Set requirednpcorgocount2
     *
     * @param integer $requirednpcorgocount2
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgocount2($requirednpcorgocount2)
    {
        $this->requirednpcorgocount2 = $requirednpcorgocount2;

        return $this;
    }

    /**
     * Get requirednpcorgocount2
     *
     * @return integer
     */
    public function getRequirednpcorgocount2()
    {
        return $this->requirednpcorgocount2;
    }

    /**
     * Set requirednpcorgocount3
     *
     * @param integer $requirednpcorgocount3
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgocount3($requirednpcorgocount3)
    {
        $this->requirednpcorgocount3 = $requirednpcorgocount3;

        return $this;
    }

    /**
     * Get requirednpcorgocount3
     *
     * @return integer
     */
    public function getRequirednpcorgocount3()
    {
        return $this->requirednpcorgocount3;
    }

    /**
     * Set requirednpcorgocount4
     *
     * @param integer $requirednpcorgocount4
     *
     * @return QuestTemplate
     */
    public function setRequirednpcorgocount4($requirednpcorgocount4)
    {
        $this->requirednpcorgocount4 = $requirednpcorgocount4;

        return $this;
    }

    /**
     * Get requirednpcorgocount4
     *
     * @return integer
     */
    public function getRequirednpcorgocount4()
    {
        return $this->requirednpcorgocount4;
    }

    /**
     * Set requireditemid1
     *
     * @param integer $requireditemid1
     *
     * @return QuestTemplate
     */
    public function setRequireditemid1($requireditemid1)
    {
        $this->requireditemid1 = $requireditemid1;

        return $this;
    }

    /**
     * Get requireditemid1
     *
     * @return integer
     */
    public function getRequireditemid1()
    {
        return $this->requireditemid1;
    }

    /**
     * Set requireditemid2
     *
     * @param integer $requireditemid2
     *
     * @return QuestTemplate
     */
    public function setRequireditemid2($requireditemid2)
    {
        $this->requireditemid2 = $requireditemid2;

        return $this;
    }

    /**
     * Get requireditemid2
     *
     * @return integer
     */
    public function getRequireditemid2()
    {
        return $this->requireditemid2;
    }

    /**
     * Set requireditemid3
     *
     * @param integer $requireditemid3
     *
     * @return QuestTemplate
     */
    public function setRequireditemid3($requireditemid3)
    {
        $this->requireditemid3 = $requireditemid3;

        return $this;
    }

    /**
     * Get requireditemid3
     *
     * @return integer
     */
    public function getRequireditemid3()
    {
        return $this->requireditemid3;
    }

    /**
     * Set requireditemid4
     *
     * @param integer $requireditemid4
     *
     * @return QuestTemplate
     */
    public function setRequireditemid4($requireditemid4)
    {
        $this->requireditemid4 = $requireditemid4;

        return $this;
    }

    /**
     * Get requireditemid4
     *
     * @return integer
     */
    public function getRequireditemid4()
    {
        return $this->requireditemid4;
    }

    /**
     * Set requireditemid5
     *
     * @param integer $requireditemid5
     *
     * @return QuestTemplate
     */
    public function setRequireditemid5($requireditemid5)
    {
        $this->requireditemid5 = $requireditemid5;

        return $this;
    }

    /**
     * Get requireditemid5
     *
     * @return integer
     */
    public function getRequireditemid5()
    {
        return $this->requireditemid5;
    }

    /**
     * Set requireditemid6
     *
     * @param integer $requireditemid6
     *
     * @return QuestTemplate
     */
    public function setRequireditemid6($requireditemid6)
    {
        $this->requireditemid6 = $requireditemid6;

        return $this;
    }

    /**
     * Get requireditemid6
     *
     * @return integer
     */
    public function getRequireditemid6()
    {
        return $this->requireditemid6;
    }

    /**
     * Set requireditemcount1
     *
     * @param integer $requireditemcount1
     *
     * @return QuestTemplate
     */
    public function setRequireditemcount1($requireditemcount1)
    {
        $this->requireditemcount1 = $requireditemcount1;

        return $this;
    }

    /**
     * Get requireditemcount1
     *
     * @return integer
     */
    public function getRequireditemcount1()
    {
        return $this->requireditemcount1;
    }

    /**
     * Set requireditemcount2
     *
     * @param integer $requireditemcount2
     *
     * @return QuestTemplate
     */
    public function setRequireditemcount2($requireditemcount2)
    {
        $this->requireditemcount2 = $requireditemcount2;

        return $this;
    }

    /**
     * Get requireditemcount2
     *
     * @return integer
     */
    public function getRequireditemcount2()
    {
        return $this->requireditemcount2;
    }

    /**
     * Set requireditemcount3
     *
     * @param integer $requireditemcount3
     *
     * @return QuestTemplate
     */
    public function setRequireditemcount3($requireditemcount3)
    {
        $this->requireditemcount3 = $requireditemcount3;

        return $this;
    }

    /**
     * Get requireditemcount3
     *
     * @return integer
     */
    public function getRequireditemcount3()
    {
        return $this->requireditemcount3;
    }

    /**
     * Set requireditemcount4
     *
     * @param integer $requireditemcount4
     *
     * @return QuestTemplate
     */
    public function setRequireditemcount4($requireditemcount4)
    {
        $this->requireditemcount4 = $requireditemcount4;

        return $this;
    }

    /**
     * Get requireditemcount4
     *
     * @return integer
     */
    public function getRequireditemcount4()
    {
        return $this->requireditemcount4;
    }

    /**
     * Set requireditemcount5
     *
     * @param integer $requireditemcount5
     *
     * @return QuestTemplate
     */
    public function setRequireditemcount5($requireditemcount5)
    {
        $this->requireditemcount5 = $requireditemcount5;

        return $this;
    }

    /**
     * Get requireditemcount5
     *
     * @return integer
     */
    public function getRequireditemcount5()
    {
        return $this->requireditemcount5;
    }

    /**
     * Set requireditemcount6
     *
     * @param integer $requireditemcount6
     *
     * @return QuestTemplate
     */
    public function setRequireditemcount6($requireditemcount6)
    {
        $this->requireditemcount6 = $requireditemcount6;

        return $this;
    }

    /**
     * Get requireditemcount6
     *
     * @return integer
     */
    public function getRequireditemcount6()
    {
        return $this->requireditemcount6;
    }

    /**
     * Set unknown0
     *
     * @param boolean $unknown0
     *
     * @return QuestTemplate
     */
    public function setUnknown0($unknown0)
    {
        $this->unknown0 = $unknown0;

        return $this;
    }

    /**
     * Get unknown0
     *
     * @return boolean
     */
    public function getUnknown0()
    {
        return $this->unknown0;
    }

    /**
     * Set objectivetext1
     *
     * @param string $objectivetext1
     *
     * @return QuestTemplate
     */
    public function setObjectivetext1($objectivetext1)
    {
        $this->objectivetext1 = $objectivetext1;

        return $this;
    }

    /**
     * Get objectivetext1
     *
     * @return string
     */
    public function getObjectivetext1()
    {
        return $this->objectivetext1;
    }

    /**
     * Set objectivetext2
     *
     * @param string $objectivetext2
     *
     * @return QuestTemplate
     */
    public function setObjectivetext2($objectivetext2)
    {
        $this->objectivetext2 = $objectivetext2;

        return $this;
    }

    /**
     * Get objectivetext2
     *
     * @return string
     */
    public function getObjectivetext2()
    {
        return $this->objectivetext2;
    }

    /**
     * Set objectivetext3
     *
     * @param string $objectivetext3
     *
     * @return QuestTemplate
     */
    public function setObjectivetext3($objectivetext3)
    {
        $this->objectivetext3 = $objectivetext3;

        return $this;
    }

    /**
     * Get objectivetext3
     *
     * @return string
     */
    public function getObjectivetext3()
    {
        return $this->objectivetext3;
    }

    /**
     * Set objectivetext4
     *
     * @param string $objectivetext4
     *
     * @return QuestTemplate
     */
    public function setObjectivetext4($objectivetext4)
    {
        $this->objectivetext4 = $objectivetext4;

        return $this;
    }

    /**
     * Get objectivetext4
     *
     * @return string
     */
    public function getObjectivetext4()
    {
        return $this->objectivetext4;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return QuestTemplate
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
