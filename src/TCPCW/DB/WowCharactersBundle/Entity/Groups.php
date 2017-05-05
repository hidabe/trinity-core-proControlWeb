<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups", indexes={@ORM\Index(name="leaderGuid", columns={"leaderGuid"})})
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="leaderGuid", type="integer", nullable=false)
     */
    private $leaderguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lootMethod", type="integer", nullable=false)
     */
    private $lootmethod;

    /**
     * @var integer
     *
     * @ORM\Column(name="looterGuid", type="integer", nullable=false)
     */
    private $looterguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lootThreshold", type="integer", nullable=false)
     */
    private $lootthreshold;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon1", type="bigint", nullable=false)
     */
    private $icon1;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon2", type="bigint", nullable=false)
     */
    private $icon2;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon3", type="bigint", nullable=false)
     */
    private $icon3;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon4", type="bigint", nullable=false)
     */
    private $icon4;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon5", type="bigint", nullable=false)
     */
    private $icon5;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon6", type="bigint", nullable=false)
     */
    private $icon6;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon7", type="bigint", nullable=false)
     */
    private $icon7;

    /**
     * @var integer
     *
     * @ORM\Column(name="icon8", type="bigint", nullable=false)
     */
    private $icon8;

    /**
     * @var boolean
     *
     * @ORM\Column(name="groupType", type="integer", nullable=false)
     */
    private $grouptype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="integer", nullable=false)
     */
    private $difficulty = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="raidDifficulty", type="integer", nullable=false)
     */
    private $raiddifficulty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="masterLooterGuid", type="integer", nullable=false)
     */
    private $masterlooterguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set leaderguid
     *
     * @param integer $leaderguid
     *
     * @return Groups
     */
    public function setLeaderguid($leaderguid)
    {
        $this->leaderguid = $leaderguid;

        return $this;
    }

    /**
     * Get leaderguid
     *
     * @return integer
     */
    public function getLeaderguid()
    {
        return $this->leaderguid;
    }

    /**
     * Set lootmethod
     *
     * @param boolean $lootmethod
     *
     * @return Groups
     */
    public function setLootmethod($lootmethod)
    {
        $this->lootmethod = $lootmethod;

        return $this;
    }

    /**
     * Get lootmethod
     *
     * @return boolean
     */
    public function getLootmethod()
    {
        return $this->lootmethod;
    }

    /**
     * Set looterguid
     *
     * @param integer $looterguid
     *
     * @return Groups
     */
    public function setLooterguid($looterguid)
    {
        $this->looterguid = $looterguid;

        return $this;
    }

    /**
     * Get looterguid
     *
     * @return integer
     */
    public function getLooterguid()
    {
        return $this->looterguid;
    }

    /**
     * Set lootthreshold
     *
     * @param boolean $lootthreshold
     *
     * @return Groups
     */
    public function setLootthreshold($lootthreshold)
    {
        $this->lootthreshold = $lootthreshold;

        return $this;
    }

    /**
     * Get lootthreshold
     *
     * @return boolean
     */
    public function getLootthreshold()
    {
        return $this->lootthreshold;
    }

    /**
     * Set icon1
     *
     * @param integer $icon1
     *
     * @return Groups
     */
    public function setIcon1($icon1)
    {
        $this->icon1 = $icon1;

        return $this;
    }

    /**
     * Get icon1
     *
     * @return integer
     */
    public function getIcon1()
    {
        return $this->icon1;
    }

    /**
     * Set icon2
     *
     * @param integer $icon2
     *
     * @return Groups
     */
    public function setIcon2($icon2)
    {
        $this->icon2 = $icon2;

        return $this;
    }

    /**
     * Get icon2
     *
     * @return integer
     */
    public function getIcon2()
    {
        return $this->icon2;
    }

    /**
     * Set icon3
     *
     * @param integer $icon3
     *
     * @return Groups
     */
    public function setIcon3($icon3)
    {
        $this->icon3 = $icon3;

        return $this;
    }

    /**
     * Get icon3
     *
     * @return integer
     */
    public function getIcon3()
    {
        return $this->icon3;
    }

    /**
     * Set icon4
     *
     * @param integer $icon4
     *
     * @return Groups
     */
    public function setIcon4($icon4)
    {
        $this->icon4 = $icon4;

        return $this;
    }

    /**
     * Get icon4
     *
     * @return integer
     */
    public function getIcon4()
    {
        return $this->icon4;
    }

    /**
     * Set icon5
     *
     * @param integer $icon5
     *
     * @return Groups
     */
    public function setIcon5($icon5)
    {
        $this->icon5 = $icon5;

        return $this;
    }

    /**
     * Get icon5
     *
     * @return integer
     */
    public function getIcon5()
    {
        return $this->icon5;
    }

    /**
     * Set icon6
     *
     * @param integer $icon6
     *
     * @return Groups
     */
    public function setIcon6($icon6)
    {
        $this->icon6 = $icon6;

        return $this;
    }

    /**
     * Get icon6
     *
     * @return integer
     */
    public function getIcon6()
    {
        return $this->icon6;
    }

    /**
     * Set icon7
     *
     * @param integer $icon7
     *
     * @return Groups
     */
    public function setIcon7($icon7)
    {
        $this->icon7 = $icon7;

        return $this;
    }

    /**
     * Get icon7
     *
     * @return integer
     */
    public function getIcon7()
    {
        return $this->icon7;
    }

    /**
     * Set icon8
     *
     * @param integer $icon8
     *
     * @return Groups
     */
    public function setIcon8($icon8)
    {
        $this->icon8 = $icon8;

        return $this;
    }

    /**
     * Get icon8
     *
     * @return integer
     */
    public function getIcon8()
    {
        return $this->icon8;
    }

    /**
     * Set grouptype
     *
     * @param boolean $grouptype
     *
     * @return Groups
     */
    public function setGrouptype($grouptype)
    {
        $this->grouptype = $grouptype;

        return $this;
    }

    /**
     * Get grouptype
     *
     * @return boolean
     */
    public function getGrouptype()
    {
        return $this->grouptype;
    }

    /**
     * Set difficulty
     *
     * @param boolean $difficulty
     *
     * @return Groups
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
     * Set raiddifficulty
     *
     * @param boolean $raiddifficulty
     *
     * @return Groups
     */
    public function setRaiddifficulty($raiddifficulty)
    {
        $this->raiddifficulty = $raiddifficulty;

        return $this;
    }

    /**
     * Get raiddifficulty
     *
     * @return boolean
     */
    public function getRaiddifficulty()
    {
        return $this->raiddifficulty;
    }

    /**
     * Set masterlooterguid
     *
     * @param integer $masterlooterguid
     *
     * @return Groups
     */
    public function setMasterlooterguid($masterlooterguid)
    {
        $this->masterlooterguid = $masterlooterguid;

        return $this;
    }

    /**
     * Get masterlooterguid
     *
     * @return integer
     */
    public function getMasterlooterguid()
    {
        return $this->masterlooterguid;
    }

    /**
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
