<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillFishingBaseLevel
 *
 * @ORM\Table(name="skill_fishing_base_level")
 * @ORM\Entity
 */
class SkillFishingBaseLevel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skill", type="smallint", nullable=false)
     */
    private $skill = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set skill
     *
     * @param integer $skill
     *
     * @return SkillFishingBaseLevel
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return integer
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
