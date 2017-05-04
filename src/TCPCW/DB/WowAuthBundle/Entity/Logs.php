<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="logs")
 * @ORM\Entity
 */
class Logs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="realm", type="integer", nullable=false)
     */
    private $realm;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=250, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="string", type="text", length=65535, nullable=true)
     */
    private $string;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $time;



    /**
     * Set realm
     *
     * @param integer $realm
     *
     * @return Logs
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }

    /**
     * Get realm
     *
     * @return integer
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Logs
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return Logs
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
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

    /**
     * Set string
     *
     * @param string $string
     *
     * @return Logs
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }
}
