<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillDiscoveryTemplate
 *
 * @ORM\Table(name="skill_discovery_template")
 * @ORM\Entity
 */
class SkillDiscoveryTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reqSkillValue", type="smallint", nullable=false)
     */
    private $reqskillvalue = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="chance", type="float", precision=10, scale=0, nullable=false)
     */
    private $chance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spellid;

    /**
     * @var integer
     *
     * @ORM\Column(name="reqSpell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reqspell;



    /**
     * Set reqskillvalue
     *
     * @param integer $reqskillvalue
     *
     * @return SkillDiscoveryTemplate
     */
    public function setReqskillvalue($reqskillvalue)
    {
        $this->reqskillvalue = $reqskillvalue;

        return $this;
    }

    /**
     * Get reqskillvalue
     *
     * @return integer
     */
    public function getReqskillvalue()
    {
        return $this->reqskillvalue;
    }

    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return SkillDiscoveryTemplate
     */
    public function setChance($chance)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance
     *
     * @return float
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set spellid
     *
     * @param integer $spellid
     *
     * @return SkillDiscoveryTemplate
     */
    public function setSpellid($spellid)
    {
        $this->spellid = $spellid;

        return $this;
    }

    /**
     * Get spellid
     *
     * @return integer
     */
    public function getSpellid()
    {
        return $this->spellid;
    }

    /**
     * Set reqspell
     *
     * @param integer $reqspell
     *
     * @return SkillDiscoveryTemplate
     */
    public function setReqspell($reqspell)
    {
        $this->reqspell = $reqspell;

        return $this;
    }

    /**
     * Get reqspell
     *
     * @return integer
     */
    public function getReqspell()
    {
        return $this->reqspell;
    }
}
