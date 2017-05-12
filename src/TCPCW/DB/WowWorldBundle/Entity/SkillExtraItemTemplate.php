<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillExtraItemTemplate
 *
 * @ORM\Table(name="skill_extra_item_template")
 * @ORM\Entity
 */
class SkillExtraItemTemplate
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
     * @ORM\Column(name="additionalCreateChance", type="float", precision=10, scale=0, nullable=false)
     */
    private $additionalcreatechance = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="additionalMaxNum", type="boolean", nullable=false)
     */
    private $additionalmaxnum = '0';

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
     * @return SkillExtraItemTemplate
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
     * Set additionalcreatechance
     *
     * @param float $additionalcreatechance
     *
     * @return SkillExtraItemTemplate
     */
    public function setAdditionalcreatechance($additionalcreatechance)
    {
        $this->additionalcreatechance = $additionalcreatechance;

        return $this;
    }

    /**
     * Get additionalcreatechance
     *
     * @return float
     */
    public function getAdditionalcreatechance()
    {
        return $this->additionalcreatechance;
    }

    /**
     * Set additionalmaxnum
     *
     * @param boolean $additionalmaxnum
     *
     * @return SkillExtraItemTemplate
     */
    public function setAdditionalmaxnum($additionalmaxnum)
    {
        $this->additionalmaxnum = $additionalmaxnum;

        return $this;
    }

    /**
     * Get additionalmaxnum
     *
     * @return boolean
     */
    public function getAdditionalmaxnum()
    {
        return $this->additionalmaxnum;
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
