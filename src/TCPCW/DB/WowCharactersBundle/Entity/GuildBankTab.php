<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildBankTab
 *
 * @ORM\Table(name="guild_bank_tab", indexes={@ORM\Index(name="guildid_key", columns={"guildid"})})
 * @ORM\Entity
 */
class GuildBankTab
{
    /**
     * @var string
     *
     * @ORM\Column(name="TabName", type="string", length=16, nullable=false)
     */
    private $tabname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TabIcon", type="string", length=100, nullable=false)
     */
    private $tabicon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TabText", type="string", length=500, nullable=true)
     */
    private $tabtext;

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
     * @ORM\Column(name="TabId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tabid;



    /**
     * Set tabname
     *
     * @param string $tabname
     *
     * @return GuildBankTab
     */
    public function setTabname($tabname)
    {
        $this->tabname = $tabname;

        return $this;
    }

    /**
     * Get tabname
     *
     * @return string
     */
    public function getTabname()
    {
        return $this->tabname;
    }

    /**
     * Set tabicon
     *
     * @param string $tabicon
     *
     * @return GuildBankTab
     */
    public function setTabicon($tabicon)
    {
        $this->tabicon = $tabicon;

        return $this;
    }

    /**
     * Get tabicon
     *
     * @return string
     */
    public function getTabicon()
    {
        return $this->tabicon;
    }

    /**
     * Set tabtext
     *
     * @param string $tabtext
     *
     * @return GuildBankTab
     */
    public function setTabtext($tabtext)
    {
        $this->tabtext = $tabtext;

        return $this;
    }

    /**
     * Get tabtext
     *
     * @return string
     */
    public function getTabtext()
    {
        return $this->tabtext;
    }

    /**
     * Set guildid
     *
     * @param integer $guildid
     *
     * @return GuildBankTab
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
     * Set tabid
     *
     * @param boolean $tabid
     *
     * @return GuildBankTab
     */
    public function setTabid($tabid)
    {
        $this->tabid = $tabid;

        return $this;
    }

    /**
     * Get tabid
     *
     * @return boolean
     */
    public function getTabid()
    {
        return $this->tabid;
    }
}
