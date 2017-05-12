<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GossipMenu
 *
 * @ORM\Table(name="gossip_menu")
 * @ORM\Entity
 */
class GossipMenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=false)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var integer
     *
     * @ORM\Column(name="text_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $textId;



    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return GossipMenu
     */
    public function setVerifiedbuild($verifiedbuild)
    {
        $this->verifiedbuild = $verifiedbuild;

        return $this;
    }

    /**
     * Get verifiedbuild
     *
     * @return integer
     */
    public function getVerifiedbuild()
    {
        return $this->verifiedbuild;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return GossipMenu
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set textId
     *
     * @param integer $textId
     *
     * @return GossipMenu
     */
    public function setTextId($textId)
    {
        $this->textId = $textId;

        return $this;
    }

    /**
     * Get textId
     *
     * @return integer
     */
    public function getTextId()
    {
        return $this->textId;
    }
}
