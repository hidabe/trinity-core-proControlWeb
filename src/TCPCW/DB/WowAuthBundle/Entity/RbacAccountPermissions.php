<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacAccountPermissions
 *
 * @ORM\Table(name="rbac_account_permissions", indexes={@ORM\Index(name="fk__rbac_account_roles__rbac_permissions", columns={"permissionId"}), @ORM\Index(name="IDX_F5EF068362DEB3E8", columns={"accountId"})})
 * @ORM\Entity
 */
class RbacAccountPermissions
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="granted", type="boolean", nullable=false)
     */
    private $granted = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="realmId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;

    /**
     * @var \TCPCW\DB\WowAuthBundle\Entity\RbacPermissions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TCPCW\DB\WowAuthBundle\Entity\RbacPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permissionId", referencedColumnName="id")
     * })
     */
    private $permissionid;

    /**
     * @var \TCPCW\DB\WowAuthBundle\Entity\Account
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TCPCW\DB\WowAuthBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accountId", referencedColumnName="id")
     * })
     */
    private $accountid;



    /**
     * Set granted
     *
     * @param boolean $granted
     *
     * @return RbacAccountPermissions
     */
    public function setGranted($granted)
    {
        $this->granted = $granted;

        return $this;
    }

    /**
     * Get granted
     *
     * @return boolean
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Set realmid
     *
     * @param integer $realmid
     *
     * @return RbacAccountPermissions
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
     * Set permissionid
     *
     * @param \TCPCW\DB\WowAuthBundle\Entity\RbacPermissions $permissionid
     *
     * @return RbacAccountPermissions
     */
    public function setPermissionid(\TCPCW\DB\WowAuthBundle\Entity\RbacPermissions $permissionid)
    {
        $this->permissionid = $permissionid;

        return $this;
    }

    /**
     * Get permissionid
     *
     * @return \TCPCW\DB\WowAuthBundle\Entity\RbacPermissions
     */
    public function getPermissionid()
    {
        return $this->permissionid;
    }

    /**
     * Set accountid
     *
     * @param \TCPCW\DB\WowAuthBundle\Entity\Account $accountid
     *
     * @return RbacAccountPermissions
     */
    public function setAccountid(\TCPCW\DB\WowAuthBundle\Entity\Account $accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

    /**
     * Get accountid
     *
     * @return \TCPCW\DB\WowAuthBundle\Entity\Account
     */
    public function getAccountid()
    {
        return $this->accountid;
    }
}
