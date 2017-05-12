<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointsOfInterest
 *
 * @ORM\Table(name="points_of_interest")
 * @ORM\Entity
 */
class PointsOfInterest
{
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
     * @var integer
     *
     * @ORM\Column(name="Icon", type="integer", nullable=false)
     */
    private $icon = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Importance", type="integer", nullable=false)
     */
    private $importance = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="text", length=65535, nullable=false)
     */
    private $name;

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
     * Set positionx
     *
     * @param float $positionx
     *
     * @return PointsOfInterest
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
     * @return PointsOfInterest
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
     * Set icon
     *
     * @param integer $icon
     *
     * @return PointsOfInterest
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return integer
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return PointsOfInterest
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set importance
     *
     * @param integer $importance
     *
     * @return PointsOfInterest
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;

        return $this;
    }

    /**
     * Get importance
     *
     * @return integer
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PointsOfInterest
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
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return PointsOfInterest
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
