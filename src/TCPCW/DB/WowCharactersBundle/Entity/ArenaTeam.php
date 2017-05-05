<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArenaTeam
 *
 * @ORM\Table(name="arena_team")
 * @ORM\Entity
 */
class ArenaTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="captainGuid", type="integer", nullable=false)
     */
    private $captainguid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="smallint", nullable=false)
     */
    private $rating = '0';

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
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="backgroundColor", type="integer", nullable=false)
     */
    private $backgroundcolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="emblemStyle", type="integer", nullable=false)
     */
    private $emblemstyle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="emblemColor", type="integer", nullable=false)
     */
    private $emblemcolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="borderStyle", type="integer", nullable=false)
     */
    private $borderstyle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="borderColor", type="integer", nullable=false)
     */
    private $bordercolor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="arenaTeamId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $arenateamid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return ArenaTeam
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set captainguid
     *
     * @param integer $captainguid
     *
     * @return ArenaTeam
     */
    public function setCaptainguid($captainguid)
    {
        $this->captainguid = $captainguid;

        return $this;
    }

    /**
     * Get captainguid
     *
     * @return integer
     */
    public function getCaptainguid()
    {
        return $this->captainguid;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return ArenaTeam
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return ArenaTeam
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set seasongames
     *
     * @param integer $seasongames
     *
     * @return ArenaTeam
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
     * @return ArenaTeam
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
     * Set weekgames
     *
     * @param integer $weekgames
     *
     * @return ArenaTeam
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
     * @return ArenaTeam
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
     * Set rank
     *
     * @param integer $rank
     *
     * @return ArenaTeam
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set backgroundcolor
     *
     * @param integer $backgroundcolor
     *
     * @return ArenaTeam
     */
    public function setBackgroundcolor($backgroundcolor)
    {
        $this->backgroundcolor = $backgroundcolor;

        return $this;
    }

    /**
     * Get backgroundcolor
     *
     * @return integer
     */
    public function getBackgroundcolor()
    {
        return $this->backgroundcolor;
    }

    /**
     * Set emblemstyle
     *
     * @param boolean $emblemstyle
     *
     * @return ArenaTeam
     */
    public function setEmblemstyle($emblemstyle)
    {
        $this->emblemstyle = $emblemstyle;

        return $this;
    }

    /**
     * Get emblemstyle
     *
     * @return boolean
     */
    public function getEmblemstyle()
    {
        return $this->emblemstyle;
    }

    /**
     * Set emblemcolor
     *
     * @param integer $emblemcolor
     *
     * @return ArenaTeam
     */
    public function setEmblemcolor($emblemcolor)
    {
        $this->emblemcolor = $emblemcolor;

        return $this;
    }

    /**
     * Get emblemcolor
     *
     * @return integer
     */
    public function getEmblemcolor()
    {
        return $this->emblemcolor;
    }

    /**
     * Set borderstyle
     *
     * @param boolean $borderstyle
     *
     * @return ArenaTeam
     */
    public function setBorderstyle($borderstyle)
    {
        $this->borderstyle = $borderstyle;

        return $this;
    }

    /**
     * Get borderstyle
     *
     * @return boolean
     */
    public function getBorderstyle()
    {
        return $this->borderstyle;
    }

    /**
     * Set bordercolor
     *
     * @param integer $bordercolor
     *
     * @return ArenaTeam
     */
    public function setBordercolor($bordercolor)
    {
        $this->bordercolor = $bordercolor;

        return $this;
    }

    /**
     * Get bordercolor
     *
     * @return integer
     */
    public function getBordercolor()
    {
        return $this->bordercolor;
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
