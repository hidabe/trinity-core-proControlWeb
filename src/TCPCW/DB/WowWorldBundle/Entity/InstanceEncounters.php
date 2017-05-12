<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceEncounters
 *
 * @ORM\Table(name="instance_encounters")
 * @ORM\Entity
 */
class InstanceEncounters
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="creditType", type="boolean", nullable=false)
     */
    private $credittype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="creditEntry", type="integer", nullable=false)
     */
    private $creditentry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastEncounterDungeon", type="smallint", nullable=false)
     */
    private $lastencounterdungeon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set credittype
     *
     * @param boolean $credittype
     *
     * @return InstanceEncounters
     */
    public function setCredittype($credittype)
    {
        $this->credittype = $credittype;

        return $this;
    }

    /**
     * Get credittype
     *
     * @return boolean
     */
    public function getCredittype()
    {
        return $this->credittype;
    }

    /**
     * Set creditentry
     *
     * @param integer $creditentry
     *
     * @return InstanceEncounters
     */
    public function setCreditentry($creditentry)
    {
        $this->creditentry = $creditentry;

        return $this;
    }

    /**
     * Get creditentry
     *
     * @return integer
     */
    public function getCreditentry()
    {
        return $this->creditentry;
    }

    /**
     * Set lastencounterdungeon
     *
     * @param integer $lastencounterdungeon
     *
     * @return InstanceEncounters
     */
    public function setLastencounterdungeon($lastencounterdungeon)
    {
        $this->lastencounterdungeon = $lastencounterdungeon;

        return $this;
    }

    /**
     * Get lastencounterdungeon
     *
     * @return integer
     */
    public function getLastencounterdungeon()
    {
        return $this->lastencounterdungeon;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return InstanceEncounters
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
