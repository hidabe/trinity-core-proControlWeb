<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildRank
 *
 * @ORM\Table(name="guild_rank", indexes={@ORM\Index(name="Idx_rid", columns={"rid"})})
 * @ORM\Entity
 */
class GuildRank
{
    /**
     * @var string
     *
     * @ORM\Column(name="rname", type="string", length=20, nullable=false)
     */
    private $rname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="rights", type="integer", nullable=false)
     */
    private $rights = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BankMoneyPerDay", type="integer", nullable=false)
     */
    private $bankmoneyperday = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guildid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rid;



    /**
     * Set rname
     *
     * @param string $rname
     *
     * @return GuildRank
     */
    public function setRname($rname)
    {
        $this->rname = $rname;

        return $this;
    }

    /**
     * Get rname
     *
     * @return string
     */
    public function getRname()
    {
        return $this->rname;
    }

    /**
     * Set rights
     *
     * @param integer $rights
     *
     * @return GuildRank
     */
    public function setRights($rights)
    {
        $this->rights = $rights;

        return $this;
    }

    /**
     * Get rights
     *
     * @return integer
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * Set bankmoneyperday
     *
     * @param integer $bankmoneyperday
     *
     * @return GuildRank
     */
    public function setBankmoneyperday($bankmoneyperday)
    {
        $this->bankmoneyperday = $bankmoneyperday;

        return $this;
    }

    /**
     * Get bankmoneyperday
     *
     * @return integer
     */
    public function getBankmoneyperday()
    {
        return $this->bankmoneyperday;
    }

    /**
     * Set guildid
     *
     * @param integer $guildid
     *
     * @return GuildRank
     */
    public function setGuildid($guildid)
    {
        $this->guildid = $guildid;

        return $this;
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

    /**
     * Set rid
     *
     * @param boolean $rid
     *
     * @return GuildRank
     */
    public function setRid($rid)
    {
        $this->rid = $rid;

        return $this;
    }

    /**
     * Get rid
     *
     * @return boolean
     */
    public function getRid()
    {
        return $this->rid;
    }
}
