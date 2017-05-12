<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemEnchantmentTemplate
 *
 * @ORM\Table(name="item_enchantment_template")
 * @ORM\Entity
 */
class ItemEnchantmentTemplate
{
    /**
     * @var float
     *
     * @ORM\Column(name="chance", type="float", precision=10, scale=0, nullable=false)
     */
    private $chance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="ench", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ench;



    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return ItemEnchantmentTemplate
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return ItemEnchantmentTemplate
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set ench
     *
     * @param integer $ench
     *
     * @return ItemEnchantmentTemplate
     */
    public function setEnch($ench)
    {
        $this->ench = $ench;

        return $this;
    }

    /**
     * Get ench
     *
     * @return integer
     */
    public function getEnch()
    {
        return $this->ench;
    }
}
