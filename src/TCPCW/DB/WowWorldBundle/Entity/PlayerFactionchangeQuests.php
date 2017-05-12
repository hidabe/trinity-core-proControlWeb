<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerFactionchangeQuests
 *
 * @ORM\Table(name="player_factionchange_quests", uniqueConstraints={@ORM\UniqueConstraint(name="alliance_uniq", columns={"alliance_id"}), @ORM\UniqueConstraint(name="horde_uniq", columns={"horde_id"})})
 * @ORM\Entity
 */
class PlayerFactionchangeQuests
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
     * @return PlayerFactionchangeQuests
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
     * @return PlayerFactionchangeQuests
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
