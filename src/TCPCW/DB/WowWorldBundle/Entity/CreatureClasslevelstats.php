<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureClasslevelstats
 *
 * @ORM\Table(name="creature_classlevelstats")
 * @ORM\Entity
 */
class CreatureClasslevelstats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="basehp0", type="smallint", nullable=false)
     */
    private $basehp0 = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="basehp1", type="smallint", nullable=false)
     */
    private $basehp1 = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="basehp2", type="smallint", nullable=false)
     */
    private $basehp2 = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="basemana", type="smallint", nullable=false)
     */
    private $basemana = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="basearmor", type="smallint", nullable=false)
     */
    private $basearmor = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="attackpower", type="smallint", nullable=false)
     */
    private $attackpower = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rangedattackpower", type="smallint", nullable=false)
     */
    private $rangedattackpower = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="damage_base", type="float", precision=10, scale=0, nullable=false)
     */
    private $damageBase = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="damage_exp1", type="float", precision=10, scale=0, nullable=false)
     */
    private $damageExp1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="damage_exp2", type="float", precision=10, scale=0, nullable=false)
     */
    private $damageExp2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $level;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;



    /**
     * Set basehp0
     *
     * @param integer $basehp0
     *
     * @return CreatureClasslevelstats
     */
    public function setBasehp0($basehp0)
    {
        $this->basehp0 = $basehp0;

        return $this;
    }

    /**
     * Get basehp0
     *
     * @return integer
     */
    public function getBasehp0()
    {
        return $this->basehp0;
    }

    /**
     * Set basehp1
     *
     * @param integer $basehp1
     *
     * @return CreatureClasslevelstats
     */
    public function setBasehp1($basehp1)
    {
        $this->basehp1 = $basehp1;

        return $this;
    }

    /**
     * Get basehp1
     *
     * @return integer
     */
    public function getBasehp1()
    {
        return $this->basehp1;
    }

    /**
     * Set basehp2
     *
     * @param integer $basehp2
     *
     * @return CreatureClasslevelstats
     */
    public function setBasehp2($basehp2)
    {
        $this->basehp2 = $basehp2;

        return $this;
    }

    /**
     * Get basehp2
     *
     * @return integer
     */
    public function getBasehp2()
    {
        return $this->basehp2;
    }

    /**
     * Set basemana
     *
     * @param integer $basemana
     *
     * @return CreatureClasslevelstats
     */
    public function setBasemana($basemana)
    {
        $this->basemana = $basemana;

        return $this;
    }

    /**
     * Get basemana
     *
     * @return integer
     */
    public function getBasemana()
    {
        return $this->basemana;
    }

    /**
     * Set basearmor
     *
     * @param integer $basearmor
     *
     * @return CreatureClasslevelstats
     */
    public function setBasearmor($basearmor)
    {
        $this->basearmor = $basearmor;

        return $this;
    }

    /**
     * Get basearmor
     *
     * @return integer
     */
    public function getBasearmor()
    {
        return $this->basearmor;
    }

    /**
     * Set attackpower
     *
     * @param integer $attackpower
     *
     * @return CreatureClasslevelstats
     */
    public function setAttackpower($attackpower)
    {
        $this->attackpower = $attackpower;

        return $this;
    }

    /**
     * Get attackpower
     *
     * @return integer
     */
    public function getAttackpower()
    {
        return $this->attackpower;
    }

    /**
     * Set rangedattackpower
     *
     * @param integer $rangedattackpower
     *
     * @return CreatureClasslevelstats
     */
    public function setRangedattackpower($rangedattackpower)
    {
        $this->rangedattackpower = $rangedattackpower;

        return $this;
    }

    /**
     * Get rangedattackpower
     *
     * @return integer
     */
    public function getRangedattackpower()
    {
        return $this->rangedattackpower;
    }

    /**
     * Set damageBase
     *
     * @param float $damageBase
     *
     * @return CreatureClasslevelstats
     */
    public function setDamageBase($damageBase)
    {
        $this->damageBase = $damageBase;

        return $this;
    }

    /**
     * Get damageBase
     *
     * @return float
     */
    public function getDamageBase()
    {
        return $this->damageBase;
    }

    /**
     * Set damageExp1
     *
     * @param float $damageExp1
     *
     * @return CreatureClasslevelstats
     */
    public function setDamageExp1($damageExp1)
    {
        $this->damageExp1 = $damageExp1;

        return $this;
    }

    /**
     * Get damageExp1
     *
     * @return float
     */
    public function getDamageExp1()
    {
        return $this->damageExp1;
    }

    /**
     * Set damageExp2
     *
     * @param float $damageExp2
     *
     * @return CreatureClasslevelstats
     */
    public function setDamageExp2($damageExp2)
    {
        $this->damageExp2 = $damageExp2;

        return $this;
    }

    /**
     * Get damageExp2
     *
     * @return float
     */
    public function getDamageExp2()
    {
        return $this->damageExp2;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return CreatureClasslevelstats
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return CreatureClasslevelstats
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

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return CreatureClasslevelstats
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
}
