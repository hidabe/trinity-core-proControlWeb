<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventArenaSeasons
 *
 * @ORM\Table(name="game_event_arena_seasons", uniqueConstraints={@ORM\UniqueConstraint(name="season", columns={"season", "eventEntry"})})
 * @ORM\Entity
 */
class GameEventArenaSeasons
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="season", type="boolean", nullable=false)
     */
    private $season;

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evententry;



    /**
     * Set season
     *
     * @param boolean $season
     *
     * @return GameEventArenaSeasons
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return boolean
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Get evententry
     *
     * @return boolean
     */
    public function getEvententry()
    {
        return $this->evententry;
    }
}
