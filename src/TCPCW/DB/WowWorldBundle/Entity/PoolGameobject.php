<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolGameobject
 *
 * @ORM\Table(name="pool_gameobject", indexes={@ORM\Index(name="idx_guid", columns={"guid"})})
 * @ORM\Entity
 */
class PoolGameobject
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pool_entry", type="integer", nullable=false)
     */
    private $poolEntry = '0';

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
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set poolEntry
     *
     * @param integer $poolEntry
     *
     * @return PoolGameobject
     */
    public function setPoolEntry($poolEntry)
    {
        $this->poolEntry = $poolEntry;

        return $this;
    }

    /**
     * Get poolEntry
     *
     * @return integer
     */
    public function getPoolEntry()
    {
        return $this->poolEntry;
    }

    /**
     * Set chance
     *
     * @param float $chance
     *
     * @return PoolGameobject
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
     * @return PoolGameobject
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
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
