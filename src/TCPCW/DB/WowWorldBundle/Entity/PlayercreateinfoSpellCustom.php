<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayercreateinfoSpellCustom
 *
 * @ORM\Table(name="playercreateinfo_spell_custom")
 * @ORM\Entity
 */
class PlayercreateinfoSpellCustom
{
    /**
     * @var string
     *
     * @ORM\Column(name="Note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="racemask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $racemask;

    /**
     * @var integer
     *
     * @ORM\Column(name="classmask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $classmask;

    /**
     * @var integer
     *
     * @ORM\Column(name="Spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spell;



    /**
     * Set note
     *
     * @param string $note
     *
     * @return PlayercreateinfoSpellCustom
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set racemask
     *
     * @param integer $racemask
     *
     * @return PlayercreateinfoSpellCustom
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
     * Set classmask
     *
     * @param integer $classmask
     *
     * @return PlayercreateinfoSpellCustom
     */
    public function setClassmask($classmask)
    {
        $this->classmask = $classmask;

        return $this;
    }

    /**
     * Get classmask
     *
     * @return integer
     */
    public function getClassmask()
    {
        return $this->classmask;
    }

    /**
     * Set spell
     *
     * @param integer $spell
     *
     * @return PlayercreateinfoSpellCustom
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
}
