<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetLevelstats
 *
 * @ORM\Table(name="pet_levelstats")
 * @ORM\Entity
 */
class PetLevelstats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="hp", type="smallint", nullable=false)
     */
    private $hp;

    /**
     * @var integer
     *
     * @ORM\Column(name="mana", type="smallint", nullable=false)
     */
    private $mana;

    /**
     * @var integer
     *
     * @ORM\Column(name="armor", type="integer", nullable=false)
     */
    private $armor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="str", type="smallint", nullable=false)
     */
    private $str;

    /**
     * @var integer
     *
     * @ORM\Column(name="agi", type="smallint", nullable=false)
     */
    private $agi;

    /**
     * @var integer
     *
     * @ORM\Column(name="sta", type="smallint", nullable=false)
     */
    private $sta;

    /**
     * @var integer
     *
     * @ORM\Column(name="inte", type="smallint", nullable=false)
     */
    private $inte;

    /**
     * @var integer
     *
     * @ORM\Column(name="spi", type="smallint", nullable=false)
     */
    private $spi;

    /**
     * @var integer
     *
     * @ORM\Column(name="creature_entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $creatureEntry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $level;



    /**
     * Set hp
     *
     * @param integer $hp
     *
     * @return PetLevelstats
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get hp
     *
     * @return integer
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set mana
     *
     * @param integer $mana
     *
     * @return PetLevelstats
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get mana
     *
     * @return integer
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set armor
     *
     * @param integer $armor
     *
     * @return PetLevelstats
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;

        return $this;
    }

    /**
     * Get armor
     *
     * @return integer
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * Set str
     *
     * @param integer $str
     *
     * @return PetLevelstats
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return integer
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set agi
     *
     * @param integer $agi
     *
     * @return PetLevelstats
     */
    public function setAgi($agi)
    {
        $this->agi = $agi;

        return $this;
    }

    /**
     * Get agi
     *
     * @return integer
     */
    public function getAgi()
    {
        return $this->agi;
    }

    /**
     * Set sta
     *
     * @param integer $sta
     *
     * @return PetLevelstats
     */
    public function setSta($sta)
    {
        $this->sta = $sta;

        return $this;
    }

    /**
     * Get sta
     *
     * @return integer
     */
    public function getSta()
    {
        return $this->sta;
    }

    /**
     * Set inte
     *
     * @param integer $inte
     *
     * @return PetLevelstats
     */
    public function setInte($inte)
    {
        $this->inte = $inte;

        return $this;
    }

    /**
     * Get inte
     *
     * @return integer
     */
    public function getInte()
    {
        return $this->inte;
    }

    /**
     * Set spi
     *
     * @param integer $spi
     *
     * @return PetLevelstats
     */
    public function setSpi($spi)
    {
        $this->spi = $spi;

        return $this;
    }

    /**
     * Get spi
     *
     * @return integer
     */
    public function getSpi()
    {
        return $this->spi;
    }

    /**
     * Set creatureEntry
     *
     * @param integer $creatureEntry
     *
     * @return PetLevelstats
     */
    public function setCreatureEntry($creatureEntry)
    {
        $this->creatureEntry = $creatureEntry;

        return $this;
    }

    /**
     * Get creatureEntry
     *
     * @return integer
     */
    public function getCreatureEntry()
    {
        return $this->creatureEntry;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return PetLevelstats
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }
}
