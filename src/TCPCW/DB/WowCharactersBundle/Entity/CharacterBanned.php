<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterBanned
 *
 * @ORM\Table(name="character_banned")
 * @ORM\Entity
 */
class CharacterBanned
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unbandate", type="integer", nullable=false)
     */
    private $unbandate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bannedby", type="string", length=50, nullable=false)
     */
    private $bannedby;

    /**
     * @var string
     *
     * @ORM\Column(name="banreason", type="string", length=255, nullable=false)
     */
    private $banreason;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="bandate", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bandate;



    /**
     * Set unbandate
     *
     * @param integer $unbandate
     *
     * @return CharacterBanned
     */
    public function setUnbandate($unbandate)
    {
        $this->unbandate = $unbandate;

        return $this;
    }

    /**
     * Get unbandate
     *
     * @return integer
     */
    public function getUnbandate()
    {
        return $this->unbandate;
    }

    /**
     * Set bannedby
     *
     * @param string $bannedby
     *
     * @return CharacterBanned
     */
    public function setBannedby($bannedby)
    {
        $this->bannedby = $bannedby;

        return $this;
    }

    /**
     * Get bannedby
     *
     * @return string
     */
    public function getBannedby()
    {
        return $this->bannedby;
    }

    /**
     * Set banreason
     *
     * @param string $banreason
     *
     * @return CharacterBanned
     */
    public function setBanreason($banreason)
    {
        $this->banreason = $banreason;

        return $this;
    }

    /**
     * Get banreason
     *
     * @return string
     */
    public function getBanreason()
    {
        return $this->banreason;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return CharacterBanned
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterBanned
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
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

    /**
     * Set bandate
     *
     * @param integer $bandate
     *
     * @return CharacterBanned
     */
    public function setBandate($bandate)
    {
        $this->bandate = $bandate;

        return $this;
    }

    /**
     * Get bandate
     *
     * @return integer
     */
    public function getBandate()
    {
        return $this->bandate;
    }
}
