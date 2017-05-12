<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalesGossipMenuOption
 *
 * @ORM\Table(name="locales_gossip_menu_option")
 * @ORM\Entity
 */
class LocalesGossipMenuOption
{
    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc1", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc1;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc2", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc2;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc3", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc3;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc4", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc4;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc5", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc5;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc6", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc6;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc7", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc7;

    /**
     * @var string
     *
     * @ORM\Column(name="option_text_loc8", type="text", length=65535, nullable=true)
     */
    private $optionTextLoc8;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc1", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc1;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc2", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc2;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc3", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc3;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc4", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc4;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc5", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc5;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc6", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc6;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc7", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc7;

    /**
     * @var string
     *
     * @ORM\Column(name="box_text_loc8", type="text", length=65535, nullable=true)
     */
    private $boxTextLoc8;

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
     * Set optionTextLoc1
     *
     * @param string $optionTextLoc1
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc1($optionTextLoc1)
    {
        $this->optionTextLoc1 = $optionTextLoc1;

        return $this;
    }

    /**
     * Get optionTextLoc1
     *
     * @return string
     */
    public function getOptionTextLoc1()
    {
        return $this->optionTextLoc1;
    }

    /**
     * Set optionTextLoc2
     *
     * @param string $optionTextLoc2
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc2($optionTextLoc2)
    {
        $this->optionTextLoc2 = $optionTextLoc2;

        return $this;
    }

    /**
     * Get optionTextLoc2
     *
     * @return string
     */
    public function getOptionTextLoc2()
    {
        return $this->optionTextLoc2;
    }

    /**
     * Set optionTextLoc3
     *
     * @param string $optionTextLoc3
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc3($optionTextLoc3)
    {
        $this->optionTextLoc3 = $optionTextLoc3;

        return $this;
    }

    /**
     * Get optionTextLoc3
     *
     * @return string
     */
    public function getOptionTextLoc3()
    {
        return $this->optionTextLoc3;
    }

    /**
     * Set optionTextLoc4
     *
     * @param string $optionTextLoc4
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc4($optionTextLoc4)
    {
        $this->optionTextLoc4 = $optionTextLoc4;

        return $this;
    }

    /**
     * Get optionTextLoc4
     *
     * @return string
     */
    public function getOptionTextLoc4()
    {
        return $this->optionTextLoc4;
    }

    /**
     * Set optionTextLoc5
     *
     * @param string $optionTextLoc5
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc5($optionTextLoc5)
    {
        $this->optionTextLoc5 = $optionTextLoc5;

        return $this;
    }

    /**
     * Get optionTextLoc5
     *
     * @return string
     */
    public function getOptionTextLoc5()
    {
        return $this->optionTextLoc5;
    }

    /**
     * Set optionTextLoc6
     *
     * @param string $optionTextLoc6
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc6($optionTextLoc6)
    {
        $this->optionTextLoc6 = $optionTextLoc6;

        return $this;
    }

    /**
     * Get optionTextLoc6
     *
     * @return string
     */
    public function getOptionTextLoc6()
    {
        return $this->optionTextLoc6;
    }

    /**
     * Set optionTextLoc7
     *
     * @param string $optionTextLoc7
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc7($optionTextLoc7)
    {
        $this->optionTextLoc7 = $optionTextLoc7;

        return $this;
    }

    /**
     * Get optionTextLoc7
     *
     * @return string
     */
    public function getOptionTextLoc7()
    {
        return $this->optionTextLoc7;
    }

    /**
     * Set optionTextLoc8
     *
     * @param string $optionTextLoc8
     *
     * @return LocalesGossipMenuOption
     */
    public function setOptionTextLoc8($optionTextLoc8)
    {
        $this->optionTextLoc8 = $optionTextLoc8;

        return $this;
    }

    /**
     * Get optionTextLoc8
     *
     * @return string
     */
    public function getOptionTextLoc8()
    {
        return $this->optionTextLoc8;
    }

    /**
     * Set boxTextLoc1
     *
     * @param string $boxTextLoc1
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc1($boxTextLoc1)
    {
        $this->boxTextLoc1 = $boxTextLoc1;

        return $this;
    }

    /**
     * Get boxTextLoc1
     *
     * @return string
     */
    public function getBoxTextLoc1()
    {
        return $this->boxTextLoc1;
    }

    /**
     * Set boxTextLoc2
     *
     * @param string $boxTextLoc2
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc2($boxTextLoc2)
    {
        $this->boxTextLoc2 = $boxTextLoc2;

        return $this;
    }

    /**
     * Get boxTextLoc2
     *
     * @return string
     */
    public function getBoxTextLoc2()
    {
        return $this->boxTextLoc2;
    }

    /**
     * Set boxTextLoc3
     *
     * @param string $boxTextLoc3
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc3($boxTextLoc3)
    {
        $this->boxTextLoc3 = $boxTextLoc3;

        return $this;
    }

    /**
     * Get boxTextLoc3
     *
     * @return string
     */
    public function getBoxTextLoc3()
    {
        return $this->boxTextLoc3;
    }

    /**
     * Set boxTextLoc4
     *
     * @param string $boxTextLoc4
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc4($boxTextLoc4)
    {
        $this->boxTextLoc4 = $boxTextLoc4;

        return $this;
    }

    /**
     * Get boxTextLoc4
     *
     * @return string
     */
    public function getBoxTextLoc4()
    {
        return $this->boxTextLoc4;
    }

    /**
     * Set boxTextLoc5
     *
     * @param string $boxTextLoc5
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc5($boxTextLoc5)
    {
        $this->boxTextLoc5 = $boxTextLoc5;

        return $this;
    }

    /**
     * Get boxTextLoc5
     *
     * @return string
     */
    public function getBoxTextLoc5()
    {
        return $this->boxTextLoc5;
    }

    /**
     * Set boxTextLoc6
     *
     * @param string $boxTextLoc6
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc6($boxTextLoc6)
    {
        $this->boxTextLoc6 = $boxTextLoc6;

        return $this;
    }

    /**
     * Get boxTextLoc6
     *
     * @return string
     */
    public function getBoxTextLoc6()
    {
        return $this->boxTextLoc6;
    }

    /**
     * Set boxTextLoc7
     *
     * @param string $boxTextLoc7
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc7($boxTextLoc7)
    {
        $this->boxTextLoc7 = $boxTextLoc7;

        return $this;
    }

    /**
     * Get boxTextLoc7
     *
     * @return string
     */
    public function getBoxTextLoc7()
    {
        return $this->boxTextLoc7;
    }

    /**
     * Set boxTextLoc8
     *
     * @param string $boxTextLoc8
     *
     * @return LocalesGossipMenuOption
     */
    public function setBoxTextLoc8($boxTextLoc8)
    {
        $this->boxTextLoc8 = $boxTextLoc8;

        return $this;
    }

    /**
     * Get boxTextLoc8
     *
     * @return string
     */
    public function getBoxTextLoc8()
    {
        return $this->boxTextLoc8;
    }

    /**
     * Set menuId
     *
     * @param integer $menuId
     *
     * @return LocalesGossipMenuOption
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
     * @return LocalesGossipMenuOption
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
