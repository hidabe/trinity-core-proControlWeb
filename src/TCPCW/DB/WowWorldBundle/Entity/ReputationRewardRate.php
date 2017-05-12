<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReputationRewardRate
 *
 * @ORM\Table(name="reputation_reward_rate")
 * @ORM\Entity
 */
class ReputationRewardRate
{
    /**
     * @var float
     *
     * @ORM\Column(name="quest_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $questRate = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="quest_daily_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $questDailyRate = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="quest_weekly_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $questWeeklyRate = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="quest_monthly_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $questMonthlyRate = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="quest_repeatable_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $questRepeatableRate = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="creature_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $creatureRate = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="spell_rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $spellRate = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="faction", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faction;



    /**
     * Set questRate
     *
     * @param float $questRate
     *
     * @return ReputationRewardRate
     */
    public function setQuestRate($questRate)
    {
        $this->questRate = $questRate;

        return $this;
    }

    /**
     * Get questRate
     *
     * @return float
     */
    public function getQuestRate()
    {
        return $this->questRate;
    }

    /**
     * Set questDailyRate
     *
     * @param float $questDailyRate
     *
     * @return ReputationRewardRate
     */
    public function setQuestDailyRate($questDailyRate)
    {
        $this->questDailyRate = $questDailyRate;

        return $this;
    }

    /**
     * Get questDailyRate
     *
     * @return float
     */
    public function getQuestDailyRate()
    {
        return $this->questDailyRate;
    }

    /**
     * Set questWeeklyRate
     *
     * @param float $questWeeklyRate
     *
     * @return ReputationRewardRate
     */
    public function setQuestWeeklyRate($questWeeklyRate)
    {
        $this->questWeeklyRate = $questWeeklyRate;

        return $this;
    }

    /**
     * Get questWeeklyRate
     *
     * @return float
     */
    public function getQuestWeeklyRate()
    {
        return $this->questWeeklyRate;
    }

    /**
     * Set questMonthlyRate
     *
     * @param float $questMonthlyRate
     *
     * @return ReputationRewardRate
     */
    public function setQuestMonthlyRate($questMonthlyRate)
    {
        $this->questMonthlyRate = $questMonthlyRate;

        return $this;
    }

    /**
     * Get questMonthlyRate
     *
     * @return float
     */
    public function getQuestMonthlyRate()
    {
        return $this->questMonthlyRate;
    }

    /**
     * Set questRepeatableRate
     *
     * @param float $questRepeatableRate
     *
     * @return ReputationRewardRate
     */
    public function setQuestRepeatableRate($questRepeatableRate)
    {
        $this->questRepeatableRate = $questRepeatableRate;

        return $this;
    }

    /**
     * Get questRepeatableRate
     *
     * @return float
     */
    public function getQuestRepeatableRate()
    {
        return $this->questRepeatableRate;
    }

    /**
     * Set creatureRate
     *
     * @param float $creatureRate
     *
     * @return ReputationRewardRate
     */
    public function setCreatureRate($creatureRate)
    {
        $this->creatureRate = $creatureRate;

        return $this;
    }

    /**
     * Get creatureRate
     *
     * @return float
     */
    public function getCreatureRate()
    {
        return $this->creatureRate;
    }

    /**
     * Set spellRate
     *
     * @param float $spellRate
     *
     * @return ReputationRewardRate
     */
    public function setSpellRate($spellRate)
    {
        $this->spellRate = $spellRate;

        return $this;
    }

    /**
     * Get spellRate
     *
     * @return float
     */
    public function getSpellRate()
    {
        return $this->spellRate;
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
