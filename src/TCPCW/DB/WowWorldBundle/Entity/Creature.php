<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creature
 *
 * @ORM\Table(name="creature", indexes={@ORM\Index(name="idx_map", columns={"map"}), @ORM\Index(name="idx_id", columns={"id"})})
 * @ORM\Entity
 */
class Creature
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
     * @var integer
     *
     * @ORM\Column(name="modelid", type="integer", nullable=false)
     */
    private $modelid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="equipment_id", type="boolean", nullable=false)
     */
    private $equipmentId = '0';

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
     * @ORM\Column(name="spawntimesecs", type="integer", nullable=false)
     */
    private $spawntimesecs = '120';

    /**
     * @var float
     *
     * @ORM\Column(name="spawndist", type="float", precision=10, scale=0, nullable=false)
     */
    private $spawndist = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="currentwaypoint", type="integer", nullable=false)
     */
    private $currentwaypoint = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="curhealth", type="integer", nullable=false)
     */
    private $curhealth = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="curmana", type="integer", nullable=false)
     */
    private $curmana = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MovementType", type="boolean", nullable=false)
     */
    private $movementtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="npcflag", type="integer", nullable=false)
     */
    private $npcflag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="unit_flags", type="integer", nullable=false)
     */
    private $unitFlags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dynamicflags", type="integer", nullable=false)
     */
    private $dynamicflags = '0';

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
     * @return Creature
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
     * @return Creature
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
     * @return Creature
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
     * @return Creature
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
     * @return Creature
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
     * @return Creature
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
     * Set modelid
     *
     * @param integer $modelid
     *
     * @return Creature
     */
    public function setModelid($modelid)
    {
        $this->modelid = $modelid;

        return $this;
    }

    /**
     * Get modelid
     *
     * @return integer
     */
    public function getModelid()
    {
        return $this->modelid;
    }

    /**
     * Set equipmentId
     *
     * @param boolean $equipmentId
     *
     * @return Creature
     */
    public function setEquipmentId($equipmentId)
    {
        $this->equipmentId = $equipmentId;

        return $this;
    }

    /**
     * Get equipmentId
     *
     * @return boolean
     */
    public function getEquipmentId()
    {
        return $this->equipmentId;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Creature
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
     * @return Creature
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
     * @return Creature
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
     * @return Creature
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
     * Set spawntimesecs
     *
     * @param integer $spawntimesecs
     *
     * @return Creature
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
     * Set spawndist
     *
     * @param float $spawndist
     *
     * @return Creature
     */
    public function setSpawndist($spawndist)
    {
        $this->spawndist = $spawndist;

        return $this;
    }

    /**
     * Get spawndist
     *
     * @return float
     */
    public function getSpawndist()
    {
        return $this->spawndist;
    }

    /**
     * Set currentwaypoint
     *
     * @param integer $currentwaypoint
     *
     * @return Creature
     */
    public function setCurrentwaypoint($currentwaypoint)
    {
        $this->currentwaypoint = $currentwaypoint;

        return $this;
    }

    /**
     * Get currentwaypoint
     *
     * @return integer
     */
    public function getCurrentwaypoint()
    {
        return $this->currentwaypoint;
    }

    /**
     * Set curhealth
     *
     * @param integer $curhealth
     *
     * @return Creature
     */
    public function setCurhealth($curhealth)
    {
        $this->curhealth = $curhealth;

        return $this;
    }

    /**
     * Get curhealth
     *
     * @return integer
     */
    public function getCurhealth()
    {
        return $this->curhealth;
    }

    /**
     * Set curmana
     *
     * @param integer $curmana
     *
     * @return Creature
     */
    public function setCurmana($curmana)
    {
        $this->curmana = $curmana;

        return $this;
    }

    /**
     * Get curmana
     *
     * @return integer
     */
    public function getCurmana()
    {
        return $this->curmana;
    }

    /**
     * Set movementtype
     *
     * @param boolean $movementtype
     *
     * @return Creature
     */
    public function setMovementtype($movementtype)
    {
        $this->movementtype = $movementtype;

        return $this;
    }

    /**
     * Get movementtype
     *
     * @return boolean
     */
    public function getMovementtype()
    {
        return $this->movementtype;
    }

    /**
     * Set npcflag
     *
     * @param integer $npcflag
     *
     * @return Creature
     */
    public function setNpcflag($npcflag)
    {
        $this->npcflag = $npcflag;

        return $this;
    }

    /**
     * Get npcflag
     *
     * @return integer
     */
    public function getNpcflag()
    {
        return $this->npcflag;
    }

    /**
     * Set unitFlags
     *
     * @param integer $unitFlags
     *
     * @return Creature
     */
    public function setUnitFlags($unitFlags)
    {
        $this->unitFlags = $unitFlags;

        return $this;
    }

    /**
     * Get unitFlags
     *
     * @return integer
     */
    public function getUnitFlags()
    {
        return $this->unitFlags;
    }

    /**
     * Set dynamicflags
     *
     * @param integer $dynamicflags
     *
     * @return Creature
     */
    public function setDynamicflags($dynamicflags)
    {
        $this->dynamicflags = $dynamicflags;

        return $this;
    }

    /**
     * Get dynamicflags
     *
     * @return integer
     */
    public function getDynamicflags()
    {
        return $this->dynamicflags;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return Creature
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
     * @return Creature
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
