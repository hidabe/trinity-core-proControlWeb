<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disables
 *
 * @ORM\Table(name="disables")
 * @ORM\Entity
 */
class Disables
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="flags", type="boolean", nullable=false)
     */
    private $flags = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="params_0", type="string", length=255, nullable=false)
     */
    private $params0 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="params_1", type="string", length=255, nullable=false)
     */
    private $params1 = '';

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
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="sourceType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourcetype;



    /**
     * Set flags
     *
     * @param boolean $flags
     *
     * @return Disables
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return boolean
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set params0
     *
     * @param string $params0
     *
     * @return Disables
     */
    public function setParams0($params0)
    {
        $this->params0 = $params0;

        return $this;
    }

    /**
     * Get params0
     *
     * @return string
     */
    public function getParams0()
    {
        return $this->params0;
    }

    /**
     * Set params1
     *
     * @param string $params1
     *
     * @return Disables
     */
    public function setParams1($params1)
    {
        $this->params1 = $params1;

        return $this;
    }

    /**
     * Get params1
     *
     * @return string
     */
    public function getParams1()
    {
        return $this->params1;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Disables
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return Disables
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
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

    /**
     * Set sourcetype
     *
     * @param integer $sourcetype
     *
     * @return Disables
     */
    public function setSourcetype($sourcetype)
    {
        $this->sourcetype = $sourcetype;

        return $this;
    }

    /**
     * Get sourcetype
     *
     * @return integer
     */
    public function getSourcetype()
    {
        return $this->sourcetype;
    }
}
