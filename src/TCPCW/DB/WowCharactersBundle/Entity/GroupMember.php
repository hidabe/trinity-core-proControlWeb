<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupMember
 *
 * @ORM\Table(name="group_member")
 * @ORM\Entity
 */
class GroupMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="memberFlags", type="integer", nullable=false)
     */
    private $memberflags = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subgroup", type="integer", nullable=false)
     */
    private $subgroup = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="roles", type="integer", nullable=false)
     */
    private $roles = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="memberGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $memberguid;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return GroupMember
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
     * Set memberflags
     *
     * @param boolean $memberflags
     *
     * @return GroupMember
     */
    public function setMemberflags($memberflags)
    {
        $this->memberflags = $memberflags;

        return $this;
    }

    /**
     * Get memberflags
     *
     * @return boolean
     */
    public function getMemberflags()
    {
        return $this->memberflags;
    }

    /**
     * Set subgroup
     *
     * @param boolean $subgroup
     *
     * @return GroupMember
     */
    public function setSubgroup($subgroup)
    {
        $this->subgroup = $subgroup;

        return $this;
    }

    /**
     * Get subgroup
     *
     * @return boolean
     */
    public function getSubgroup()
    {
        return $this->subgroup;
    }

    /**
     * Set roles
     *
     * @param boolean $roles
     *
     * @return GroupMember
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return boolean
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Get memberguid
     *
     * @return integer
     */
    public function getMemberguid()
    {
        return $this->memberguid;
    }
}
