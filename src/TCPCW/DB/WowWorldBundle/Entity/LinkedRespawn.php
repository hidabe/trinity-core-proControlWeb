<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinkedRespawn
 *
 * @ORM\Table(name="linked_respawn")
 * @ORM\Entity
 */
class LinkedRespawn
{
    /**
     * @var integer
     *
     * @ORM\Column(name="linkedGuid", type="integer", nullable=false)
     */
    private $linkedguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="linkType", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linktype;



    /**
     * Set linkedguid
     *
     * @param integer $linkedguid
     *
     * @return LinkedRespawn
     */
    public function setLinkedguid($linkedguid)
    {
        $this->linkedguid = $linkedguid;

        return $this;
    }

    /**
     * Get linkedguid
     *
     * @return integer
     */
    public function getLinkedguid()
    {
        return $this->linkedguid;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return LinkedRespawn
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
     * Set linktype
     *
     * @param boolean $linktype
     *
     * @return LinkedRespawn
     */
    public function setLinktype($linktype)
    {
        $this->linktype = $linktype;

        return $this;
    }

    /**
     * Get linktype
     *
     * @return boolean
     */
    public function getLinktype()
    {
        return $this->linktype;
    }
}
