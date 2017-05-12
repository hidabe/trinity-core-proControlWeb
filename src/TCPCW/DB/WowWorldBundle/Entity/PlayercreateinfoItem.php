<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayercreateinfoItem
 *
 * @ORM\Table(name="playercreateinfo_item", indexes={@ORM\Index(name="playercreateinfo_race_class_index", columns={"race", "class"})})
 * @ORM\Entity
 */
class PlayercreateinfoItem
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="amount", type="boolean", nullable=false)
     */
    private $amount = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="race", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $race;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemid;



    /**
     * Set amount
     *
     * @param boolean $amount
     *
     * @return PlayercreateinfoItem
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return boolean
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set race
     *
     * @param boolean $race
     *
     * @return PlayercreateinfoItem
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return boolean
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return PlayercreateinfoItem
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     *
     * @return PlayercreateinfoItem
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer
     */
    public function getItemid()
    {
        return $this->itemid;
    }
}
