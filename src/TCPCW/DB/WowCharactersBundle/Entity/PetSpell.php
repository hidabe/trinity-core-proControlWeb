<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetSpell
 *
 * @ORM\Table(name="pet_spell")
 * @ORM\Entity
 */
class PetSpell
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active = '0';

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
     * Set active
     *
     * @param boolean $active
     *
     * @return PetSpell
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
     * Set guid
     *
     * @param integer $guid
     *
     * @return PetSpell
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
     * @return PetSpell
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
