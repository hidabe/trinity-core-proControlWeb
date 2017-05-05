<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterHomebind
 *
 * @ORM\Table(name="character_homebind")
 * @ORM\Entity
 */
class CharacterHomebind
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="zoneId", type="smallint", nullable=false)
     */
    private $zoneid = '0';

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
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return CharacterHomebind
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
     * Set zoneid
     *
     * @param integer $zoneid
     *
     * @return CharacterHomebind
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
     * Set posx
     *
     * @param float $posx
     *
     * @return CharacterHomebind
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
     * @return CharacterHomebind
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
     * @return CharacterHomebind
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
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
