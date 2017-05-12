<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreatriggerTeleport
 *
 * @ORM\Table(name="areatrigger_teleport", indexes={@ORM\Index(name="name", columns={"Name"})})
 * @ORM\Entity
 */
class AreatriggerTeleport
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="target_map", type="smallint", nullable=false)
     */
    private $targetMap = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_position_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetPositionX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_position_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetPositionY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_position_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetPositionZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="target_orientation", type="float", precision=10, scale=0, nullable=false)
     */
    private $targetOrientation = '0';

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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return AreatriggerTeleport
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
     * Set targetMap
     *
     * @param integer $targetMap
     *
     * @return AreatriggerTeleport
     */
    public function setTargetMap($targetMap)
    {
        $this->targetMap = $targetMap;

        return $this;
    }

    /**
     * Get targetMap
     *
     * @return integer
     */
    public function getTargetMap()
    {
        return $this->targetMap;
    }

    /**
     * Set targetPositionX
     *
     * @param float $targetPositionX
     *
     * @return AreatriggerTeleport
     */
    public function setTargetPositionX($targetPositionX)
    {
        $this->targetPositionX = $targetPositionX;

        return $this;
    }

    /**
     * Get targetPositionX
     *
     * @return float
     */
    public function getTargetPositionX()
    {
        return $this->targetPositionX;
    }

    /**
     * Set targetPositionY
     *
     * @param float $targetPositionY
     *
     * @return AreatriggerTeleport
     */
    public function setTargetPositionY($targetPositionY)
    {
        $this->targetPositionY = $targetPositionY;

        return $this;
    }

    /**
     * Get targetPositionY
     *
     * @return float
     */
    public function getTargetPositionY()
    {
        return $this->targetPositionY;
    }

    /**
     * Set targetPositionZ
     *
     * @param float $targetPositionZ
     *
     * @return AreatriggerTeleport
     */
    public function setTargetPositionZ($targetPositionZ)
    {
        $this->targetPositionZ = $targetPositionZ;

        return $this;
    }

    /**
     * Get targetPositionZ
     *
     * @return float
     */
    public function getTargetPositionZ()
    {
        return $this->targetPositionZ;
    }

    /**
     * Set targetOrientation
     *
     * @param float $targetOrientation
     *
     * @return AreatriggerTeleport
     */
    public function setTargetOrientation($targetOrientation)
    {
        $this->targetOrientation = $targetOrientation;

        return $this;
    }

    /**
     * Get targetOrientation
     *
     * @return float
     */
    public function getTargetOrientation()
    {
        return $this->targetOrientation;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return AreatriggerTeleport
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
