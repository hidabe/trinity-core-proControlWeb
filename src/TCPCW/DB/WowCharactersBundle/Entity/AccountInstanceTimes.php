<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountInstanceTimes
 *
 * @ORM\Table(name="account_instance_times")
 * @ORM\Entity
 */
class AccountInstanceTimes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="releaseTime", type="bigint", nullable=false)
     */
    private $releasetime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="accountId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountid;

    /**
     * @var integer
     *
     * @ORM\Column(name="instanceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $instanceid;



    /**
     * Set releasetime
     *
     * @param integer $releasetime
     *
     * @return AccountInstanceTimes
     */
    public function setReleasetime($releasetime)
    {
        $this->releasetime = $releasetime;

        return $this;
    }

    /**
     * Get releasetime
     *
     * @return integer
     */
    public function getReleasetime()
    {
        return $this->releasetime;
    }

    /**
     * Set accountid
     *
     * @param integer $accountid
     *
     * @return AccountInstanceTimes
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return integer
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set instanceid
     *
     * @param integer $instanceid
     *
     * @return AccountInstanceTimes
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer
     */
    public function getInstanceid()
    {
        return $this->instanceid;
    }
}
