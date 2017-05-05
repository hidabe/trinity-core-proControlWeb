<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQueststatus
 *
 * @ORM\Table(name="character_queststatus")
 * @ORM\Entity
 */
class CharacterQueststatus
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="explored", type="integer", nullable=false)
     */
    private $explored = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="timer", type="integer", nullable=false)
     */
    private $timer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount1", type="smallint", nullable=false)
     */
    private $mobcount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount2", type="smallint", nullable=false)
     */
    private $mobcount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount3", type="smallint", nullable=false)
     */
    private $mobcount3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mobcount4", type="smallint", nullable=false)
     */
    private $mobcount4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount1", type="smallint", nullable=false)
     */
    private $itemcount1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount2", type="smallint", nullable=false)
     */
    private $itemcount2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount3", type="smallint", nullable=false)
     */
    private $itemcount3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemcount4", type="smallint", nullable=false)
     */
    private $itemcount4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="playercount", type="smallint", nullable=false)
     */
    private $playercount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="quest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $quest;



    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return CharacterQueststatus
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set explored
     *
     * @param boolean $explored
     *
     * @return CharacterQueststatus
     */
    public function setExplored($explored)
    {
        $this->explored = $explored;

        return $this;
    }

    /**
     * Get explored
     *
     * @return boolean
     */
    public function getExplored()
    {
        return $this->explored;
    }

    /**
     * Set timer
     *
     * @param integer $timer
     *
     * @return CharacterQueststatus
     */
    public function setTimer($timer)
    {
        $this->timer = $timer;

        return $this;
    }

    /**
     * Get timer
     *
     * @return integer
     */
    public function getTimer()
    {
        return $this->timer;
    }

    /**
     * Set mobcount1
     *
     * @param integer $mobcount1
     *
     * @return CharacterQueststatus
     */
    public function setMobcount1($mobcount1)
    {
        $this->mobcount1 = $mobcount1;

        return $this;
    }

    /**
     * Get mobcount1
     *
     * @return integer
     */
    public function getMobcount1()
    {
        return $this->mobcount1;
    }

    /**
     * Set mobcount2
     *
     * @param integer $mobcount2
     *
     * @return CharacterQueststatus
     */
    public function setMobcount2($mobcount2)
    {
        $this->mobcount2 = $mobcount2;

        return $this;
    }

    /**
     * Get mobcount2
     *
     * @return integer
     */
    public function getMobcount2()
    {
        return $this->mobcount2;
    }

    /**
     * Set mobcount3
     *
     * @param integer $mobcount3
     *
     * @return CharacterQueststatus
     */
    public function setMobcount3($mobcount3)
    {
        $this->mobcount3 = $mobcount3;

        return $this;
    }

    /**
     * Get mobcount3
     *
     * @return integer
     */
    public function getMobcount3()
    {
        return $this->mobcount3;
    }

    /**
     * Set mobcount4
     *
     * @param integer $mobcount4
     *
     * @return CharacterQueststatus
     */
    public function setMobcount4($mobcount4)
    {
        $this->mobcount4 = $mobcount4;

        return $this;
    }

    /**
     * Get mobcount4
     *
     * @return integer
     */
    public function getMobcount4()
    {
        return $this->mobcount4;
    }

    /**
     * Set itemcount1
     *
     * @param integer $itemcount1
     *
     * @return CharacterQueststatus
     */
    public function setItemcount1($itemcount1)
    {
        $this->itemcount1 = $itemcount1;

        return $this;
    }

    /**
     * Get itemcount1
     *
     * @return integer
     */
    public function getItemcount1()
    {
        return $this->itemcount1;
    }

    /**
     * Set itemcount2
     *
     * @param integer $itemcount2
     *
     * @return CharacterQueststatus
     */
    public function setItemcount2($itemcount2)
    {
        $this->itemcount2 = $itemcount2;

        return $this;
    }

    /**
     * Get itemcount2
     *
     * @return integer
     */
    public function getItemcount2()
    {
        return $this->itemcount2;
    }

    /**
     * Set itemcount3
     *
     * @param integer $itemcount3
     *
     * @return CharacterQueststatus
     */
    public function setItemcount3($itemcount3)
    {
        $this->itemcount3 = $itemcount3;

        return $this;
    }

    /**
     * Get itemcount3
     *
     * @return integer
     */
    public function getItemcount3()
    {
        return $this->itemcount3;
    }

    /**
     * Set itemcount4
     *
     * @param integer $itemcount4
     *
     * @return CharacterQueststatus
     */
    public function setItemcount4($itemcount4)
    {
        $this->itemcount4 = $itemcount4;

        return $this;
    }

    /**
     * Get itemcount4
     *
     * @return integer
     */
    public function getItemcount4()
    {
        return $this->itemcount4;
    }

    /**
     * Set playercount
     *
     * @param integer $playercount
     *
     * @return CharacterQueststatus
     */
    public function setPlayercount($playercount)
    {
        $this->playercount = $playercount;

        return $this;
    }

    /**
     * Get playercount
     *
     * @return integer
     */
    public function getPlayercount()
    {
        return $this->playercount;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterQueststatus
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
     * Set quest
     *
     * @param integer $quest
     *
     * @return CharacterQueststatus
     */
    public function setQuest($quest)
    {
        $this->quest = $quest;

        return $this;
    }

    /**
     * Get quest
     *
     * @return integer
     */
    public function getQuest()
    {
        return $this->quest;
    }
}
