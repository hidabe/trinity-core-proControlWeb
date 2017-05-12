<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameEventModelEquip
 *
 * @ORM\Table(name="game_event_model_equip")
 * @ORM\Entity
 */
class GameEventModelEquip
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="eventEntry", type="boolean", nullable=false)
     */
    private $evententry;

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid", type="integer", nullable=false)
     */
    private $modelid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="equipment_id", type="boolean", nullable=false)
     */
    private $equipmentId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set evententry
     *
     * @param boolean $evententry
     *
     * @return GameEventModelEquip
     */
    public function setEvententry($evententry)
    {
        $this->evententry = $evententry;

        return $this;
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

    /**
     * Set modelid
     *
     * @param integer $modelid
     *
     * @return GameEventModelEquip
     */
    public function setModelid($modelid)
    {
        $this->modelid = $modelid;

        return $this;
    }

    /**
     * Get modelid
     *
     * @return integer
     */
    public function getModelid()
    {
        return $this->modelid;
    }

    /**
     * Set equipmentId
     *
     * @param boolean $equipmentId
     *
     * @return GameEventModelEquip
     */
    public function setEquipmentId($equipmentId)
    {
        $this->equipmentId = $equipmentId;

        return $this;
    }

    /**
     * Get equipmentId
     *
     * @return boolean
     */
    public function getEquipmentId()
    {
        return $this->equipmentId;
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
}
