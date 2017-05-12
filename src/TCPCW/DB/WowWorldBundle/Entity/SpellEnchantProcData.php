<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellEnchantProcData
 *
 * @ORM\Table(name="spell_enchant_proc_data")
 * @ORM\Entity
 */
class SpellEnchantProcData
{
    /**
     * @var float
     *
     * @ORM\Column(name="Chance", type="float", precision=10, scale=0, nullable=false)
     */
    private $chance = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ProcsPerMinute", type="float", precision=10, scale=0, nullable=false)
     */
    private $procsperminute = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="HitMask", type="integer", nullable=false)
     */
    private $hitmask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AttributesMask", type="integer", nullable=false)
     */
    private $attributesmask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EnchantID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $enchantid;



    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return SpellEnchantProcData
     */
    public function setChance($chance)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance
     *
     * @return float
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set procsperminute
     *
     * @param float $procsperminute
     *
     * @return SpellEnchantProcData
     */
    public function setProcsperminute($procsperminute)
    {
        $this->procsperminute = $procsperminute;

        return $this;
    }

    /**
     * Get procsperminute
     *
     * @return float
     */
    public function getProcsperminute()
    {
        return $this->procsperminute;
    }

    /**
     * Set hitmask
     *
     * @param integer $hitmask
     *
     * @return SpellEnchantProcData
     */
    public function setHitmask($hitmask)
    {
        $this->hitmask = $hitmask;

        return $this;
    }

    /**
     * Get hitmask
     *
     * @return integer
     */
    public function getHitmask()
    {
        return $this->hitmask;
    }

    /**
     * Set attributesmask
     *
     * @param integer $attributesmask
     *
     * @return SpellEnchantProcData
     */
    public function setAttributesmask($attributesmask)
    {
        $this->attributesmask = $attributesmask;

        return $this;
    }

    /**
     * Get attributesmask
     *
     * @return integer
     */
    public function getAttributesmask()
    {
        return $this->attributesmask;
    }

    /**
     * Get enchantid
     *
     * @return integer
     */
    public function getEnchantid()
    {
        return $this->enchantid;
    }
}
