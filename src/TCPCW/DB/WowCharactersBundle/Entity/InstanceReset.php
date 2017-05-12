<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceReset
 *
 * @ORM\Table(name="instance_reset", indexes={@ORM\Index(name="difficulty", columns={"difficulty"})})
 * @ORM\Entity
 */
class InstanceReset
{
    /**
     * @var integer
     *
     * @ORM\Column(name="resettime", type="bigint", nullable=false)
     */
    private $resettime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mapid", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mapid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $difficulty;



    /**
     * Set resettime
     *
     * @param integer $resettime
     *
     * @return InstanceReset
     */
    public function setResettime($resettime)
    {
        $this->resettime = $resettime;

        return $this;
    }

    /**
     * Get resettime
     *
     * @return integer
     */
    public function getResettime()
    {
        return $this->resettime;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return InstanceReset
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
     * Set difficulty
     *
     * @param boolean $difficulty
     *
     * @return InstanceReset
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return boolean
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }
}
