<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolPool
 *
 * @ORM\Table(name="pool_pool")
 * @ORM\Entity
 */
class PoolPool
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mother_pool", type="integer", nullable=false)
     */
    private $motherPool = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="chance", type="float", precision=10, scale=0, nullable=false)
     */
    private $chance = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="pool_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $poolId;



    /**
     * Set motherPool
     *
     * @param integer $motherPool
     *
     * @return PoolPool
     */
    public function setMotherPool($motherPool)
    {
        $this->motherPool = $motherPool;

        return $this;
    }

    /**
     * Get motherPool
     *
     * @return integer
     */
    public function getMotherPool()
    {
        return $this->motherPool;
    }

    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return PoolPool
     */
    public function setChance($chance)
    {
        $this->chance = $chance;

        return $this;
    }

    /**
     * Get chance
     *
     * @return float
     */
    public function getChance()
    {
        return $this->chance;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PoolPool
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
     * Get poolId
     *
     * @return integer
     */
    public function getPoolId()
    {
        return $this->poolId;
    }
}
