<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellBonusData
 *
 * @ORM\Table(name="spell_bonus_data")
 * @ORM\Entity
 */
class SpellBonusData
{
    /**
     * @var float
     *
     * @ORM\Column(name="direct_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $directBonus = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dot_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $dotBonus = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ap_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $apBonus = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ap_dot_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $apDotBonus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set directBonus
     *
     * @param float $directBonus
     *
     * @return SpellBonusData
     */
    public function setDirectBonus($directBonus)
    {
        $this->directBonus = $directBonus;

        return $this;
    }

    /**
     * Get directBonus
     *
     * @return float
     */
    public function getDirectBonus()
    {
        return $this->directBonus;
    }

    /**
     * Set dotBonus
     *
     * @param float $dotBonus
     *
     * @return SpellBonusData
     */
    public function setDotBonus($dotBonus)
    {
        $this->dotBonus = $dotBonus;

        return $this;
    }

    /**
     * Get dotBonus
     *
     * @return float
     */
    public function getDotBonus()
    {
        return $this->dotBonus;
    }

    /**
     * Set apBonus
     *
     * @param float $apBonus
     *
     * @return SpellBonusData
     */
    public function setApBonus($apBonus)
    {
        $this->apBonus = $apBonus;

        return $this;
    }

    /**
     * Get apBonus
     *
     * @return float
     */
    public function getApBonus()
    {
        return $this->apBonus;
    }

    /**
     * Set apDotBonus
     *
     * @param float $apDotBonus
     *
     * @return SpellBonusData
     */
    public function setApDotBonus($apDotBonus)
    {
        $this->apDotBonus = $apDotBonus;

        return $this;
    }

    /**
     * Get apDotBonus
     *
     * @return float
     */
    public function getApDotBonus()
    {
        return $this->apDotBonus;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return SpellBonusData
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
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
}
