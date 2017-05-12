<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerFactionchangeItems
 *
 * @ORM\Table(name="player_factionchange_items")
 * @ORM\Entity
 */
class PlayerFactionchangeItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="race_A", type="integer", nullable=false)
     */
    private $raceA;

    /**
     * @var string
     *
     * @ORM\Column(name="commentA", type="text", length=65535, nullable=true)
     */
    private $commenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="race_H", type="integer", nullable=false)
     */
    private $raceH;

    /**
     * @var string
     *
     * @ORM\Column(name="commentH", type="text", length=65535, nullable=true)
     */
    private $commenth;

    /**
     * @var integer
     *
     * @ORM\Column(name="alliance_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $allianceId;

    /**
     * @var integer
     *
     * @ORM\Column(name="horde_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hordeId;



    /**
     * Set raceA
     *
     * @param integer $raceA
     *
     * @return PlayerFactionchangeItems
     */
    public function setRaceA($raceA)
    {
        $this->raceA = $raceA;

        return $this;
    }

    /**
     * Get raceA
     *
     * @return integer
     */
    public function getRaceA()
    {
        return $this->raceA;
    }

    /**
     * Set commenta
     *
     * @param string $commenta
     *
     * @return PlayerFactionchangeItems
     */
    public function setCommenta($commenta)
    {
        $this->commenta = $commenta;

        return $this;
    }

    /**
     * Get commenta
     *
     * @return string
     */
    public function getCommenta()
    {
        return $this->commenta;
    }

    /**
     * Set raceH
     *
     * @param integer $raceH
     *
     * @return PlayerFactionchangeItems
     */
    public function setRaceH($raceH)
    {
        $this->raceH = $raceH;

        return $this;
    }

    /**
     * Get raceH
     *
     * @return integer
     */
    public function getRaceH()
    {
        return $this->raceH;
    }

    /**
     * Set commenth
     *
     * @param string $commenth
     *
     * @return PlayerFactionchangeItems
     */
    public function setCommenth($commenth)
    {
        $this->commenth = $commenth;

        return $this;
    }

    /**
     * Get commenth
     *
     * @return string
     */
    public function getCommenth()
    {
        return $this->commenth;
    }

    /**
     * Set allianceId
     *
     * @param integer $allianceId
     *
     * @return PlayerFactionchangeItems
     */
    public function setAllianceId($allianceId)
    {
        $this->allianceId = $allianceId;

        return $this;
    }

    /**
     * Get allianceId
     *
     * @return integer
     */
    public function getAllianceId()
    {
        return $this->allianceId;
    }

    /**
     * Set hordeId
     *
     * @param integer $hordeId
     *
     * @return PlayerFactionchangeItems
     */
    public function setHordeId($hordeId)
    {
        $this->hordeId = $hordeId;

        return $this;
    }

    /**
     * Get hordeId
     *
     * @return integer
     */
    public function getHordeId()
    {
        return $this->hordeId;
    }
}
