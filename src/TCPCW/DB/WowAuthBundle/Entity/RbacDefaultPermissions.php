<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacDefaultPermissions
 *
 * @ORM\Table(name="rbac_default_permissions", indexes={@ORM\Index(name="fk__rbac_default_permissions__rbac_permissions", columns={"permissionId"})})
 * @ORM\Entity
 */
class RbacDefaultPermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="secId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $secid;

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
     * Set secid
     *
     * @param integer $secid
     *
     * @return RbacDefaultPermissions
     */
    public function setSecid($secid)
    {
        $this->secid = $secid;

        return $this;
    }

    /**
     * Get secid
     *
     * @return integer
     */
    public function getSecid()
    {
        return $this->secid;
    }

    /**
     * Set realmid
     *
     * @param integer $realmid
     *
     * @return RbacDefaultPermissions
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
     * @return RbacDefaultPermissions
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
}
