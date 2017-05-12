<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvpstatsBattlegrounds
 *
 * @ORM\Table(name="pvpstats_battlegrounds")
 * @ORM\Entity
 */
class PvpstatsBattlegrounds
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="winner_faction", type="integer", nullable=false)
     */
    private $winnerFaction;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bracket_id", type="integer", nullable=false)
     */
    private $bracketId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set winnerFaction
     *
     * @param boolean $winnerFaction
     *
     * @return PvpstatsBattlegrounds
     */
    public function setWinnerFaction($winnerFaction)
    {
        $this->winnerFaction = $winnerFaction;

        return $this;
    }

    /**
     * Get winnerFaction
     *
     * @return boolean
     */
    public function getWinnerFaction()
    {
        return $this->winnerFaction;
    }

    /**
     * Set bracketId
     *
     * @param boolean $bracketId
     *
     * @return PvpstatsBattlegrounds
     */
    public function setBracketId($bracketId)
    {
        $this->bracketId = $bracketId;

        return $this;
    }

    /**
     * Get bracketId
     *
     * @return boolean
     */
    public function getBracketId()
    {
        return $this->bracketId;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return PvpstatsBattlegrounds
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PvpstatsBattlegrounds
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
