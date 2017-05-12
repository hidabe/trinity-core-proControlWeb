<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureFormations
 *
 * @ORM\Table(name="creature_formations")
 * @ORM\Entity
 */
class CreatureFormations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="leaderGUID", type="integer", nullable=false)
     */
    private $leaderguid = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="dist", type="float", precision=10, scale=0, nullable=false)
     */
    private $dist;

    /**
     * @var float
     *
     * @ORM\Column(name="angle", type="float", precision=10, scale=0, nullable=false)
     */
    private $angle;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupAI", type="integer", nullable=false)
     */
    private $groupai;

    /**
     * @var integer
     *
     * @ORM\Column(name="point_1", type="smallint", nullable=false)
     */
    private $point1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="point_2", type="smallint", nullable=false)
     */
    private $point2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="memberGUID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberguid;



    /**
     * Set leaderguid
     *
     * @param integer $leaderguid
     *
     * @return CreatureFormations
     */
    public function setLeaderguid($leaderguid)
    {
        $this->leaderguid = $leaderguid;

        return $this;
    }

    /**
     * Get leaderguid
     *
     * @return integer
     */
    public function getLeaderguid()
    {
        return $this->leaderguid;
    }

    /**
     * Set dist
     *
     * @param float $dist
     *
     * @return CreatureFormations
     */
    public function setDist($dist)
    {
        $this->dist = $dist;

        return $this;
    }

    /**
     * Get dist
     *
     * @return float
     */
    public function getDist()
    {
        return $this->dist;
    }

    /**
     * Set angle
     *
     * @param float $angle
     *
     * @return CreatureFormations
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;

        return $this;
    }

    /**
     * Get angle
     *
     * @return float
     */
    public function getAngle()
    {
        return $this->angle;
    }

    /**
     * Set groupai
     *
     * @param integer $groupai
     *
     * @return CreatureFormations
     */
    public function setGroupai($groupai)
    {
        $this->groupai = $groupai;

        return $this;
    }

    /**
     * Get groupai
     *
     * @return integer
     */
    public function getGroupai()
    {
        return $this->groupai;
    }

    /**
     * Set point1
     *
     * @param integer $point1
     *
     * @return CreatureFormations
     */
    public function setPoint1($point1)
    {
        $this->point1 = $point1;

        return $this;
    }

    /**
     * Get point1
     *
     * @return integer
     */
    public function getPoint1()
    {
        return $this->point1;
    }

    /**
     * Set point2
     *
     * @param integer $point2
     *
     * @return CreatureFormations
     */
    public function setPoint2($point2)
    {
        $this->point2 = $point2;

        return $this;
    }

    /**
     * Get point2
     *
     * @return integer
     */
    public function getPoint2()
    {
        return $this->point2;
    }

    /**
     * Get memberguid
     *
     * @return integer
     */
    public function getMemberguid()
    {
        return $this->memberguid;
    }
}
