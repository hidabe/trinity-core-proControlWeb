<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountBanned
 *
 * @ORM\Table(name="account_banned")
 * @ORM\Entity
 */
class AccountBanned
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
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

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
     * @return AccountBanned
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
     * @return AccountBanned
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
     * @return AccountBanned
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
     * @return AccountBanned
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
     * Set id
     *
     * @param integer $id
     *
     * @return AccountBanned
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bandate
     *
     * @param integer $bandate
     *
     * @return AccountBanned
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
