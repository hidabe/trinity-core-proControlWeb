<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realmcharacters
 *
 * @ORM\Table(name="realmcharacters", indexes={@ORM\Index(name="acctid", columns={"acctid"})})
 * @ORM\Entity
 */
class Realmcharacters
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="numchars", type="boolean", nullable=false)
     */
    private $numchars = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="realmid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="acctid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $acctid;



    /**
     * Set numchars
     *
     * @param boolean $numchars
     *
     * @return Realmcharacters
     */
    public function setNumchars($numchars)
    {
        $this->numchars = $numchars;

        return $this;
    }

    /**
     * Get numchars
     *
     * @return boolean
     */
    public function getNumchars()
    {
        return $this->numchars;
    }

    /**
     * Set realmid
     *
     * @param integer $realmid
     *
     * @return Realmcharacters
     */
    public function setRealmid($realmid)
    {
        $this->realmid = $realmid;

        return $this;
    }

    /**
     * Get realmid
     *
     * @return integer
     */
    public function getRealmid()
    {
        return $this->realmid;
    }

    /**
     * Set acctid
     *
     * @param integer $acctid
     *
     * @return Realmcharacters
     */
    public function setAcctid($acctid)
    {
        $this->acctid = $acctid;

        return $this;
    }

    /**
     * Get acctid
     *
     * @return integer
     */
    public function getAcctid()
    {
        return $this->acctid;
    }
}
