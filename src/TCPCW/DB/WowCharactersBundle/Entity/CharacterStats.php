<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterStats
 *
 * @ORM\Table(name="character_stats")
 * @ORM\Entity
 */
class CharacterStats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="maxhealth", type="integer", nullable=false)
     */
    private $maxhealth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower1", type="integer", nullable=false)
     */
    private $maxpower1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower2", type="integer", nullable=false)
     */
    private $maxpower2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower3", type="integer", nullable=false)
     */
    private $maxpower3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower4", type="integer", nullable=false)
     */
    private $maxpower4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower5", type="integer", nullable=false)
     */
    private $maxpower5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower6", type="integer", nullable=false)
     */
    private $maxpower6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpower7", type="integer", nullable=false)
     */
    private $maxpower7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="strength", type="integer", nullable=false)
     */
    private $strength = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="agility", type="integer", nullable=false)
     */
    private $agility = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stamina", type="integer", nullable=false)
     */
    private $stamina = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="intellect", type="integer", nullable=false)
     */
    private $intellect = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spirit", type="integer", nullable=false)
     */
    private $spirit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="armor", type="integer", nullable=false)
     */
    private $armor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resHoly", type="integer", nullable=false)
     */
    private $resholy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resFire", type="integer", nullable=false)
     */
    private $resfire = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resNature", type="integer", nullable=false)
     */
    private $resnature = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resFrost", type="integer", nullable=false)
     */
    private $resfrost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resShadow", type="integer", nullable=false)
     */
    private $resshadow = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resArcane", type="integer", nullable=false)
     */
    private $resarcane = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="blockPct", type="float", precision=10, scale=0, nullable=false)
     */
    private $blockpct = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dodgePct", type="float", precision=10, scale=0, nullable=false)
     */
    private $dodgepct = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="parryPct", type="float", precision=10, scale=0, nullable=false)
     */
    private $parrypct = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="critPct", type="float", precision=10, scale=0, nullable=false)
     */
    private $critpct = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rangedCritPct", type="float", precision=10, scale=0, nullable=false)
     */
    private $rangedcritpct = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="spellCritPct", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellcritpct = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attackPower", type="integer", nullable=false)
     */
    private $attackpower = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rangedAttackPower", type="integer", nullable=false)
     */
    private $rangedattackpower = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellPower", type="integer", nullable=false)
     */
    private $spellpower = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resilience", type="integer", nullable=false)
     */
    private $resilience = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set maxhealth
     *
     * @param integer $maxhealth
     *
     * @return CharacterStats
     */
    public function setMaxhealth($maxhealth)
    {
        $this->maxhealth = $maxhealth;

        return $this;
    }

    /**
     * Get maxhealth
     *
     * @return integer
     */
    public function getMaxhealth()
    {
        return $this->maxhealth;
    }

    /**
     * Set maxpower1
     *
     * @param integer $maxpower1
     *
     * @return CharacterStats
     */
    public function setMaxpower1($maxpower1)
    {
        $this->maxpower1 = $maxpower1;

        return $this;
    }

    /**
     * Get maxpower1
     *
     * @return integer
     */
    public function getMaxpower1()
    {
        return $this->maxpower1;
    }

    /**
     * Set maxpower2
     *
     * @param integer $maxpower2
     *
     * @return CharacterStats
     */
    public function setMaxpower2($maxpower2)
    {
        $this->maxpower2 = $maxpower2;

        return $this;
    }

    /**
     * Get maxpower2
     *
     * @return integer
     */
    public function getMaxpower2()
    {
        return $this->maxpower2;
    }

    /**
     * Set maxpower3
     *
     * @param integer $maxpower3
     *
     * @return CharacterStats
     */
    public function setMaxpower3($maxpower3)
    {
        $this->maxpower3 = $maxpower3;

        return $this;
    }

    /**
     * Get maxpower3
     *
     * @return integer
     */
    public function getMaxpower3()
    {
        return $this->maxpower3;
    }

    /**
     * Set maxpower4
     *
     * @param integer $maxpower4
     *
     * @return CharacterStats
     */
    public function setMaxpower4($maxpower4)
    {
        $this->maxpower4 = $maxpower4;

        return $this;
    }

    /**
     * Get maxpower4
     *
     * @return integer
     */
    public function getMaxpower4()
    {
        return $this->maxpower4;
    }

    /**
     * Set maxpower5
     *
     * @param integer $maxpower5
     *
     * @return CharacterStats
     */
    public function setMaxpower5($maxpower5)
    {
        $this->maxpower5 = $maxpower5;

        return $this;
    }

    /**
     * Get maxpower5
     *
     * @return integer
     */
    public function getMaxpower5()
    {
        return $this->maxpower5;
    }

    /**
     * Set maxpower6
     *
     * @param integer $maxpower6
     *
     * @return CharacterStats
     */
    public function setMaxpower6($maxpower6)
    {
        $this->maxpower6 = $maxpower6;

        return $this;
    }

    /**
     * Get maxpower6
     *
     * @return integer
     */
    public function getMaxpower6()
    {
        return $this->maxpower6;
    }

    /**
     * Set maxpower7
     *
     * @param integer $maxpower7
     *
     * @return CharacterStats
     */
    public function setMaxpower7($maxpower7)
    {
        $this->maxpower7 = $maxpower7;

        return $this;
    }

    /**
     * Get maxpower7
     *
     * @return integer
     */
    public function getMaxpower7()
    {
        return $this->maxpower7;
    }

    /**
     * Set strength
     *
     * @param integer $strength
     *
     * @return CharacterStats
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set agility
     *
     * @param integer $agility
     *
     * @return CharacterStats
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;

        return $this;
    }

    /**
     * Get agility
     *
     * @return integer
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * Set stamina
     *
     * @param integer $stamina
     *
     * @return CharacterStats
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get stamina
     *
     * @return integer
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Set intellect
     *
     * @param integer $intellect
     *
     * @return CharacterStats
     */
    public function setIntellect($intellect)
    {
        $this->intellect = $intellect;

        return $this;
    }

    /**
     * Get intellect
     *
     * @return integer
     */
    public function getIntellect()
    {
        return $this->intellect;
    }

    /**
     * Set spirit
     *
     * @param integer $spirit
     *
     * @return CharacterStats
     */
    public function setSpirit($spirit)
    {
        $this->spirit = $spirit;

        return $this;
    }

    /**
     * Get spirit
     *
     * @return integer
     */
    public function getSpirit()
    {
        return $this->spirit;
    }

    /**
     * Set armor
     *
     * @param integer $armor
     *
     * @return CharacterStats
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
     * Set resholy
     *
     * @param integer $resholy
     *
     * @return CharacterStats
     */
    public function setResholy($resholy)
    {
        $this->resholy = $resholy;

        return $this;
    }

    /**
     * Get resholy
     *
     * @return integer
     */
    public function getResholy()
    {
        return $this->resholy;
    }

    /**
     * Set resfire
     *
     * @param integer $resfire
     *
     * @return CharacterStats
     */
    public function setResfire($resfire)
    {
        $this->resfire = $resfire;

        return $this;
    }

    /**
     * Get resfire
     *
     * @return integer
     */
    public function getResfire()
    {
        return $this->resfire;
    }

    /**
     * Set resnature
     *
     * @param integer $resnature
     *
     * @return CharacterStats
     */
    public function setResnature($resnature)
    {
        $this->resnature = $resnature;

        return $this;
    }

    /**
     * Get resnature
     *
     * @return integer
     */
    public function getResnature()
    {
        return $this->resnature;
    }

    /**
     * Set resfrost
     *
     * @param integer $resfrost
     *
     * @return CharacterStats
     */
    public function setResfrost($resfrost)
    {
        $this->resfrost = $resfrost;

        return $this;
    }

    /**
     * Get resfrost
     *
     * @return integer
     */
    public function getResfrost()
    {
        return $this->resfrost;
    }

    /**
     * Set resshadow
     *
     * @param integer $resshadow
     *
     * @return CharacterStats
     */
    public function setResshadow($resshadow)
    {
        $this->resshadow = $resshadow;

        return $this;
    }

    /**
     * Get resshadow
     *
     * @return integer
     */
    public function getResshadow()
    {
        return $this->resshadow;
    }

    /**
     * Set resarcane
     *
     * @param integer $resarcane
     *
     * @return CharacterStats
     */
    public function setResarcane($resarcane)
    {
        $this->resarcane = $resarcane;

        return $this;
    }

    /**
     * Get resarcane
     *
     * @return integer
     */
    public function getResarcane()
    {
        return $this->resarcane;
    }

    /**
     * Set blockpct
     *
     * @param float $blockpct
     *
     * @return CharacterStats
     */
    public function setBlockpct($blockpct)
    {
        $this->blockpct = $blockpct;

        return $this;
    }

    /**
     * Get blockpct
     *
     * @return float
     */
    public function getBlockpct()
    {
        return $this->blockpct;
    }

    /**
     * Set dodgepct
     *
     * @param float $dodgepct
     *
     * @return CharacterStats
     */
    public function setDodgepct($dodgepct)
    {
        $this->dodgepct = $dodgepct;

        return $this;
    }

    /**
     * Get dodgepct
     *
     * @return float
     */
    public function getDodgepct()
    {
        return $this->dodgepct;
    }

    /**
     * Set parrypct
     *
     * @param float $parrypct
     *
     * @return CharacterStats
     */
    public function setParrypct($parrypct)
    {
        $this->parrypct = $parrypct;

        return $this;
    }

    /**
     * Get parrypct
     *
     * @return float
     */
    public function getParrypct()
    {
        return $this->parrypct;
    }

    /**
     * Set critpct
     *
     * @param float $critpct
     *
     * @return CharacterStats
     */
    public function setCritpct($critpct)
    {
        $this->critpct = $critpct;

        return $this;
    }

    /**
     * Get critpct
     *
     * @return float
     */
    public function getCritpct()
    {
        return $this->critpct;
    }

    /**
     * Set rangedcritpct
     *
     * @param float $rangedcritpct
     *
     * @return CharacterStats
     */
    public function setRangedcritpct($rangedcritpct)
    {
        $this->rangedcritpct = $rangedcritpct;

        return $this;
    }

    /**
     * Get rangedcritpct
     *
     * @return float
     */
    public function getRangedcritpct()
    {
        return $this->rangedcritpct;
    }

    /**
     * Set spellcritpct
     *
     * @param float $spellcritpct
     *
     * @return CharacterStats
     */
    public function setSpellcritpct($spellcritpct)
    {
        $this->spellcritpct = $spellcritpct;

        return $this;
    }

    /**
     * Get spellcritpct
     *
     * @return float
     */
    public function getSpellcritpct()
    {
        return $this->spellcritpct;
    }

    /**
     * Set attackpower
     *
     * @param integer $attackpower
     *
     * @return CharacterStats
     */
    public function setAttackpower($attackpower)
    {
        $this->attackpower = $attackpower;

        return $this;
    }

    /**
     * Get attackpower
     *
     * @return integer
     */
    public function getAttackpower()
    {
        return $this->attackpower;
    }

    /**
     * Set rangedattackpower
     *
     * @param integer $rangedattackpower
     *
     * @return CharacterStats
     */
    public function setRangedattackpower($rangedattackpower)
    {
        $this->rangedattackpower = $rangedattackpower;

        return $this;
    }

    /**
     * Get rangedattackpower
     *
     * @return integer
     */
    public function getRangedattackpower()
    {
        return $this->rangedattackpower;
    }

    /**
     * Set spellpower
     *
     * @param integer $spellpower
     *
     * @return CharacterStats
     */
    public function setSpellpower($spellpower)
    {
        $this->spellpower = $spellpower;

        return $this;
    }

    /**
     * Get spellpower
     *
     * @return integer
     */
    public function getSpellpower()
    {
        return $this->spellpower;
    }

    /**
     * Set resilience
     *
     * @param integer $resilience
     *
     * @return CharacterStats
     */
    public function setResilience($resilience)
    {
        $this->resilience = $resilience;

        return $this;
    }

    /**
     * Get resilience
     *
     * @return integer
     */
    public function getResilience()
    {
        return $this->resilience;
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
