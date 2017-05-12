<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auctionhouse
 *
 * @ORM\Table(name="auctionhouse", uniqueConstraints={@ORM\UniqueConstraint(name="item_guid", columns={"itemguid"})})
 * @ORM\Entity
 */
class Auctionhouse
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="houseid", type="integer", nullable=false)
     */
    private $houseid = '7';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemguid", type="integer", nullable=false)
     */
    private $itemguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="itemowner", type="integer", nullable=false)
     */
    private $itemowner = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="buyoutprice", type="integer", nullable=false)
     */
    private $buyoutprice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="buyguid", type="integer", nullable=false)
     */
    private $buyguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastbid", type="integer", nullable=false)
     */
    private $lastbid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="startbid", type="integer", nullable=false)
     */
    private $startbid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deposit", type="integer", nullable=false)
     */
    private $deposit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set houseid
     *
     * @param boolean $houseid
     *
     * @return Auctionhouse
     */
    public function setHouseid($houseid)
    {
        $this->houseid = $houseid;

        return $this;
    }

    /**
     * Get houseid
     *
     * @return boolean
     */
    public function getHouseid()
    {
        return $this->houseid;
    }

    /**
     * Set itemguid
     *
     * @param integer $itemguid
     *
     * @return Auctionhouse
     */
    public function setItemguid($itemguid)
    {
        $this->itemguid = $itemguid;

        return $this;
    }

    /**
     * Get itemguid
     *
     * @return integer
     */
    public function getItemguid()
    {
        return $this->itemguid;
    }

    /**
     * Set itemowner
     *
     * @param integer $itemowner
     *
     * @return Auctionhouse
     */
    public function setItemowner($itemowner)
    {
        $this->itemowner = $itemowner;

        return $this;
    }

    /**
     * Get itemowner
     *
     * @return integer
     */
    public function getItemowner()
    {
        return $this->itemowner;
    }

    /**
     * Set buyoutprice
     *
     * @param integer $buyoutprice
     *
     * @return Auctionhouse
     */
    public function setBuyoutprice($buyoutprice)
    {
        $this->buyoutprice = $buyoutprice;

        return $this;
    }

    /**
     * Get buyoutprice
     *
     * @return integer
     */
    public function getBuyoutprice()
    {
        return $this->buyoutprice;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Auctionhouse
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
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

    /**
     * Set buyguid
     *
     * @param integer $buyguid
     *
     * @return Auctionhouse
     */
    public function setBuyguid($buyguid)
    {
        $this->buyguid = $buyguid;

        return $this;
    }

    /**
     * Get buyguid
     *
     * @return integer
     */
    public function getBuyguid()
    {
        return $this->buyguid;
    }

    /**
     * Set lastbid
     *
     * @param integer $lastbid
     *
     * @return Auctionhouse
     */
    public function setLastbid($lastbid)
    {
        $this->lastbid = $lastbid;

        return $this;
    }

    /**
     * Get lastbid
     *
     * @return integer
     */
    public function getLastbid()
    {
        return $this->lastbid;
    }

    /**
     * Set startbid
     *
     * @param integer $startbid
     *
     * @return Auctionhouse
     */
    public function setStartbid($startbid)
    {
        $this->startbid = $startbid;

        return $this;
    }

    /**
     * Get startbid
     *
     * @return integer
     */
    public function getStartbid()
    {
        return $this->startbid;
    }

    /**
     * Set deposit
     *
     * @param integer $deposit
     *
     * @return Auctionhouse
     */
    public function setDeposit($deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Get deposit
     *
     * @return integer
     */
    public function getDeposit()
    {
        return $this->deposit;
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
}
