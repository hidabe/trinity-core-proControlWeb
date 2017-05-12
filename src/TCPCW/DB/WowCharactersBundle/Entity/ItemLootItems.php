<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLootItems
 *
 * @ORM\Table(name="item_loot_items")
 * @ORM\Entity
 */
class ItemLootItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item_count", type="integer", nullable=false)
     */
    private $itemCount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="follow_rules", type="integer", nullable=false)
     */
    private $followRules = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ffa", type="integer", nullable=false)
     */
    private $ffa = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="blocked", type="integer", nullable=false)
     */
    private $blocked = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="counted", type="integer", nullable=false)
     */
    private $counted = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="under_threshold", type="integer", nullable=false)
     */
    private $underThreshold = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="needs_quest", type="integer", nullable=false)
     */
    private $needsQuest = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rnd_prop", type="integer", nullable=false)
     */
    private $rndProp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rnd_suffix", type="integer", nullable=false)
     */
    private $rndSuffix = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="container_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $containerId;



    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return ItemLootItems
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set itemCount
     *
     * @param integer $itemCount
     *
     * @return ItemLootItems
     */
    public function setItemCount($itemCount)
    {
        $this->itemCount = $itemCount;

        return $this;
    }

    /**
     * Get itemCount
     *
     * @return integer
     */
    public function getItemCount()
    {
        return $this->itemCount;
    }

    /**
     * Set followRules
     *
     * @param boolean $followRules
     *
     * @return ItemLootItems
     */
    public function setFollowRules($followRules)
    {
        $this->followRules = $followRules;

        return $this;
    }

    /**
     * Get followRules
     *
     * @return boolean
     */
    public function getFollowRules()
    {
        return $this->followRules;
    }

    /**
     * Set ffa
     *
     * @param boolean $ffa
     *
     * @return ItemLootItems
     */
    public function setFfa($ffa)
    {
        $this->ffa = $ffa;

        return $this;
    }

    /**
     * Get ffa
     *
     * @return boolean
     */
    public function getFfa()
    {
        return $this->ffa;
    }

    /**
     * Set blocked
     *
     * @param boolean $blocked
     *
     * @return ItemLootItems
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Get blocked
     *
     * @return boolean
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Set counted
     *
     * @param boolean $counted
     *
     * @return ItemLootItems
     */
    public function setCounted($counted)
    {
        $this->counted = $counted;

        return $this;
    }

    /**
     * Get counted
     *
     * @return boolean
     */
    public function getCounted()
    {
        return $this->counted;
    }

    /**
     * Set underThreshold
     *
     * @param boolean $underThreshold
     *
     * @return ItemLootItems
     */
    public function setUnderThreshold($underThreshold)
    {
        $this->underThreshold = $underThreshold;

        return $this;
    }

    /**
     * Get underThreshold
     *
     * @return boolean
     */
    public function getUnderThreshold()
    {
        return $this->underThreshold;
    }

    /**
     * Set needsQuest
     *
     * @param boolean $needsQuest
     *
     * @return ItemLootItems
     */
    public function setNeedsQuest($needsQuest)
    {
        $this->needsQuest = $needsQuest;

        return $this;
    }

    /**
     * Get needsQuest
     *
     * @return boolean
     */
    public function getNeedsQuest()
    {
        return $this->needsQuest;
    }

    /**
     * Set rndProp
     *
     * @param integer $rndProp
     *
     * @return ItemLootItems
     */
    public function setRndProp($rndProp)
    {
        $this->rndProp = $rndProp;

        return $this;
    }

    /**
     * Get rndProp
     *
     * @return integer
     */
    public function getRndProp()
    {
        return $this->rndProp;
    }

    /**
     * Set rndSuffix
     *
     * @param integer $rndSuffix
     *
     * @return ItemLootItems
     */
    public function setRndSuffix($rndSuffix)
    {
        $this->rndSuffix = $rndSuffix;

        return $this;
    }

    /**
     * Get rndSuffix
     *
     * @return integer
     */
    public function getRndSuffix()
    {
        return $this->rndSuffix;
    }

    /**
     * Get containerId
     *
     * @return integer
     */
    public function getContainerId()
    {
        return $this->containerId;
    }
}
