<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterAura
 *
 * @ORM\Table(name="character_aura")
 * @ORM\Entity
 */
class CharacterAura
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="recalculateMask", type="integer", nullable=false)
     */
    private $recalculatemask = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stackCount", type="integer", nullable=false)
     */
    private $stackcount = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount0", type="integer", nullable=false)
     */
    private $amount0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount1", type="integer", nullable=false)
     */
    private $amount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount2", type="integer", nullable=false)
     */
    private $amount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount0", type="integer", nullable=false)
     */
    private $baseAmount0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount1", type="integer", nullable=false)
     */
    private $baseAmount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount2", type="integer", nullable=false)
     */
    private $baseAmount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxDuration", type="integer", nullable=false)
     */
    private $maxduration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="remainTime", type="integer", nullable=false)
     */
    private $remaintime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="remainCharges", type="integer", nullable=false)
     */
    private $remaincharges = '0';

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
     * @var integer
     *
     * @ORM\Column(name="casterGuid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $casterguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="effectMask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $effectmask;



    /**
     * Set recalculatemask
     *
     * @param boolean $recalculatemask
     *
     * @return CharacterAura
     */
    public function setRecalculatemask($recalculatemask)
    {
        $this->recalculatemask = $recalculatemask;

        return $this;
    }

    /**
     * Get recalculatemask
     *
     * @return boolean
     */
    public function getRecalculatemask()
    {
        return $this->recalculatemask;
    }

    /**
     * Set stackcount
     *
     * @param boolean $stackcount
     *
     * @return CharacterAura
     */
    public function setStackcount($stackcount)
    {
        $this->stackcount = $stackcount;

        return $this;
    }

    /**
     * Get stackcount
     *
     * @return boolean
     */
    public function getStackcount()
    {
        return $this->stackcount;
    }

    /**
     * Set amount0
     *
     * @param integer $amount0
     *
     * @return CharacterAura
     */
    public function setAmount0($amount0)
    {
        $this->amount0 = $amount0;

        return $this;
    }

    /**
     * Get amount0
     *
     * @return integer
     */
    public function getAmount0()
    {
        return $this->amount0;
    }

    /**
     * Set amount1
     *
     * @param integer $amount1
     *
     * @return CharacterAura
     */
    public function setAmount1($amount1)
    {
        $this->amount1 = $amount1;

        return $this;
    }

    /**
     * Get amount1
     *
     * @return integer
     */
    public function getAmount1()
    {
        return $this->amount1;
    }

    /**
     * Set amount2
     *
     * @param integer $amount2
     *
     * @return CharacterAura
     */
    public function setAmount2($amount2)
    {
        $this->amount2 = $amount2;

        return $this;
    }

    /**
     * Get amount2
     *
     * @return integer
     */
    public function getAmount2()
    {
        return $this->amount2;
    }

    /**
     * Set baseAmount0
     *
     * @param integer $baseAmount0
     *
     * @return CharacterAura
     */
    public function setBaseAmount0($baseAmount0)
    {
        $this->baseAmount0 = $baseAmount0;

        return $this;
    }

    /**
     * Get baseAmount0
     *
     * @return integer
     */
    public function getBaseAmount0()
    {
        return $this->baseAmount0;
    }

    /**
     * Set baseAmount1
     *
     * @param integer $baseAmount1
     *
     * @return CharacterAura
     */
    public function setBaseAmount1($baseAmount1)
    {
        $this->baseAmount1 = $baseAmount1;

        return $this;
    }

    /**
     * Get baseAmount1
     *
     * @return integer
     */
    public function getBaseAmount1()
    {
        return $this->baseAmount1;
    }

    /**
     * Set baseAmount2
     *
     * @param integer $baseAmount2
     *
     * @return CharacterAura
     */
    public function setBaseAmount2($baseAmount2)
    {
        $this->baseAmount2 = $baseAmount2;

        return $this;
    }

    /**
     * Get baseAmount2
     *
     * @return integer
     */
    public function getBaseAmount2()
    {
        return $this->baseAmount2;
    }

    /**
     * Set maxduration
     *
     * @param integer $maxduration
     *
     * @return CharacterAura
     */
    public function setMaxduration($maxduration)
    {
        $this->maxduration = $maxduration;

        return $this;
    }

    /**
     * Get maxduration
     *
     * @return integer
     */
    public function getMaxduration()
    {
        return $this->maxduration;
    }

    /**
     * Set remaintime
     *
     * @param integer $remaintime
     *
     * @return CharacterAura
     */
    public function setRemaintime($remaintime)
    {
        $this->remaintime = $remaintime;

        return $this;
    }

    /**
     * Get remaintime
     *
     * @return integer
     */
    public function getRemaintime()
    {
        return $this->remaintime;
    }

    /**
     * Set remaincharges
     *
     * @param boolean $remaincharges
     *
     * @return CharacterAura
     */
    public function setRemaincharges($remaincharges)
    {
        $this->remaincharges = $remaincharges;

        return $this;
    }

    /**
     * Get remaincharges
     *
     * @return boolean
     */
    public function getRemaincharges()
    {
        return $this->remaincharges;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterAura
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
     * @return CharacterAura
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
     * Set casterguid
     *
     * @param integer $casterguid
     *
     * @return CharacterAura
     */
    public function setCasterguid($casterguid)
    {
        $this->casterguid = $casterguid;

        return $this;
    }

    /**
     * Get casterguid
     *
     * @return integer
     */
    public function getCasterguid()
    {
        return $this->casterguid;
    }

    /**
     * Set effectmask
     *
     * @param boolean $effectmask
     *
     * @return CharacterAura
     */
    public function setEffectmask($effectmask)
    {
        $this->effectmask = $effectmask;

        return $this;
    }

    /**
     * Get effectmask
     *
     * @return boolean
     */
    public function getEffectmask()
    {
        return $this->effectmask;
    }
}
