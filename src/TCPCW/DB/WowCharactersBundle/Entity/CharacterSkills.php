<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSkills
 *
 * @ORM\Table(name="character_skills")
 * @ORM\Entity
 */
class CharacterSkills
{
    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="smallint", nullable=false)
     */
    private $value;

    /**
     * @var integer
     *
     * @ORM\Column(name="max", type="smallint", nullable=false)
     */
    private $max;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $skill;



    /**
     * Set value
     *
     * @param integer $value
     *
     * @return CharacterSkills
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set max
     *
     * @param integer $max
     *
     * @return CharacterSkills
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterSkills
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set skill
     *
     * @param integer $skill
     *
     * @return CharacterSkills
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
}
