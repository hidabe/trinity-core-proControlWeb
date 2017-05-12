<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestPoiPoints
 *
 * @ORM\Table(name="quest_poi_points", indexes={@ORM\Index(name="questId_id", columns={"QuestID", "Idx1"})})
 * @ORM\Entity
 */
class QuestPoiPoints
{
    /**
     * @var integer
     *
     * @ORM\Column(name="X", type="integer", nullable=false)
     */
    private $x = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Y", type="integer", nullable=false)
     */
    private $y = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="QuestID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idx1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idx1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idx2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idx2;



    /**
     * Set x
     *
     * @param integer $x
     *
     * @return QuestPoiPoints
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param integer $y
     *
     * @return QuestPoiPoints
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return QuestPoiPoints
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
     * Set questid
     *
     * @param integer $questid
     *
     * @return QuestPoiPoints
     */
    public function setQuestid($questid)
    {
        $this->questid = $questid;

        return $this;
    }

    /**
     * Get questid
     *
     * @return integer
     */
    public function getQuestid()
    {
        return $this->questid;
    }

    /**
     * Set idx1
     *
     * @param integer $idx1
     *
     * @return QuestPoiPoints
     */
    public function setIdx1($idx1)
    {
        $this->idx1 = $idx1;

        return $this;
    }

    /**
     * Get idx1
     *
     * @return integer
     */
    public function getIdx1()
    {
        return $this->idx1;
    }

    /**
     * Set idx2
     *
     * @param integer $idx2
     *
     * @return QuestPoiPoints
     */
    public function setIdx2($idx2)
    {
        $this->idx2 = $idx2;

        return $this;
    }

    /**
     * Get idx2
     *
     * @return integer
     */
    public function getIdx2()
    {
        return $this->idx2;
    }
}
