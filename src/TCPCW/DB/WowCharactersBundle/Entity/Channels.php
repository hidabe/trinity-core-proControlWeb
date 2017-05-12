<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Channels
 *
 * @ORM\Table(name="channels")
 * @ORM\Entity
 */
class Channels
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="announce", type="integer", nullable=false)
     */
    private $announce = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ownership", type="integer", nullable=false)
     */
    private $ownership = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="bannedList", type="text", length=65535, nullable=true)
     */
    private $bannedlist;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastUsed", type="integer", nullable=false)
     */
    private $lastused;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="team", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $team;



    /**
     * Set announce
     *
     * @param boolean $announce
     *
     * @return Channels
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;

        return $this;
    }

    /**
     * Get announce
     *
     * @return boolean
     */
    public function getAnnounce()
    {
        return $this->announce;
    }

    /**
     * Set ownership
     *
     * @param boolean $ownership
     *
     * @return Channels
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

    /**
     * Get ownership
     *
     * @return boolean
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Channels
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set bannedlist
     *
     * @param string $bannedlist
     *
     * @return Channels
     */
    public function setBannedlist($bannedlist)
    {
        $this->bannedlist = $bannedlist;

        return $this;
    }

    /**
     * Get bannedlist
     *
     * @return string
     */
    public function getBannedlist()
    {
        return $this->bannedlist;
    }

    /**
     * Set lastused
     *
     * @param integer $lastused
     *
     * @return Channels
     */
    public function setLastused($lastused)
    {
        $this->lastused = $lastused;

        return $this;
    }

    /**
     * Get lastused
     *
     * @return integer
     */
    public function getLastused()
    {
        return $this->lastused;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Channels
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set team
     *
     * @param integer $team
     *
     * @return Channels
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return integer
     */
    public function getTeam()
    {
        return $this->team;
    }
}
