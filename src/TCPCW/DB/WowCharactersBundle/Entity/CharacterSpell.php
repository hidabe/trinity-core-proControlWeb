<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSpell
 *
 * @ORM\Table(name="character_spell")
 * @ORM\Entity
 */
class CharacterSpell
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="disabled", type="integer", nullable=false)
     */
    private $disabled = '0';

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
     * @return CharacterSpell
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
     * Set disabled
     *
     * @param boolean $disabled
     *
     * @return CharacterSpell
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterSpell
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
     * @return CharacterSpell
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
