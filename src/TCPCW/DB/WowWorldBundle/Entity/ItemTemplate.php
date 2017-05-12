<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemTemplate
 *
 * @ORM\Table(name="item_template", indexes={@ORM\Index(name="idx_name", columns={"name"}), @ORM\Index(name="items_index", columns={"class"})})
 * @ORM\Entity
 */
class ItemTemplate
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean", nullable=false)
     */
    private $class = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subclass", type="boolean", nullable=false)
     */
    private $subclass = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="SoundOverrideSubclass", type="boolean", nullable=false)
     */
    private $soundoverridesubclass = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayid", type="integer", nullable=false)
     */
    private $displayid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Quality", type="boolean", nullable=false)
     */
    private $quality = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="FlagsExtra", type="integer", nullable=false)
     */
    private $flagsextra = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BuyCount", type="boolean", nullable=false)
     */
    private $buycount = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="BuyPrice", type="bigint", nullable=false)
     */
    private $buyprice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SellPrice", type="integer", nullable=false)
     */
    private $sellprice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="InventoryType", type="boolean", nullable=false)
     */
    private $inventorytype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AllowableClass", type="integer", nullable=false)
     */
    private $allowableclass = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="AllowableRace", type="integer", nullable=false)
     */
    private $allowablerace = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemLevel", type="smallint", nullable=false)
     */
    private $itemlevel = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="RequiredLevel", type="boolean", nullable=false)
     */
    private $requiredlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredSkill", type="smallint", nullable=false)
     */
    private $requiredskill = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredSkillRank", type="smallint", nullable=false)
     */
    private $requiredskillrank = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="requiredspell", type="integer", nullable=false)
     */
    private $requiredspell = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="requiredhonorrank", type="integer", nullable=false)
     */
    private $requiredhonorrank = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredCityRank", type="integer", nullable=false)
     */
    private $requiredcityrank = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredReputationFaction", type="smallint", nullable=false)
     */
    private $requiredreputationfaction = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredReputationRank", type="smallint", nullable=false)
     */
    private $requiredreputationrank = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxcount", type="integer", nullable=false)
     */
    private $maxcount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stackable", type="integer", nullable=true)
     */
    private $stackable = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ContainerSlots", type="boolean", nullable=false)
     */
    private $containerslots = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="StatsCount", type="boolean", nullable=false)
     */
    private $statscount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type1", type="boolean", nullable=false)
     */
    private $statType1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value1", type="smallint", nullable=false)
     */
    private $statValue1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type2", type="boolean", nullable=false)
     */
    private $statType2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value2", type="smallint", nullable=false)
     */
    private $statValue2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type3", type="boolean", nullable=false)
     */
    private $statType3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value3", type="smallint", nullable=false)
     */
    private $statValue3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type4", type="boolean", nullable=false)
     */
    private $statType4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value4", type="smallint", nullable=false)
     */
    private $statValue4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type5", type="boolean", nullable=false)
     */
    private $statType5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value5", type="smallint", nullable=false)
     */
    private $statValue5 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type6", type="boolean", nullable=false)
     */
    private $statType6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value6", type="smallint", nullable=false)
     */
    private $statValue6 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type7", type="boolean", nullable=false)
     */
    private $statType7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value7", type="smallint", nullable=false)
     */
    private $statValue7 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type8", type="boolean", nullable=false)
     */
    private $statType8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value8", type="smallint", nullable=false)
     */
    private $statValue8 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type9", type="boolean", nullable=false)
     */
    private $statType9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value9", type="smallint", nullable=false)
     */
    private $statValue9 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stat_type10", type="boolean", nullable=false)
     */
    private $statType10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stat_value10", type="smallint", nullable=false)
     */
    private $statValue10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ScalingStatDistribution", type="smallint", nullable=false)
     */
    private $scalingstatdistribution = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ScalingStatValue", type="integer", nullable=false)
     */
    private $scalingstatvalue = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dmg_min1", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgMin1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dmg_max1", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgMax1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dmg_type1", type="boolean", nullable=false)
     */
    private $dmgType1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dmg_min2", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgMin2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dmg_max2", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgMax2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dmg_type2", type="boolean", nullable=false)
     */
    private $dmgType2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="armor", type="smallint", nullable=false)
     */
    private $armor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="holy_res", type="boolean", nullable=false)
     */
    private $holyRes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fire_res", type="boolean", nullable=false)
     */
    private $fireRes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="nature_res", type="boolean", nullable=false)
     */
    private $natureRes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="frost_res", type="boolean", nullable=false)
     */
    private $frostRes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="shadow_res", type="boolean", nullable=false)
     */
    private $shadowRes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="arcane_res", type="boolean", nullable=false)
     */
    private $arcaneRes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="delay", type="smallint", nullable=false)
     */
    private $delay = '1000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ammo_type", type="boolean", nullable=false)
     */
    private $ammoType = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="RangedModRange", type="float", precision=10, scale=0, nullable=false)
     */
    private $rangedmodrange = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid_1", type="integer", nullable=false)
     */
    private $spellid1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spelltrigger_1", type="boolean", nullable=false)
     */
    private $spelltrigger1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcharges_1", type="smallint", nullable=false)
     */
    private $spellcharges1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="spellppmRate_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellppmrate1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcooldown_1", type="integer", nullable=false)
     */
    private $spellcooldown1 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategory_1", type="smallint", nullable=false)
     */
    private $spellcategory1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategorycooldown_1", type="integer", nullable=false)
     */
    private $spellcategorycooldown1 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid_2", type="integer", nullable=false)
     */
    private $spellid2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spelltrigger_2", type="boolean", nullable=false)
     */
    private $spelltrigger2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcharges_2", type="smallint", nullable=false)
     */
    private $spellcharges2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="spellppmRate_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellppmrate2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcooldown_2", type="integer", nullable=false)
     */
    private $spellcooldown2 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategory_2", type="smallint", nullable=false)
     */
    private $spellcategory2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategorycooldown_2", type="integer", nullable=false)
     */
    private $spellcategorycooldown2 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid_3", type="integer", nullable=false)
     */
    private $spellid3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spelltrigger_3", type="boolean", nullable=false)
     */
    private $spelltrigger3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcharges_3", type="smallint", nullable=false)
     */
    private $spellcharges3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="spellppmRate_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellppmrate3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcooldown_3", type="integer", nullable=false)
     */
    private $spellcooldown3 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategory_3", type="smallint", nullable=false)
     */
    private $spellcategory3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategorycooldown_3", type="integer", nullable=false)
     */
    private $spellcategorycooldown3 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid_4", type="integer", nullable=false)
     */
    private $spellid4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spelltrigger_4", type="boolean", nullable=false)
     */
    private $spelltrigger4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcharges_4", type="smallint", nullable=false)
     */
    private $spellcharges4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="spellppmRate_4", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellppmrate4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcooldown_4", type="integer", nullable=false)
     */
    private $spellcooldown4 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategory_4", type="smallint", nullable=false)
     */
    private $spellcategory4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategorycooldown_4", type="integer", nullable=false)
     */
    private $spellcategorycooldown4 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid_5", type="integer", nullable=false)
     */
    private $spellid5 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spelltrigger_5", type="boolean", nullable=false)
     */
    private $spelltrigger5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcharges_5", type="smallint", nullable=false)
     */
    private $spellcharges5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="spellppmRate_5", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellppmrate5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcooldown_5", type="integer", nullable=false)
     */
    private $spellcooldown5 = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategory_5", type="smallint", nullable=false)
     */
    private $spellcategory5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellcategorycooldown_5", type="integer", nullable=false)
     */
    private $spellcategorycooldown5 = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="bonding", type="boolean", nullable=false)
     */
    private $bonding = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="PageText", type="integer", nullable=false)
     */
    private $pagetext = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LanguageID", type="boolean", nullable=false)
     */
    private $languageid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PageMaterial", type="boolean", nullable=false)
     */
    private $pagematerial = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="startquest", type="integer", nullable=false)
     */
    private $startquest = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lockid", type="integer", nullable=false)
     */
    private $lockid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Material", type="boolean", nullable=false)
     */
    private $material = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sheath", type="boolean", nullable=false)
     */
    private $sheath = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RandomProperty", type="integer", nullable=false)
     */
    private $randomproperty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RandomSuffix", type="integer", nullable=false)
     */
    private $randomsuffix = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="block", type="integer", nullable=false)
     */
    private $block = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemset", type="integer", nullable=false)
     */
    private $itemset = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxDurability", type="smallint", nullable=false)
     */
    private $maxdurability = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer", nullable=false)
     */
    private $area = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Map", type="smallint", nullable=false)
     */
    private $map = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BagFamily", type="integer", nullable=false)
     */
    private $bagfamily = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TotemCategory", type="integer", nullable=false)
     */
    private $totemcategory = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="socketColor_1", type="boolean", nullable=false)
     */
    private $socketcolor1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="socketContent_1", type="integer", nullable=false)
     */
    private $socketcontent1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="socketColor_2", type="boolean", nullable=false)
     */
    private $socketcolor2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="socketContent_2", type="integer", nullable=false)
     */
    private $socketcontent2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="socketColor_3", type="boolean", nullable=false)
     */
    private $socketcolor3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="socketContent_3", type="integer", nullable=false)
     */
    private $socketcontent3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="socketBonus", type="integer", nullable=false)
     */
    private $socketbonus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GemProperties", type="integer", nullable=false)
     */
    private $gemproperties = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RequiredDisenchantSkill", type="smallint", nullable=false)
     */
    private $requireddisenchantskill = '-1';

    /**
     * @var float
     *
     * @ORM\Column(name="ArmorDamageModifier", type="float", precision=10, scale=0, nullable=false)
     */
    private $armordamagemodifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemLimitCategory", type="smallint", nullable=false)
     */
    private $itemlimitcategory = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="HolidayId", type="integer", nullable=false)
     */
    private $holidayid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="DisenchantID", type="integer", nullable=false)
     */
    private $disenchantid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="FoodType", type="boolean", nullable=false)
     */
    private $foodtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="minMoneyLoot", type="integer", nullable=false)
     */
    private $minmoneyloot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxMoneyLoot", type="integer", nullable=false)
     */
    private $maxmoneyloot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flagsCustom", type="integer", nullable=false)
     */
    private $flagscustom = '0';

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
     * Set class
     *
     * @param boolean $class
     *
     * @return ItemTemplate
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set subclass
     *
     * @param boolean $subclass
     *
     * @return ItemTemplate
     */
    public function setSubclass($subclass)
    {
        $this->subclass = $subclass;

        return $this;
    }

    /**
     * Get subclass
     *
     * @return boolean
     */
    public function getSubclass()
    {
        return $this->subclass;
    }

    /**
     * Set soundoverridesubclass
     *
     * @param boolean $soundoverridesubclass
     *
     * @return ItemTemplate
     */
    public function setSoundoverridesubclass($soundoverridesubclass)
    {
        $this->soundoverridesubclass = $soundoverridesubclass;

        return $this;
    }

    /**
     * Get soundoverridesubclass
     *
     * @return boolean
     */
    public function getSoundoverridesubclass()
    {
        return $this->soundoverridesubclass;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ItemTemplate
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
     * Set displayid
     *
     * @param integer $displayid
     *
     * @return ItemTemplate
     */
    public function setDisplayid($displayid)
    {
        $this->displayid = $displayid;

        return $this;
    }

    /**
     * Get displayid
     *
     * @return integer
     */
    public function getDisplayid()
    {
        return $this->displayid;
    }

    /**
     * Set quality
     *
     * @param boolean $quality
     *
     * @return ItemTemplate
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return boolean
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return ItemTemplate
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
     * Set flagsextra
     *
     * @param integer $flagsextra
     *
     * @return ItemTemplate
     */
    public function setFlagsextra($flagsextra)
    {
        $this->flagsextra = $flagsextra;

        return $this;
    }

    /**
     * Get flagsextra
     *
     * @return integer
     */
    public function getFlagsextra()
    {
        return $this->flagsextra;
    }

    /**
     * Set buycount
     *
     * @param boolean $buycount
     *
     * @return ItemTemplate
     */
    public function setBuycount($buycount)
    {
        $this->buycount = $buycount;

        return $this;
    }

    /**
     * Get buycount
     *
     * @return boolean
     */
    public function getBuycount()
    {
        return $this->buycount;
    }

    /**
     * Set buyprice
     *
     * @param integer $buyprice
     *
     * @return ItemTemplate
     */
    public function setBuyprice($buyprice)
    {
        $this->buyprice = $buyprice;

        return $this;
    }

    /**
     * Get buyprice
     *
     * @return integer
     */
    public function getBuyprice()
    {
        return $this->buyprice;
    }

    /**
     * Set sellprice
     *
     * @param integer $sellprice
     *
     * @return ItemTemplate
     */
    public function setSellprice($sellprice)
    {
        $this->sellprice = $sellprice;

        return $this;
    }

    /**
     * Get sellprice
     *
     * @return integer
     */
    public function getSellprice()
    {
        return $this->sellprice;
    }

    /**
     * Set inventorytype
     *
     * @param boolean $inventorytype
     *
     * @return ItemTemplate
     */
    public function setInventorytype($inventorytype)
    {
        $this->inventorytype = $inventorytype;

        return $this;
    }

    /**
     * Get inventorytype
     *
     * @return boolean
     */
    public function getInventorytype()
    {
        return $this->inventorytype;
    }

    /**
     * Set allowableclass
     *
     * @param integer $allowableclass
     *
     * @return ItemTemplate
     */
    public function setAllowableclass($allowableclass)
    {
        $this->allowableclass = $allowableclass;

        return $this;
    }

    /**
     * Get allowableclass
     *
     * @return integer
     */
    public function getAllowableclass()
    {
        return $this->allowableclass;
    }

    /**
     * Set allowablerace
     *
     * @param integer $allowablerace
     *
     * @return ItemTemplate
     */
    public function setAllowablerace($allowablerace)
    {
        $this->allowablerace = $allowablerace;

        return $this;
    }

    /**
     * Get allowablerace
     *
     * @return integer
     */
    public function getAllowablerace()
    {
        return $this->allowablerace;
    }

    /**
     * Set itemlevel
     *
     * @param integer $itemlevel
     *
     * @return ItemTemplate
     */
    public function setItemlevel($itemlevel)
    {
        $this->itemlevel = $itemlevel;

        return $this;
    }

    /**
     * Get itemlevel
     *
     * @return integer
     */
    public function getItemlevel()
    {
        return $this->itemlevel;
    }

    /**
     * Set requiredlevel
     *
     * @param boolean $requiredlevel
     *
     * @return ItemTemplate
     */
    public function setRequiredlevel($requiredlevel)
    {
        $this->requiredlevel = $requiredlevel;

        return $this;
    }

    /**
     * Get requiredlevel
     *
     * @return boolean
     */
    public function getRequiredlevel()
    {
        return $this->requiredlevel;
    }

    /**
     * Set requiredskill
     *
     * @param integer $requiredskill
     *
     * @return ItemTemplate
     */
    public function setRequiredskill($requiredskill)
    {
        $this->requiredskill = $requiredskill;

        return $this;
    }

    /**
     * Get requiredskill
     *
     * @return integer
     */
    public function getRequiredskill()
    {
        return $this->requiredskill;
    }

    /**
     * Set requiredskillrank
     *
     * @param integer $requiredskillrank
     *
     * @return ItemTemplate
     */
    public function setRequiredskillrank($requiredskillrank)
    {
        $this->requiredskillrank = $requiredskillrank;

        return $this;
    }

    /**
     * Get requiredskillrank
     *
     * @return integer
     */
    public function getRequiredskillrank()
    {
        return $this->requiredskillrank;
    }

    /**
     * Set requiredspell
     *
     * @param integer $requiredspell
     *
     * @return ItemTemplate
     */
    public function setRequiredspell($requiredspell)
    {
        $this->requiredspell = $requiredspell;

        return $this;
    }

    /**
     * Get requiredspell
     *
     * @return integer
     */
    public function getRequiredspell()
    {
        return $this->requiredspell;
    }

    /**
     * Set requiredhonorrank
     *
     * @param integer $requiredhonorrank
     *
     * @return ItemTemplate
     */
    public function setRequiredhonorrank($requiredhonorrank)
    {
        $this->requiredhonorrank = $requiredhonorrank;

        return $this;
    }

    /**
     * Get requiredhonorrank
     *
     * @return integer
     */
    public function getRequiredhonorrank()
    {
        return $this->requiredhonorrank;
    }

    /**
     * Set requiredcityrank
     *
     * @param integer $requiredcityrank
     *
     * @return ItemTemplate
     */
    public function setRequiredcityrank($requiredcityrank)
    {
        $this->requiredcityrank = $requiredcityrank;

        return $this;
    }

    /**
     * Get requiredcityrank
     *
     * @return integer
     */
    public function getRequiredcityrank()
    {
        return $this->requiredcityrank;
    }

    /**
     * Set requiredreputationfaction
     *
     * @param integer $requiredreputationfaction
     *
     * @return ItemTemplate
     */
    public function setRequiredreputationfaction($requiredreputationfaction)
    {
        $this->requiredreputationfaction = $requiredreputationfaction;

        return $this;
    }

    /**
     * Get requiredreputationfaction
     *
     * @return integer
     */
    public function getRequiredreputationfaction()
    {
        return $this->requiredreputationfaction;
    }

    /**
     * Set requiredreputationrank
     *
     * @param integer $requiredreputationrank
     *
     * @return ItemTemplate
     */
    public function setRequiredreputationrank($requiredreputationrank)
    {
        $this->requiredreputationrank = $requiredreputationrank;

        return $this;
    }

    /**
     * Get requiredreputationrank
     *
     * @return integer
     */
    public function getRequiredreputationrank()
    {
        return $this->requiredreputationrank;
    }

    /**
     * Set maxcount
     *
     * @param integer $maxcount
     *
     * @return ItemTemplate
     */
    public function setMaxcount($maxcount)
    {
        $this->maxcount = $maxcount;

        return $this;
    }

    /**
     * Get maxcount
     *
     * @return integer
     */
    public function getMaxcount()
    {
        return $this->maxcount;
    }

    /**
     * Set stackable
     *
     * @param integer $stackable
     *
     * @return ItemTemplate
     */
    public function setStackable($stackable)
    {
        $this->stackable = $stackable;

        return $this;
    }

    /**
     * Get stackable
     *
     * @return integer
     */
    public function getStackable()
    {
        return $this->stackable;
    }

    /**
     * Set containerslots
     *
     * @param boolean $containerslots
     *
     * @return ItemTemplate
     */
    public function setContainerslots($containerslots)
    {
        $this->containerslots = $containerslots;

        return $this;
    }

    /**
     * Get containerslots
     *
     * @return boolean
     */
    public function getContainerslots()
    {
        return $this->containerslots;
    }

    /**
     * Set statscount
     *
     * @param boolean $statscount
     *
     * @return ItemTemplate
     */
    public function setStatscount($statscount)
    {
        $this->statscount = $statscount;

        return $this;
    }

    /**
     * Get statscount
     *
     * @return boolean
     */
    public function getStatscount()
    {
        return $this->statscount;
    }

    /**
     * Set statType1
     *
     * @param boolean $statType1
     *
     * @return ItemTemplate
     */
    public function setStatType1($statType1)
    {
        $this->statType1 = $statType1;

        return $this;
    }

    /**
     * Get statType1
     *
     * @return boolean
     */
    public function getStatType1()
    {
        return $this->statType1;
    }

    /**
     * Set statValue1
     *
     * @param integer $statValue1
     *
     * @return ItemTemplate
     */
    public function setStatValue1($statValue1)
    {
        $this->statValue1 = $statValue1;

        return $this;
    }

    /**
     * Get statValue1
     *
     * @return integer
     */
    public function getStatValue1()
    {
        return $this->statValue1;
    }

    /**
     * Set statType2
     *
     * @param boolean $statType2
     *
     * @return ItemTemplate
     */
    public function setStatType2($statType2)
    {
        $this->statType2 = $statType2;

        return $this;
    }

    /**
     * Get statType2
     *
     * @return boolean
     */
    public function getStatType2()
    {
        return $this->statType2;
    }

    /**
     * Set statValue2
     *
     * @param integer $statValue2
     *
     * @return ItemTemplate
     */
    public function setStatValue2($statValue2)
    {
        $this->statValue2 = $statValue2;

        return $this;
    }

    /**
     * Get statValue2
     *
     * @return integer
     */
    public function getStatValue2()
    {
        return $this->statValue2;
    }

    /**
     * Set statType3
     *
     * @param boolean $statType3
     *
     * @return ItemTemplate
     */
    public function setStatType3($statType3)
    {
        $this->statType3 = $statType3;

        return $this;
    }

    /**
     * Get statType3
     *
     * @return boolean
     */
    public function getStatType3()
    {
        return $this->statType3;
    }

    /**
     * Set statValue3
     *
     * @param integer $statValue3
     *
     * @return ItemTemplate
     */
    public function setStatValue3($statValue3)
    {
        $this->statValue3 = $statValue3;

        return $this;
    }

    /**
     * Get statValue3
     *
     * @return integer
     */
    public function getStatValue3()
    {
        return $this->statValue3;
    }

    /**
     * Set statType4
     *
     * @param boolean $statType4
     *
     * @return ItemTemplate
     */
    public function setStatType4($statType4)
    {
        $this->statType4 = $statType4;

        return $this;
    }

    /**
     * Get statType4
     *
     * @return boolean
     */
    public function getStatType4()
    {
        return $this->statType4;
    }

    /**
     * Set statValue4
     *
     * @param integer $statValue4
     *
     * @return ItemTemplate
     */
    public function setStatValue4($statValue4)
    {
        $this->statValue4 = $statValue4;

        return $this;
    }

    /**
     * Get statValue4
     *
     * @return integer
     */
    public function getStatValue4()
    {
        return $this->statValue4;
    }

    /**
     * Set statType5
     *
     * @param boolean $statType5
     *
     * @return ItemTemplate
     */
    public function setStatType5($statType5)
    {
        $this->statType5 = $statType5;

        return $this;
    }

    /**
     * Get statType5
     *
     * @return boolean
     */
    public function getStatType5()
    {
        return $this->statType5;
    }

    /**
     * Set statValue5
     *
     * @param integer $statValue5
     *
     * @return ItemTemplate
     */
    public function setStatValue5($statValue5)
    {
        $this->statValue5 = $statValue5;

        return $this;
    }

    /**
     * Get statValue5
     *
     * @return integer
     */
    public function getStatValue5()
    {
        return $this->statValue5;
    }

    /**
     * Set statType6
     *
     * @param boolean $statType6
     *
     * @return ItemTemplate
     */
    public function setStatType6($statType6)
    {
        $this->statType6 = $statType6;

        return $this;
    }

    /**
     * Get statType6
     *
     * @return boolean
     */
    public function getStatType6()
    {
        return $this->statType6;
    }

    /**
     * Set statValue6
     *
     * @param integer $statValue6
     *
     * @return ItemTemplate
     */
    public function setStatValue6($statValue6)
    {
        $this->statValue6 = $statValue6;

        return $this;
    }

    /**
     * Get statValue6
     *
     * @return integer
     */
    public function getStatValue6()
    {
        return $this->statValue6;
    }

    /**
     * Set statType7
     *
     * @param boolean $statType7
     *
     * @return ItemTemplate
     */
    public function setStatType7($statType7)
    {
        $this->statType7 = $statType7;

        return $this;
    }

    /**
     * Get statType7
     *
     * @return boolean
     */
    public function getStatType7()
    {
        return $this->statType7;
    }

    /**
     * Set statValue7
     *
     * @param integer $statValue7
     *
     * @return ItemTemplate
     */
    public function setStatValue7($statValue7)
    {
        $this->statValue7 = $statValue7;

        return $this;
    }

    /**
     * Get statValue7
     *
     * @return integer
     */
    public function getStatValue7()
    {
        return $this->statValue7;
    }

    /**
     * Set statType8
     *
     * @param boolean $statType8
     *
     * @return ItemTemplate
     */
    public function setStatType8($statType8)
    {
        $this->statType8 = $statType8;

        return $this;
    }

    /**
     * Get statType8
     *
     * @return boolean
     */
    public function getStatType8()
    {
        return $this->statType8;
    }

    /**
     * Set statValue8
     *
     * @param integer $statValue8
     *
     * @return ItemTemplate
     */
    public function setStatValue8($statValue8)
    {
        $this->statValue8 = $statValue8;

        return $this;
    }

    /**
     * Get statValue8
     *
     * @return integer
     */
    public function getStatValue8()
    {
        return $this->statValue8;
    }

    /**
     * Set statType9
     *
     * @param boolean $statType9
     *
     * @return ItemTemplate
     */
    public function setStatType9($statType9)
    {
        $this->statType9 = $statType9;

        return $this;
    }

    /**
     * Get statType9
     *
     * @return boolean
     */
    public function getStatType9()
    {
        return $this->statType9;
    }

    /**
     * Set statValue9
     *
     * @param integer $statValue9
     *
     * @return ItemTemplate
     */
    public function setStatValue9($statValue9)
    {
        $this->statValue9 = $statValue9;

        return $this;
    }

    /**
     * Get statValue9
     *
     * @return integer
     */
    public function getStatValue9()
    {
        return $this->statValue9;
    }

    /**
     * Set statType10
     *
     * @param boolean $statType10
     *
     * @return ItemTemplate
     */
    public function setStatType10($statType10)
    {
        $this->statType10 = $statType10;

        return $this;
    }

    /**
     * Get statType10
     *
     * @return boolean
     */
    public function getStatType10()
    {
        return $this->statType10;
    }

    /**
     * Set statValue10
     *
     * @param integer $statValue10
     *
     * @return ItemTemplate
     */
    public function setStatValue10($statValue10)
    {
        $this->statValue10 = $statValue10;

        return $this;
    }

    /**
     * Get statValue10
     *
     * @return integer
     */
    public function getStatValue10()
    {
        return $this->statValue10;
    }

    /**
     * Set scalingstatdistribution
     *
     * @param integer $scalingstatdistribution
     *
     * @return ItemTemplate
     */
    public function setScalingstatdistribution($scalingstatdistribution)
    {
        $this->scalingstatdistribution = $scalingstatdistribution;

        return $this;
    }

    /**
     * Get scalingstatdistribution
     *
     * @return integer
     */
    public function getScalingstatdistribution()
    {
        return $this->scalingstatdistribution;
    }

    /**
     * Set scalingstatvalue
     *
     * @param integer $scalingstatvalue
     *
     * @return ItemTemplate
     */
    public function setScalingstatvalue($scalingstatvalue)
    {
        $this->scalingstatvalue = $scalingstatvalue;

        return $this;
    }

    /**
     * Get scalingstatvalue
     *
     * @return integer
     */
    public function getScalingstatvalue()
    {
        return $this->scalingstatvalue;
    }

    /**
     * Set dmgMin1
     *
     * @param float $dmgMin1
     *
     * @return ItemTemplate
     */
    public function setDmgMin1($dmgMin1)
    {
        $this->dmgMin1 = $dmgMin1;

        return $this;
    }

    /**
     * Get dmgMin1
     *
     * @return float
     */
    public function getDmgMin1()
    {
        return $this->dmgMin1;
    }

    /**
     * Set dmgMax1
     *
     * @param float $dmgMax1
     *
     * @return ItemTemplate
     */
    public function setDmgMax1($dmgMax1)
    {
        $this->dmgMax1 = $dmgMax1;

        return $this;
    }

    /**
     * Get dmgMax1
     *
     * @return float
     */
    public function getDmgMax1()
    {
        return $this->dmgMax1;
    }

    /**
     * Set dmgType1
     *
     * @param boolean $dmgType1
     *
     * @return ItemTemplate
     */
    public function setDmgType1($dmgType1)
    {
        $this->dmgType1 = $dmgType1;

        return $this;
    }

    /**
     * Get dmgType1
     *
     * @return boolean
     */
    public function getDmgType1()
    {
        return $this->dmgType1;
    }

    /**
     * Set dmgMin2
     *
     * @param float $dmgMin2
     *
     * @return ItemTemplate
     */
    public function setDmgMin2($dmgMin2)
    {
        $this->dmgMin2 = $dmgMin2;

        return $this;
    }

    /**
     * Get dmgMin2
     *
     * @return float
     */
    public function getDmgMin2()
    {
        return $this->dmgMin2;
    }

    /**
     * Set dmgMax2
     *
     * @param float $dmgMax2
     *
     * @return ItemTemplate
     */
    public function setDmgMax2($dmgMax2)
    {
        $this->dmgMax2 = $dmgMax2;

        return $this;
    }

    /**
     * Get dmgMax2
     *
     * @return float
     */
    public function getDmgMax2()
    {
        return $this->dmgMax2;
    }

    /**
     * Set dmgType2
     *
     * @param boolean $dmgType2
     *
     * @return ItemTemplate
     */
    public function setDmgType2($dmgType2)
    {
        $this->dmgType2 = $dmgType2;

        return $this;
    }

    /**
     * Get dmgType2
     *
     * @return boolean
     */
    public function getDmgType2()
    {
        return $this->dmgType2;
    }

    /**
     * Set armor
     *
     * @param integer $armor
     *
     * @return ItemTemplate
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get armor
     *
     * @return integer
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set holyRes
     *
     * @param boolean $holyRes
     *
     * @return ItemTemplate
     */
    public function setHolyRes($holyRes)
    {
        $this->holyRes = $holyRes;

        return $this;
    }

    /**
     * Get holyRes
     *
     * @return boolean
     */
    public function getHolyRes()
    {
        return $this->holyRes;
    }

    /**
     * Set fireRes
     *
     * @param boolean $fireRes
     *
     * @return ItemTemplate
     */
    public function setFireRes($fireRes)
    {
        $this->fireRes = $fireRes;

        return $this;
    }

    /**
     * Get fireRes
     *
     * @return boolean
     */
    public function getFireRes()
    {
        return $this->fireRes;
    }

    /**
     * Set natureRes
     *
     * @param boolean $natureRes
     *
     * @return ItemTemplate
     */
    public function setNatureRes($natureRes)
    {
        $this->natureRes = $natureRes;

        return $this;
    }

    /**
     * Get natureRes
     *
     * @return boolean
     */
    public function getNatureRes()
    {
        return $this->natureRes;
    }

    /**
     * Set frostRes
     *
     * @param boolean $frostRes
     *
     * @return ItemTemplate
     */
    public function setFrostRes($frostRes)
    {
        $this->frostRes = $frostRes;

        return $this;
    }

    /**
     * Get frostRes
     *
     * @return boolean
     */
    public function getFrostRes()
    {
        return $this->frostRes;
    }

    /**
     * Set shadowRes
     *
     * @param boolean $shadowRes
     *
     * @return ItemTemplate
     */
    public function setShadowRes($shadowRes)
    {
        $this->shadowRes = $shadowRes;

        return $this;
    }

    /**
     * Get shadowRes
     *
     * @return boolean
     */
    public function getShadowRes()
    {
        return $this->shadowRes;
    }

    /**
     * Set arcaneRes
     *
     * @param boolean $arcaneRes
     *
     * @return ItemTemplate
     */
    public function setArcaneRes($arcaneRes)
    {
        $this->arcaneRes = $arcaneRes;

        return $this;
    }

    /**
     * Get arcaneRes
     *
     * @return boolean
     */
    public function getArcaneRes()
    {
        return $this->arcaneRes;
    }

    /**
     * Set delay
     *
     * @param integer $delay
     *
     * @return ItemTemplate
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;

        return $this;
    }

    /**
     * Get delay
     *
     * @return integer
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * Set ammoType
     *
     * @param boolean $ammoType
     *
     * @return ItemTemplate
     */
    public function setAmmoType($ammoType)
    {
        $this->ammoType = $ammoType;

        return $this;
    }

    /**
     * Get ammoType
     *
     * @return boolean
     */
    public function getAmmoType()
    {
        return $this->ammoType;
    }

    /**
     * Set rangedmodrange
     *
     * @param float $rangedmodrange
     *
     * @return ItemTemplate
     */
    public function setRangedmodrange($rangedmodrange)
    {
        $this->rangedmodrange = $rangedmodrange;

        return $this;
    }

    /**
     * Get rangedmodrange
     *
     * @return float
     */
    public function getRangedmodrange()
    {
        return $this->rangedmodrange;
    }

    /**
     * Set spellid1
     *
     * @param integer $spellid1
     *
     * @return ItemTemplate
     */
    public function setSpellid1($spellid1)
    {
        $this->spellid1 = $spellid1;

        return $this;
    }

    /**
     * Get spellid1
     *
     * @return integer
     */
    public function getSpellid1()
    {
        return $this->spellid1;
    }

    /**
     * Set spelltrigger1
     *
     * @param boolean $spelltrigger1
     *
     * @return ItemTemplate
     */
    public function setSpelltrigger1($spelltrigger1)
    {
        $this->spelltrigger1 = $spelltrigger1;

        return $this;
    }

    /**
     * Get spelltrigger1
     *
     * @return boolean
     */
    public function getSpelltrigger1()
    {
        return $this->spelltrigger1;
    }

    /**
     * Set spellcharges1
     *
     * @param integer $spellcharges1
     *
     * @return ItemTemplate
     */
    public function setSpellcharges1($spellcharges1)
    {
        $this->spellcharges1 = $spellcharges1;

        return $this;
    }

    /**
     * Get spellcharges1
     *
     * @return integer
     */
    public function getSpellcharges1()
    {
        return $this->spellcharges1;
    }

    /**
     * Set spellppmrate1
     *
     * @param float $spellppmrate1
     *
     * @return ItemTemplate
     */
    public function setSpellppmrate1($spellppmrate1)
    {
        $this->spellppmrate1 = $spellppmrate1;

        return $this;
    }

    /**
     * Get spellppmrate1
     *
     * @return float
     */
    public function getSpellppmrate1()
    {
        return $this->spellppmrate1;
    }

    /**
     * Set spellcooldown1
     *
     * @param integer $spellcooldown1
     *
     * @return ItemTemplate
     */
    public function setSpellcooldown1($spellcooldown1)
    {
        $this->spellcooldown1 = $spellcooldown1;

        return $this;
    }

    /**
     * Get spellcooldown1
     *
     * @return integer
     */
    public function getSpellcooldown1()
    {
        return $this->spellcooldown1;
    }

    /**
     * Set spellcategory1
     *
     * @param integer $spellcategory1
     *
     * @return ItemTemplate
     */
    public function setSpellcategory1($spellcategory1)
    {
        $this->spellcategory1 = $spellcategory1;

        return $this;
    }

    /**
     * Get spellcategory1
     *
     * @return integer
     */
    public function getSpellcategory1()
    {
        return $this->spellcategory1;
    }

    /**
     * Set spellcategorycooldown1
     *
     * @param integer $spellcategorycooldown1
     *
     * @return ItemTemplate
     */
    public function setSpellcategorycooldown1($spellcategorycooldown1)
    {
        $this->spellcategorycooldown1 = $spellcategorycooldown1;

        return $this;
    }

    /**
     * Get spellcategorycooldown1
     *
     * @return integer
     */
    public function getSpellcategorycooldown1()
    {
        return $this->spellcategorycooldown1;
    }

    /**
     * Set spellid2
     *
     * @param integer $spellid2
     *
     * @return ItemTemplate
     */
    public function setSpellid2($spellid2)
    {
        $this->spellid2 = $spellid2;

        return $this;
    }

    /**
     * Get spellid2
     *
     * @return integer
     */
    public function getSpellid2()
    {
        return $this->spellid2;
    }

    /**
     * Set spelltrigger2
     *
     * @param boolean $spelltrigger2
     *
     * @return ItemTemplate
     */
    public function setSpelltrigger2($spelltrigger2)
    {
        $this->spelltrigger2 = $spelltrigger2;

        return $this;
    }

    /**
     * Get spelltrigger2
     *
     * @return boolean
     */
    public function getSpelltrigger2()
    {
        return $this->spelltrigger2;
    }

    /**
     * Set spellcharges2
     *
     * @param integer $spellcharges2
     *
     * @return ItemTemplate
     */
    public function setSpellcharges2($spellcharges2)
    {
        $this->spellcharges2 = $spellcharges2;

        return $this;
    }

    /**
     * Get spellcharges2
     *
     * @return integer
     */
    public function getSpellcharges2()
    {
        return $this->spellcharges2;
    }

    /**
     * Set spellppmrate2
     *
     * @param float $spellppmrate2
     *
     * @return ItemTemplate
     */
    public function setSpellppmrate2($spellppmrate2)
    {
        $this->spellppmrate2 = $spellppmrate2;

        return $this;
    }

    /**
     * Get spellppmrate2
     *
     * @return float
     */
    public function getSpellppmrate2()
    {
        return $this->spellppmrate2;
    }

    /**
     * Set spellcooldown2
     *
     * @param integer $spellcooldown2
     *
     * @return ItemTemplate
     */
    public function setSpellcooldown2($spellcooldown2)
    {
        $this->spellcooldown2 = $spellcooldown2;

        return $this;
    }

    /**
     * Get spellcooldown2
     *
     * @return integer
     */
    public function getSpellcooldown2()
    {
        return $this->spellcooldown2;
    }

    /**
     * Set spellcategory2
     *
     * @param integer $spellcategory2
     *
     * @return ItemTemplate
     */
    public function setSpellcategory2($spellcategory2)
    {
        $this->spellcategory2 = $spellcategory2;

        return $this;
    }

    /**
     * Get spellcategory2
     *
     * @return integer
     */
    public function getSpellcategory2()
    {
        return $this->spellcategory2;
    }

    /**
     * Set spellcategorycooldown2
     *
     * @param integer $spellcategorycooldown2
     *
     * @return ItemTemplate
     */
    public function setSpellcategorycooldown2($spellcategorycooldown2)
    {
        $this->spellcategorycooldown2 = $spellcategorycooldown2;

        return $this;
    }

    /**
     * Get spellcategorycooldown2
     *
     * @return integer
     */
    public function getSpellcategorycooldown2()
    {
        return $this->spellcategorycooldown2;
    }

    /**
     * Set spellid3
     *
     * @param integer $spellid3
     *
     * @return ItemTemplate
     */
    public function setSpellid3($spellid3)
    {
        $this->spellid3 = $spellid3;

        return $this;
    }

    /**
     * Get spellid3
     *
     * @return integer
     */
    public function getSpellid3()
    {
        return $this->spellid3;
    }

    /**
     * Set spelltrigger3
     *
     * @param boolean $spelltrigger3
     *
     * @return ItemTemplate
     */
    public function setSpelltrigger3($spelltrigger3)
    {
        $this->spelltrigger3 = $spelltrigger3;

        return $this;
    }

    /**
     * Get spelltrigger3
     *
     * @return boolean
     */
    public function getSpelltrigger3()
    {
        return $this->spelltrigger3;
    }

    /**
     * Set spellcharges3
     *
     * @param integer $spellcharges3
     *
     * @return ItemTemplate
     */
    public function setSpellcharges3($spellcharges3)
    {
        $this->spellcharges3 = $spellcharges3;

        return $this;
    }

    /**
     * Get spellcharges3
     *
     * @return integer
     */
    public function getSpellcharges3()
    {
        return $this->spellcharges3;
    }

    /**
     * Set spellppmrate3
     *
     * @param float $spellppmrate3
     *
     * @return ItemTemplate
     */
    public function setSpellppmrate3($spellppmrate3)
    {
        $this->spellppmrate3 = $spellppmrate3;

        return $this;
    }

    /**
     * Get spellppmrate3
     *
     * @return float
     */
    public function getSpellppmrate3()
    {
        return $this->spellppmrate3;
    }

    /**
     * Set spellcooldown3
     *
     * @param integer $spellcooldown3
     *
     * @return ItemTemplate
     */
    public function setSpellcooldown3($spellcooldown3)
    {
        $this->spellcooldown3 = $spellcooldown3;

        return $this;
    }

    /**
     * Get spellcooldown3
     *
     * @return integer
     */
    public function getSpellcooldown3()
    {
        return $this->spellcooldown3;
    }

    /**
     * Set spellcategory3
     *
     * @param integer $spellcategory3
     *
     * @return ItemTemplate
     */
    public function setSpellcategory3($spellcategory3)
    {
        $this->spellcategory3 = $spellcategory3;

        return $this;
    }

    /**
     * Get spellcategory3
     *
     * @return integer
     */
    public function getSpellcategory3()
    {
        return $this->spellcategory3;
    }

    /**
     * Set spellcategorycooldown3
     *
     * @param integer $spellcategorycooldown3
     *
     * @return ItemTemplate
     */
    public function setSpellcategorycooldown3($spellcategorycooldown3)
    {
        $this->spellcategorycooldown3 = $spellcategorycooldown3;

        return $this;
    }

    /**
     * Get spellcategorycooldown3
     *
     * @return integer
     */
    public function getSpellcategorycooldown3()
    {
        return $this->spellcategorycooldown3;
    }

    /**
     * Set spellid4
     *
     * @param integer $spellid4
     *
     * @return ItemTemplate
     */
    public function setSpellid4($spellid4)
    {
        $this->spellid4 = $spellid4;

        return $this;
    }

    /**
     * Get spellid4
     *
     * @return integer
     */
    public function getSpellid4()
    {
        return $this->spellid4;
    }

    /**
     * Set spelltrigger4
     *
     * @param boolean $spelltrigger4
     *
     * @return ItemTemplate
     */
    public function setSpelltrigger4($spelltrigger4)
    {
        $this->spelltrigger4 = $spelltrigger4;

        return $this;
    }

    /**
     * Get spelltrigger4
     *
     * @return boolean
     */
    public function getSpelltrigger4()
    {
        return $this->spelltrigger4;
    }

    /**
     * Set spellcharges4
     *
     * @param integer $spellcharges4
     *
     * @return ItemTemplate
     */
    public function setSpellcharges4($spellcharges4)
    {
        $this->spellcharges4 = $spellcharges4;

        return $this;
    }

    /**
     * Get spellcharges4
     *
     * @return integer
     */
    public function getSpellcharges4()
    {
        return $this->spellcharges4;
    }

    /**
     * Set spellppmrate4
     *
     * @param float $spellppmrate4
     *
     * @return ItemTemplate
     */
    public function setSpellppmrate4($spellppmrate4)
    {
        $this->spellppmrate4 = $spellppmrate4;

        return $this;
    }

    /**
     * Get spellppmrate4
     *
     * @return float
     */
    public function getSpellppmrate4()
    {
        return $this->spellppmrate4;
    }

    /**
     * Set spellcooldown4
     *
     * @param integer $spellcooldown4
     *
     * @return ItemTemplate
     */
    public function setSpellcooldown4($spellcooldown4)
    {
        $this->spellcooldown4 = $spellcooldown4;

        return $this;
    }

    /**
     * Get spellcooldown4
     *
     * @return integer
     */
    public function getSpellcooldown4()
    {
        return $this->spellcooldown4;
    }

    /**
     * Set spellcategory4
     *
     * @param integer $spellcategory4
     *
     * @return ItemTemplate
     */
    public function setSpellcategory4($spellcategory4)
    {
        $this->spellcategory4 = $spellcategory4;

        return $this;
    }

    /**
     * Get spellcategory4
     *
     * @return integer
     */
    public function getSpellcategory4()
    {
        return $this->spellcategory4;
    }

    /**
     * Set spellcategorycooldown4
     *
     * @param integer $spellcategorycooldown4
     *
     * @return ItemTemplate
     */
    public function setSpellcategorycooldown4($spellcategorycooldown4)
    {
        $this->spellcategorycooldown4 = $spellcategorycooldown4;

        return $this;
    }

    /**
     * Get spellcategorycooldown4
     *
     * @return integer
     */
    public function getSpellcategorycooldown4()
    {
        return $this->spellcategorycooldown4;
    }

    /**
     * Set spellid5
     *
     * @param integer $spellid5
     *
     * @return ItemTemplate
     */
    public function setSpellid5($spellid5)
    {
        $this->spellid5 = $spellid5;

        return $this;
    }

    /**
     * Get spellid5
     *
     * @return integer
     */
    public function getSpellid5()
    {
        return $this->spellid5;
    }

    /**
     * Set spelltrigger5
     *
     * @param boolean $spelltrigger5
     *
     * @return ItemTemplate
     */
    public function setSpelltrigger5($spelltrigger5)
    {
        $this->spelltrigger5 = $spelltrigger5;

        return $this;
    }

    /**
     * Get spelltrigger5
     *
     * @return boolean
     */
    public function getSpelltrigger5()
    {
        return $this->spelltrigger5;
    }

    /**
     * Set spellcharges5
     *
     * @param integer $spellcharges5
     *
     * @return ItemTemplate
     */
    public function setSpellcharges5($spellcharges5)
    {
        $this->spellcharges5 = $spellcharges5;

        return $this;
    }

    /**
     * Get spellcharges5
     *
     * @return integer
     */
    public function getSpellcharges5()
    {
        return $this->spellcharges5;
    }

    /**
     * Set spellppmrate5
     *
     * @param float $spellppmrate5
     *
     * @return ItemTemplate
     */
    public function setSpellppmrate5($spellppmrate5)
    {
        $this->spellppmrate5 = $spellppmrate5;

        return $this;
    }

    /**
     * Get spellppmrate5
     *
     * @return float
     */
    public function getSpellppmrate5()
    {
        return $this->spellppmrate5;
    }

    /**
     * Set spellcooldown5
     *
     * @param integer $spellcooldown5
     *
     * @return ItemTemplate
     */
    public function setSpellcooldown5($spellcooldown5)
    {
        $this->spellcooldown5 = $spellcooldown5;

        return $this;
    }

    /**
     * Get spellcooldown5
     *
     * @return integer
     */
    public function getSpellcooldown5()
    {
        return $this->spellcooldown5;
    }

    /**
     * Set spellcategory5
     *
     * @param integer $spellcategory5
     *
     * @return ItemTemplate
     */
    public function setSpellcategory5($spellcategory5)
    {
        $this->spellcategory5 = $spellcategory5;

        return $this;
    }

    /**
     * Get spellcategory5
     *
     * @return integer
     */
    public function getSpellcategory5()
    {
        return $this->spellcategory5;
    }

    /**
     * Set spellcategorycooldown5
     *
     * @param integer $spellcategorycooldown5
     *
     * @return ItemTemplate
     */
    public function setSpellcategorycooldown5($spellcategorycooldown5)
    {
        $this->spellcategorycooldown5 = $spellcategorycooldown5;

        return $this;
    }

    /**
     * Get spellcategorycooldown5
     *
     * @return integer
     */
    public function getSpellcategorycooldown5()
    {
        return $this->spellcategorycooldown5;
    }

    /**
     * Set bonding
     *
     * @param boolean $bonding
     *
     * @return ItemTemplate
     */
    public function setBonding($bonding)
    {
        $this->bonding = $bonding;

        return $this;
    }

    /**
     * Get bonding
     *
     * @return boolean
     */
    public function getBonding()
    {
        return $this->bonding;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ItemTemplate
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pagetext
     *
     * @param integer $pagetext
     *
     * @return ItemTemplate
     */
    public function setPagetext($pagetext)
    {
        $this->pagetext = $pagetext;

        return $this;
    }

    /**
     * Get pagetext
     *
     * @return integer
     */
    public function getPagetext()
    {
        return $this->pagetext;
    }

    /**
     * Set languageid
     *
     * @param boolean $languageid
     *
     * @return ItemTemplate
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;

        return $this;
    }

    /**
     * Get languageid
     *
     * @return boolean
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }

    /**
     * Set pagematerial
     *
     * @param boolean $pagematerial
     *
     * @return ItemTemplate
     */
    public function setPagematerial($pagematerial)
    {
        $this->pagematerial = $pagematerial;

        return $this;
    }

    /**
     * Get pagematerial
     *
     * @return boolean
     */
    public function getPagematerial()
    {
        return $this->pagematerial;
    }

    /**
     * Set startquest
     *
     * @param integer $startquest
     *
     * @return ItemTemplate
     */
    public function setStartquest($startquest)
    {
        $this->startquest = $startquest;

        return $this;
    }

    /**
     * Get startquest
     *
     * @return integer
     */
    public function getStartquest()
    {
        return $this->startquest;
    }

    /**
     * Set lockid
     *
     * @param integer $lockid
     *
     * @return ItemTemplate
     */
    public function setLockid($lockid)
    {
        $this->lockid = $lockid;

        return $this;
    }

    /**
     * Get lockid
     *
     * @return integer
     */
    public function getLockid()
    {
        return $this->lockid;
    }

    /**
     * Set material
     *
     * @param boolean $material
     *
     * @return ItemTemplate
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return boolean
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set sheath
     *
     * @param boolean $sheath
     *
     * @return ItemTemplate
     */
    public function setSheath($sheath)
    {
        $this->sheath = $sheath;

        return $this;
    }

    /**
     * Get sheath
     *
     * @return boolean
     */
    public function getSheath()
    {
        return $this->sheath;
    }

    /**
     * Set randomproperty
     *
     * @param integer $randomproperty
     *
     * @return ItemTemplate
     */
    public function setRandomproperty($randomproperty)
    {
        $this->randomproperty = $randomproperty;

        return $this;
    }

    /**
     * Get randomproperty
     *
     * @return integer
     */
    public function getRandomproperty()
    {
        return $this->randomproperty;
    }

    /**
     * Set randomsuffix
     *
     * @param integer $randomsuffix
     *
     * @return ItemTemplate
     */
    public function setRandomsuffix($randomsuffix)
    {
        $this->randomsuffix = $randomsuffix;

        return $this;
    }

    /**
     * Get randomsuffix
     *
     * @return integer
     */
    public function getRandomsuffix()
    {
        return $this->randomsuffix;
    }

    /**
     * Set block
     *
     * @param integer $block
     *
     * @return ItemTemplate
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return integer
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set itemset
     *
     * @param integer $itemset
     *
     * @return ItemTemplate
     */
    public function setItemset($itemset)
    {
        $this->itemset = $itemset;

        return $this;
    }

    /**
     * Get itemset
     *
     * @return integer
     */
    public function getItemset()
    {
        return $this->itemset;
    }

    /**
     * Set maxdurability
     *
     * @param integer $maxdurability
     *
     * @return ItemTemplate
     */
    public function setMaxdurability($maxdurability)
    {
        $this->maxdurability = $maxdurability;

        return $this;
    }

    /**
     * Get maxdurability
     *
     * @return integer
     */
    public function getMaxdurability()
    {
        return $this->maxdurability;
    }

    /**
     * Set area
     *
     * @param integer $area
     *
     * @return ItemTemplate
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set map
     *
     * @param integer $map
     *
     * @return ItemTemplate
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set bagfamily
     *
     * @param integer $bagfamily
     *
     * @return ItemTemplate
     */
    public function setBagfamily($bagfamily)
    {
        $this->bagfamily = $bagfamily;

        return $this;
    }

    /**
     * Get bagfamily
     *
     * @return integer
     */
    public function getBagfamily()
    {
        return $this->bagfamily;
    }

    /**
     * Set totemcategory
     *
     * @param integer $totemcategory
     *
     * @return ItemTemplate
     */
    public function setTotemcategory($totemcategory)
    {
        $this->totemcategory = $totemcategory;

        return $this;
    }

    /**
     * Get totemcategory
     *
     * @return integer
     */
    public function getTotemcategory()
    {
        return $this->totemcategory;
    }

    /**
     * Set socketcolor1
     *
     * @param boolean $socketcolor1
     *
     * @return ItemTemplate
     */
    public function setSocketcolor1($socketcolor1)
    {
        $this->socketcolor1 = $socketcolor1;

        return $this;
    }

    /**
     * Get socketcolor1
     *
     * @return boolean
     */
    public function getSocketcolor1()
    {
        return $this->socketcolor1;
    }

    /**
     * Set socketcontent1
     *
     * @param integer $socketcontent1
     *
     * @return ItemTemplate
     */
    public function setSocketcontent1($socketcontent1)
    {
        $this->socketcontent1 = $socketcontent1;

        return $this;
    }

    /**
     * Get socketcontent1
     *
     * @return integer
     */
    public function getSocketcontent1()
    {
        return $this->socketcontent1;
    }

    /**
     * Set socketcolor2
     *
     * @param boolean $socketcolor2
     *
     * @return ItemTemplate
     */
    public function setSocketcolor2($socketcolor2)
    {
        $this->socketcolor2 = $socketcolor2;

        return $this;
    }

    /**
     * Get socketcolor2
     *
     * @return boolean
     */
    public function getSocketcolor2()
    {
        return $this->socketcolor2;
    }

    /**
     * Set socketcontent2
     *
     * @param integer $socketcontent2
     *
     * @return ItemTemplate
     */
    public function setSocketcontent2($socketcontent2)
    {
        $this->socketcontent2 = $socketcontent2;

        return $this;
    }

    /**
     * Get socketcontent2
     *
     * @return integer
     */
    public function getSocketcontent2()
    {
        return $this->socketcontent2;
    }

    /**
     * Set socketcolor3
     *
     * @param boolean $socketcolor3
     *
     * @return ItemTemplate
     */
    public function setSocketcolor3($socketcolor3)
    {
        $this->socketcolor3 = $socketcolor3;

        return $this;
    }

    /**
     * Get socketcolor3
     *
     * @return boolean
     */
    public function getSocketcolor3()
    {
        return $this->socketcolor3;
    }

    /**
     * Set socketcontent3
     *
     * @param integer $socketcontent3
     *
     * @return ItemTemplate
     */
    public function setSocketcontent3($socketcontent3)
    {
        $this->socketcontent3 = $socketcontent3;

        return $this;
    }

    /**
     * Get socketcontent3
     *
     * @return integer
     */
    public function getSocketcontent3()
    {
        return $this->socketcontent3;
    }

    /**
     * Set socketbonus
     *
     * @param integer $socketbonus
     *
     * @return ItemTemplate
     */
    public function setSocketbonus($socketbonus)
    {
        $this->socketbonus = $socketbonus;

        return $this;
    }

    /**
     * Get socketbonus
     *
     * @return integer
     */
    public function getSocketbonus()
    {
        return $this->socketbonus;
    }

    /**
     * Set gemproperties
     *
     * @param integer $gemproperties
     *
     * @return ItemTemplate
     */
    public function setGemproperties($gemproperties)
    {
        $this->gemproperties = $gemproperties;

        return $this;
    }

    /**
     * Get gemproperties
     *
     * @return integer
     */
    public function getGemproperties()
    {
        return $this->gemproperties;
    }

    /**
     * Set requireddisenchantskill
     *
     * @param integer $requireddisenchantskill
     *
     * @return ItemTemplate
     */
    public function setRequireddisenchantskill($requireddisenchantskill)
    {
        $this->requireddisenchantskill = $requireddisenchantskill;

        return $this;
    }

    /**
     * Get requireddisenchantskill
     *
     * @return integer
     */
    public function getRequireddisenchantskill()
    {
        return $this->requireddisenchantskill;
    }

    /**
     * Set armordamagemodifier
     *
     * @param float $armordamagemodifier
     *
     * @return ItemTemplate
     */
    public function setArmordamagemodifier($armordamagemodifier)
    {
        $this->armordamagemodifier = $armordamagemodifier;

        return $this;
    }

    /**
     * Get armordamagemodifier
     *
     * @return float
     */
    public function getArmordamagemodifier()
    {
        return $this->armordamagemodifier;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return ItemTemplate
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set itemlimitcategory
     *
     * @param integer $itemlimitcategory
     *
     * @return ItemTemplate
     */
    public function setItemlimitcategory($itemlimitcategory)
    {
        $this->itemlimitcategory = $itemlimitcategory;

        return $this;
    }

    /**
     * Get itemlimitcategory
     *
     * @return integer
     */
    public function getItemlimitcategory()
    {
        return $this->itemlimitcategory;
    }

    /**
     * Set holidayid
     *
     * @param integer $holidayid
     *
     * @return ItemTemplate
     */
    public function setHolidayid($holidayid)
    {
        $this->holidayid = $holidayid;

        return $this;
    }

    /**
     * Get holidayid
     *
     * @return integer
     */
    public function getHolidayid()
    {
        return $this->holidayid;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return ItemTemplate
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
     * Set disenchantid
     *
     * @param integer $disenchantid
     *
     * @return ItemTemplate
     */
    public function setDisenchantid($disenchantid)
    {
        $this->disenchantid = $disenchantid;

        return $this;
    }

    /**
     * Get disenchantid
     *
     * @return integer
     */
    public function getDisenchantid()
    {
        return $this->disenchantid;
    }

    /**
     * Set foodtype
     *
     * @param boolean $foodtype
     *
     * @return ItemTemplate
     */
    public function setFoodtype($foodtype)
    {
        $this->foodtype = $foodtype;

        return $this;
    }

    /**
     * Get foodtype
     *
     * @return boolean
     */
    public function getFoodtype()
    {
        return $this->foodtype;
    }

    /**
     * Set minmoneyloot
     *
     * @param integer $minmoneyloot
     *
     * @return ItemTemplate
     */
    public function setMinmoneyloot($minmoneyloot)
    {
        $this->minmoneyloot = $minmoneyloot;

        return $this;
    }

    /**
     * Get minmoneyloot
     *
     * @return integer
     */
    public function getMinmoneyloot()
    {
        return $this->minmoneyloot;
    }

    /**
     * Set maxmoneyloot
     *
     * @param integer $maxmoneyloot
     *
     * @return ItemTemplate
     */
    public function setMaxmoneyloot($maxmoneyloot)
    {
        $this->maxmoneyloot = $maxmoneyloot;

        return $this;
    }

    /**
     * Get maxmoneyloot
     *
     * @return integer
     */
    public function getMaxmoneyloot()
    {
        return $this->maxmoneyloot;
    }

    /**
     * Set flagscustom
     *
     * @param integer $flagscustom
     *
     * @return ItemTemplate
     */
    public function setFlagscustom($flagscustom)
    {
        $this->flagscustom = $flagscustom;

        return $this;
    }

    /**
     * Get flagscustom
     *
     * @return integer
     */
    public function getFlagscustom()
    {
        return $this->flagscustom;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return ItemTemplate
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
