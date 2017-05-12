<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterTalent
 *
 * @ORM\Table(name="character_talent")
 * @ORM\Entity
 */
class CharacterTalent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spell;

    /**
     * @var boolean
     *
     * @ORM\Column(name="talentGroup", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $talentgroup;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterTalent
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
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

    /**
     * Set spell
     *
     * @param integer $spell
     *
     * @return CharacterTalent
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
     * Set talentgroup
     *
     * @param boolean $talentgroup
     *
     * @return CharacterTalent
     */
    public function setTalentgroup($talentgroup)
    {
        $this->talentgroup = $talentgroup;

        return $this;
    }

    /**
     * Get talentgroup
     *
     * @return boolean
     */
    public function getTalentgroup()
    {
        return $this->talentgroup;
    }
}
