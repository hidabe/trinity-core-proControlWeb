<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellPetAuras
 *
 * @ORM\Table(name="spell_pet_auras")
 * @ORM\Entity
 */
class SpellPetAuras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aura", type="integer", nullable=false)
     */
    private $aura;

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
     * @ORM\Column(name="pet", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pet;

    /**
     * @var boolean
     *
     * @ORM\Column(name="effectId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $effectid;



    /**
     * Set aura
     *
     * @param integer $aura
     *
     * @return SpellPetAuras
     */
    public function setAura($aura)
    {
        $this->aura = $aura;

        return $this;
    }

    /**
     * Get aura
     *
     * @return integer
     */
    public function getAura()
    {
        return $this->aura;
    }

    /**
     * Set spell
     *
     * @param integer $spell
     *
     * @return SpellPetAuras
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
     * Set pet
     *
     * @param integer $pet
     *
     * @return SpellPetAuras
     */
    public function setPet($pet)
    {
        $this->pet = $pet;

        return $this;
    }

    /**
     * Get pet
     *
     * @return integer
     */
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * Set effectid
     *
     * @param boolean $effectid
     *
     * @return SpellPetAuras
     */
    public function setEffectid($effectid)
    {
        $this->effectid = $effectid;

        return $this;
    }

    /**
     * Get effectid
     *
     * @return boolean
     */
    public function getEffectid()
    {
        return $this->effectid;
    }
}
