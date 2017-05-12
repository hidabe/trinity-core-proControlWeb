<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellArea
 *
 * @ORM\Table(name="spell_area")
 * @ORM\Entity
 */
class SpellArea
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quest_end", type="integer", nullable=false)
     */
    private $questEnd = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="autocast", type="boolean", nullable=false)
     */
    private $autocast = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_start_status", type="integer", nullable=false)
     */
    private $questStartStatus = '64';

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_end_status", type="integer", nullable=false)
     */
    private $questEndStatus = '11';

    /**
     * @var integer
     *
     * @ORM\Column(name="spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spell;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_start", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questStart;

    /**
     * @var integer
     *
     * @ORM\Column(name="aura_spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $auraSpell;

    /**
     * @var integer
     *
     * @ORM\Column(name="racemask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $racemask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gender;



    /**
     * Set questEnd
     *
     * @param integer $questEnd
     *
     * @return SpellArea
     */
    public function setQuestEnd($questEnd)
    {
        $this->questEnd = $questEnd;

        return $this;
    }

    /**
     * Get questEnd
     *
     * @return integer
     */
    public function getQuestEnd()
    {
        return $this->questEnd;
    }

    /**
     * Set autocast
     *
     * @param boolean $autocast
     *
     * @return SpellArea
     */
    public function setAutocast($autocast)
    {
        $this->autocast = $autocast;

        return $this;
    }

    /**
     * Get autocast
     *
     * @return boolean
     */
    public function getAutocast()
    {
        return $this->autocast;
    }

    /**
     * Set questStartStatus
     *
     * @param integer $questStartStatus
     *
     * @return SpellArea
     */
    public function setQuestStartStatus($questStartStatus)
    {
        $this->questStartStatus = $questStartStatus;

        return $this;
    }

    /**
     * Get questStartStatus
     *
     * @return integer
     */
    public function getQuestStartStatus()
    {
        return $this->questStartStatus;
    }

    /**
     * Set questEndStatus
     *
     * @param integer $questEndStatus
     *
     * @return SpellArea
     */
    public function setQuestEndStatus($questEndStatus)
    {
        $this->questEndStatus = $questEndStatus;

        return $this;
    }

    /**
     * Get questEndStatus
     *
     * @return integer
     */
    public function getQuestEndStatus()
    {
        return $this->questEndStatus;
    }

    /**
     * Set spell
     *
     * @param integer $spell
     *
     * @return SpellArea
     */
    public function setSpell($spell)
    {
        $this->spell = $spell;

        return $this;
    }

    /**
     * Get spell
     *
     * @return integer
     */
    public function getSpell()
    {
        return $this->spell;
    }

    /**
     * Set area
     *
     * @param integer $area
     *
     * @return SpellArea
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
     * Set questStart
     *
     * @param integer $questStart
     *
     * @return SpellArea
     */
    public function setQuestStart($questStart)
    {
        $this->questStart = $questStart;

        return $this;
    }

    /**
     * Get questStart
     *
     * @return integer
     */
    public function getQuestStart()
    {
        return $this->questStart;
    }

    /**
     * Set auraSpell
     *
     * @param integer $auraSpell
     *
     * @return SpellArea
     */
    public function setAuraSpell($auraSpell)
    {
        $this->auraSpell = $auraSpell;

        return $this;
    }

    /**
     * Get auraSpell
     *
     * @return integer
     */
    public function getAuraSpell()
    {
        return $this->auraSpell;
    }

    /**
     * Set racemask
     *
     * @param integer $racemask
     *
     * @return SpellArea
     */
    public function setRacemask($racemask)
    {
        $this->racemask = $racemask;

        return $this;
    }

    /**
     * Get racemask
     *
     * @return integer
     */
    public function getRacemask()
    {
        return $this->racemask;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     *
     * @return SpellArea
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }
}
