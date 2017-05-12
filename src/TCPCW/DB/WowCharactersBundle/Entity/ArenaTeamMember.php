<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArenaTeamMember
 *
 * @ORM\Table(name="arena_team_member")
 * @ORM\Entity
 */
class ArenaTeamMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="weekGames", type="smallint", nullable=false)
     */
    private $weekgames = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="weekWins", type="smallint", nullable=false)
     */
    private $weekwins = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="seasonGames", type="smallint", nullable=false)
     */
    private $seasongames = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="seasonWins", type="smallint", nullable=false)
     */
    private $seasonwins = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="personalRating", type="smallint", nullable=false)
     */
    private $personalrating = '0';

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
     * @ORM\Column(name="arenaTeamId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $arenateamid;



    /**
     * Set weekgames
     *
     * @param integer $weekgames
     *
     * @return ArenaTeamMember
     */
    public function setWeekgames($weekgames)
    {
        $this->weekgames = $weekgames;

        return $this;
    }

    /**
     * Get weekgames
     *
     * @return integer
     */
    public function getWeekgames()
    {
        return $this->weekgames;
    }

    /**
     * Set weekwins
     *
     * @param integer $weekwins
     *
     * @return ArenaTeamMember
     */
    public function setWeekwins($weekwins)
    {
        $this->weekwins = $weekwins;

        return $this;
    }

    /**
     * Get weekwins
     *
     * @return integer
     */
    public function getWeekwins()
    {
        return $this->weekwins;
    }

    /**
     * Set seasongames
     *
     * @param integer $seasongames
     *
     * @return ArenaTeamMember
     */
    public function setSeasongames($seasongames)
    {
        $this->seasongames = $seasongames;

        return $this;
    }

    /**
     * Get seasongames
     *
     * @return integer
     */
    public function getSeasongames()
    {
        return $this->seasongames;
    }

    /**
     * Set seasonwins
     *
     * @param integer $seasonwins
     *
     * @return ArenaTeamMember
     */
    public function setSeasonwins($seasonwins)
    {
        $this->seasonwins = $seasonwins;

        return $this;
    }

    /**
     * Get seasonwins
     *
     * @return integer
     */
    public function getSeasonwins()
    {
        return $this->seasonwins;
    }

    /**
     * Set personalrating
     *
     * @param integer $personalrating
     *
     * @return ArenaTeamMember
     */
    public function setPersonalrating($personalrating)
    {
        $this->personalrating = $personalrating;

        return $this;
    }

    /**
     * Get personalrating
     *
     * @return integer
     */
    public function getPersonalrating()
    {
        return $this->personalrating;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return ArenaTeamMember
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
     * Set arenateamid
     *
     * @param integer $arenateamid
     *
     * @return ArenaTeamMember
     */
    public function setArenateamid($arenateamid)
    {
        $this->arenateamid = $arenateamid;

        return $this;
    }

    /**
     * Get arenateamid
     *
     * @return integer
     */
    public function getArenateamid()
    {
        return $this->arenateamid;
    }
}
