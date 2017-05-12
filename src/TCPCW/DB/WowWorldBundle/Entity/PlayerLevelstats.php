<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerLevelstats
 *
 * @ORM\Table(name="player_levelstats")
 * @ORM\Entity
 */
class PlayerLevelstats
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="str", type="boolean", nullable=false)
     */
    private $str;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agi", type="boolean", nullable=false)
     */
    private $agi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sta", type="boolean", nullable=false)
     */
    private $sta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inte", type="boolean", nullable=false)
     */
    private $inte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spi", type="boolean", nullable=false)
     */
    private $spi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="race", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $race;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $level;



    /**
     * Set str
     *
     * @param boolean $str
     *
     * @return PlayerLevelstats
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return boolean
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set agi
     *
     * @param boolean $agi
     *
     * @return PlayerLevelstats
     */
    public function setAgi($agi)
    {
        $this->agi = $agi;

        return $this;
    }

    /**
     * Get agi
     *
     * @return boolean
     */
    public function getAgi()
    {
        return $this->agi;
    }

    /**
     * Set sta
     *
     * @param boolean $sta
     *
     * @return PlayerLevelstats
     */
    public function setSta($sta)
    {
        $this->sta = $sta;

        return $this;
    }

    /**
     * Get sta
     *
     * @return boolean
     */
    public function getSta()
    {
        return $this->sta;
    }

    /**
     * Set inte
     *
     * @param boolean $inte
     *
     * @return PlayerLevelstats
     */
    public function setInte($inte)
    {
        $this->inte = $inte;

        return $this;
    }

    /**
     * Get inte
     *
     * @return boolean
     */
    public function getInte()
    {
        return $this->inte;
    }

    /**
     * Set spi
     *
     * @param boolean $spi
     *
     * @return PlayerLevelstats
     */
    public function setSpi($spi)
    {
        $this->spi = $spi;

        return $this;
    }

    /**
     * Get spi
     *
     * @return boolean
     */
    public function getSpi()
    {
        return $this->spi;
    }

    /**
     * Set race
     *
     * @param boolean $race
     *
     * @return PlayerLevelstats
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return boolean
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return PlayerLevelstats
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return PlayerLevelstats
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
