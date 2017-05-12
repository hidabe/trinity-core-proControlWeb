<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellProc
 *
 * @ORM\Table(name="spell_proc")
 * @ORM\Entity
 */
class SpellProc
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="SchoolMask", type="boolean", nullable=false)
     */
    private $schoolmask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyName", type="smallint", nullable=false)
     */
    private $spellfamilyname = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyMask0", type="integer", nullable=false)
     */
    private $spellfamilymask0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyMask1", type="integer", nullable=false)
     */
    private $spellfamilymask1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellFamilyMask2", type="integer", nullable=false)
     */
    private $spellfamilymask2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ProcFlags", type="integer", nullable=false)
     */
    private $procflags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellTypeMask", type="integer", nullable=false)
     */
    private $spelltypemask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellPhaseMask", type="integer", nullable=false)
     */
    private $spellphasemask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="HitMask", type="integer", nullable=false)
     */
    private $hitmask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesMask", type="integer", nullable=false)
     */
    private $attributesmask = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ProcsPerMinute", type="float", precision=10, scale=0, nullable=false)
     */
    private $procsperminute = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Chance", type="float", precision=10, scale=0, nullable=false)
     */
    private $chance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Cooldown", type="integer", nullable=false)
     */
    private $cooldown = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Charges", type="boolean", nullable=false)
     */
    private $charges = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spellid;



    /**
     * Set schoolmask
     *
     * @param boolean $schoolmask
     *
     * @return SpellProc
     */
    public function setSchoolmask($schoolmask)
    {
        $this->schoolmask = $schoolmask;

        return $this;
    }

    /**
     * Get schoolmask
     *
     * @return boolean
     */
    public function getSchoolmask()
    {
        return $this->schoolmask;
    }

    /**
     * Set spellfamilyname
     *
     * @param integer $spellfamilyname
     *
     * @return SpellProc
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
     * Set spellfamilymask0
     *
     * @param integer $spellfamilymask0
     *
     * @return SpellProc
     */
    public function setSpellfamilymask0($spellfamilymask0)
    {
        $this->spellfamilymask0 = $spellfamilymask0;

        return $this;
    }

    /**
     * Get spellfamilymask0
     *
     * @return integer
     */
    public function getSpellfamilymask0()
    {
        return $this->spellfamilymask0;
    }

    /**
     * Set spellfamilymask1
     *
     * @param integer $spellfamilymask1
     *
     * @return SpellProc
     */
    public function setSpellfamilymask1($spellfamilymask1)
    {
        $this->spellfamilymask1 = $spellfamilymask1;

        return $this;
    }

    /**
     * Get spellfamilymask1
     *
     * @return integer
     */
    public function getSpellfamilymask1()
    {
        return $this->spellfamilymask1;
    }

    /**
     * Set spellfamilymask2
     *
     * @param integer $spellfamilymask2
     *
     * @return SpellProc
     */
    public function setSpellfamilymask2($spellfamilymask2)
    {
        $this->spellfamilymask2 = $spellfamilymask2;

        return $this;
    }

    /**
     * Get spellfamilymask2
     *
     * @return integer
     */
    public function getSpellfamilymask2()
    {
        return $this->spellfamilymask2;
    }

    /**
     * Set procflags
     *
     * @param integer $procflags
     *
     * @return SpellProc
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
     * Set spelltypemask
     *
     * @param integer $spelltypemask
     *
     * @return SpellProc
     */
    public function setSpelltypemask($spelltypemask)
    {
        $this->spelltypemask = $spelltypemask;

        return $this;
    }

    /**
     * Get spelltypemask
     *
     * @return integer
     */
    public function getSpelltypemask()
    {
        return $this->spelltypemask;
    }

    /**
     * Set spellphasemask
     *
     * @param integer $spellphasemask
     *
     * @return SpellProc
     */
    public function setSpellphasemask($spellphasemask)
    {
        $this->spellphasemask = $spellphasemask;

        return $this;
    }

    /**
     * Get spellphasemask
     *
     * @return integer
     */
    public function getSpellphasemask()
    {
        return $this->spellphasemask;
    }

    /**
     * Set hitmask
     *
     * @param integer $hitmask
     *
     * @return SpellProc
     */
    public function setHitmask($hitmask)
    {
        $this->hitmask = $hitmask;

        return $this;
    }

    /**
     * Get hitmask
     *
     * @return integer
     */
    public function getHitmask()
    {
        return $this->hitmask;
    }

    /**
     * Set attributesmask
     *
     * @param integer $attributesmask
     *
     * @return SpellProc
     */
    public function setAttributesmask($attributesmask)
    {
        $this->attributesmask = $attributesmask;

        return $this;
    }

    /**
     * Get attributesmask
     *
     * @return integer
     */
    public function getAttributesmask()
    {
        return $this->attributesmask;
    }

    /**
     * Set procsperminute
     *
     * @param float $procsperminute
     *
     * @return SpellProc
     */
    public function setProcsperminute($procsperminute)
    {
        $this->procsperminute = $procsperminute;

        return $this;
    }

    /**
     * Get procsperminute
     *
     * @return float
     */
    public function getProcsperminute()
    {
        return $this->procsperminute;
    }

    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return SpellProc
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
     * Set cooldown
     *
     * @param integer $cooldown
     *
     * @return SpellProc
     */
    public function setCooldown($cooldown)
    {
        $this->cooldown = $cooldown;

        return $this;
    }

    /**
     * Get cooldown
     *
     * @return integer
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }

    /**
     * Set charges
     *
     * @param boolean $charges
     *
     * @return SpellProc
     */
    public function setCharges($charges)
    {
        $this->charges = $charges;

        return $this;
    }

    /**
     * Get charges
     *
     * @return boolean
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * Get spellid
     *
     * @return integer
     */
    public function getSpellid()
    {
        return $this->spellid;
    }
}
