<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolQuestSave
 *
 * @ORM\Table(name="pool_quest_save")
 * @ORM\Entity
 */
class PoolQuestSave
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pool_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $poolId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quest_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questId;



    /**
     * Set poolId
     *
     * @param integer $poolId
     *
     * @return PoolQuestSave
     */
    public function setPoolId($poolId)
    {
        $this->poolId = $poolId;

        return $this;
    }

    /**
     * Get poolId
     *
     * @return integer
     */
    public function getPoolId()
    {
        return $this->poolId;
    }

    /**
     * Set questId
     *
     * @param integer $questId
     *
     * @return PoolQuestSave
     */
    public function setQuestId($questId)
    {
        $this->questId = $questId;

        return $this;
    }

    /**
     * Get questId
     *
     * @return integer
     */
    public function getQuestId()
    {
        return $this->questId;
    }
}
