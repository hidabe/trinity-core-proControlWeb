<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolQuest
 *
 * @ORM\Table(name="pool_quest", indexes={@ORM\Index(name="idx_guid", columns={"entry"})})
 * @ORM\Entity
 */
class PoolQuest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pool_entry", type="integer", nullable=false)
     */
    private $poolEntry = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set poolEntry
     *
     * @param integer $poolEntry
     *
     * @return PoolQuest
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
     * Set description
     *
     * @param string $description
     *
     * @return PoolQuest
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
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
