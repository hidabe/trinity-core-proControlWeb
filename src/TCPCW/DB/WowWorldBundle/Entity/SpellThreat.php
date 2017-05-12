<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellThreat
 *
 * @ORM\Table(name="spell_threat")
 * @ORM\Entity
 */
class SpellThreat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="flatMod", type="integer", nullable=true)
     */
    private $flatmod;

    /**
     * @var float
     *
     * @ORM\Column(name="pctMod", type="float", precision=10, scale=0, nullable=false)
     */
    private $pctmod = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="apPctMod", type="float", precision=10, scale=0, nullable=false)
     */
    private $appctmod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set flatmod
     *
     * @param integer $flatmod
     *
     * @return SpellThreat
     */
    public function setFlatmod($flatmod)
    {
        $this->flatmod = $flatmod;

        return $this;
    }

    /**
     * Get flatmod
     *
     * @return integer
     */
    public function getFlatmod()
    {
        return $this->flatmod;
    }

    /**
     * Set pctmod
     *
     * @param float $pctmod
     *
     * @return SpellThreat
     */
    public function setPctmod($pctmod)
    {
        $this->pctmod = $pctmod;

        return $this;
    }

    /**
     * Get pctmod
     *
     * @return float
     */
    public function getPctmod()
    {
        return $this->pctmod;
    }

    /**
     * Set appctmod
     *
     * @param float $appctmod
     *
     * @return SpellThreat
     */
    public function setAppctmod($appctmod)
    {
        $this->appctmod = $appctmod;

        return $this;
    }

    /**
     * Get appctmod
     *
     * @return float
     */
    public function getAppctmod()
    {
        return $this->appctmod;
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
