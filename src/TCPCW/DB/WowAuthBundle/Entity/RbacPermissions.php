<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacPermissions
 *
 * @ORM\Table(name="rbac_permissions")
 * @ORM\Entity
 */
class RbacPermissions
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TCPCW\DB\WowAuthBundle\Entity\RbacPermissions", inversedBy="id")
     * @ORM\JoinTable(name="rbac_linked_permissions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="linkedId", referencedColumnName="id")
     *   }
     * )
     */
    private $linkedid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->linkedid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return RbacPermissions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Add linkedid
     *
     * @param \TCPCW\DB\WowAuthBundle\Entity\RbacPermissions $linkedid
     *
     * @return RbacPermissions
     */
    public function addLinkedid(\TCPCW\DB\WowAuthBundle\Entity\RbacPermissions $linkedid)
    {
        $this->linkedid[] = $linkedid;

        return $this;
    }

    /**
     * Remove linkedid
     *
     * @param \TCPCW\DB\WowAuthBundle\Entity\RbacPermissions $linkedid
     */
    public function removeLinkedid(\TCPCW\DB\WowAuthBundle\Entity\RbacPermissions $linkedid)
    {
        $this->linkedid->removeElement($linkedid);
    }

    /**
     * Get linkedid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinkedid()
    {
        return $this->linkedid;
    }
}
