<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerFactionchangeReputations
 *
 * @ORM\Table(name="player_factionchange_reputations")
 * @ORM\Entity
 */
class PlayerFactionchangeReputations
{
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
     * Set allianceId
     *
     * @param integer $allianceId
     *
     * @return PlayerFactionchangeReputations
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
     * @return PlayerFactionchangeReputations
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
