<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvpstatsPlayers
 *
 * @ORM\Table(name="pvpstats_players")
 * @ORM\Entity
 */
class PvpstatsPlayers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="winner", type="integer", nullable=false)
     */
    private $winner;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_killing_blows", type="integer", nullable=false)
     */
    private $scoreKillingBlows;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_deaths", type="integer", nullable=false)
     */
    private $scoreDeaths;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_honorable_kills", type="integer", nullable=false)
     */
    private $scoreHonorableKills;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_bonus_honor", type="integer", nullable=false)
     */
    private $scoreBonusHonor;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_damage_done", type="integer", nullable=false)
     */
    private $scoreDamageDone;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_healing_done", type="integer", nullable=false)
     */
    private $scoreHealingDone;

    /**
     * @var integer
     *
     * @ORM\Column(name="attr_1", type="integer", nullable=false)
     */
    private $attr1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attr_2", type="integer", nullable=false)
     */
    private $attr2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attr_3", type="integer", nullable=false)
     */
    private $attr3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attr_4", type="integer", nullable=false)
     */
    private $attr4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="attr_5", type="integer", nullable=false)
     */
    private $attr5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="battleground_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $battlegroundId;

    /**
     * @var integer
     *
     * @ORM\Column(name="character_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $characterGuid;



    /**
     * Set winner
     *
     * @param integer $winner
     *
     * @return PvpstatsPlayers
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return integer
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set scoreKillingBlows
     *
     * @param integer $scoreKillingBlows
     *
     * @return PvpstatsPlayers
     */
    public function setScoreKillingBlows($scoreKillingBlows)
    {
        $this->scoreKillingBlows = $scoreKillingBlows;

        return $this;
    }

    /**
     * Get scoreKillingBlows
     *
     * @return integer
     */
    public function getScoreKillingBlows()
    {
        return $this->scoreKillingBlows;
    }

    /**
     * Set scoreDeaths
     *
     * @param integer $scoreDeaths
     *
     * @return PvpstatsPlayers
     */
    public function setScoreDeaths($scoreDeaths)
    {
        $this->scoreDeaths = $scoreDeaths;

        return $this;
    }

    /**
     * Get scoreDeaths
     *
     * @return integer
     */
    public function getScoreDeaths()
    {
        return $this->scoreDeaths;
    }

    /**
     * Set scoreHonorableKills
     *
     * @param integer $scoreHonorableKills
     *
     * @return PvpstatsPlayers
     */
    public function setScoreHonorableKills($scoreHonorableKills)
    {
        $this->scoreHonorableKills = $scoreHonorableKills;

        return $this;
    }

    /**
     * Get scoreHonorableKills
     *
     * @return integer
     */
    public function getScoreHonorableKills()
    {
        return $this->scoreHonorableKills;
    }

    /**
     * Set scoreBonusHonor
     *
     * @param integer $scoreBonusHonor
     *
     * @return PvpstatsPlayers
     */
    public function setScoreBonusHonor($scoreBonusHonor)
    {
        $this->scoreBonusHonor = $scoreBonusHonor;

        return $this;
    }

    /**
     * Get scoreBonusHonor
     *
     * @return integer
     */
    public function getScoreBonusHonor()
    {
        return $this->scoreBonusHonor;
    }

    /**
     * Set scoreDamageDone
     *
     * @param integer $scoreDamageDone
     *
     * @return PvpstatsPlayers
     */
    public function setScoreDamageDone($scoreDamageDone)
    {
        $this->scoreDamageDone = $scoreDamageDone;

        return $this;
    }

    /**
     * Get scoreDamageDone
     *
     * @return integer
     */
    public function getScoreDamageDone()
    {
        return $this->scoreDamageDone;
    }

    /**
     * Set scoreHealingDone
     *
     * @param integer $scoreHealingDone
     *
     * @return PvpstatsPlayers
     */
    public function setScoreHealingDone($scoreHealingDone)
    {
        $this->scoreHealingDone = $scoreHealingDone;

        return $this;
    }

    /**
     * Get scoreHealingDone
     *
     * @return integer
     */
    public function getScoreHealingDone()
    {
        return $this->scoreHealingDone;
    }

    /**
     * Set attr1
     *
     * @param integer $attr1
     *
     * @return PvpstatsPlayers
     */
    public function setAttr1($attr1)
    {
        $this->attr1 = $attr1;

        return $this;
    }

    /**
     * Get attr1
     *
     * @return integer
     */
    public function getAttr1()
    {
        return $this->attr1;
    }

    /**
     * Set attr2
     *
     * @param integer $attr2
     *
     * @return PvpstatsPlayers
     */
    public function setAttr2($attr2)
    {
        $this->attr2 = $attr2;

        return $this;
    }

    /**
     * Get attr2
     *
     * @return integer
     */
    public function getAttr2()
    {
        return $this->attr2;
    }

    /**
     * Set attr3
     *
     * @param integer $attr3
     *
     * @return PvpstatsPlayers
     */
    public function setAttr3($attr3)
    {
        $this->attr3 = $attr3;

        return $this;
    }

    /**
     * Get attr3
     *
     * @return integer
     */
    public function getAttr3()
    {
        return $this->attr3;
    }

    /**
     * Set attr4
     *
     * @param integer $attr4
     *
     * @return PvpstatsPlayers
     */
    public function setAttr4($attr4)
    {
        $this->attr4 = $attr4;

        return $this;
    }

    /**
     * Get attr4
     *
     * @return integer
     */
    public function getAttr4()
    {
        return $this->attr4;
    }

    /**
     * Set attr5
     *
     * @param integer $attr5
     *
     * @return PvpstatsPlayers
     */
    public function setAttr5($attr5)
    {
        $this->attr5 = $attr5;

        return $this;
    }

    /**
     * Get attr5
     *
     * @return integer
     */
    public function getAttr5()
    {
        return $this->attr5;
    }

    /**
     * Set battlegroundId
     *
     * @param integer $battlegroundId
     *
     * @return PvpstatsPlayers
     */
    public function setBattlegroundId($battlegroundId)
    {
        $this->battlegroundId = $battlegroundId;

        return $this;
    }

    /**
     * Get battlegroundId
     *
     * @return integer
     */
    public function getBattlegroundId()
    {
        return $this->battlegroundId;
    }

    /**
     * Set characterGuid
     *
     * @param integer $characterGuid
     *
     * @return PvpstatsPlayers
     */
    public function setCharacterGuid($characterGuid)
    {
        $this->characterGuid = $characterGuid;

        return $this;
    }

    /**
     * Get characterGuid
     *
     * @return integer
     */
    public function getCharacterGuid()
    {
        return $this->characterGuid;
    }
}
