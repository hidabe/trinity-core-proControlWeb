<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corpse
 *
 * @ORM\Table(name="corpse", indexes={@ORM\Index(name="idx_type", columns={"corpseType"}), @ORM\Index(name="idx_instance", columns={"instanceId"}), @ORM\Index(name="idx_time", columns={"time"})})
 * @ORM\Entity
 */
class Corpse
{
    /**
     * @var float
     *
     * @ORM\Column(name="posX", type="float", precision=10, scale=0, nullable=false)
     */
    private $posx = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="posY", type="float", precision=10, scale=0, nullable=false)
     */
    private $posy = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="posZ", type="float", precision=10, scale=0, nullable=false)
     */
    private $posz = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="orientation", type="float", precision=10, scale=0, nullable=false)
     */
    private $orientation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="phaseMask", type="integer", nullable=false)
     */
    private $phasemask = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayId", type="integer", nullable=false)
     */
    private $displayid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="itemCache", type="text", length=65535, nullable=false)
     */
    private $itemcache;

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes1", type="integer", nullable=false)
     */
    private $bytes1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes2", type="integer", nullable=false)
     */
    private $bytes2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guildId", type="integer", nullable=false)
     */
    private $guildid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dynFlags", type="integer", nullable=false)
     */
    private $dynflags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="corpseType", type="integer", nullable=false)
     */
    private $corpsetype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="instanceId", type="integer", nullable=false)
     */
    private $instanceid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set posx
     *
     * @param float $posx
     *
     * @return Corpse
     */
    public function setPosx($posx)
    {
        $this->posx = $posx;

        return $this;
    }

    /**
     * Get posx
     *
     * @return float
     */
    public function getPosx()
    {
        return $this->posx;
    }

    /**
     * Set posy
     *
     * @param float $posy
     *
     * @return Corpse
     */
    public function setPosy($posy)
    {
        $this->posy = $posy;

        return $this;
    }

    /**
     * Get posy
     *
     * @return float
     */
    public function getPosy()
    {
        return $this->posy;
    }

    /**
     * Set posz
     *
     * @param float $posz
     *
     * @return Corpse
     */
    public function setPosz($posz)
    {
        $this->posz = $posz;

        return $this;
    }

    /**
     * Get posz
     *
     * @return float
     */
    public function getPosz()
    {
        return $this->posz;
    }

    /**
     * Set orientation
     *
     * @param float $orientation
     *
     * @return Corpse
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
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return Corpse
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
     * Set phasemask
     *
     * @param integer $phasemask
     *
     * @return Corpse
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
     * Set displayid
     *
     * @param integer $displayid
     *
     * @return Corpse
     */
    public function setDisplayid($displayid)
    {
        $this->displayid = $displayid;

        return $this;
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

    /**
     * Set itemcache
     *
     * @param string $itemcache
     *
     * @return Corpse
     */
    public function setItemcache($itemcache)
    {
        $this->itemcache = $itemcache;

        return $this;
    }

    /**
     * Get itemcache
     *
     * @return string
     */
    public function getItemcache()
    {
        return $this->itemcache;
    }

    /**
     * Set bytes1
     *
     * @param integer $bytes1
     *
     * @return Corpse
     */
    public function setBytes1($bytes1)
    {
        $this->bytes1 = $bytes1;

        return $this;
    }

    /**
     * Get bytes1
     *
     * @return integer
     */
    public function getBytes1()
    {
        return $this->bytes1;
    }

    /**
     * Set bytes2
     *
     * @param integer $bytes2
     *
     * @return Corpse
     */
    public function setBytes2($bytes2)
    {
        $this->bytes2 = $bytes2;

        return $this;
    }

    /**
     * Get bytes2
     *
     * @return integer
     */
    public function getBytes2()
    {
        return $this->bytes2;
    }

    /**
     * Set guildid
     *
     * @param integer $guildid
     *
     * @return Corpse
     */
    public function setGuildid($guildid)
    {
        $this->guildid = $guildid;

        return $this;
    }

    /**
     * Get guildid
     *
     * @return integer
     */
    public function getGuildid()
    {
        return $this->guildid;
    }

    /**
     * Set flags
     *
     * @param boolean $flags
     *
     * @return Corpse
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return boolean
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set dynflags
     *
     * @param boolean $dynflags
     *
     * @return Corpse
     */
    public function setDynflags($dynflags)
    {
        $this->dynflags = $dynflags;

        return $this;
    }

    /**
     * Get dynflags
     *
     * @return boolean
     */
    public function getDynflags()
    {
        return $this->dynflags;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Corpse
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set corpsetype
     *
     * @param boolean $corpsetype
     *
     * @return Corpse
     */
    public function setCorpsetype($corpsetype)
    {
        $this->corpsetype = $corpsetype;

        return $this;
    }

    /**
     * Get corpsetype
     *
     * @return boolean
     */
    public function getCorpsetype()
    {
        return $this->corpsetype;
    }

    /**
     * Set instanceid
     *
     * @param integer $instanceid
     *
     * @return Corpse
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer
     */
    public function getInstanceid()
    {
        return $this->instanceid;
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
