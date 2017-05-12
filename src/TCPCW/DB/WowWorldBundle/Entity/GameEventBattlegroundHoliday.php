<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventBattlegroundHoliday
 *
 * @ORM\Table(name="game_event_battleground_holiday")
 * @ORM\Entity
 */
class GameEventBattlegroundHoliday
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bgflag", type="integer", nullable=false)
     */
    private $bgflag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evententry;



    /**
     * Set bgflag
     *
     * @param integer $bgflag
     *
     * @return GameEventBattlegroundHoliday
     */
    public function setBgflag($bgflag)
    {
        $this->bgflag = $bgflag;

        return $this;
    }

    /**
     * Get bgflag
     *
     * @return integer
     */
    public function getBgflag()
    {
        return $this->bgflag;
    }

    /**
     * Get evententry
     *
     * @return boolean
     */
    public function getEvententry()
    {
        return $this->evententry;
    }
}
