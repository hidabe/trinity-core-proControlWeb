<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementCriteriaData
 *
 * @ORM\Table(name="achievement_criteria_data")
 * @ORM\Entity
 */
class AchievementCriteriaData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="value1", type="integer", nullable=false)
     */
    private $value1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="value2", type="integer", nullable=false)
     */
    private $value2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="criteria_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $criteriaId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;



    /**
     * Set value1
     *
     * @param integer $value1
     *
     * @return AchievementCriteriaData
     */
    public function setValue1($value1)
    {
        $this->value1 = $value1;

        return $this;
    }

    /**
     * Get value1
     *
     * @return integer
     */
    public function getValue1()
    {
        return $this->value1;
    }

    /**
     * Set value2
     *
     * @param integer $value2
     *
     * @return AchievementCriteriaData
     */
    public function setValue2($value2)
    {
        $this->value2 = $value2;

        return $this;
    }

    /**
     * Get value2
     *
     * @return integer
     */
    public function getValue2()
    {
        return $this->value2;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return AchievementCriteriaData
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * Set criteriaId
     *
     * @param integer $criteriaId
     *
     * @return AchievementCriteriaData
     */
    public function setCriteriaId($criteriaId)
    {
        $this->criteriaId = $criteriaId;

        return $this;
    }

    /**
     * Get criteriaId
     *
     * @return integer
     */
    public function getCriteriaId()
    {
        return $this->criteriaId;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return AchievementCriteriaData
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }
}
