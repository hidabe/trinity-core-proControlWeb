<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LfgData
 *
 * @ORM\Table(name="lfg_data")
 * @ORM\Entity
 */
class LfgData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dungeon", type="integer", nullable=false)
     */
    private $dungeon = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set dungeon
     *
     * @param integer $dungeon
     *
     * @return LfgData
     */
    public function setDungeon($dungeon)
    {
        $this->dungeon = $dungeon;

        return $this;
    }

    /**
     * Get dungeon
     *
     * @return integer
     */
    public function getDungeon()
    {
        return $this->dungeon;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return LfgData
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
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
