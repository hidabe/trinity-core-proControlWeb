<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessRequirement
 *
 * @ORM\Table(name="access_requirement")
 * @ORM\Entity
 */
class AccessRequirement
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="level_min", type="boolean", nullable=false)
     */
    private $levelMin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level_max", type="boolean", nullable=false)
     */
    private $levelMax = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item_level", type="smallint", nullable=false)
     */
    private $itemLevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer", nullable=false)
     */
    private $item = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item2", type="integer", nullable=false)
     */
    private $item2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_done_A", type="integer", nullable=false)
     */
    private $questDoneA = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_done_H", type="integer", nullable=false)
     */
    private $questDoneH = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completed_achievement", type="integer", nullable=false)
     */
    private $completedAchievement = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="quest_failed_text", type="text", length=65535, nullable=true)
     */
    private $questFailedText;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $difficulty;

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mapid;



    /**
     * Set levelMin
     *
     * @param boolean $levelMin
     *
     * @return AccessRequirement
     */
    public function setLevelMin($levelMin)
    {
        $this->levelMin = $levelMin;

        return $this;
    }

    /**
     * Get levelMin
     *
     * @return boolean
     */
    public function getLevelMin()
    {
        return $this->levelMin;
    }

    /**
     * Set levelMax
     *
     * @param boolean $levelMax
     *
     * @return AccessRequirement
     */
    public function setLevelMax($levelMax)
    {
        $this->levelMax = $levelMax;

        return $this;
    }

    /**
     * Get levelMax
     *
     * @return boolean
     */
    public function getLevelMax()
    {
        return $this->levelMax;
    }

    /**
     * Set itemLevel
     *
     * @param integer $itemLevel
     *
     * @return AccessRequirement
     */
    public function setItemLevel($itemLevel)
    {
        $this->itemLevel = $itemLevel;

        return $this;
    }

    /**
     * Get itemLevel
     *
     * @return integer
     */
    public function getItemLevel()
    {
        return $this->itemLevel;
    }

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return AccessRequirement
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
     * Set item2
     *
     * @param integer $item2
     *
     * @return AccessRequirement
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;

        return $this;
    }

    /**
     * Get item2
     *
     * @return integer
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * Set questDoneA
     *
     * @param integer $questDoneA
     *
     * @return AccessRequirement
     */
    public function setQuestDoneA($questDoneA)
    {
        $this->questDoneA = $questDoneA;

        return $this;
    }

    /**
     * Get questDoneA
     *
     * @return integer
     */
    public function getQuestDoneA()
    {
        return $this->questDoneA;
    }

    /**
     * Set questDoneH
     *
     * @param integer $questDoneH
     *
     * @return AccessRequirement
     */
    public function setQuestDoneH($questDoneH)
    {
        $this->questDoneH = $questDoneH;

        return $this;
    }

    /**
     * Get questDoneH
     *
     * @return integer
     */
    public function getQuestDoneH()
    {
        return $this->questDoneH;
    }

    /**
     * Set completedAchievement
     *
     * @param integer $completedAchievement
     *
     * @return AccessRequirement
     */
    public function setCompletedAchievement($completedAchievement)
    {
        $this->completedAchievement = $completedAchievement;

        return $this;
    }

    /**
     * Get completedAchievement
     *
     * @return integer
     */
    public function getCompletedAchievement()
    {
        return $this->completedAchievement;
    }

    /**
     * Set questFailedText
     *
     * @param string $questFailedText
     *
     * @return AccessRequirement
     */
    public function setQuestFailedText($questFailedText)
    {
        $this->questFailedText = $questFailedText;

        return $this;
    }

    /**
     * Get questFailedText
     *
     * @return string
     */
    public function getQuestFailedText()
    {
        return $this->questFailedText;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return AccessRequirement
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
     * Set difficulty
     *
     * @param boolean $difficulty
     *
     * @return AccessRequirement
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return boolean
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return AccessRequirement
     */
    public function setMapid($mapid)
    {
        $this->mapid = $mapid;

        return $this;
    }

    /**
     * Get mapid
     *
     * @return integer
     */
    public function getMapid()
    {
        return $this->mapid;
    }
}
