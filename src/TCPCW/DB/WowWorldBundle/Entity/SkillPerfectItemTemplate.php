<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillPerfectItemTemplate
 *
 * @ORM\Table(name="skill_perfect_item_template")
 * @ORM\Entity
 */
class SkillPerfectItemTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="requiredSpecialization", type="integer", nullable=false)
     */
    private $requiredspecialization = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="perfectCreateChance", type="float", precision=10, scale=0, nullable=false)
     */
    private $perfectcreatechance = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="perfectItemType", type="integer", nullable=false)
     */
    private $perfectitemtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spellid;



    /**
     * Set requiredspecialization
     *
     * @param integer $requiredspecialization
     *
     * @return SkillPerfectItemTemplate
     */
    public function setRequiredspecialization($requiredspecialization)
    {
        $this->requiredspecialization = $requiredspecialization;

        return $this;
    }

    /**
     * Get requiredspecialization
     *
     * @return integer
     */
    public function getRequiredspecialization()
    {
        return $this->requiredspecialization;
    }

    /**
     * Set perfectcreatechance
     *
     * @param float $perfectcreatechance
     *
     * @return SkillPerfectItemTemplate
     */
    public function setPerfectcreatechance($perfectcreatechance)
    {
        $this->perfectcreatechance = $perfectcreatechance;

        return $this;
    }

    /**
     * Get perfectcreatechance
     *
     * @return float
     */
    public function getPerfectcreatechance()
    {
        return $this->perfectcreatechance;
    }

    /**
     * Set perfectitemtype
     *
     * @param integer $perfectitemtype
     *
     * @return SkillPerfectItemTemplate
     */
    public function setPerfectitemtype($perfectitemtype)
    {
        $this->perfectitemtype = $perfectitemtype;

        return $this;
    }

    /**
     * Get perfectitemtype
     *
     * @return integer
     */
    public function getPerfectitemtype()
    {
        return $this->perfectitemtype;
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
}
