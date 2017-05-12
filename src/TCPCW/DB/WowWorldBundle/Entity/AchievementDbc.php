<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AchievementDbc
 *
 * @ORM\Table(name="achievement_dbc")
 * @ORM\Entity
 */
class AchievementDbc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="requiredFaction", type="integer", nullable=false)
     */
    private $requiredfaction = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="mapID", type="integer", nullable=false)
     */
    private $mapid = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="refAchievement", type="integer", nullable=false)
     */
    private $refachievement = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set requiredfaction
     *
     * @param integer $requiredfaction
     *
     * @return AchievementDbc
     */
    public function setRequiredfaction($requiredfaction)
    {
        $this->requiredfaction = $requiredfaction;

        return $this;
    }

    /**
     * Get requiredfaction
     *
     * @return integer
     */
    public function getRequiredfaction()
    {
        return $this->requiredfaction;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return AchievementDbc
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
     * Set points
     *
     * @param integer $points
     *
     * @return AchievementDbc
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return AchievementDbc
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
     * Set count
     *
     * @param integer $count
     *
     * @return AchievementDbc
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set refachievement
     *
     * @param integer $refachievement
     *
     * @return AchievementDbc
     */
    public function setRefachievement($refachievement)
    {
        $this->refachievement = $refachievement;

        return $this;
    }

    /**
     * Get refachievement
     *
     * @return integer
     */
    public function getRefachievement()
    {
        return $this->refachievement;
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
