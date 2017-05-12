<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestTracker
 *
 * @ORM\Table(name="quest_tracker")
 * @ORM\Entity
 */
class QuestTracker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="character_guid", type="integer", nullable=false)
     */
    private $characterGuid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="quest_accept_time", type="datetime", nullable=false)
     */
    private $questAcceptTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="quest_complete_time", type="datetime", nullable=true)
     */
    private $questCompleteTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="quest_abandon_time", type="datetime", nullable=true)
     */
    private $questAbandonTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completed_by_gm", type="integer", nullable=false)
     */
    private $completedByGm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_hash", type="string", length=120, nullable=false)
     */
    private $coreHash = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_revision", type="string", length=120, nullable=false)
     */
    private $coreRevision = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set characterGuid
     *
     * @param integer $characterGuid
     *
     * @return QuestTracker
     */
    public function setCharacterGuid($characterGuid)
    {
        $this->characterGuid = $characterGuid;

        return $this;
    }

    /**
     * Get characterGuid
     *
     * @return integer
     */
    public function getCharacterGuid()
    {
        return $this->characterGuid;
    }

    /**
     * Set questAcceptTime
     *
     * @param \DateTime $questAcceptTime
     *
     * @return QuestTracker
     */
    public function setQuestAcceptTime($questAcceptTime)
    {
        $this->questAcceptTime = $questAcceptTime;

        return $this;
    }

    /**
     * Get questAcceptTime
     *
     * @return \DateTime
     */
    public function getQuestAcceptTime()
    {
        return $this->questAcceptTime;
    }

    /**
     * Set questCompleteTime
     *
     * @param \DateTime $questCompleteTime
     *
     * @return QuestTracker
     */
    public function setQuestCompleteTime($questCompleteTime)
    {
        $this->questCompleteTime = $questCompleteTime;

        return $this;
    }

    /**
     * Get questCompleteTime
     *
     * @return \DateTime
     */
    public function getQuestCompleteTime()
    {
        return $this->questCompleteTime;
    }

    /**
     * Set questAbandonTime
     *
     * @param \DateTime $questAbandonTime
     *
     * @return QuestTracker
     */
    public function setQuestAbandonTime($questAbandonTime)
    {
        $this->questAbandonTime = $questAbandonTime;

        return $this;
    }

    /**
     * Get questAbandonTime
     *
     * @return \DateTime
     */
    public function getQuestAbandonTime()
    {
        return $this->questAbandonTime;
    }

    /**
     * Set completedByGm
     *
     * @param boolean $completedByGm
     *
     * @return QuestTracker
     */
    public function setCompletedByGm($completedByGm)
    {
        $this->completedByGm = $completedByGm;

        return $this;
    }

    /**
     * Get completedByGm
     *
     * @return boolean
     */
    public function getCompletedByGm()
    {
        return $this->completedByGm;
    }

    /**
     * Set coreHash
     *
     * @param string $coreHash
     *
     * @return QuestTracker
     */
    public function setCoreHash($coreHash)
    {
        $this->coreHash = $coreHash;

        return $this;
    }

    /**
     * Get coreHash
     *
     * @return string
     */
    public function getCoreHash()
    {
        return $this->coreHash;
    }

    /**
     * Set coreRevision
     *
     * @param string $coreRevision
     *
     * @return QuestTracker
     */
    public function setCoreRevision($coreRevision)
    {
        $this->coreRevision = $coreRevision;

        return $this;
    }

    /**
     * Get coreRevision
     *
     * @return string
     */
    public function getCoreRevision()
    {
        return $this->coreRevision;
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
