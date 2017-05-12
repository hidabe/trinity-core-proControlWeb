<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoolTemplate
 *
 * @ORM\Table(name="pool_template")
 * @ORM\Entity
 */
class PoolTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="max_limit", type="integer", nullable=false)
     */
    private $maxLimit = '0';

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
     * Set maxLimit
     *
     * @param integer $maxLimit
     *
     * @return PoolTemplate
     */
    public function setMaxLimit($maxLimit)
    {
        $this->maxLimit = $maxLimit;

        return $this;
    }

    /**
     * Get maxLimit
     *
     * @return integer
     */
    public function getMaxLimit()
    {
        return $this->maxLimit;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return PoolTemplate
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
