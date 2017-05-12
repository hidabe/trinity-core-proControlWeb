<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureModelInfo
 *
 * @ORM\Table(name="creature_model_info")
 * @ORM\Entity
 */
class CreatureModelInfo
{
    /**
     * @var float
     *
     * @ORM\Column(name="BoundingRadius", type="float", precision=10, scale=0, nullable=false)
     */
    private $boundingradius = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="CombatReach", type="float", precision=10, scale=0, nullable=false)
     */
    private $combatreach = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gender", type="boolean", nullable=false)
     */
    private $gender = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="DisplayID_Other_Gender", type="integer", nullable=false)
     */
    private $displayidOtherGender = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DisplayID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $displayid;



    /**
     * Set boundingradius
     *
     * @param float $boundingradius
     *
     * @return CreatureModelInfo
     */
    public function setBoundingradius($boundingradius)
    {
        $this->boundingradius = $boundingradius;

        return $this;
    }

    /**
     * Get boundingradius
     *
     * @return float
     */
    public function getBoundingradius()
    {
        return $this->boundingradius;
    }

    /**
     * Set combatreach
     *
     * @param float $combatreach
     *
     * @return CreatureModelInfo
     */
    public function setCombatreach($combatreach)
    {
        $this->combatreach = $combatreach;

        return $this;
    }

    /**
     * Get combatreach
     *
     * @return float
     */
    public function getCombatreach()
    {
        return $this->combatreach;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     *
     * @return CreatureModelInfo
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set displayidOtherGender
     *
     * @param integer $displayidOtherGender
     *
     * @return CreatureModelInfo
     */
    public function setDisplayidOtherGender($displayidOtherGender)
    {
        $this->displayidOtherGender = $displayidOtherGender;

        return $this;
    }

    /**
     * Get displayidOtherGender
     *
     * @return integer
     */
    public function getDisplayidOtherGender()
    {
        return $this->displayidOtherGender;
    }

    /**
     * Get displayid
     *
     * @return integer
     */
    public function getDisplayid()
    {
        return $this->displayid;
    }
}
