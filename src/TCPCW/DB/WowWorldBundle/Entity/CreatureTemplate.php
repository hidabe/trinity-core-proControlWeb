<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureTemplate
 *
 * @ORM\Table(name="creature_template", indexes={@ORM\Index(name="idx_name", columns={"name"})})
 * @ORM\Entity
 */
class CreatureTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="difficulty_entry_1", type="integer", nullable=false)
     */
    private $difficultyEntry1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="difficulty_entry_2", type="integer", nullable=false)
     */
    private $difficultyEntry2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="difficulty_entry_3", type="integer", nullable=false)
     */
    private $difficultyEntry3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KillCredit1", type="integer", nullable=false)
     */
    private $killcredit1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KillCredit2", type="integer", nullable=false)
     */
    private $killcredit2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid1", type="integer", nullable=false)
     */
    private $modelid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid2", type="integer", nullable=false)
     */
    private $modelid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid3", type="integer", nullable=false)
     */
    private $modelid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid4", type="integer", nullable=false)
     */
    private $modelid4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subname", type="string", length=100, nullable=true)
     */
    private $subname;

    /**
     * @var string
     *
     * @ORM\Column(name="IconName", type="string", length=100, nullable=true)
     */
    private $iconname;

    /**
     * @var integer
     *
     * @ORM\Column(name="gossip_menu_id", type="integer", nullable=false)
     */
    private $gossipMenuId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="minlevel", type="boolean", nullable=false)
     */
    private $minlevel = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxlevel", type="boolean", nullable=false)
     */
    private $maxlevel = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="exp", type="smallint", nullable=false)
     */
    private $exp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="faction", type="smallint", nullable=false)
     */
    private $faction = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="npcflag", type="integer", nullable=false)
     */
    private $npcflag = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="speed_walk", type="float", precision=10, scale=0, nullable=false)
     */
    private $speedWalk = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="speed_run", type="float", precision=10, scale=0, nullable=false)
     */
    private $speedRun = '1.14286';

    /**
     * @var float
     *
     * @ORM\Column(name="scale", type="float", precision=10, scale=0, nullable=false)
     */
    private $scale = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank", type="boolean", nullable=false)
     */
    private $rank = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dmgschool", type="boolean", nullable=false)
     */
    private $dmgschool = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BaseAttackTime", type="integer", nullable=false)
     */
    private $baseattacktime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RangeAttackTime", type="integer", nullable=false)
     */
    private $rangeattacktime = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="BaseVariance", type="float", precision=10, scale=0, nullable=false)
     */
    private $basevariance = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="RangeVariance", type="float", precision=10, scale=0, nullable=false)
     */
    private $rangevariance = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="unit_class", type="boolean", nullable=false)
     */
    private $unitClass = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_flags", type="integer", nullable=false)
     */
    private $unitFlags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_flags2", type="integer", nullable=false)
     */
    private $unitFlags2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dynamicflags", type="integer", nullable=false)
     */
    private $dynamicflags = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="family", type="boolean", nullable=false)
     */
    private $family = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="trainer_type", type="boolean", nullable=false)
     */
    private $trainerType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trainer_spell", type="integer", nullable=false)
     */
    private $trainerSpell = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="trainer_class", type="boolean", nullable=false)
     */
    private $trainerClass = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="trainer_race", type="boolean", nullable=false)
     */
    private $trainerRace = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type_flags", type="integer", nullable=false)
     */
    private $typeFlags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lootid", type="integer", nullable=false)
     */
    private $lootid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pickpocketloot", type="integer", nullable=false)
     */
    private $pickpocketloot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="skinloot", type="integer", nullable=false)
     */
    private $skinloot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance1", type="smallint", nullable=false)
     */
    private $resistance1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance2", type="smallint", nullable=false)
     */
    private $resistance2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance3", type="smallint", nullable=false)
     */
    private $resistance3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance4", type="smallint", nullable=false)
     */
    private $resistance4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance5", type="smallint", nullable=false)
     */
    private $resistance5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance6", type="smallint", nullable=false)
     */
    private $resistance6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell1", type="integer", nullable=false)
     */
    private $spell1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell2", type="integer", nullable=false)
     */
    private $spell2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell3", type="integer", nullable=false)
     */
    private $spell3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell4", type="integer", nullable=false)
     */
    private $spell4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell5", type="integer", nullable=false)
     */
    private $spell5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell6", type="integer", nullable=false)
     */
    private $spell6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell7", type="integer", nullable=false)
     */
    private $spell7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell8", type="integer", nullable=false)
     */
    private $spell8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PetSpellDataId", type="integer", nullable=false)
     */
    private $petspelldataid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VehicleId", type="integer", nullable=false)
     */
    private $vehicleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mingold", type="integer", nullable=false)
     */
    private $mingold = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxgold", type="integer", nullable=false)
     */
    private $maxgold = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AIName", type="string", length=64, nullable=false)
     */
    private $ainame = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MovementType", type="boolean", nullable=false)
     */
    private $movementtype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="InhabitType", type="boolean", nullable=false)
     */
    private $inhabittype = '3';

    /**
     * @var float
     *
     * @ORM\Column(name="HoverHeight", type="float", precision=10, scale=0, nullable=false)
     */
    private $hoverheight = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="HealthModifier", type="float", precision=10, scale=0, nullable=false)
     */
    private $healthmodifier = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="ManaModifier", type="float", precision=10, scale=0, nullable=false)
     */
    private $manamodifier = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="ArmorModifier", type="float", precision=10, scale=0, nullable=false)
     */
    private $armormodifier = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="DamageModifier", type="float", precision=10, scale=0, nullable=false)
     */
    private $damagemodifier = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="ExperienceModifier", type="float", precision=10, scale=0, nullable=false)
     */
    private $experiencemodifier = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RacialLeader", type="boolean", nullable=false)
     */
    private $racialleader = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="movementId", type="integer", nullable=false)
     */
    private $movementid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RegenHealth", type="boolean", nullable=false)
     */
    private $regenhealth = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="mechanic_immune_mask", type="integer", nullable=false)
     */
    private $mechanicImmuneMask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags_extra", type="integer", nullable=false)
     */
    private $flagsExtra = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set difficultyEntry1
     *
     * @param integer $difficultyEntry1
     *
     * @return CreatureTemplate
     */
    public function setDifficultyEntry1($difficultyEntry1)
    {
        $this->difficultyEntry1 = $difficultyEntry1;

        return $this;
    }

    /**
     * Get difficultyEntry1
     *
     * @return integer
     */
    public function getDifficultyEntry1()
    {
        return $this->difficultyEntry1;
    }

    /**
     * Set difficultyEntry2
     *
     * @param integer $difficultyEntry2
     *
     * @return CreatureTemplate
     */
    public function setDifficultyEntry2($difficultyEntry2)
    {
        $this->difficultyEntry2 = $difficultyEntry2;

        return $this;
    }

    /**
     * Get difficultyEntry2
     *
     * @return integer
     */
    public function getDifficultyEntry2()
    {
        return $this->difficultyEntry2;
    }

    /**
     * Set difficultyEntry3
     *
     * @param integer $difficultyEntry3
     *
     * @return CreatureTemplate
     */
    public function setDifficultyEntry3($difficultyEntry3)
    {
        $this->difficultyEntry3 = $difficultyEntry3;

        return $this;
    }

    /**
     * Get difficultyEntry3
     *
     * @return integer
     */
    public function getDifficultyEntry3()
    {
        return $this->difficultyEntry3;
    }

    /**
     * Set killcredit1
     *
     * @param integer $killcredit1
     *
     * @return CreatureTemplate
     */
    public function setKillcredit1($killcredit1)
    {
        $this->killcredit1 = $killcredit1;

        return $this;
    }

    /**
     * Get killcredit1
     *
     * @return integer
     */
    public function getKillcredit1()
    {
        return $this->killcredit1;
    }

    /**
     * Set killcredit2
     *
     * @param integer $killcredit2
     *
     * @return CreatureTemplate
     */
    public function setKillcredit2($killcredit2)
    {
        $this->killcredit2 = $killcredit2;

        return $this;
    }

    /**
     * Get killcredit2
     *
     * @return integer
     */
    public function getKillcredit2()
    {
        return $this->killcredit2;
    }

    /**
     * Set modelid1
     *
     * @param integer $modelid1
     *
     * @return CreatureTemplate
     */
    public function setModelid1($modelid1)
    {
        $this->modelid1 = $modelid1;

        return $this;
    }

    /**
     * Get modelid1
     *
     * @return integer
     */
    public function getModelid1()
    {
        return $this->modelid1;
    }

    /**
     * Set modelid2
     *
     * @param integer $modelid2
     *
     * @return CreatureTemplate
     */
    public function setModelid2($modelid2)
    {
        $this->modelid2 = $modelid2;

        return $this;
    }

    /**
     * Get modelid2
     *
     * @return integer
     */
    public function getModelid2()
    {
        return $this->modelid2;
    }

    /**
     * Set modelid3
     *
     * @param integer $modelid3
     *
     * @return CreatureTemplate
     */
    public function setModelid3($modelid3)
    {
        $this->modelid3 = $modelid3;

        return $this;
    }

    /**
     * Get modelid3
     *
     * @return integer
     */
    public function getModelid3()
    {
        return $this->modelid3;
    }

    /**
     * Set modelid4
     *
     * @param integer $modelid4
     *
     * @return CreatureTemplate
     */
    public function setModelid4($modelid4)
    {
        $this->modelid4 = $modelid4;

        return $this;
    }

    /**
     * Get modelid4
     *
     * @return integer
     */
    public function getModelid4()
    {
        return $this->modelid4;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CreatureTemplate
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set subname
     *
     * @param string $subname
     *
     * @return CreatureTemplate
     */
    public function setSubname($subname)
    {
        $this->subname = $subname;

        return $this;
    }

    /**
     * Get subname
     *
     * @return string
     */
    public function getSubname()
    {
        return $this->subname;
    }

    /**
     * Set iconname
     *
     * @param string $iconname
     *
     * @return CreatureTemplate
     */
    public function setIconname($iconname)
    {
        $this->iconname = $iconname;

        return $this;
    }

    /**
     * Get iconname
     *
     * @return string
     */
    public function getIconname()
    {
        return $this->iconname;
    }

    /**
     * Set gossipMenuId
     *
     * @param integer $gossipMenuId
     *
     * @return CreatureTemplate
     */
    public function setGossipMenuId($gossipMenuId)
    {
        $this->gossipMenuId = $gossipMenuId;

        return $this;
    }

    /**
     * Get gossipMenuId
     *
     * @return integer
     */
    public function getGossipMenuId()
    {
        return $this->gossipMenuId;
    }

    /**
     * Set minlevel
     *
     * @param boolean $minlevel
     *
     * @return CreatureTemplate
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
     * Set maxlevel
     *
     * @param boolean $maxlevel
     *
     * @return CreatureTemplate
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
     * Set exp
     *
     * @param integer $exp
     *
     * @return CreatureTemplate
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set faction
     *
     * @param integer $faction
     *
     * @return CreatureTemplate
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return integer
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set npcflag
     *
     * @param integer $npcflag
     *
     * @return CreatureTemplate
     */
    public function setNpcflag($npcflag)
    {
        $this->npcflag = $npcflag;

        return $this;
    }

    /**
     * Get npcflag
     *
     * @return integer
     */
    public function getNpcflag()
    {
        return $this->npcflag;
    }

    /**
     * Set speedWalk
     *
     * @param float $speedWalk
     *
     * @return CreatureTemplate
     */
    public function setSpeedWalk($speedWalk)
    {
        $this->speedWalk = $speedWalk;

        return $this;
    }

    /**
     * Get speedWalk
     *
     * @return float
     */
    public function getSpeedWalk()
    {
        return $this->speedWalk;
    }

    /**
     * Set speedRun
     *
     * @param float $speedRun
     *
     * @return CreatureTemplate
     */
    public function setSpeedRun($speedRun)
    {
        $this->speedRun = $speedRun;

        return $this;
    }

    /**
     * Get speedRun
     *
     * @return float
     */
    public function getSpeedRun()
    {
        return $this->speedRun;
    }

    /**
     * Set scale
     *
     * @param float $scale
     *
     * @return CreatureTemplate
     */
    public function setScale($scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get scale
     *
     * @return float
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Set rank
     *
     * @param boolean $rank
     *
     * @return CreatureTemplate
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return boolean
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set dmgschool
     *
     * @param boolean $dmgschool
     *
     * @return CreatureTemplate
     */
    public function setDmgschool($dmgschool)
    {
        $this->dmgschool = $dmgschool;

        return $this;
    }

    /**
     * Get dmgschool
     *
     * @return boolean
     */
    public function getDmgschool()
    {
        return $this->dmgschool;
    }

    /**
     * Set baseattacktime
     *
     * @param integer $baseattacktime
     *
     * @return CreatureTemplate
     */
    public function setBaseattacktime($baseattacktime)
    {
        $this->baseattacktime = $baseattacktime;

        return $this;
    }

    /**
     * Get baseattacktime
     *
     * @return integer
     */
    public function getBaseattacktime()
    {
        return $this->baseattacktime;
    }

    /**
     * Set rangeattacktime
     *
     * @param integer $rangeattacktime
     *
     * @return CreatureTemplate
     */
    public function setRangeattacktime($rangeattacktime)
    {
        $this->rangeattacktime = $rangeattacktime;

        return $this;
    }

    /**
     * Get rangeattacktime
     *
     * @return integer
     */
    public function getRangeattacktime()
    {
        return $this->rangeattacktime;
    }

    /**
     * Set basevariance
     *
     * @param float $basevariance
     *
     * @return CreatureTemplate
     */
    public function setBasevariance($basevariance)
    {
        $this->basevariance = $basevariance;

        return $this;
    }

    /**
     * Get basevariance
     *
     * @return float
     */
    public function getBasevariance()
    {
        return $this->basevariance;
    }

    /**
     * Set rangevariance
     *
     * @param float $rangevariance
     *
     * @return CreatureTemplate
     */
    public function setRangevariance($rangevariance)
    {
        $this->rangevariance = $rangevariance;

        return $this;
    }

    /**
     * Get rangevariance
     *
     * @return float
     */
    public function getRangevariance()
    {
        return $this->rangevariance;
    }

    /**
     * Set unitClass
     *
     * @param boolean $unitClass
     *
     * @return CreatureTemplate
     */
    public function setUnitClass($unitClass)
    {
        $this->unitClass = $unitClass;

        return $this;
    }

    /**
     * Get unitClass
     *
     * @return boolean
     */
    public function getUnitClass()
    {
        return $this->unitClass;
    }

    /**
     * Set unitFlags
     *
     * @param integer $unitFlags
     *
     * @return CreatureTemplate
     */
    public function setUnitFlags($unitFlags)
    {
        $this->unitFlags = $unitFlags;

        return $this;
    }

    /**
     * Get unitFlags
     *
     * @return integer
     */
    public function getUnitFlags()
    {
        return $this->unitFlags;
    }

    /**
     * Set unitFlags2
     *
     * @param integer $unitFlags2
     *
     * @return CreatureTemplate
     */
    public function setUnitFlags2($unitFlags2)
    {
        $this->unitFlags2 = $unitFlags2;

        return $this;
    }

    /**
     * Get unitFlags2
     *
     * @return integer
     */
    public function getUnitFlags2()
    {
        return $this->unitFlags2;
    }

    /**
     * Set dynamicflags
     *
     * @param integer $dynamicflags
     *
     * @return CreatureTemplate
     */
    public function setDynamicflags($dynamicflags)
    {
        $this->dynamicflags = $dynamicflags;

        return $this;
    }

    /**
     * Get dynamicflags
     *
     * @return integer
     */
    public function getDynamicflags()
    {
        return $this->dynamicflags;
    }

    /**
     * Set family
     *
     * @param boolean $family
     *
     * @return CreatureTemplate
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return boolean
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set trainerType
     *
     * @param boolean $trainerType
     *
     * @return CreatureTemplate
     */
    public function setTrainerType($trainerType)
    {
        $this->trainerType = $trainerType;

        return $this;
    }

    /**
     * Get trainerType
     *
     * @return boolean
     */
    public function getTrainerType()
    {
        return $this->trainerType;
    }

    /**
     * Set trainerSpell
     *
     * @param integer $trainerSpell
     *
     * @return CreatureTemplate
     */
    public function setTrainerSpell($trainerSpell)
    {
        $this->trainerSpell = $trainerSpell;

        return $this;
    }

    /**
     * Get trainerSpell
     *
     * @return integer
     */
    public function getTrainerSpell()
    {
        return $this->trainerSpell;
    }

    /**
     * Set trainerClass
     *
     * @param boolean $trainerClass
     *
     * @return CreatureTemplate
     */
    public function setTrainerClass($trainerClass)
    {
        $this->trainerClass = $trainerClass;

        return $this;
    }

    /**
     * Get trainerClass
     *
     * @return boolean
     */
    public function getTrainerClass()
    {
        return $this->trainerClass;
    }

    /**
     * Set trainerRace
     *
     * @param boolean $trainerRace
     *
     * @return CreatureTemplate
     */
    public function setTrainerRace($trainerRace)
    {
        $this->trainerRace = $trainerRace;

        return $this;
    }

    /**
     * Get trainerRace
     *
     * @return boolean
     */
    public function getTrainerRace()
    {
        return $this->trainerRace;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return CreatureTemplate
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set typeFlags
     *
     * @param integer $typeFlags
     *
     * @return CreatureTemplate
     */
    public function setTypeFlags($typeFlags)
    {
        $this->typeFlags = $typeFlags;

        return $this;
    }

    /**
     * Get typeFlags
     *
     * @return integer
     */
    public function getTypeFlags()
    {
        return $this->typeFlags;
    }

    /**
     * Set lootid
     *
     * @param integer $lootid
     *
     * @return CreatureTemplate
     */
    public function setLootid($lootid)
    {
        $this->lootid = $lootid;

        return $this;
    }

    /**
     * Get lootid
     *
     * @return integer
     */
    public function getLootid()
    {
        return $this->lootid;
    }

    /**
     * Set pickpocketloot
     *
     * @param integer $pickpocketloot
     *
     * @return CreatureTemplate
     */
    public function setPickpocketloot($pickpocketloot)
    {
        $this->pickpocketloot = $pickpocketloot;

        return $this;
    }

    /**
     * Get pickpocketloot
     *
     * @return integer
     */
    public function getPickpocketloot()
    {
        return $this->pickpocketloot;
    }

    /**
     * Set skinloot
     *
     * @param integer $skinloot
     *
     * @return CreatureTemplate
     */
    public function setSkinloot($skinloot)
    {
        $this->skinloot = $skinloot;

        return $this;
    }

    /**
     * Get skinloot
     *
     * @return integer
     */
    public function getSkinloot()
    {
        return $this->skinloot;
    }

    /**
     * Set resistance1
     *
     * @param integer $resistance1
     *
     * @return CreatureTemplate
     */
    public function setResistance1($resistance1)
    {
        $this->resistance1 = $resistance1;

        return $this;
    }

    /**
     * Get resistance1
     *
     * @return integer
     */
    public function getResistance1()
    {
        return $this->resistance1;
    }

    /**
     * Set resistance2
     *
     * @param integer $resistance2
     *
     * @return CreatureTemplate
     */
    public function setResistance2($resistance2)
    {
        $this->resistance2 = $resistance2;

        return $this;
    }

    /**
     * Get resistance2
     *
     * @return integer
     */
    public function getResistance2()
    {
        return $this->resistance2;
    }

    /**
     * Set resistance3
     *
     * @param integer $resistance3
     *
     * @return CreatureTemplate
     */
    public function setResistance3($resistance3)
    {
        $this->resistance3 = $resistance3;

        return $this;
    }

    /**
     * Get resistance3
     *
     * @return integer
     */
    public function getResistance3()
    {
        return $this->resistance3;
    }

    /**
     * Set resistance4
     *
     * @param integer $resistance4
     *
     * @return CreatureTemplate
     */
    public function setResistance4($resistance4)
    {
        $this->resistance4 = $resistance4;

        return $this;
    }

    /**
     * Get resistance4
     *
     * @return integer
     */
    public function getResistance4()
    {
        return $this->resistance4;
    }

    /**
     * Set resistance5
     *
     * @param integer $resistance5
     *
     * @return CreatureTemplate
     */
    public function setResistance5($resistance5)
    {
        $this->resistance5 = $resistance5;

        return $this;
    }

    /**
     * Get resistance5
     *
     * @return integer
     */
    public function getResistance5()
    {
        return $this->resistance5;
    }

    /**
     * Set resistance6
     *
     * @param integer $resistance6
     *
     * @return CreatureTemplate
     */
    public function setResistance6($resistance6)
    {
        $this->resistance6 = $resistance6;

        return $this;
    }

    /**
     * Get resistance6
     *
     * @return integer
     */
    public function getResistance6()
    {
        return $this->resistance6;
    }

    /**
     * Set spell1
     *
     * @param integer $spell1
     *
     * @return CreatureTemplate
     */
    public function setSpell1($spell1)
    {
        $this->spell1 = $spell1;

        return $this;
    }

    /**
     * Get spell1
     *
     * @return integer
     */
    public function getSpell1()
    {
        return $this->spell1;
    }

    /**
     * Set spell2
     *
     * @param integer $spell2
     *
     * @return CreatureTemplate
     */
    public function setSpell2($spell2)
    {
        $this->spell2 = $spell2;

        return $this;
    }

    /**
     * Get spell2
     *
     * @return integer
     */
    public function getSpell2()
    {
        return $this->spell2;
    }

    /**
     * Set spell3
     *
     * @param integer $spell3
     *
     * @return CreatureTemplate
     */
    public function setSpell3($spell3)
    {
        $this->spell3 = $spell3;

        return $this;
    }

    /**
     * Get spell3
     *
     * @return integer
     */
    public function getSpell3()
    {
        return $this->spell3;
    }

    /**
     * Set spell4
     *
     * @param integer $spell4
     *
     * @return CreatureTemplate
     */
    public function setSpell4($spell4)
    {
        $this->spell4 = $spell4;

        return $this;
    }

    /**
     * Get spell4
     *
     * @return integer
     */
    public function getSpell4()
    {
        return $this->spell4;
    }

    /**
     * Set spell5
     *
     * @param integer $spell5
     *
     * @return CreatureTemplate
     */
    public function setSpell5($spell5)
    {
        $this->spell5 = $spell5;

        return $this;
    }

    /**
     * Get spell5
     *
     * @return integer
     */
    public function getSpell5()
    {
        return $this->spell5;
    }

    /**
     * Set spell6
     *
     * @param integer $spell6
     *
     * @return CreatureTemplate
     */
    public function setSpell6($spell6)
    {
        $this->spell6 = $spell6;

        return $this;
    }

    /**
     * Get spell6
     *
     * @return integer
     */
    public function getSpell6()
    {
        return $this->spell6;
    }

    /**
     * Set spell7
     *
     * @param integer $spell7
     *
     * @return CreatureTemplate
     */
    public function setSpell7($spell7)
    {
        $this->spell7 = $spell7;

        return $this;
    }

    /**
     * Get spell7
     *
     * @return integer
     */
    public function getSpell7()
    {
        return $this->spell7;
    }

    /**
     * Set spell8
     *
     * @param integer $spell8
     *
     * @return CreatureTemplate
     */
    public function setSpell8($spell8)
    {
        $this->spell8 = $spell8;

        return $this;
    }

    /**
     * Get spell8
     *
     * @return integer
     */
    public function getSpell8()
    {
        return $this->spell8;
    }

    /**
     * Set petspelldataid
     *
     * @param integer $petspelldataid
     *
     * @return CreatureTemplate
     */
    public function setPetspelldataid($petspelldataid)
    {
        $this->petspelldataid = $petspelldataid;

        return $this;
    }

    /**
     * Get petspelldataid
     *
     * @return integer
     */
    public function getPetspelldataid()
    {
        return $this->petspelldataid;
    }

    /**
     * Set vehicleid
     *
     * @param integer $vehicleid
     *
     * @return CreatureTemplate
     */
    public function setVehicleid($vehicleid)
    {
        $this->vehicleid = $vehicleid;

        return $this;
    }

    /**
     * Get vehicleid
     *
     * @return integer
     */
    public function getVehicleid()
    {
        return $this->vehicleid;
    }

    /**
     * Set mingold
     *
     * @param integer $mingold
     *
     * @return CreatureTemplate
     */
    public function setMingold($mingold)
    {
        $this->mingold = $mingold;

        return $this;
    }

    /**
     * Get mingold
     *
     * @return integer
     */
    public function getMingold()
    {
        return $this->mingold;
    }

    /**
     * Set maxgold
     *
     * @param integer $maxgold
     *
     * @return CreatureTemplate
     */
    public function setMaxgold($maxgold)
    {
        $this->maxgold = $maxgold;

        return $this;
    }

    /**
     * Get maxgold
     *
     * @return integer
     */
    public function getMaxgold()
    {
        return $this->maxgold;
    }

    /**
     * Set ainame
     *
     * @param string $ainame
     *
     * @return CreatureTemplate
     */
    public function setAiname($ainame)
    {
        $this->ainame = $ainame;

        return $this;
    }

    /**
     * Get ainame
     *
     * @return string
     */
    public function getAiname()
    {
        return $this->ainame;
    }

    /**
     * Set movementtype
     *
     * @param boolean $movementtype
     *
     * @return CreatureTemplate
     */
    public function setMovementtype($movementtype)
    {
        $this->movementtype = $movementtype;

        return $this;
    }

    /**
     * Get movementtype
     *
     * @return boolean
     */
    public function getMovementtype()
    {
        return $this->movementtype;
    }

    /**
     * Set inhabittype
     *
     * @param boolean $inhabittype
     *
     * @return CreatureTemplate
     */
    public function setInhabittype($inhabittype)
    {
        $this->inhabittype = $inhabittype;

        return $this;
    }

    /**
     * Get inhabittype
     *
     * @return boolean
     */
    public function getInhabittype()
    {
        return $this->inhabittype;
    }

    /**
     * Set hoverheight
     *
     * @param float $hoverheight
     *
     * @return CreatureTemplate
     */
    public function setHoverheight($hoverheight)
    {
        $this->hoverheight = $hoverheight;

        return $this;
    }

    /**
     * Get hoverheight
     *
     * @return float
     */
    public function getHoverheight()
    {
        return $this->hoverheight;
    }

    /**
     * Set healthmodifier
     *
     * @param float $healthmodifier
     *
     * @return CreatureTemplate
     */
    public function setHealthmodifier($healthmodifier)
    {
        $this->healthmodifier = $healthmodifier;

        return $this;
    }

    /**
     * Get healthmodifier
     *
     * @return float
     */
    public function getHealthmodifier()
    {
        return $this->healthmodifier;
    }

    /**
     * Set manamodifier
     *
     * @param float $manamodifier
     *
     * @return CreatureTemplate
     */
    public function setManamodifier($manamodifier)
    {
        $this->manamodifier = $manamodifier;

        return $this;
    }

    /**
     * Get manamodifier
     *
     * @return float
     */
    public function getManamodifier()
    {
        return $this->manamodifier;
    }

    /**
     * Set armormodifier
     *
     * @param float $armormodifier
     *
     * @return CreatureTemplate
     */
    public function setArmormodifier($armormodifier)
    {
        $this->armormodifier = $armormodifier;

        return $this;
    }

    /**
     * Get armormodifier
     *
     * @return float
     */
    public function getArmormodifier()
    {
        return $this->armormodifier;
    }

    /**
     * Set damagemodifier
     *
     * @param float $damagemodifier
     *
     * @return CreatureTemplate
     */
    public function setDamagemodifier($damagemodifier)
    {
        $this->damagemodifier = $damagemodifier;

        return $this;
    }

    /**
     * Get damagemodifier
     *
     * @return float
     */
    public function getDamagemodifier()
    {
        return $this->damagemodifier;
    }

    /**
     * Set experiencemodifier
     *
     * @param float $experiencemodifier
     *
     * @return CreatureTemplate
     */
    public function setExperiencemodifier($experiencemodifier)
    {
        $this->experiencemodifier = $experiencemodifier;

        return $this;
    }

    /**
     * Get experiencemodifier
     *
     * @return float
     */
    public function getExperiencemodifier()
    {
        return $this->experiencemodifier;
    }

    /**
     * Set racialleader
     *
     * @param boolean $racialleader
     *
     * @return CreatureTemplate
     */
    public function setRacialleader($racialleader)
    {
        $this->racialleader = $racialleader;

        return $this;
    }

    /**
     * Get racialleader
     *
     * @return boolean
     */
    public function getRacialleader()
    {
        return $this->racialleader;
    }

    /**
     * Set movementid
     *
     * @param integer $movementid
     *
     * @return CreatureTemplate
     */
    public function setMovementid($movementid)
    {
        $this->movementid = $movementid;

        return $this;
    }

    /**
     * Get movementid
     *
     * @return integer
     */
    public function getMovementid()
    {
        return $this->movementid;
    }

    /**
     * Set regenhealth
     *
     * @param boolean $regenhealth
     *
     * @return CreatureTemplate
     */
    public function setRegenhealth($regenhealth)
    {
        $this->regenhealth = $regenhealth;

        return $this;
    }

    /**
     * Get regenhealth
     *
     * @return boolean
     */
    public function getRegenhealth()
    {
        return $this->regenhealth;
    }

    /**
     * Set mechanicImmuneMask
     *
     * @param integer $mechanicImmuneMask
     *
     * @return CreatureTemplate
     */
    public function setMechanicImmuneMask($mechanicImmuneMask)
    {
        $this->mechanicImmuneMask = $mechanicImmuneMask;

        return $this;
    }

    /**
     * Get mechanicImmuneMask
     *
     * @return integer
     */
    public function getMechanicImmuneMask()
    {
        return $this->mechanicImmuneMask;
    }

    /**
     * Set flagsExtra
     *
     * @param integer $flagsExtra
     *
     * @return CreatureTemplate
     */
    public function setFlagsExtra($flagsExtra)
    {
        $this->flagsExtra = $flagsExtra;

        return $this;
    }

    /**
     * Get flagsExtra
     *
     * @return integer
     */
    public function getFlagsExtra()
    {
        return $this->flagsExtra;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return CreatureTemplate
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return CreatureTemplate
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
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
