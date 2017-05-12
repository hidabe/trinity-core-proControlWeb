<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gameobject
 *
 * @ORM\Table(name="gameobject")
 * @ORM\Entity
 */
class Gameobject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint", nullable=false)
     */
    private $map = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="zoneId", type="smallint", nullable=false)
     */
    private $zoneid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="areaId", type="smallint", nullable=false)
     */
    private $areaid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spawnMask", type="boolean", nullable=false)
     */
    private $spawnmask = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="phaseMask", type="integer", nullable=false)
     */
    private $phasemask = '1';

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
     * @var float
     *
     * @ORM\Column(name="rotation0", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotation0 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rotation1", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotation1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rotation2", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotation2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rotation3", type="float", precision=10, scale=0, nullable=false)
     */
    private $rotation3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spawntimesecs", type="integer", nullable=false)
     */
    private $spawntimesecs = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="animprogress", type="boolean", nullable=false)
     */
    private $animprogress = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=true)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Gameobject
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
     * Set map
     *
     * @param integer $map
     *
     * @return Gameobject
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set zoneid
     *
     * @param integer $zoneid
     *
     * @return Gameobject
     */
    public function setZoneid($zoneid)
    {
        $this->zoneid = $zoneid;

        return $this;
    }

    /**
     * Get zoneid
     *
     * @return integer
     */
    public function getZoneid()
    {
        return $this->zoneid;
    }

    /**
     * Set areaid
     *
     * @param integer $areaid
     *
     * @return Gameobject
     */
    public function setAreaid($areaid)
    {
        $this->areaid = $areaid;

        return $this;
    }

    /**
     * Get areaid
     *
     * @return integer
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * Set spawnmask
     *
     * @param boolean $spawnmask
     *
     * @return Gameobject
     */
    public function setSpawnmask($spawnmask)
    {
        $this->spawnmask = $spawnmask;

        return $this;
    }

    /**
     * Get spawnmask
     *
     * @return boolean
     */
    public function getSpawnmask()
    {
        return $this->spawnmask;
    }

    /**
     * Set phasemask
     *
     * @param integer $phasemask
     *
     * @return Gameobject
     */
    public function setPhasemask($phasemask)
    {
        $this->phasemask = $phasemask;

        return $this;
    }

    /**
     * Get phasemask
     *
     * @return integer
     */
    public function getPhasemask()
    {
        return $this->phasemask;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Gameobject
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
     * @return Gameobject
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
     * @return Gameobject
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
     * @return Gameobject
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
     * Set rotation0
     *
     * @param float $rotation0
     *
     * @return Gameobject
     */
    public function setRotation0($rotation0)
    {
        $this->rotation0 = $rotation0;

        return $this;
    }

    /**
     * Get rotation0
     *
     * @return float
     */
    public function getRotation0()
    {
        return $this->rotation0;
    }

    /**
     * Set rotation1
     *
     * @param float $rotation1
     *
     * @return Gameobject
     */
    public function setRotation1($rotation1)
    {
        $this->rotation1 = $rotation1;

        return $this;
    }

    /**
     * Get rotation1
     *
     * @return float
     */
    public function getRotation1()
    {
        return $this->rotation1;
    }

    /**
     * Set rotation2
     *
     * @param float $rotation2
     *
     * @return Gameobject
     */
    public function setRotation2($rotation2)
    {
        $this->rotation2 = $rotation2;

        return $this;
    }

    /**
     * Get rotation2
     *
     * @return float
     */
    public function getRotation2()
    {
        return $this->rotation2;
    }

    /**
     * Set rotation3
     *
     * @param float $rotation3
     *
     * @return Gameobject
     */
    public function setRotation3($rotation3)
    {
        $this->rotation3 = $rotation3;

        return $this;
    }

    /**
     * Get rotation3
     *
     * @return float
     */
    public function getRotation3()
    {
        return $this->rotation3;
    }

    /**
     * Set spawntimesecs
     *
     * @param integer $spawntimesecs
     *
     * @return Gameobject
     */
    public function setSpawntimesecs($spawntimesecs)
    {
        $this->spawntimesecs = $spawntimesecs;

        return $this;
    }

    /**
     * Get spawntimesecs
     *
     * @return integer
     */
    public function getSpawntimesecs()
    {
        return $this->spawntimesecs;
    }

    /**
     * Set animprogress
     *
     * @param boolean $animprogress
     *
     * @return Gameobject
     */
    public function setAnimprogress($animprogress)
    {
        $this->animprogress = $animprogress;

        return $this;
    }

    /**
     * Get animprogress
     *
     * @return boolean
     */
    public function getAnimprogress()
    {
        return $this->animprogress;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return Gameobject
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return Gameobject
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
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return Gameobject
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
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
