<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureOnkillReputation
 *
 * @ORM\Table(name="creature_onkill_reputation")
 * @ORM\Entity
 */
class CreatureOnkillReputation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RewOnKillRepFaction1", type="smallint", nullable=false)
     */
    private $rewonkillrepfaction1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewOnKillRepFaction2", type="smallint", nullable=false)
     */
    private $rewonkillrepfaction2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MaxStanding1", type="boolean", nullable=false)
     */
    private $maxstanding1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsTeamAward1", type="boolean", nullable=false)
     */
    private $isteamaward1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewOnKillRepValue1", type="integer", nullable=false)
     */
    private $rewonkillrepvalue1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MaxStanding2", type="boolean", nullable=false)
     */
    private $maxstanding2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsTeamAward2", type="boolean", nullable=false)
     */
    private $isteamaward2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RewOnKillRepValue2", type="integer", nullable=false)
     */
    private $rewonkillrepvalue2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="TeamDependent", type="boolean", nullable=false)
     */
    private $teamdependent = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="creature_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $creatureId;



    /**
     * Set rewonkillrepfaction1
     *
     * @param integer $rewonkillrepfaction1
     *
     * @return CreatureOnkillReputation
     */
    public function setRewonkillrepfaction1($rewonkillrepfaction1)
    {
        $this->rewonkillrepfaction1 = $rewonkillrepfaction1;

        return $this;
    }

    /**
     * Get rewonkillrepfaction1
     *
     * @return integer
     */
    public function getRewonkillrepfaction1()
    {
        return $this->rewonkillrepfaction1;
    }

    /**
     * Set rewonkillrepfaction2
     *
     * @param integer $rewonkillrepfaction2
     *
     * @return CreatureOnkillReputation
     */
    public function setRewonkillrepfaction2($rewonkillrepfaction2)
    {
        $this->rewonkillrepfaction2 = $rewonkillrepfaction2;

        return $this;
    }

    /**
     * Get rewonkillrepfaction2
     *
     * @return integer
     */
    public function getRewonkillrepfaction2()
    {
        return $this->rewonkillrepfaction2;
    }

    /**
     * Set maxstanding1
     *
     * @param boolean $maxstanding1
     *
     * @return CreatureOnkillReputation
     */
    public function setMaxstanding1($maxstanding1)
    {
        $this->maxstanding1 = $maxstanding1;

        return $this;
    }

    /**
     * Get maxstanding1
     *
     * @return boolean
     */
    public function getMaxstanding1()
    {
        return $this->maxstanding1;
    }

    /**
     * Set isteamaward1
     *
     * @param boolean $isteamaward1
     *
     * @return CreatureOnkillReputation
     */
    public function setIsteamaward1($isteamaward1)
    {
        $this->isteamaward1 = $isteamaward1;

        return $this;
    }

    /**
     * Get isteamaward1
     *
     * @return boolean
     */
    public function getIsteamaward1()
    {
        return $this->isteamaward1;
    }

    /**
     * Set rewonkillrepvalue1
     *
     * @param integer $rewonkillrepvalue1
     *
     * @return CreatureOnkillReputation
     */
    public function setRewonkillrepvalue1($rewonkillrepvalue1)
    {
        $this->rewonkillrepvalue1 = $rewonkillrepvalue1;

        return $this;
    }

    /**
     * Get rewonkillrepvalue1
     *
     * @return integer
     */
    public function getRewonkillrepvalue1()
    {
        return $this->rewonkillrepvalue1;
    }

    /**
     * Set maxstanding2
     *
     * @param boolean $maxstanding2
     *
     * @return CreatureOnkillReputation
     */
    public function setMaxstanding2($maxstanding2)
    {
        $this->maxstanding2 = $maxstanding2;

        return $this;
    }

    /**
     * Get maxstanding2
     *
     * @return boolean
     */
    public function getMaxstanding2()
    {
        return $this->maxstanding2;
    }

    /**
     * Set isteamaward2
     *
     * @param boolean $isteamaward2
     *
     * @return CreatureOnkillReputation
     */
    public function setIsteamaward2($isteamaward2)
    {
        $this->isteamaward2 = $isteamaward2;

        return $this;
    }

    /**
     * Get isteamaward2
     *
     * @return boolean
     */
    public function getIsteamaward2()
    {
        return $this->isteamaward2;
    }

    /**
     * Set rewonkillrepvalue2
     *
     * @param integer $rewonkillrepvalue2
     *
     * @return CreatureOnkillReputation
     */
    public function setRewonkillrepvalue2($rewonkillrepvalue2)
    {
        $this->rewonkillrepvalue2 = $rewonkillrepvalue2;

        return $this;
    }

    /**
     * Get rewonkillrepvalue2
     *
     * @return integer
     */
    public function getRewonkillrepvalue2()
    {
        return $this->rewonkillrepvalue2;
    }

    /**
     * Set teamdependent
     *
     * @param boolean $teamdependent
     *
     * @return CreatureOnkillReputation
     */
    public function setTeamdependent($teamdependent)
    {
        $this->teamdependent = $teamdependent;

        return $this;
    }

    /**
     * Get teamdependent
     *
     * @return boolean
     */
    public function getTeamdependent()
    {
        return $this->teamdependent;
    }

    /**
     * Get creatureId
     *
     * @return integer
     */
    public function getCreatureId()
    {
        return $this->creatureId;
    }
}
