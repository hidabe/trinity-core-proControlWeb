<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IpBanned
 *
 * @ORM\Table(name="ip_banned")
 * @ORM\Entity
 */
class IpBanned
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unbandate", type="integer", nullable=false)
     */
    private $unbandate;

    /**
     * @var string
     *
     * @ORM\Column(name="bannedby", type="string", length=50, nullable=false)
     */
    private $bannedby = '[Console]';

    /**
     * @var string
     *
     * @ORM\Column(name="banreason", type="string", length=255, nullable=false)
     */
    private $banreason = 'no reason';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip;

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
     * @return IpBanned
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
     * @return IpBanned
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
     * @return IpBanned
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
     * Set ip
     *
     * @param string $ip
     *
     * @return IpBanned
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set bandate
     *
     * @param integer $bandate
     *
     * @return IpBanned
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
