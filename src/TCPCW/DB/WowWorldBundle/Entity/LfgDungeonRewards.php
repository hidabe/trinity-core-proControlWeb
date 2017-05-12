<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LfgDungeonRewards
 *
 * @ORM\Table(name="lfg_dungeon_rewards")
 * @ORM\Entity
 */
class LfgDungeonRewards
{
    /**
     * @var integer
     *
     * @ORM\Column(name="firstQuestId", type="integer", nullable=false)
     */
    private $firstquestid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="otherQuestId", type="integer", nullable=false)
     */
    private $otherquestid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dungeonId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dungeonid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxLevel", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $maxlevel;



    /**
     * Set firstquestid
     *
     * @param integer $firstquestid
     *
     * @return LfgDungeonRewards
     */
    public function setFirstquestid($firstquestid)
    {
        $this->firstquestid = $firstquestid;

        return $this;
    }

    /**
     * Get firstquestid
     *
     * @return integer
     */
    public function getFirstquestid()
    {
        return $this->firstquestid;
    }

    /**
     * Set otherquestid
     *
     * @param integer $otherquestid
     *
     * @return LfgDungeonRewards
     */
    public function setOtherquestid($otherquestid)
    {
        $this->otherquestid = $otherquestid;

        return $this;
    }

    /**
     * Get otherquestid
     *
     * @return integer
     */
    public function getOtherquestid()
    {
        return $this->otherquestid;
    }

    /**
     * Set dungeonid
     *
     * @param integer $dungeonid
     *
     * @return LfgDungeonRewards
     */
    public function setDungeonid($dungeonid)
    {
        $this->dungeonid = $dungeonid;

        return $this;
    }

    /**
     * Get dungeonid
     *
     * @return integer
     */
    public function getDungeonid()
    {
        return $this->dungeonid;
    }

    /**
     * Set maxlevel
     *
     * @param boolean $maxlevel
     *
     * @return LfgDungeonRewards
     */
    public function setMaxlevel($maxlevel)
    {
        $this->maxlevel = $maxlevel;

        return $this;
    }

    /**
     * Get maxlevel
     *
     * @return boolean
     */
    public function getMaxlevel()
    {
        return $this->maxlevel;
    }
}
