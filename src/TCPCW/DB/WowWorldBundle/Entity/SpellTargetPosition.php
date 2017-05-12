<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellTargetPosition
 *
 * @ORM\Table(name="spell_target_position")
 * @ORM\Entity
 */
class SpellTargetPosition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MapID", type="smallint", nullable=false)
     */
    private $mapid = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="PositionX", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionx = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="PositionY", type="float", precision=10, scale=0, nullable=false)
     */
    private $positiony = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="PositionZ", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionz = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Orientation", type="float", precision=10, scale=0, nullable=false)
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
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EffectIndex", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $effectindex;



    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return SpellTargetPosition
     */
    public function setMapid($mapid)
    {
        $this->mapid = $mapid;

        return $this;
    }

    /**
     * Get mapid
     *
     * @return integer
     */
    public function getMapid()
    {
        return $this->mapid;
    }

    /**
     * Set positionx
     *
     * @param float $positionx
     *
     * @return SpellTargetPosition
     */
    public function setPositionx($positionx)
    {
        $this->positionx = $positionx;

        return $this;
    }

    /**
     * Get positionx
     *
     * @return float
     */
    public function getPositionx()
    {
        return $this->positionx;
    }

    /**
     * Set positiony
     *
     * @param float $positiony
     *
     * @return SpellTargetPosition
     */
    public function setPositiony($positiony)
    {
        $this->positiony = $positiony;

        return $this;
    }

    /**
     * Get positiony
     *
     * @return float
     */
    public function getPositiony()
    {
        return $this->positiony;
    }

    /**
     * Set positionz
     *
     * @param float $positionz
     *
     * @return SpellTargetPosition
     */
    public function setPositionz($positionz)
    {
        $this->positionz = $positionz;

        return $this;
    }

    /**
     * Get positionz
     *
     * @return float
     */
    public function getPositionz()
    {
        return $this->positionz;
    }

    /**
     * Set orientation
     *
     * @param float $orientation
     *
     * @return SpellTargetPosition
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
     * @return SpellTargetPosition
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
     * Set id
     *
     * @param integer $id
     *
     * @return SpellTargetPosition
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set effectindex
     *
     * @param boolean $effectindex
     *
     * @return SpellTargetPosition
     */
    public function setEffectindex($effectindex)
    {
        $this->effectindex = $effectindex;

        return $this;
    }

    /**
     * Get effectindex
     *
     * @return boolean
     */
    public function getEffectindex()
    {
        return $this->effectindex;
    }
}
