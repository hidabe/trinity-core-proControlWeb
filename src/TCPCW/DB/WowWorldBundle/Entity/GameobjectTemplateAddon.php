<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameobjectTemplateAddon
 *
 * @ORM\Table(name="gameobject_template_addon")
 * @ORM\Entity
 */
class GameobjectTemplateAddon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="faction", type="smallint", nullable=false)
     */
    private $faction = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mingold", type="integer", nullable=false)
     */
    private $mingold = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxgold", type="integer", nullable=false)
     */
    private $maxgold = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set faction
     *
     * @param integer $faction
     *
     * @return GameobjectTemplateAddon
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return integer
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return GameobjectTemplateAddon
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set mingold
     *
     * @param integer $mingold
     *
     * @return GameobjectTemplateAddon
     */
    public function setMingold($mingold)
    {
        $this->mingold = $mingold;

        return $this;
    }

    /**
     * Get mingold
     *
     * @return integer
     */
    public function getMingold()
    {
        return $this->mingold;
    }

    /**
     * Set maxgold
     *
     * @param integer $maxgold
     *
     * @return GameobjectTemplateAddon
     */
    public function setMaxgold($maxgold)
    {
        $this->maxgold = $maxgold;

        return $this;
    }

    /**
     * Get maxgold
     *
     * @return integer
     */
    public function getMaxgold()
    {
        return $this->maxgold;
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
