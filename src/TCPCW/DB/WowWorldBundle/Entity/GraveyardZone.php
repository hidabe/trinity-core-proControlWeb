<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GraveyardZone
 *
 * @ORM\Table(name="graveyard_zone")
 * @ORM\Entity
 */
class GraveyardZone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Faction", type="smallint", nullable=false)
     */
    private $faction = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="GhostZone", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ghostzone;



    /**
     * Set faction
     *
     * @param integer $faction
     *
     * @return GraveyardZone
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return integer
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GraveyardZone
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return GraveyardZone
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
     * Set ghostzone
     *
     * @param integer $ghostzone
     *
     * @return GraveyardZone
     */
    public function setGhostzone($ghostzone)
    {
        $this->ghostzone = $ghostzone;

        return $this;
    }

    /**
     * Get ghostzone
     *
     * @return integer
     */
    public function getGhostzone()
    {
        return $this->ghostzone;
    }
}
