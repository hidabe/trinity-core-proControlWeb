<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellLearnSpell
 *
 * @ORM\Table(name="spell_learn_spell")
 * @ORM\Entity
 */
class SpellLearnSpell
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="Active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellID", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spellid;



    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return SpellLearnSpell
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return SpellLearnSpell
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
     * Set spellid
     *
     * @param integer $spellid
     *
     * @return SpellLearnSpell
     */
    public function setSpellid($spellid)
    {
        $this->spellid = $spellid;

        return $this;
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
