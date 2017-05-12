<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellDbc
 *
 * @ORM\Table(name="spell_dbc")
 * @ORM\Entity
 */
class SpellDbc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Dispel", type="integer", nullable=false)
     */
    private $dispel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Mechanic", type="integer", nullable=false)
     */
    private $mechanic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Attributes", type="integer", nullable=false)
     */
    private $attributes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx", type="integer", nullable=false)
     */
    private $attributesex = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx2", type="integer", nullable=false)
     */
    private $attributesex2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx3", type="integer", nullable=false)
     */
    private $attributesex3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx4", type="integer", nullable=false)
     */
    private $attributesex4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx5", type="integer", nullable=false)
     */
    private $attributesex5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx6", type="integer", nullable=false)
     */
    private $attributesex6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesEx7", type="integer", nullable=false)
     */
    private $attributesex7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Stances", type="integer", nullable=false)
     */
    private $stances = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="StancesNot", type="integer", nullable=false)
     */
    private $stancesnot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Targets", type="integer", nullable=false)
     */
    private $targets = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CastingTimeIndex", type="integer", nullable=false)
     */
    private $castingtimeindex = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="AuraInterruptFlags", type="integer", nullable=false)
     */
    private $aurainterruptflags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ProcFlags", type="integer", nullable=false)
     */
    private $procflags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ProcChance", type="integer", nullable=false)
     */
    private $procchance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ProcCharges", type="integer", nullable=false)
     */
    private $proccharges = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxLevel", type="integer", nullable=false)
     */
    private $maxlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BaseLevel", type="integer", nullable=false)
     */
    private $baselevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellLevel", type="integer", nullable=false)
     */
    private $spelllevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DurationIndex", type="integer", nullable=false)
     */
    private $durationindex = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RangeIndex", type="integer", nullable=false)
     */
    private $rangeindex = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="StackAmount", type="integer", nullable=false)
     */
    private $stackamount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EquippedItemClass", type="integer", nullable=false)
     */
    private $equippeditemclass = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="EquippedItemSubClassMask", type="integer", nullable=false)
     */
    private $equippeditemsubclassmask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EquippedItemInventoryTypeMask", type="integer", nullable=false)
     */
    private $equippediteminventorytypemask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Effect1", type="integer", nullable=false)
     */
    private $effect1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Effect2", type="integer", nullable=false)
     */
    private $effect2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Effect3", type="integer", nullable=false)
     */
    private $effect3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectDieSides1", type="integer", nullable=false)
     */
    private $effectdiesides1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectDieSides2", type="integer", nullable=false)
     */
    private $effectdiesides2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectDieSides3", type="integer", nullable=false)
     */
    private $effectdiesides3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EffectRealPointsPerLevel1", type="float", precision=10, scale=0, nullable=false)
     */
    private $effectrealpointsperlevel1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EffectRealPointsPerLevel2", type="float", precision=10, scale=0, nullable=false)
     */
    private $effectrealpointsperlevel2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EffectRealPointsPerLevel3", type="float", precision=10, scale=0, nullable=false)
     */
    private $effectrealpointsperlevel3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectBasePoints1", type="integer", nullable=false)
     */
    private $effectbasepoints1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectBasePoints2", type="integer", nullable=false)
     */
    private $effectbasepoints2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectBasePoints3", type="integer", nullable=false)
     */
    private $effectbasepoints3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMechanic1", type="integer", nullable=false)
     */
    private $effectmechanic1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMechanic2", type="integer", nullable=false)
     */
    private $effectmechanic2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMechanic3", type="integer", nullable=false)
     */
    private $effectmechanic3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectImplicitTargetA1", type="integer", nullable=false)
     */
    private $effectimplicittargeta1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectImplicitTargetA2", type="integer", nullable=false)
     */
    private $effectimplicittargeta2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectImplicitTargetA3", type="integer", nullable=false)
     */
    private $effectimplicittargeta3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectImplicitTargetB1", type="integer", nullable=false)
     */
    private $effectimplicittargetb1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectImplicitTargetB2", type="integer", nullable=false)
     */
    private $effectimplicittargetb2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectImplicitTargetB3", type="integer", nullable=false)
     */
    private $effectimplicittargetb3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectRadiusIndex1", type="integer", nullable=false)
     */
    private $effectradiusindex1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectRadiusIndex2", type="integer", nullable=false)
     */
    private $effectradiusindex2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectRadiusIndex3", type="integer", nullable=false)
     */
    private $effectradiusindex3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectApplyAuraName1", type="integer", nullable=false)
     */
    private $effectapplyauraname1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectApplyAuraName2", type="integer", nullable=false)
     */
    private $effectapplyauraname2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectApplyAuraName3", type="integer", nullable=false)
     */
    private $effectapplyauraname3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectAmplitude1", type="integer", nullable=false)
     */
    private $effectamplitude1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectAmplitude2", type="integer", nullable=false)
     */
    private $effectamplitude2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectAmplitude3", type="integer", nullable=false)
     */
    private $effectamplitude3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EffectMultipleValue1", type="float", precision=10, scale=0, nullable=false)
     */
    private $effectmultiplevalue1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EffectMultipleValue2", type="float", precision=10, scale=0, nullable=false)
     */
    private $effectmultiplevalue2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="EffectMultipleValue3", type="float", precision=10, scale=0, nullable=false)
     */
    private $effectmultiplevalue3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectItemType1", type="integer", nullable=false)
     */
    private $effectitemtype1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectItemType2", type="integer", nullable=false)
     */
    private $effectitemtype2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectItemType3", type="integer", nullable=false)
     */
    private $effectitemtype3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMiscValue1", type="integer", nullable=false)
     */
    private $effectmiscvalue1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMiscValue2", type="integer", nullable=false)
     */
    private $effectmiscvalue2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMiscValue3", type="integer", nullable=false)
     */
    private $effectmiscvalue3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMiscValueB1", type="integer", nullable=false)
     */
    private $effectmiscvalueb1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMiscValueB2", type="integer", nullable=false)
     */
    private $effectmiscvalueb2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectMiscValueB3", type="integer", nullable=false)
     */
    private $effectmiscvalueb3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectTriggerSpell1", type="integer", nullable=false)
     */
    private $effecttriggerspell1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectTriggerSpell2", type="integer", nullable=false)
     */
    private $effecttriggerspell2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectTriggerSpell3", type="integer", nullable=false)
     */
    private $effecttriggerspell3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskA1", type="integer", nullable=false)
     */
    private $effectspellclassmaska1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskA2", type="integer", nullable=false)
     */
    private $effectspellclassmaska2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskA3", type="integer", nullable=false)
     */
    private $effectspellclassmaska3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskB1", type="integer", nullable=false)
     */
    private $effectspellclassmaskb1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskB2", type="integer", nullable=false)
     */
    private $effectspellclassmaskb2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskB3", type="integer", nullable=false)
     */
    private $effectspellclassmaskb3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskC1", type="integer", nullable=false)
     */
    private $effectspellclassmaskc1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskC2", type="integer", nullable=false)
     */
    private $effectspellclassmaskc2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EffectSpellClassMaskC3", type="integer", nullable=false)
     */
    private $effectspellclassmaskc3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxTargetLevel", type="integer", nullable=false)
     */
    private $maxtargetlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyName", type="integer", nullable=false)
     */
    private $spellfamilyname = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyFlags1", type="integer", nullable=false)
     */
    private $spellfamilyflags1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyFlags2", type="integer", nullable=false)
     */
    private $spellfamilyflags2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyFlags3", type="integer", nullable=false)
     */
    private $spellfamilyflags3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxAffectedTargets", type="integer", nullable=false)
     */
    private $maxaffectedtargets = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DmgClass", type="integer", nullable=false)
     */
    private $dmgclass = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PreventionType", type="integer", nullable=false)
     */
    private $preventiontype = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="DmgMultiplier1", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgmultiplier1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="DmgMultiplier2", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgmultiplier2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="DmgMultiplier3", type="float", precision=10, scale=0, nullable=false)
     */
    private $dmgmultiplier3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AreaGroupId", type="integer", nullable=false)
     */
    private $areagroupid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SchoolMask", type="integer", nullable=false)
     */
    private $schoolmask = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set dispel
     *
     * @param integer $dispel
     *
     * @return SpellDbc
     */
    public function setDispel($dispel)
    {
        $this->dispel = $dispel;

        return $this;
    }

    /**
     * Get dispel
     *
     * @return integer
     */
    public function getDispel()
    {
        return $this->dispel;
    }

    /**
     * Set mechanic
     *
     * @param integer $mechanic
     *
     * @return SpellDbc
     */
    public function setMechanic($mechanic)
    {
        $this->mechanic = $mechanic;

        return $this;
    }

    /**
     * Get mechanic
     *
     * @return integer
     */
    public function getMechanic()
    {
        return $this->mechanic;
    }

    /**
     * Set attributes
     *
     * @param integer $attributes
     *
     * @return SpellDbc
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return integer
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set attributesex
     *
     * @param integer $attributesex
     *
     * @return SpellDbc
     */
    public function setAttributesex($attributesex)
    {
        $this->attributesex = $attributesex;

        return $this;
    }

    /**
     * Get attributesex
     *
     * @return integer
     */
    public function getAttributesex()
    {
        return $this->attributesex;
    }

    /**
     * Set attributesex2
     *
     * @param integer $attributesex2
     *
     * @return SpellDbc
     */
    public function setAttributesex2($attributesex2)
    {
        $this->attributesex2 = $attributesex2;

        return $this;
    }

    /**
     * Get attributesex2
     *
     * @return integer
     */
    public function getAttributesex2()
    {
        return $this->attributesex2;
    }

    /**
     * Set attributesex3
     *
     * @param integer $attributesex3
     *
     * @return SpellDbc
     */
    public function setAttributesex3($attributesex3)
    {
        $this->attributesex3 = $attributesex3;

        return $this;
    }

    /**
     * Get attributesex3
     *
     * @return integer
     */
    public function getAttributesex3()
    {
        return $this->attributesex3;
    }

    /**
     * Set attributesex4
     *
     * @param integer $attributesex4
     *
     * @return SpellDbc
     */
    public function setAttributesex4($attributesex4)
    {
        $this->attributesex4 = $attributesex4;

        return $this;
    }

    /**
     * Get attributesex4
     *
     * @return integer
     */
    public function getAttributesex4()
    {
        return $this->attributesex4;
    }

    /**
     * Set attributesex5
     *
     * @param integer $attributesex5
     *
     * @return SpellDbc
     */
    public function setAttributesex5($attributesex5)
    {
        $this->attributesex5 = $attributesex5;

        return $this;
    }

    /**
     * Get attributesex5
     *
     * @return integer
     */
    public function getAttributesex5()
    {
        return $this->attributesex5;
    }

    /**
     * Set attributesex6
     *
     * @param integer $attributesex6
     *
     * @return SpellDbc
     */
    public function setAttributesex6($attributesex6)
    {
        $this->attributesex6 = $attributesex6;

        return $this;
    }

    /**
     * Get attributesex6
     *
     * @return integer
     */
    public function getAttributesex6()
    {
        return $this->attributesex6;
    }

    /**
     * Set attributesex7
     *
     * @param integer $attributesex7
     *
     * @return SpellDbc
     */
    public function setAttributesex7($attributesex7)
    {
        $this->attributesex7 = $attributesex7;

        return $this;
    }

    /**
     * Get attributesex7
     *
     * @return integer
     */
    public function getAttributesex7()
    {
        return $this->attributesex7;
    }

    /**
     * Set stances
     *
     * @param integer $stances
     *
     * @return SpellDbc
     */
    public function setStances($stances)
    {
        $this->stances = $stances;

        return $this;
    }

    /**
     * Get stances
     *
     * @return integer
     */
    public function getStances()
    {
        return $this->stances;
    }

    /**
     * Set stancesnot
     *
     * @param integer $stancesnot
     *
     * @return SpellDbc
     */
    public function setStancesnot($stancesnot)
    {
        $this->stancesnot = $stancesnot;

        return $this;
    }

    /**
     * Get stancesnot
     *
     * @return integer
     */
    public function getStancesnot()
    {
        return $this->stancesnot;
    }

    /**
     * Set targets
     *
     * @param integer $targets
     *
     * @return SpellDbc
     */
    public function setTargets($targets)
    {
        $this->targets = $targets;

        return $this;
    }

    /**
     * Get targets
     *
     * @return integer
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * Set castingtimeindex
     *
     * @param integer $castingtimeindex
     *
     * @return SpellDbc
     */
    public function setCastingtimeindex($castingtimeindex)
    {
        $this->castingtimeindex = $castingtimeindex;

        return $this;
    }

    /**
     * Get castingtimeindex
     *
     * @return integer
     */
    public function getCastingtimeindex()
    {
        return $this->castingtimeindex;
    }

    /**
     * Set aurainterruptflags
     *
     * @param integer $aurainterruptflags
     *
     * @return SpellDbc
     */
    public function setAurainterruptflags($aurainterruptflags)
    {
        $this->aurainterruptflags = $aurainterruptflags;

        return $this;
    }

    /**
     * Get aurainterruptflags
     *
     * @return integer
     */
    public function getAurainterruptflags()
    {
        return $this->aurainterruptflags;
    }

    /**
     * Set procflags
     *
     * @param integer $procflags
     *
     * @return SpellDbc
     */
    public function setProcflags($procflags)
    {
        $this->procflags = $procflags;

        return $this;
    }

    /**
     * Get procflags
     *
     * @return integer
     */
    public function getProcflags()
    {
        return $this->procflags;
    }

    /**
     * Set procchance
     *
     * @param integer $procchance
     *
     * @return SpellDbc
     */
    public function setProcchance($procchance)
    {
        $this->procchance = $procchance;

        return $this;
    }

    /**
     * Get procchance
     *
     * @return integer
     */
    public function getProcchance()
    {
        return $this->procchance;
    }

    /**
     * Set proccharges
     *
     * @param integer $proccharges
     *
     * @return SpellDbc
     */
    public function setProccharges($proccharges)
    {
        $this->proccharges = $proccharges;

        return $this;
    }

    /**
     * Get proccharges
     *
     * @return integer
     */
    public function getProccharges()
    {
        return $this->proccharges;
    }

    /**
     * Set maxlevel
     *
     * @param integer $maxlevel
     *
     * @return SpellDbc
     */
    public function setMaxlevel($maxlevel)
    {
        $this->maxlevel = $maxlevel;

        return $this;
    }

    /**
     * Get maxlevel
     *
     * @return integer
     */
    public function getMaxlevel()
    {
        return $this->maxlevel;
    }

    /**
     * Set baselevel
     *
     * @param integer $baselevel
     *
     * @return SpellDbc
     */
    public function setBaselevel($baselevel)
    {
        $this->baselevel = $baselevel;

        return $this;
    }

    /**
     * Get baselevel
     *
     * @return integer
     */
    public function getBaselevel()
    {
        return $this->baselevel;
    }

    /**
     * Set spelllevel
     *
     * @param integer $spelllevel
     *
     * @return SpellDbc
     */
    public function setSpelllevel($spelllevel)
    {
        $this->spelllevel = $spelllevel;

        return $this;
    }

    /**
     * Get spelllevel
     *
     * @return integer
     */
    public function getSpelllevel()
    {
        return $this->spelllevel;
    }

    /**
     * Set durationindex
     *
     * @param integer $durationindex
     *
     * @return SpellDbc
     */
    public function setDurationindex($durationindex)
    {
        $this->durationindex = $durationindex;

        return $this;
    }

    /**
     * Get durationindex
     *
     * @return integer
     */
    public function getDurationindex()
    {
        return $this->durationindex;
    }

    /**
     * Set rangeindex
     *
     * @param integer $rangeindex
     *
     * @return SpellDbc
     */
    public function setRangeindex($rangeindex)
    {
        $this->rangeindex = $rangeindex;

        return $this;
    }

    /**
     * Get rangeindex
     *
     * @return integer
     */
    public function getRangeindex()
    {
        return $this->rangeindex;
    }

    /**
     * Set stackamount
     *
     * @param integer $stackamount
     *
     * @return SpellDbc
     */
    public function setStackamount($stackamount)
    {
        $this->stackamount = $stackamount;

        return $this;
    }

    /**
     * Get stackamount
     *
     * @return integer
     */
    public function getStackamount()
    {
        return $this->stackamount;
    }

    /**
     * Set equippeditemclass
     *
     * @param integer $equippeditemclass
     *
     * @return SpellDbc
     */
    public function setEquippeditemclass($equippeditemclass)
    {
        $this->equippeditemclass = $equippeditemclass;

        return $this;
    }

    /**
     * Get equippeditemclass
     *
     * @return integer
     */
    public function getEquippeditemclass()
    {
        return $this->equippeditemclass;
    }

    /**
     * Set equippeditemsubclassmask
     *
     * @param integer $equippeditemsubclassmask
     *
     * @return SpellDbc
     */
    public function setEquippeditemsubclassmask($equippeditemsubclassmask)
    {
        $this->equippeditemsubclassmask = $equippeditemsubclassmask;

        return $this;
    }

    /**
     * Get equippeditemsubclassmask
     *
     * @return integer
     */
    public function getEquippeditemsubclassmask()
    {
        return $this->equippeditemsubclassmask;
    }

    /**
     * Set equippediteminventorytypemask
     *
     * @param integer $equippediteminventorytypemask
     *
     * @return SpellDbc
     */
    public function setEquippediteminventorytypemask($equippediteminventorytypemask)
    {
        $this->equippediteminventorytypemask = $equippediteminventorytypemask;

        return $this;
    }

    /**
     * Get equippediteminventorytypemask
     *
     * @return integer
     */
    public function getEquippediteminventorytypemask()
    {
        return $this->equippediteminventorytypemask;
    }

    /**
     * Set effect1
     *
     * @param integer $effect1
     *
     * @return SpellDbc
     */
    public function setEffect1($effect1)
    {
        $this->effect1 = $effect1;

        return $this;
    }

    /**
     * Get effect1
     *
     * @return integer
     */
    public function getEffect1()
    {
        return $this->effect1;
    }

    /**
     * Set effect2
     *
     * @param integer $effect2
     *
     * @return SpellDbc
     */
    public function setEffect2($effect2)
    {
        $this->effect2 = $effect2;

        return $this;
    }

    /**
     * Get effect2
     *
     * @return integer
     */
    public function getEffect2()
    {
        return $this->effect2;
    }

    /**
     * Set effect3
     *
     * @param integer $effect3
     *
     * @return SpellDbc
     */
    public function setEffect3($effect3)
    {
        $this->effect3 = $effect3;

        return $this;
    }

    /**
     * Get effect3
     *
     * @return integer
     */
    public function getEffect3()
    {
        return $this->effect3;
    }

    /**
     * Set effectdiesides1
     *
     * @param integer $effectdiesides1
     *
     * @return SpellDbc
     */
    public function setEffectdiesides1($effectdiesides1)
    {
        $this->effectdiesides1 = $effectdiesides1;

        return $this;
    }

    /**
     * Get effectdiesides1
     *
     * @return integer
     */
    public function getEffectdiesides1()
    {
        return $this->effectdiesides1;
    }

    /**
     * Set effectdiesides2
     *
     * @param integer $effectdiesides2
     *
     * @return SpellDbc
     */
    public function setEffectdiesides2($effectdiesides2)
    {
        $this->effectdiesides2 = $effectdiesides2;

        return $this;
    }

    /**
     * Get effectdiesides2
     *
     * @return integer
     */
    public function getEffectdiesides2()
    {
        return $this->effectdiesides2;
    }

    /**
     * Set effectdiesides3
     *
     * @param integer $effectdiesides3
     *
     * @return SpellDbc
     */
    public function setEffectdiesides3($effectdiesides3)
    {
        $this->effectdiesides3 = $effectdiesides3;

        return $this;
    }

    /**
     * Get effectdiesides3
     *
     * @return integer
     */
    public function getEffectdiesides3()
    {
        return $this->effectdiesides3;
    }

    /**
     * Set effectrealpointsperlevel1
     *
     * @param float $effectrealpointsperlevel1
     *
     * @return SpellDbc
     */
    public function setEffectrealpointsperlevel1($effectrealpointsperlevel1)
    {
        $this->effectrealpointsperlevel1 = $effectrealpointsperlevel1;

        return $this;
    }

    /**
     * Get effectrealpointsperlevel1
     *
     * @return float
     */
    public function getEffectrealpointsperlevel1()
    {
        return $this->effectrealpointsperlevel1;
    }

    /**
     * Set effectrealpointsperlevel2
     *
     * @param float $effectrealpointsperlevel2
     *
     * @return SpellDbc
     */
    public function setEffectrealpointsperlevel2($effectrealpointsperlevel2)
    {
        $this->effectrealpointsperlevel2 = $effectrealpointsperlevel2;

        return $this;
    }

    /**
     * Get effectrealpointsperlevel2
     *
     * @return float
     */
    public function getEffectrealpointsperlevel2()
    {
        return $this->effectrealpointsperlevel2;
    }

    /**
     * Set effectrealpointsperlevel3
     *
     * @param float $effectrealpointsperlevel3
     *
     * @return SpellDbc
     */
    public function setEffectrealpointsperlevel3($effectrealpointsperlevel3)
    {
        $this->effectrealpointsperlevel3 = $effectrealpointsperlevel3;

        return $this;
    }

    /**
     * Get effectrealpointsperlevel3
     *
     * @return float
     */
    public function getEffectrealpointsperlevel3()
    {
        return $this->effectrealpointsperlevel3;
    }

    /**
     * Set effectbasepoints1
     *
     * @param integer $effectbasepoints1
     *
     * @return SpellDbc
     */
    public function setEffectbasepoints1($effectbasepoints1)
    {
        $this->effectbasepoints1 = $effectbasepoints1;

        return $this;
    }

    /**
     * Get effectbasepoints1
     *
     * @return integer
     */
    public function getEffectbasepoints1()
    {
        return $this->effectbasepoints1;
    }

    /**
     * Set effectbasepoints2
     *
     * @param integer $effectbasepoints2
     *
     * @return SpellDbc
     */
    public function setEffectbasepoints2($effectbasepoints2)
    {
        $this->effectbasepoints2 = $effectbasepoints2;

        return $this;
    }

    /**
     * Get effectbasepoints2
     *
     * @return integer
     */
    public function getEffectbasepoints2()
    {
        return $this->effectbasepoints2;
    }

    /**
     * Set effectbasepoints3
     *
     * @param integer $effectbasepoints3
     *
     * @return SpellDbc
     */
    public function setEffectbasepoints3($effectbasepoints3)
    {
        $this->effectbasepoints3 = $effectbasepoints3;

        return $this;
    }

    /**
     * Get effectbasepoints3
     *
     * @return integer
     */
    public function getEffectbasepoints3()
    {
        return $this->effectbasepoints3;
    }

    /**
     * Set effectmechanic1
     *
     * @param integer $effectmechanic1
     *
     * @return SpellDbc
     */
    public function setEffectmechanic1($effectmechanic1)
    {
        $this->effectmechanic1 = $effectmechanic1;

        return $this;
    }

    /**
     * Get effectmechanic1
     *
     * @return integer
     */
    public function getEffectmechanic1()
    {
        return $this->effectmechanic1;
    }

    /**
     * Set effectmechanic2
     *
     * @param integer $effectmechanic2
     *
     * @return SpellDbc
     */
    public function setEffectmechanic2($effectmechanic2)
    {
        $this->effectmechanic2 = $effectmechanic2;

        return $this;
    }

    /**
     * Get effectmechanic2
     *
     * @return integer
     */
    public function getEffectmechanic2()
    {
        return $this->effectmechanic2;
    }

    /**
     * Set effectmechanic3
     *
     * @param integer $effectmechanic3
     *
     * @return SpellDbc
     */
    public function setEffectmechanic3($effectmechanic3)
    {
        $this->effectmechanic3 = $effectmechanic3;

        return $this;
    }

    /**
     * Get effectmechanic3
     *
     * @return integer
     */
    public function getEffectmechanic3()
    {
        return $this->effectmechanic3;
    }

    /**
     * Set effectimplicittargeta1
     *
     * @param integer $effectimplicittargeta1
     *
     * @return SpellDbc
     */
    public function setEffectimplicittargeta1($effectimplicittargeta1)
    {
        $this->effectimplicittargeta1 = $effectimplicittargeta1;

        return $this;
    }

    /**
     * Get effectimplicittargeta1
     *
     * @return integer
     */
    public function getEffectimplicittargeta1()
    {
        return $this->effectimplicittargeta1;
    }

    /**
     * Set effectimplicittargeta2
     *
     * @param integer $effectimplicittargeta2
     *
     * @return SpellDbc
     */
    public function setEffectimplicittargeta2($effectimplicittargeta2)
    {
        $this->effectimplicittargeta2 = $effectimplicittargeta2;

        return $this;
    }

    /**
     * Get effectimplicittargeta2
     *
     * @return integer
     */
    public function getEffectimplicittargeta2()
    {
        return $this->effectimplicittargeta2;
    }

    /**
     * Set effectimplicittargeta3
     *
     * @param integer $effectimplicittargeta3
     *
     * @return SpellDbc
     */
    public function setEffectimplicittargeta3($effectimplicittargeta3)
    {
        $this->effectimplicittargeta3 = $effectimplicittargeta3;

        return $this;
    }

    /**
     * Get effectimplicittargeta3
     *
     * @return integer
     */
    public function getEffectimplicittargeta3()
    {
        return $this->effectimplicittargeta3;
    }

    /**
     * Set effectimplicittargetb1
     *
     * @param integer $effectimplicittargetb1
     *
     * @return SpellDbc
     */
    public function setEffectimplicittargetb1($effectimplicittargetb1)
    {
        $this->effectimplicittargetb1 = $effectimplicittargetb1;

        return $this;
    }

    /**
     * Get effectimplicittargetb1
     *
     * @return integer
     */
    public function getEffectimplicittargetb1()
    {
        return $this->effectimplicittargetb1;
    }

    /**
     * Set effectimplicittargetb2
     *
     * @param integer $effectimplicittargetb2
     *
     * @return SpellDbc
     */
    public function setEffectimplicittargetb2($effectimplicittargetb2)
    {
        $this->effectimplicittargetb2 = $effectimplicittargetb2;

        return $this;
    }

    /**
     * Get effectimplicittargetb2
     *
     * @return integer
     */
    public function getEffectimplicittargetb2()
    {
        return $this->effectimplicittargetb2;
    }

    /**
     * Set effectimplicittargetb3
     *
     * @param integer $effectimplicittargetb3
     *
     * @return SpellDbc
     */
    public function setEffectimplicittargetb3($effectimplicittargetb3)
    {
        $this->effectimplicittargetb3 = $effectimplicittargetb3;

        return $this;
    }

    /**
     * Get effectimplicittargetb3
     *
     * @return integer
     */
    public function getEffectimplicittargetb3()
    {
        return $this->effectimplicittargetb3;
    }

    /**
     * Set effectradiusindex1
     *
     * @param integer $effectradiusindex1
     *
     * @return SpellDbc
     */
    public function setEffectradiusindex1($effectradiusindex1)
    {
        $this->effectradiusindex1 = $effectradiusindex1;

        return $this;
    }

    /**
     * Get effectradiusindex1
     *
     * @return integer
     */
    public function getEffectradiusindex1()
    {
        return $this->effectradiusindex1;
    }

    /**
     * Set effectradiusindex2
     *
     * @param integer $effectradiusindex2
     *
     * @return SpellDbc
     */
    public function setEffectradiusindex2($effectradiusindex2)
    {
        $this->effectradiusindex2 = $effectradiusindex2;

        return $this;
    }

    /**
     * Get effectradiusindex2
     *
     * @return integer
     */
    public function getEffectradiusindex2()
    {
        return $this->effectradiusindex2;
    }

    /**
     * Set effectradiusindex3
     *
     * @param integer $effectradiusindex3
     *
     * @return SpellDbc
     */
    public function setEffectradiusindex3($effectradiusindex3)
    {
        $this->effectradiusindex3 = $effectradiusindex3;

        return $this;
    }

    /**
     * Get effectradiusindex3
     *
     * @return integer
     */
    public function getEffectradiusindex3()
    {
        return $this->effectradiusindex3;
    }

    /**
     * Set effectapplyauraname1
     *
     * @param integer $effectapplyauraname1
     *
     * @return SpellDbc
     */
    public function setEffectapplyauraname1($effectapplyauraname1)
    {
        $this->effectapplyauraname1 = $effectapplyauraname1;

        return $this;
    }

    /**
     * Get effectapplyauraname1
     *
     * @return integer
     */
    public function getEffectapplyauraname1()
    {
        return $this->effectapplyauraname1;
    }

    /**
     * Set effectapplyauraname2
     *
     * @param integer $effectapplyauraname2
     *
     * @return SpellDbc
     */
    public function setEffectapplyauraname2($effectapplyauraname2)
    {
        $this->effectapplyauraname2 = $effectapplyauraname2;

        return $this;
    }

    /**
     * Get effectapplyauraname2
     *
     * @return integer
     */
    public function getEffectapplyauraname2()
    {
        return $this->effectapplyauraname2;
    }

    /**
     * Set effectapplyauraname3
     *
     * @param integer $effectapplyauraname3
     *
     * @return SpellDbc
     */
    public function setEffectapplyauraname3($effectapplyauraname3)
    {
        $this->effectapplyauraname3 = $effectapplyauraname3;

        return $this;
    }

    /**
     * Get effectapplyauraname3
     *
     * @return integer
     */
    public function getEffectapplyauraname3()
    {
        return $this->effectapplyauraname3;
    }

    /**
     * Set effectamplitude1
     *
     * @param integer $effectamplitude1
     *
     * @return SpellDbc
     */
    public function setEffectamplitude1($effectamplitude1)
    {
        $this->effectamplitude1 = $effectamplitude1;

        return $this;
    }

    /**
     * Get effectamplitude1
     *
     * @return integer
     */
    public function getEffectamplitude1()
    {
        return $this->effectamplitude1;
    }

    /**
     * Set effectamplitude2
     *
     * @param integer $effectamplitude2
     *
     * @return SpellDbc
     */
    public function setEffectamplitude2($effectamplitude2)
    {
        $this->effectamplitude2 = $effectamplitude2;

        return $this;
    }

    /**
     * Get effectamplitude2
     *
     * @return integer
     */
    public function getEffectamplitude2()
    {
        return $this->effectamplitude2;
    }

    /**
     * Set effectamplitude3
     *
     * @param integer $effectamplitude3
     *
     * @return SpellDbc
     */
    public function setEffectamplitude3($effectamplitude3)
    {
        $this->effectamplitude3 = $effectamplitude3;

        return $this;
    }

    /**
     * Get effectamplitude3
     *
     * @return integer
     */
    public function getEffectamplitude3()
    {
        return $this->effectamplitude3;
    }

    /**
     * Set effectmultiplevalue1
     *
     * @param float $effectmultiplevalue1
     *
     * @return SpellDbc
     */
    public function setEffectmultiplevalue1($effectmultiplevalue1)
    {
        $this->effectmultiplevalue1 = $effectmultiplevalue1;

        return $this;
    }

    /**
     * Get effectmultiplevalue1
     *
     * @return float
     */
    public function getEffectmultiplevalue1()
    {
        return $this->effectmultiplevalue1;
    }

    /**
     * Set effectmultiplevalue2
     *
     * @param float $effectmultiplevalue2
     *
     * @return SpellDbc
     */
    public function setEffectmultiplevalue2($effectmultiplevalue2)
    {
        $this->effectmultiplevalue2 = $effectmultiplevalue2;

        return $this;
    }

    /**
     * Get effectmultiplevalue2
     *
     * @return float
     */
    public function getEffectmultiplevalue2()
    {
        return $this->effectmultiplevalue2;
    }

    /**
     * Set effectmultiplevalue3
     *
     * @param float $effectmultiplevalue3
     *
     * @return SpellDbc
     */
    public function setEffectmultiplevalue3($effectmultiplevalue3)
    {
        $this->effectmultiplevalue3 = $effectmultiplevalue3;

        return $this;
    }

    /**
     * Get effectmultiplevalue3
     *
     * @return float
     */
    public function getEffectmultiplevalue3()
    {
        return $this->effectmultiplevalue3;
    }

    /**
     * Set effectitemtype1
     *
     * @param integer $effectitemtype1
     *
     * @return SpellDbc
     */
    public function setEffectitemtype1($effectitemtype1)
    {
        $this->effectitemtype1 = $effectitemtype1;

        return $this;
    }

    /**
     * Get effectitemtype1
     *
     * @return integer
     */
    public function getEffectitemtype1()
    {
        return $this->effectitemtype1;
    }

    /**
     * Set effectitemtype2
     *
     * @param integer $effectitemtype2
     *
     * @return SpellDbc
     */
    public function setEffectitemtype2($effectitemtype2)
    {
        $this->effectitemtype2 = $effectitemtype2;

        return $this;
    }

    /**
     * Get effectitemtype2
     *
     * @return integer
     */
    public function getEffectitemtype2()
    {
        return $this->effectitemtype2;
    }

    /**
     * Set effectitemtype3
     *
     * @param integer $effectitemtype3
     *
     * @return SpellDbc
     */
    public function setEffectitemtype3($effectitemtype3)
    {
        $this->effectitemtype3 = $effectitemtype3;

        return $this;
    }

    /**
     * Get effectitemtype3
     *
     * @return integer
     */
    public function getEffectitemtype3()
    {
        return $this->effectitemtype3;
    }

    /**
     * Set effectmiscvalue1
     *
     * @param integer $effectmiscvalue1
     *
     * @return SpellDbc
     */
    public function setEffectmiscvalue1($effectmiscvalue1)
    {
        $this->effectmiscvalue1 = $effectmiscvalue1;

        return $this;
    }

    /**
     * Get effectmiscvalue1
     *
     * @return integer
     */
    public function getEffectmiscvalue1()
    {
        return $this->effectmiscvalue1;
    }

    /**
     * Set effectmiscvalue2
     *
     * @param integer $effectmiscvalue2
     *
     * @return SpellDbc
     */
    public function setEffectmiscvalue2($effectmiscvalue2)
    {
        $this->effectmiscvalue2 = $effectmiscvalue2;

        return $this;
    }

    /**
     * Get effectmiscvalue2
     *
     * @return integer
     */
    public function getEffectmiscvalue2()
    {
        return $this->effectmiscvalue2;
    }

    /**
     * Set effectmiscvalue3
     *
     * @param integer $effectmiscvalue3
     *
     * @return SpellDbc
     */
    public function setEffectmiscvalue3($effectmiscvalue3)
    {
        $this->effectmiscvalue3 = $effectmiscvalue3;

        return $this;
    }

    /**
     * Get effectmiscvalue3
     *
     * @return integer
     */
    public function getEffectmiscvalue3()
    {
        return $this->effectmiscvalue3;
    }

    /**
     * Set effectmiscvalueb1
     *
     * @param integer $effectmiscvalueb1
     *
     * @return SpellDbc
     */
    public function setEffectmiscvalueb1($effectmiscvalueb1)
    {
        $this->effectmiscvalueb1 = $effectmiscvalueb1;

        return $this;
    }

    /**
     * Get effectmiscvalueb1
     *
     * @return integer
     */
    public function getEffectmiscvalueb1()
    {
        return $this->effectmiscvalueb1;
    }

    /**
     * Set effectmiscvalueb2
     *
     * @param integer $effectmiscvalueb2
     *
     * @return SpellDbc
     */
    public function setEffectmiscvalueb2($effectmiscvalueb2)
    {
        $this->effectmiscvalueb2 = $effectmiscvalueb2;

        return $this;
    }

    /**
     * Get effectmiscvalueb2
     *
     * @return integer
     */
    public function getEffectmiscvalueb2()
    {
        return $this->effectmiscvalueb2;
    }

    /**
     * Set effectmiscvalueb3
     *
     * @param integer $effectmiscvalueb3
     *
     * @return SpellDbc
     */
    public function setEffectmiscvalueb3($effectmiscvalueb3)
    {
        $this->effectmiscvalueb3 = $effectmiscvalueb3;

        return $this;
    }

    /**
     * Get effectmiscvalueb3
     *
     * @return integer
     */
    public function getEffectmiscvalueb3()
    {
        return $this->effectmiscvalueb3;
    }

    /**
     * Set effecttriggerspell1
     *
     * @param integer $effecttriggerspell1
     *
     * @return SpellDbc
     */
    public function setEffecttriggerspell1($effecttriggerspell1)
    {
        $this->effecttriggerspell1 = $effecttriggerspell1;

        return $this;
    }

    /**
     * Get effecttriggerspell1
     *
     * @return integer
     */
    public function getEffecttriggerspell1()
    {
        return $this->effecttriggerspell1;
    }

    /**
     * Set effecttriggerspell2
     *
     * @param integer $effecttriggerspell2
     *
     * @return SpellDbc
     */
    public function setEffecttriggerspell2($effecttriggerspell2)
    {
        $this->effecttriggerspell2 = $effecttriggerspell2;

        return $this;
    }

    /**
     * Get effecttriggerspell2
     *
     * @return integer
     */
    public function getEffecttriggerspell2()
    {
        return $this->effecttriggerspell2;
    }

    /**
     * Set effecttriggerspell3
     *
     * @param integer $effecttriggerspell3
     *
     * @return SpellDbc
     */
    public function setEffecttriggerspell3($effecttriggerspell3)
    {
        $this->effecttriggerspell3 = $effecttriggerspell3;

        return $this;
    }

    /**
     * Get effecttriggerspell3
     *
     * @return integer
     */
    public function getEffecttriggerspell3()
    {
        return $this->effecttriggerspell3;
    }

    /**
     * Set effectspellclassmaska1
     *
     * @param integer $effectspellclassmaska1
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaska1($effectspellclassmaska1)
    {
        $this->effectspellclassmaska1 = $effectspellclassmaska1;

        return $this;
    }

    /**
     * Get effectspellclassmaska1
     *
     * @return integer
     */
    public function getEffectspellclassmaska1()
    {
        return $this->effectspellclassmaska1;
    }

    /**
     * Set effectspellclassmaska2
     *
     * @param integer $effectspellclassmaska2
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaska2($effectspellclassmaska2)
    {
        $this->effectspellclassmaska2 = $effectspellclassmaska2;

        return $this;
    }

    /**
     * Get effectspellclassmaska2
     *
     * @return integer
     */
    public function getEffectspellclassmaska2()
    {
        return $this->effectspellclassmaska2;
    }

    /**
     * Set effectspellclassmaska3
     *
     * @param integer $effectspellclassmaska3
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaska3($effectspellclassmaska3)
    {
        $this->effectspellclassmaska3 = $effectspellclassmaska3;

        return $this;
    }

    /**
     * Get effectspellclassmaska3
     *
     * @return integer
     */
    public function getEffectspellclassmaska3()
    {
        return $this->effectspellclassmaska3;
    }

    /**
     * Set effectspellclassmaskb1
     *
     * @param integer $effectspellclassmaskb1
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaskb1($effectspellclassmaskb1)
    {
        $this->effectspellclassmaskb1 = $effectspellclassmaskb1;

        return $this;
    }

    /**
     * Get effectspellclassmaskb1
     *
     * @return integer
     */
    public function getEffectspellclassmaskb1()
    {
        return $this->effectspellclassmaskb1;
    }

    /**
     * Set effectspellclassmaskb2
     *
     * @param integer $effectspellclassmaskb2
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaskb2($effectspellclassmaskb2)
    {
        $this->effectspellclassmaskb2 = $effectspellclassmaskb2;

        return $this;
    }

    /**
     * Get effectspellclassmaskb2
     *
     * @return integer
     */
    public function getEffectspellclassmaskb2()
    {
        return $this->effectspellclassmaskb2;
    }

    /**
     * Set effectspellclassmaskb3
     *
     * @param integer $effectspellclassmaskb3
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaskb3($effectspellclassmaskb3)
    {
        $this->effectspellclassmaskb3 = $effectspellclassmaskb3;

        return $this;
    }

    /**
     * Get effectspellclassmaskb3
     *
     * @return integer
     */
    public function getEffectspellclassmaskb3()
    {
        return $this->effectspellclassmaskb3;
    }

    /**
     * Set effectspellclassmaskc1
     *
     * @param integer $effectspellclassmaskc1
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaskc1($effectspellclassmaskc1)
    {
        $this->effectspellclassmaskc1 = $effectspellclassmaskc1;

        return $this;
    }

    /**
     * Get effectspellclassmaskc1
     *
     * @return integer
     */
    public function getEffectspellclassmaskc1()
    {
        return $this->effectspellclassmaskc1;
    }

    /**
     * Set effectspellclassmaskc2
     *
     * @param integer $effectspellclassmaskc2
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaskc2($effectspellclassmaskc2)
    {
        $this->effectspellclassmaskc2 = $effectspellclassmaskc2;

        return $this;
    }

    /**
     * Get effectspellclassmaskc2
     *
     * @return integer
     */
    public function getEffectspellclassmaskc2()
    {
        return $this->effectspellclassmaskc2;
    }

    /**
     * Set effectspellclassmaskc3
     *
     * @param integer $effectspellclassmaskc3
     *
     * @return SpellDbc
     */
    public function setEffectspellclassmaskc3($effectspellclassmaskc3)
    {
        $this->effectspellclassmaskc3 = $effectspellclassmaskc3;

        return $this;
    }

    /**
     * Get effectspellclassmaskc3
     *
     * @return integer
     */
    public function getEffectspellclassmaskc3()
    {
        return $this->effectspellclassmaskc3;
    }

    /**
     * Set maxtargetlevel
     *
     * @param integer $maxtargetlevel
     *
     * @return SpellDbc
     */
    public function setMaxtargetlevel($maxtargetlevel)
    {
        $this->maxtargetlevel = $maxtargetlevel;

        return $this;
    }

    /**
     * Get maxtargetlevel
     *
     * @return integer
     */
    public function getMaxtargetlevel()
    {
        return $this->maxtargetlevel;
    }

    /**
     * Set spellfamilyname
     *
     * @param integer $spellfamilyname
     *
     * @return SpellDbc
     */
    public function setSpellfamilyname($spellfamilyname)
    {
        $this->spellfamilyname = $spellfamilyname;

        return $this;
    }

    /**
     * Get spellfamilyname
     *
     * @return integer
     */
    public function getSpellfamilyname()
    {
        return $this->spellfamilyname;
    }

    /**
     * Set spellfamilyflags1
     *
     * @param integer $spellfamilyflags1
     *
     * @return SpellDbc
     */
    public function setSpellfamilyflags1($spellfamilyflags1)
    {
        $this->spellfamilyflags1 = $spellfamilyflags1;

        return $this;
    }

    /**
     * Get spellfamilyflags1
     *
     * @return integer
     */
    public function getSpellfamilyflags1()
    {
        return $this->spellfamilyflags1;
    }

    /**
     * Set spellfamilyflags2
     *
     * @param integer $spellfamilyflags2
     *
     * @return SpellDbc
     */
    public function setSpellfamilyflags2($spellfamilyflags2)
    {
        $this->spellfamilyflags2 = $spellfamilyflags2;

        return $this;
    }

    /**
     * Get spellfamilyflags2
     *
     * @return integer
     */
    public function getSpellfamilyflags2()
    {
        return $this->spellfamilyflags2;
    }

    /**
     * Set spellfamilyflags3
     *
     * @param integer $spellfamilyflags3
     *
     * @return SpellDbc
     */
    public function setSpellfamilyflags3($spellfamilyflags3)
    {
        $this->spellfamilyflags3 = $spellfamilyflags3;

        return $this;
    }

    /**
     * Get spellfamilyflags3
     *
     * @return integer
     */
    public function getSpellfamilyflags3()
    {
        return $this->spellfamilyflags3;
    }

    /**
     * Set maxaffectedtargets
     *
     * @param integer $maxaffectedtargets
     *
     * @return SpellDbc
     */
    public function setMaxaffectedtargets($maxaffectedtargets)
    {
        $this->maxaffectedtargets = $maxaffectedtargets;

        return $this;
    }

    /**
     * Get maxaffectedtargets
     *
     * @return integer
     */
    public function getMaxaffectedtargets()
    {
        return $this->maxaffectedtargets;
    }

    /**
     * Set dmgclass
     *
     * @param integer $dmgclass
     *
     * @return SpellDbc
     */
    public function setDmgclass($dmgclass)
    {
        $this->dmgclass = $dmgclass;

        return $this;
    }

    /**
     * Get dmgclass
     *
     * @return integer
     */
    public function getDmgclass()
    {
        return $this->dmgclass;
    }

    /**
     * Set preventiontype
     *
     * @param integer $preventiontype
     *
     * @return SpellDbc
     */
    public function setPreventiontype($preventiontype)
    {
        $this->preventiontype = $preventiontype;

        return $this;
    }

    /**
     * Get preventiontype
     *
     * @return integer
     */
    public function getPreventiontype()
    {
        return $this->preventiontype;
    }

    /**
     * Set dmgmultiplier1
     *
     * @param float $dmgmultiplier1
     *
     * @return SpellDbc
     */
    public function setDmgmultiplier1($dmgmultiplier1)
    {
        $this->dmgmultiplier1 = $dmgmultiplier1;

        return $this;
    }

    /**
     * Get dmgmultiplier1
     *
     * @return float
     */
    public function getDmgmultiplier1()
    {
        return $this->dmgmultiplier1;
    }

    /**
     * Set dmgmultiplier2
     *
     * @param float $dmgmultiplier2
     *
     * @return SpellDbc
     */
    public function setDmgmultiplier2($dmgmultiplier2)
    {
        $this->dmgmultiplier2 = $dmgmultiplier2;

        return $this;
    }

    /**
     * Get dmgmultiplier2
     *
     * @return float
     */
    public function getDmgmultiplier2()
    {
        return $this->dmgmultiplier2;
    }

    /**
     * Set dmgmultiplier3
     *
     * @param float $dmgmultiplier3
     *
     * @return SpellDbc
     */
    public function setDmgmultiplier3($dmgmultiplier3)
    {
        $this->dmgmultiplier3 = $dmgmultiplier3;

        return $this;
    }

    /**
     * Get dmgmultiplier3
     *
     * @return float
     */
    public function getDmgmultiplier3()
    {
        return $this->dmgmultiplier3;
    }

    /**
     * Set areagroupid
     *
     * @param integer $areagroupid
     *
     * @return SpellDbc
     */
    public function setAreagroupid($areagroupid)
    {
        $this->areagroupid = $areagroupid;

        return $this;
    }

    /**
     * Get areagroupid
     *
     * @return integer
     */
    public function getAreagroupid()
    {
        return $this->areagroupid;
    }

    /**
     * Set schoolmask
     *
     * @param integer $schoolmask
     *
     * @return SpellDbc
     */
    public function setSchoolmask($schoolmask)
    {
        $this->schoolmask = $schoolmask;

        return $this;
    }

    /**
     * Get schoolmask
     *
     * @return integer
     */
    public function getSchoolmask()
    {
        return $this->schoolmask;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return SpellDbc
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
