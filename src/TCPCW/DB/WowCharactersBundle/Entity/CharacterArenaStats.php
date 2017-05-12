<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterArenaStats
 *
 * @ORM\Table(name="character_arena_stats")
 * @ORM\Entity
 */
class CharacterArenaStats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matchMakerRating", type="smallint", nullable=false)
     */
    private $matchmakerrating = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="slot", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $slot;



    /**
     * Set matchmakerrating
     *
     * @param integer $matchmakerrating
     *
     * @return CharacterArenaStats
     */
    public function setMatchmakerrating($matchmakerrating)
    {
        $this->matchmakerrating = $matchmakerrating;

        return $this;
    }

    /**
     * Get matchmakerrating
     *
     * @return integer
     */
    public function getMatchmakerrating()
    {
        return $this->matchmakerrating;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterArenaStats
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
     * Set slot
     *
     * @param boolean $slot
     *
     * @return CharacterArenaStats
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return boolean
     */
    public function getSlot()
    {
        return $this->slot;
    }
}
