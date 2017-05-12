<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProspectingLootTemplate
 *
 * @ORM\Table(name="prospecting_loot_template")
 * @ORM\Entity
 */
class ProspectingLootTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Reference", type="integer", nullable=false)
     */
    private $reference = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Chance", type="float", precision=10, scale=0, nullable=false)
     */
    private $chance = '100';

    /**
     * @var boolean
     *
     * @ORM\Column(name="QuestRequired", type="boolean", nullable=false)
     */
    private $questrequired = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="LootMode", type="smallint", nullable=false)
     */
    private $lootmode = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="GroupId", type="boolean", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MinCount", type="boolean", nullable=false)
     */
    private $mincount = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MaxCount", type="boolean", nullable=false)
     */
    private $maxcount = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="Entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $item;



    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return ProspectingLootTemplate
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return ProspectingLootTemplate
     */
    public function setChance($chance)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance
     *
     * @return float
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set questrequired
     *
     * @param boolean $questrequired
     *
     * @return ProspectingLootTemplate
     */
    public function setQuestrequired($questrequired)
    {
        $this->questrequired = $questrequired;

        return $this;
    }

    /**
     * Get questrequired
     *
     * @return boolean
     */
    public function getQuestrequired()
    {
        return $this->questrequired;
    }

    /**
     * Set lootmode
     *
     * @param integer $lootmode
     *
     * @return ProspectingLootTemplate
     */
    public function setLootmode($lootmode)
    {
        $this->lootmode = $lootmode;

        return $this;
    }

    /**
     * Get lootmode
     *
     * @return integer
     */
    public function getLootmode()
    {
        return $this->lootmode;
    }

    /**
     * Set groupid
     *
     * @param boolean $groupid
     *
     * @return ProspectingLootTemplate
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return boolean
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set mincount
     *
     * @param boolean $mincount
     *
     * @return ProspectingLootTemplate
     */
    public function setMincount($mincount)
    {
        $this->mincount = $mincount;

        return $this;
    }

    /**
     * Get mincount
     *
     * @return boolean
     */
    public function getMincount()
    {
        return $this->mincount;
    }

    /**
     * Set maxcount
     *
     * @param boolean $maxcount
     *
     * @return ProspectingLootTemplate
     */
    public function setMaxcount($maxcount)
    {
        $this->maxcount = $maxcount;

        return $this;
    }

    /**
     * Get maxcount
     *
     * @return boolean
     */
    public function getMaxcount()
    {
        return $this->maxcount;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return ProspectingLootTemplate
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return ProspectingLootTemplate
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
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

    /**
     * Set item
     *
     * @param integer $item
     *
     * @return ProspectingLootTemplate
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
}
