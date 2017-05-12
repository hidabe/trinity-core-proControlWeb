<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcSpellclickSpells
 *
 * @ORM\Table(name="npc_spellclick_spells")
 * @ORM\Entity
 */
class NpcSpellclickSpells
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="cast_flags", type="boolean", nullable=false)
     */
    private $castFlags;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_type", type="smallint", nullable=false)
     */
    private $userType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="npc_entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $npcEntry;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spellId;



    /**
     * Set castFlags
     *
     * @param boolean $castFlags
     *
     * @return NpcSpellclickSpells
     */
    public function setCastFlags($castFlags)
    {
        $this->castFlags = $castFlags;

        return $this;
    }

    /**
     * Get castFlags
     *
     * @return boolean
     */
    public function getCastFlags()
    {
        return $this->castFlags;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     *
     * @return NpcSpellclickSpells
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set npcEntry
     *
     * @param integer $npcEntry
     *
     * @return NpcSpellclickSpells
     */
    public function setNpcEntry($npcEntry)
    {
        $this->npcEntry = $npcEntry;

        return $this;
    }

    /**
     * Get npcEntry
     *
     * @return integer
     */
    public function getNpcEntry()
    {
        return $this->npcEntry;
    }

    /**
     * Set spellId
     *
     * @param integer $spellId
     *
     * @return NpcSpellclickSpells
     */
    public function setSpellId($spellId)
    {
        $this->spellId = $spellId;

        return $this;
    }

    /**
     * Get spellId
     *
     * @return integer
     */
    public function getSpellId()
    {
        return $this->spellId;
    }
}
