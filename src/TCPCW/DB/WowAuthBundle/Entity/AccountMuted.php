<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMuted
 *
 * @ORM\Table(name="account_muted")
 * @ORM\Entity
 */
class AccountMuted
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mutetime", type="integer", nullable=false)
     */
    private $mutetime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mutedby", type="string", length=50, nullable=false)
     */
    private $mutedby;

    /**
     * @var string
     *
     * @ORM\Column(name="mutereason", type="string", length=255, nullable=false)
     */
    private $mutereason;

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
     * @ORM\Column(name="mutedate", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mutedate;



    /**
     * Set mutetime
     *
     * @param integer $mutetime
     *
     * @return AccountMuted
     */
    public function setMutetime($mutetime)
    {
        $this->mutetime = $mutetime;

        return $this;
    }

    /**
     * Get mutetime
     *
     * @return integer
     */
    public function getMutetime()
    {
        return $this->mutetime;
    }

    /**
     * Set mutedby
     *
     * @param string $mutedby
     *
     * @return AccountMuted
     */
    public function setMutedby($mutedby)
    {
        $this->mutedby = $mutedby;

        return $this;
    }

    /**
     * Get mutedby
     *
     * @return string
     */
    public function getMutedby()
    {
        return $this->mutedby;
    }

    /**
     * Set mutereason
     *
     * @param string $mutereason
     *
     * @return AccountMuted
     */
    public function setMutereason($mutereason)
    {
        $this->mutereason = $mutereason;

        return $this;
    }

    /**
     * Get mutereason
     *
     * @return string
     */
    public function getMutereason()
    {
        return $this->mutereason;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return AccountMuted
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
     * Set mutedate
     *
     * @param integer $mutedate
     *
     * @return AccountMuted
     */
    public function setMutedate($mutedate)
    {
        $this->mutedate = $mutedate;

        return $this;
    }

    /**
     * Get mutedate
     *
     * @return integer
     */
    public function getMutedate()
    {
        return $this->mutedate;
    }
}
