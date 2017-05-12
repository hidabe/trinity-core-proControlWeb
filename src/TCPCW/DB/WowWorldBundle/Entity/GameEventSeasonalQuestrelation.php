<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventSeasonalQuestrelation
 *
 * @ORM\Table(name="game_event_seasonal_questrelation", indexes={@ORM\Index(name="idx_quest", columns={"questId"})})
 * @ORM\Entity
 */
class GameEventSeasonalQuestrelation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="questId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questid;

    /**
     * @var integer
     *
     * @ORM\Column(name="eventEntry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $evententry;



    /**
     * Set questid
     *
     * @param integer $questid
     *
     * @return GameEventSeasonalQuestrelation
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
     * Set evententry
     *
     * @param integer $evententry
     *
     * @return GameEventSeasonalQuestrelation
     */
    public function setEvententry($evententry)
    {
        $this->evententry = $evententry;

        return $this;
    }

    /**
     * Get evententry
     *
     * @return integer
     */
    public function getEvententry()
    {
        return $this->evententry;
    }
}
