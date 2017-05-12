<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GossipMenuOption
 *
 * @ORM\Table(name="gossip_menu_option")
 * @ORM\Entity
 */
class GossipMenuOption
{
    /**
     * @var integer
     *
     * @ORM\Column(name="option_icon", type="integer", nullable=false)
     */
    private $optionIcon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="option_text", type="text", length=65535, nullable=true)
     */
    private $optionText;

    /**
     * @var integer
     *
     * @ORM\Column(name="OptionBroadcastTextID", type="integer", nullable=false)
     */
    private $optionbroadcasttextid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="option_id", type="boolean", nullable=false)
     */
    private $optionId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="npc_option_npcflag", type="integer", nullable=false)
     */
    private $npcOptionNpcflag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_menu_id", type="integer", nullable=false)
     */
    private $actionMenuId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="action_poi_id", type="integer", nullable=false)
     */
    private $actionPoiId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="box_coded", type="boolean", nullable=false)
     */
    private $boxCoded = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="box_money", type="integer", nullable=false)
     */
    private $boxMoney = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="box_text", type="text", length=65535, nullable=true)
     */
    private $boxText;

    /**
     * @var integer
     *
     * @ORM\Column(name="BoxBroadcastTextID", type="integer", nullable=false)
     */
    private $boxbroadcasttextid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=false)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set optionIcon
     *
     * @param integer $optionIcon
     *
     * @return GossipMenuOption
     */
    public function setOptionIcon($optionIcon)
    {
        $this->optionIcon = $optionIcon;

        return $this;
    }

    /**
     * Get optionIcon
     *
     * @return integer
     */
    public function getOptionIcon()
    {
        return $this->optionIcon;
    }

    /**
     * Set optionText
     *
     * @param string $optionText
     *
     * @return GossipMenuOption
     */
    public function setOptionText($optionText)
    {
        $this->optionText = $optionText;

        return $this;
    }

    /**
     * Get optionText
     *
     * @return string
     */
    public function getOptionText()
    {
        return $this->optionText;
    }

    /**
     * Set optionbroadcasttextid
     *
     * @param integer $optionbroadcasttextid
     *
     * @return GossipMenuOption
     */
    public function setOptionbroadcasttextid($optionbroadcasttextid)
    {
        $this->optionbroadcasttextid = $optionbroadcasttextid;

        return $this;
    }

    /**
     * Get optionbroadcasttextid
     *
     * @return integer
     */
    public function getOptionbroadcasttextid()
    {
        return $this->optionbroadcasttextid;
    }

    /**
     * Set optionId
     *
     * @param boolean $optionId
     *
     * @return GossipMenuOption
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get optionId
     *
     * @return boolean
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set npcOptionNpcflag
     *
     * @param integer $npcOptionNpcflag
     *
     * @return GossipMenuOption
     */
    public function setNpcOptionNpcflag($npcOptionNpcflag)
    {
        $this->npcOptionNpcflag = $npcOptionNpcflag;

        return $this;
    }

    /**
     * Get npcOptionNpcflag
     *
     * @return integer
     */
    public function getNpcOptionNpcflag()
    {
        return $this->npcOptionNpcflag;
    }

    /**
     * Set actionMenuId
     *
     * @param integer $actionMenuId
     *
     * @return GossipMenuOption
     */
    public function setActionMenuId($actionMenuId)
    {
        $this->actionMenuId = $actionMenuId;

        return $this;
    }

    /**
     * Get actionMenuId
     *
     * @return integer
     */
    public function getActionMenuId()
    {
        return $this->actionMenuId;
    }

    /**
     * Set actionPoiId
     *
     * @param integer $actionPoiId
     *
     * @return GossipMenuOption
     */
    public function setActionPoiId($actionPoiId)
    {
        $this->actionPoiId = $actionPoiId;

        return $this;
    }

    /**
     * Get actionPoiId
     *
     * @return integer
     */
    public function getActionPoiId()
    {
        return $this->actionPoiId;
    }

    /**
     * Set boxCoded
     *
     * @param boolean $boxCoded
     *
     * @return GossipMenuOption
     */
    public function setBoxCoded($boxCoded)
    {
        $this->boxCoded = $boxCoded;

        return $this;
    }

    /**
     * Get boxCoded
     *
     * @return boolean
     */
    public function getBoxCoded()
    {
        return $this->boxCoded;
    }

    /**
     * Set boxMoney
     *
     * @param integer $boxMoney
     *
     * @return GossipMenuOption
     */
    public function setBoxMoney($boxMoney)
    {
        $this->boxMoney = $boxMoney;

        return $this;
    }

    /**
     * Get boxMoney
     *
     * @return integer
     */
    public function getBoxMoney()
    {
        return $this->boxMoney;
    }

    /**
     * Set boxText
     *
     * @param string $boxText
     *
     * @return GossipMenuOption
     */
    public function setBoxText($boxText)
    {
        $this->boxText = $boxText;

        return $this;
    }

    /**
     * Get boxText
     *
     * @return string
     */
    public function getBoxText()
    {
        return $this->boxText;
    }

    /**
     * Set boxbroadcasttextid
     *
     * @param integer $boxbroadcasttextid
     *
     * @return GossipMenuOption
     */
    public function setBoxbroadcasttextid($boxbroadcasttextid)
    {
        $this->boxbroadcasttextid = $boxbroadcasttextid;

        return $this;
    }

    /**
     * Get boxbroadcasttextid
     *
     * @return integer
     */
    public function getBoxbroadcasttextid()
    {
        return $this->boxbroadcasttextid;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return GossipMenuOption
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
     * Set menuId
     *
     * @param integer $menuId
     *
     * @return GossipMenuOption
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return integer
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return GossipMenuOption
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
}
