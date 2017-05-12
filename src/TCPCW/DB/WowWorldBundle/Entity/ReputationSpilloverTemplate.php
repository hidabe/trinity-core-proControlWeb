<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReputationSpilloverTemplate
 *
 * @ORM\Table(name="reputation_spillover_template")
 * @ORM\Entity
 */
class ReputationSpilloverTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="faction1", type="smallint", nullable=false)
     */
    private $faction1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rate_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank_1", type="boolean", nullable=false)
     */
    private $rank1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="faction2", type="smallint", nullable=false)
     */
    private $faction2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rate_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank_2", type="boolean", nullable=false)
     */
    private $rank2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="faction3", type="smallint", nullable=false)
     */
    private $faction3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rate_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank_3", type="boolean", nullable=false)
     */
    private $rank3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="faction4", type="smallint", nullable=false)
     */
    private $faction4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rate_4", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rank_4", type="boolean", nullable=false)
     */
    private $rank4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="faction", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faction;



    /**
     * Set faction1
     *
     * @param integer $faction1
     *
     * @return ReputationSpilloverTemplate
     */
    public function setFaction1($faction1)
    {
        $this->faction1 = $faction1;

        return $this;
    }

    /**
     * Get faction1
     *
     * @return integer
     */
    public function getFaction1()
    {
        return $this->faction1;
    }

    /**
     * Set rate1
     *
     * @param float $rate1
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRate1($rate1)
    {
        $this->rate1 = $rate1;

        return $this;
    }

    /**
     * Get rate1
     *
     * @return float
     */
    public function getRate1()
    {
        return $this->rate1;
    }

    /**
     * Set rank1
     *
     * @param boolean $rank1
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRank1($rank1)
    {
        $this->rank1 = $rank1;

        return $this;
    }

    /**
     * Get rank1
     *
     * @return boolean
     */
    public function getRank1()
    {
        return $this->rank1;
    }

    /**
     * Set faction2
     *
     * @param integer $faction2
     *
     * @return ReputationSpilloverTemplate
     */
    public function setFaction2($faction2)
    {
        $this->faction2 = $faction2;

        return $this;
    }

    /**
     * Get faction2
     *
     * @return integer
     */
    public function getFaction2()
    {
        return $this->faction2;
    }

    /**
     * Set rate2
     *
     * @param float $rate2
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRate2($rate2)
    {
        $this->rate2 = $rate2;

        return $this;
    }

    /**
     * Get rate2
     *
     * @return float
     */
    public function getRate2()
    {
        return $this->rate2;
    }

    /**
     * Set rank2
     *
     * @param boolean $rank2
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRank2($rank2)
    {
        $this->rank2 = $rank2;

        return $this;
    }

    /**
     * Get rank2
     *
     * @return boolean
     */
    public function getRank2()
    {
        return $this->rank2;
    }

    /**
     * Set faction3
     *
     * @param integer $faction3
     *
     * @return ReputationSpilloverTemplate
     */
    public function setFaction3($faction3)
    {
        $this->faction3 = $faction3;

        return $this;
    }

    /**
     * Get faction3
     *
     * @return integer
     */
    public function getFaction3()
    {
        return $this->faction3;
    }

    /**
     * Set rate3
     *
     * @param float $rate3
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRate3($rate3)
    {
        $this->rate3 = $rate3;

        return $this;
    }

    /**
     * Get rate3
     *
     * @return float
     */
    public function getRate3()
    {
        return $this->rate3;
    }

    /**
     * Set rank3
     *
     * @param boolean $rank3
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRank3($rank3)
    {
        $this->rank3 = $rank3;

        return $this;
    }

    /**
     * Get rank3
     *
     * @return boolean
     */
    public function getRank3()
    {
        return $this->rank3;
    }

    /**
     * Set faction4
     *
     * @param integer $faction4
     *
     * @return ReputationSpilloverTemplate
     */
    public function setFaction4($faction4)
    {
        $this->faction4 = $faction4;

        return $this;
    }

    /**
     * Get faction4
     *
     * @return integer
     */
    public function getFaction4()
    {
        return $this->faction4;
    }

    /**
     * Set rate4
     *
     * @param float $rate4
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRate4($rate4)
    {
        $this->rate4 = $rate4;

        return $this;
    }

    /**
     * Get rate4
     *
     * @return float
     */
    public function getRate4()
    {
        return $this->rate4;
    }

    /**
     * Set rank4
     *
     * @param boolean $rank4
     *
     * @return ReputationSpilloverTemplate
     */
    public function setRank4($rank4)
    {
        $this->rank4 = $rank4;

        return $this;
    }

    /**
     * Get rank4
     *
     * @return boolean
     */
    public function getRank4()
    {
        return $this->rank4;
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
