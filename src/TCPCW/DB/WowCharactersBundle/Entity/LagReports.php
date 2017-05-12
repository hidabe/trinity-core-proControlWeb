<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LagReports
 *
 * @ORM\Table(name="lag_reports")
 * @ORM\Entity
 */
class LagReports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lagType", type="integer", nullable=false)
     */
    private $lagtype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid = '0';

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
     * @ORM\Column(name="latency", type="integer", nullable=false)
     */
    private $latency = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="createTime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reportId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportid;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return LagReports
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
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

    /**
     * Set lagtype
     *
     * @param boolean $lagtype
     *
     * @return LagReports
     */
    public function setLagtype($lagtype)
    {
        $this->lagtype = $lagtype;

        return $this;
    }

    /**
     * Get lagtype
     *
     * @return boolean
     */
    public function getLagtype()
    {
        return $this->lagtype;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return LagReports
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
     * Set posx
     *
     * @param float $posx
     *
     * @return LagReports
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
     * @return LagReports
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
     * @return LagReports
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
     * Set latency
     *
     * @param integer $latency
     *
     * @return LagReports
     */
    public function setLatency($latency)
    {
        $this->latency = $latency;

        return $this;
    }

    /**
     * Get latency
     *
     * @return integer
     */
    public function getLatency()
    {
        return $this->latency;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return LagReports
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Get reportid
     *
     * @return integer
     */
    public function getReportid()
    {
        return $this->reportid;
    }
}
