<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehicleTemplateAccessory
 *
 * @ORM\Table(name="vehicle_template_accessory")
 * @ORM\Entity
 */
class VehicleTemplateAccessory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="accessory_entry", type="integer", nullable=false)
     */
    private $accessoryEntry = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="minion", type="boolean", nullable=false)
     */
    private $minion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="summontype", type="boolean", nullable=false)
     */
    private $summontype = '6';

    /**
     * @var integer
     *
     * @ORM\Column(name="summontimer", type="integer", nullable=false)
     */
    private $summontimer = '30000';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seat_id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seatId;



    /**
     * Set accessoryEntry
     *
     * @param integer $accessoryEntry
     *
     * @return VehicleTemplateAccessory
     */
    public function setAccessoryEntry($accessoryEntry)
    {
        $this->accessoryEntry = $accessoryEntry;

        return $this;
    }

    /**
     * Get accessoryEntry
     *
     * @return integer
     */
    public function getAccessoryEntry()
    {
        return $this->accessoryEntry;
    }

    /**
     * Set minion
     *
     * @param boolean $minion
     *
     * @return VehicleTemplateAccessory
     */
    public function setMinion($minion)
    {
        $this->minion = $minion;

        return $this;
    }

    /**
     * Get minion
     *
     * @return boolean
     */
    public function getMinion()
    {
        return $this->minion;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return VehicleTemplateAccessory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set summontype
     *
     * @param boolean $summontype
     *
     * @return VehicleTemplateAccessory
     */
    public function setSummontype($summontype)
    {
        $this->summontype = $summontype;

        return $this;
    }

    /**
     * Get summontype
     *
     * @return boolean
     */
    public function getSummontype()
    {
        return $this->summontype;
    }

    /**
     * Set summontimer
     *
     * @param integer $summontimer
     *
     * @return VehicleTemplateAccessory
     */
    public function setSummontimer($summontimer)
    {
        $this->summontimer = $summontimer;

        return $this;
    }

    /**
     * Get summontimer
     *
     * @return integer
     */
    public function getSummontimer()
    {
        return $this->summontimer;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return VehicleTemplateAccessory
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set seatId
     *
     * @param boolean $seatId
     *
     * @return VehicleTemplateAccessory
     */
    public function setSeatId($seatId)
    {
        $this->seatId = $seatId;

        return $this;
    }

    /**
     * Get seatId
     *
     * @return boolean
     */
    public function getSeatId()
    {
        return $this->seatId;
    }
}
