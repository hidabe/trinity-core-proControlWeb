<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellRanks
 *
 * @ORM\Table(name="spell_ranks", uniqueConstraints={@ORM\UniqueConstraint(name="spell_id", columns={"spell_id"})})
 * @ORM\Entity
 */
class SpellRanks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="spell_id", type="integer", nullable=false)
     */
    private $spellId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="first_spell_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $firstSpellId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rank;



    /**
     * Set spellId
     *
     * @param integer $spellId
     *
     * @return SpellRanks
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

    /**
     * Set firstSpellId
     *
     * @param integer $firstSpellId
     *
     * @return SpellRanks
     */
    public function setFirstSpellId($firstSpellId)
    {
        $this->firstSpellId = $firstSpellId;

        return $this;
    }

    /**
     * Get firstSpellId
     *
     * @return integer
     */
    public function getFirstSpellId()
    {
        return $this->firstSpellId;
    }

    /**
     * Set rank
     *
     * @param boolean $rank
     *
     * @return SpellRanks
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
}
