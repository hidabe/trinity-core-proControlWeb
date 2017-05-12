<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LfgDungeonTemplate
 *
 * @ORM\Table(name="lfg_dungeon_template")
 * @ORM\Entity
 */
class LfgDungeonTemplate
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="position_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="orientation", type="float", precision=10, scale=0, nullable=false)
     */
    private $orientation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dungeonId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dungeonid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return LfgDungeonTemplate
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return LfgDungeonTemplate
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get positionX
     *
     * @return float
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set positionY
     *
     * @param float $positionY
     *
     * @return LfgDungeonTemplate
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }

    /**
     * Get positionY
     *
     * @return float
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set positionZ
     *
     * @param float $positionZ
     *
     * @return LfgDungeonTemplate
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = $positionZ;

        return $this;
    }

    /**
     * Get positionZ
     *
     * @return float
     */
    public function getPositionZ()
    {
        return $this->positionZ;
    }

    /**
     * Set orientation
     *
     * @param float $orientation
     *
     * @return LfgDungeonTemplate
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return float
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return LfgDungeonTemplate
     */
    public function setVerifiedbuild($verifiedbuild)
    {
        $this->verifiedbuild = $verifiedbuild;

        return $this;
    }

    /**
     * Get verifiedbuild
     *
     * @return integer
     */
    public function getVerifiedbuild()
    {
        return $this->verifiedbuild;
    }

    /**
     * Get dungeonid
     *
     * @return integer
     */
    public function getDungeonid()
    {
        return $this->dungeonid;
    }
}
