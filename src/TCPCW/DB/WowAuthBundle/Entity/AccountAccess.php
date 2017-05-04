<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountAccess
 *
 * @ORM\Table(name="account_access")
 * @ORM\Entity
 */
class AccountAccess
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="gmlevel", type="boolean", nullable=false)
     */
    private $gmlevel;

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
     * @ORM\Column(name="RealmID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;



    /**
     * Set gmlevel
     *
     * @param boolean $gmlevel
     *
     * @return AccountAccess
     */
    public function setGmlevel($gmlevel)
    {
        $this->gmlevel = $gmlevel;

        return $this;
    }

    /**
     * Get gmlevel
     *
     * @return boolean
     */
    public function getGmlevel()
    {
        return $this->gmlevel;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return AccountAccess
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
     * Set realmid
     *
     * @param integer $realmid
     *
     * @return AccountAccess
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
}
