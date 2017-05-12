<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterReputation
 *
 * @ORM\Table(name="character_reputation")
 * @ORM\Entity
 */
class CharacterReputation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="standing", type="integer", nullable=false)
     */
    private $standing = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="smallint", nullable=false)
     */
    private $flags = '0';

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
     * @ORM\Column(name="faction", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $faction;



    /**
     * Set standing
     *
     * @param integer $standing
     *
     * @return CharacterReputation
     */
    public function setStanding($standing)
    {
        $this->standing = $standing;

        return $this;
    }

    /**
     * Get standing
     *
     * @return integer
     */
    public function getStanding()
    {
        return $this->standing;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return CharacterReputation
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
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterReputation
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
     * Set faction
     *
     * @param integer $faction
     *
     * @return CharacterReputation
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
}
