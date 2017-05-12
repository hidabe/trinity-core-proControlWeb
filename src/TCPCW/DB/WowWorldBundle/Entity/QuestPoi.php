<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestPoi
 *
 * @ORM\Table(name="quest_poi", indexes={@ORM\Index(name="idx", columns={"QuestID", "id"})})
 * @ORM\Entity
 */
class QuestPoi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ObjectiveIndex", type="integer", nullable=false)
     */
    private $objectiveindex = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MapID", type="integer", nullable=false)
     */
    private $mapid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="WorldMapAreaId", type="integer", nullable=false)
     */
    private $worldmapareaid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Floor", type="integer", nullable=false)
     */
    private $floor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Priority", type="integer", nullable=false)
     */
    private $priority = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="QuestID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questid;



    /**
     * Set objectiveindex
     *
     * @param integer $objectiveindex
     *
     * @return QuestPoi
     */
    public function setObjectiveindex($objectiveindex)
    {
        $this->objectiveindex = $objectiveindex;

        return $this;
    }

    /**
     * Get objectiveindex
     *
     * @return integer
     */
    public function getObjectiveindex()
    {
        return $this->objectiveindex;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return QuestPoi
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
     * Set worldmapareaid
     *
     * @param integer $worldmapareaid
     *
     * @return QuestPoi
     */
    public function setWorldmapareaid($worldmapareaid)
    {
        $this->worldmapareaid = $worldmapareaid;

        return $this;
    }

    /**
     * Get worldmapareaid
     *
     * @return integer
     */
    public function getWorldmapareaid()
    {
        return $this->worldmapareaid;
    }

    /**
     * Set floor
     *
     * @param integer $floor
     *
     * @return QuestPoi
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return integer
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return QuestPoi
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return QuestPoi
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
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return QuestPoi
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
     * Set id
     *
     * @param integer $id
     *
     * @return QuestPoi
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
     * Set questid
     *
     * @param integer $questid
     *
     * @return QuestPoi
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
}
