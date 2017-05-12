<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExplorationBasexp
 *
 * @ORM\Table(name="exploration_basexp")
 * @ORM\Entity
 */
class ExplorationBasexp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="basexp", type="integer", nullable=false)
     */
    private $basexp = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $level;



    /**
     * Set basexp
     *
     * @param integer $basexp
     *
     * @return ExplorationBasexp
     */
    public function setBasexp($basexp)
    {
        $this->basexp = $basexp;

        return $this;
    }

    /**
     * Get basexp
     *
     * @return integer
     */
    public function getBasexp()
    {
        return $this->basexp;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }
}
