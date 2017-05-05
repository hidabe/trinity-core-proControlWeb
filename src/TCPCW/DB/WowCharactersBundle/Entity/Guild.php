<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guild
 *
 * @ORM\Table(name="guild")
 * @ORM\Entity
 */
class Guild
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="leaderguid", type="integer", nullable=false)
     */
    private $leaderguid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EmblemStyle", type="integer", nullable=false)
     */
    private $emblemstyle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="EmblemColor", type="integer", nullable=false)
     */
    private $emblemcolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BorderStyle", type="integer", nullable=false)
     */
    private $borderstyle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BorderColor", type="integer", nullable=false)
     */
    private $bordercolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="BackgroundColor", type="integer", nullable=false)
     */
    private $backgroundcolor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=500, nullable=false)
     */
    private $info = '';

    /**
     * @var string
     *
     * @ORM\Column(name="motd", type="string", length=128, nullable=false)
     */
    private $motd = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="createdate", type="integer", nullable=false)
     */
    private $createdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BankMoney", type="bigint", nullable=false)
     */
    private $bankmoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guildid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guildid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Guild
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
     * Set leaderguid
     *
     * @param integer $leaderguid
     *
     * @return Guild
     */
    public function setLeaderguid($leaderguid)
    {
        $this->leaderguid = $leaderguid;

        return $this;
    }

    /**
     * Get leaderguid
     *
     * @return integer
     */
    public function getLeaderguid()
    {
        return $this->leaderguid;
    }

    /**
     * Set emblemstyle
     *
     * @param boolean $emblemstyle
     *
     * @return Guild
     */
    public function setEmblemstyle($emblemstyle)
    {
        $this->emblemstyle = $emblemstyle;

        return $this;
    }

    /**
     * Get emblemstyle
     *
     * @return boolean
     */
    public function getEmblemstyle()
    {
        return $this->emblemstyle;
    }

    /**
     * Set emblemcolor
     *
     * @param boolean $emblemcolor
     *
     * @return Guild
     */
    public function setEmblemcolor($emblemcolor)
    {
        $this->emblemcolor = $emblemcolor;

        return $this;
    }

    /**
     * Get emblemcolor
     *
     * @return boolean
     */
    public function getEmblemcolor()
    {
        return $this->emblemcolor;
    }

    /**
     * Set borderstyle
     *
     * @param boolean $borderstyle
     *
     * @return Guild
     */
    public function setBorderstyle($borderstyle)
    {
        $this->borderstyle = $borderstyle;

        return $this;
    }

    /**
     * Get borderstyle
     *
     * @return boolean
     */
    public function getBorderstyle()
    {
        return $this->borderstyle;
    }

    /**
     * Set bordercolor
     *
     * @param boolean $bordercolor
     *
     * @return Guild
     */
    public function setBordercolor($bordercolor)
    {
        $this->bordercolor = $bordercolor;

        return $this;
    }

    /**
     * Get bordercolor
     *
     * @return boolean
     */
    public function getBordercolor()
    {
        return $this->bordercolor;
    }

    /**
     * Set backgroundcolor
     *
     * @param boolean $backgroundcolor
     *
     * @return Guild
     */
    public function setBackgroundcolor($backgroundcolor)
    {
        $this->backgroundcolor = $backgroundcolor;

        return $this;
    }

    /**
     * Get backgroundcolor
     *
     * @return boolean
     */
    public function getBackgroundcolor()
    {
        return $this->backgroundcolor;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Guild
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set motd
     *
     * @param string $motd
     *
     * @return Guild
     */
    public function setMotd($motd)
    {
        $this->motd = $motd;

        return $this;
    }

    /**
     * Get motd
     *
     * @return string
     */
    public function getMotd()
    {
        return $this->motd;
    }

    /**
     * Set createdate
     *
     * @param integer $createdate
     *
     * @return Guild
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return integer
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * Set bankmoney
     *
     * @param integer $bankmoney
     *
     * @return Guild
     */
    public function setBankmoney($bankmoney)
    {
        $this->bankmoney = $bankmoney;

        return $this;
    }

    /**
     * Get bankmoney
     *
     * @return integer
     */
    public function getBankmoney()
    {
        return $this->bankmoney;
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
