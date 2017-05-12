<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildMember
 *
 * @ORM\Table(name="guild_member", uniqueConstraints={@ORM\UniqueConstraint(name="guid_key", columns={"guid"})}, indexes={@ORM\Index(name="guildid_key", columns={"guildid"}), @ORM\Index(name="guildid_rank_key", columns={"guildid", "rank"})})
 * @ORM\Entity
 */
class GuildMember
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
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="pnote", type="string", length=31, nullable=false)
     */
    private $pnote = '';

    /**
     * @var string
     *
     * @ORM\Column(name="offnote", type="string", length=31, nullable=false)
     */
    private $offnote = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guildid;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return GuildMember
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
     * Set rank
     *
     * @param boolean $rank
     *
     * @return GuildMember
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return boolean
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set pnote
     *
     * @param string $pnote
     *
     * @return GuildMember
     */
    public function setPnote($pnote)
    {
        $this->pnote = $pnote;

        return $this;
    }

    /**
     * Get pnote
     *
     * @return string
     */
    public function getPnote()
    {
        return $this->pnote;
    }

    /**
     * Set offnote
     *
     * @param string $offnote
     *
     * @return GuildMember
     */
    public function setOffnote($offnote)
    {
        $this->offnote = $offnote;

        return $this;
    }

    /**
     * Get offnote
     *
     * @return string
     */
    public function getOffnote()
    {
        return $this->offnote;
    }

    /**
     * Get guildid
     *
     * @return integer
     */
    public function getGuildid()
    {
        return $this->guildid;
    }
}
