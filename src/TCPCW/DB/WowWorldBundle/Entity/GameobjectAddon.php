<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameobjectAddon
 *
 * @ORM\Table(name="gameobject_addon")
 * @ORM\Entity
 */
class GameobjectAddon
{
    /**
     * @var float
     *
     * @ORM\Column(name="parent_rotation0", type="float", precision=10, scale=0, nullable=false)
     */
    private $parentRotation0 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="parent_rotation1", type="float", precision=10, scale=0, nullable=false)
     */
    private $parentRotation1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="parent_rotation2", type="float", precision=10, scale=0, nullable=false)
     */
    private $parentRotation2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="parent_rotation3", type="float", precision=10, scale=0, nullable=false)
     */
    private $parentRotation3 = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="invisibilityType", type="boolean", nullable=false)
     */
    private $invisibilitytype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invisibilityValue", type="integer", nullable=false)
     */
    private $invisibilityvalue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set parentRotation0
     *
     * @param float $parentRotation0
     *
     * @return GameobjectAddon
     */
    public function setParentRotation0($parentRotation0)
    {
        $this->parentRotation0 = $parentRotation0;

        return $this;
    }

    /**
     * Get parentRotation0
     *
     * @return float
     */
    public function getParentRotation0()
    {
        return $this->parentRotation0;
    }

    /**
     * Set parentRotation1
     *
     * @param float $parentRotation1
     *
     * @return GameobjectAddon
     */
    public function setParentRotation1($parentRotation1)
    {
        $this->parentRotation1 = $parentRotation1;

        return $this;
    }

    /**
     * Get parentRotation1
     *
     * @return float
     */
    public function getParentRotation1()
    {
        return $this->parentRotation1;
    }

    /**
     * Set parentRotation2
     *
     * @param float $parentRotation2
     *
     * @return GameobjectAddon
     */
    public function setParentRotation2($parentRotation2)
    {
        $this->parentRotation2 = $parentRotation2;

        return $this;
    }

    /**
     * Get parentRotation2
     *
     * @return float
     */
    public function getParentRotation2()
    {
        return $this->parentRotation2;
    }

    /**
     * Set parentRotation3
     *
     * @param float $parentRotation3
     *
     * @return GameobjectAddon
     */
    public function setParentRotation3($parentRotation3)
    {
        $this->parentRotation3 = $parentRotation3;

        return $this;
    }

    /**
     * Get parentRotation3
     *
     * @return float
     */
    public function getParentRotation3()
    {
        return $this->parentRotation3;
    }

    /**
     * Set invisibilitytype
     *
     * @param boolean $invisibilitytype
     *
     * @return GameobjectAddon
     */
    public function setInvisibilitytype($invisibilitytype)
    {
        $this->invisibilitytype = $invisibilitytype;

        return $this;
    }

    /**
     * Get invisibilitytype
     *
     * @return boolean
     */
    public function getInvisibilitytype()
    {
        return $this->invisibilitytype;
    }

    /**
     * Set invisibilityvalue
     *
     * @param integer $invisibilityvalue
     *
     * @return GameobjectAddon
     */
    public function setInvisibilityvalue($invisibilityvalue)
    {
        $this->invisibilityvalue = $invisibilityvalue;

        return $this;
    }

    /**
     * Get invisibilityvalue
     *
     * @return integer
     */
    public function getInvisibilityvalue()
    {
        return $this->invisibilityvalue;
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
}
