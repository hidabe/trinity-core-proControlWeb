<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterEquipmentsets
 *
 * @ORM\Table(name="character_equipmentsets", uniqueConstraints={@ORM\UniqueConstraint(name="idx_set", columns={"guid", "setguid", "setindex"})}, indexes={@ORM\Index(name="Idx_setindex", columns={"setindex"})})
 * @ORM\Entity
 */
class CharacterEquipmentsets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="setindex", type="integer", nullable=false)
     */
    private $setindex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=31, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iconname", type="string", length=100, nullable=false)
     */
    private $iconname;

    /**
     * @var integer
     *
     * @ORM\Column(name="ignore_mask", type="integer", nullable=false)
     */
    private $ignoreMask = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item0", type="integer", nullable=false)
     */
    private $item0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item1", type="integer", nullable=false)
     */
    private $item1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item2", type="integer", nullable=false)
     */
    private $item2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item3", type="integer", nullable=false)
     */
    private $item3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item4", type="integer", nullable=false)
     */
    private $item4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item5", type="integer", nullable=false)
     */
    private $item5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item6", type="integer", nullable=false)
     */
    private $item6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item7", type="integer", nullable=false)
     */
    private $item7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item8", type="integer", nullable=false)
     */
    private $item8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item9", type="integer", nullable=false)
     */
    private $item9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item10", type="integer", nullable=false)
     */
    private $item10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item11", type="integer", nullable=false)
     */
    private $item11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item12", type="integer", nullable=false)
     */
    private $item12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item13", type="integer", nullable=false)
     */
    private $item13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item14", type="integer", nullable=false)
     */
    private $item14 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item15", type="integer", nullable=false)
     */
    private $item15 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item16", type="integer", nullable=false)
     */
    private $item16 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item17", type="integer", nullable=false)
     */
    private $item17 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item18", type="integer", nullable=false)
     */
    private $item18 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="setguid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $setguid;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterEquipmentsets
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
     * Set setindex
     *
     * @param boolean $setindex
     *
     * @return CharacterEquipmentsets
     */
    public function setSetindex($setindex)
    {
        $this->setindex = $setindex;

        return $this;
    }

    /**
     * Get setindex
     *
     * @return boolean
     */
    public function getSetindex()
    {
        return $this->setindex;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CharacterEquipmentsets
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
     * Set iconname
     *
     * @param string $iconname
     *
     * @return CharacterEquipmentsets
     */
    public function setIconname($iconname)
    {
        $this->iconname = $iconname;

        return $this;
    }

    /**
     * Get iconname
     *
     * @return string
     */
    public function getIconname()
    {
        return $this->iconname;
    }

    /**
     * Set ignoreMask
     *
     * @param integer $ignoreMask
     *
     * @return CharacterEquipmentsets
     */
    public function setIgnoreMask($ignoreMask)
    {
        $this->ignoreMask = $ignoreMask;

        return $this;
    }

    /**
     * Get ignoreMask
     *
     * @return integer
     */
    public function getIgnoreMask()
    {
        return $this->ignoreMask;
    }

    /**
     * Set item0
     *
     * @param integer $item0
     *
     * @return CharacterEquipmentsets
     */
    public function setItem0($item0)
    {
        $this->item0 = $item0;

        return $this;
    }

    /**
     * Get item0
     *
     * @return integer
     */
    public function getItem0()
    {
        return $this->item0;
    }

    /**
     * Set item1
     *
     * @param integer $item1
     *
     * @return CharacterEquipmentsets
     */
    public function setItem1($item1)
    {
        $this->item1 = $item1;

        return $this;
    }

    /**
     * Get item1
     *
     * @return integer
     */
    public function getItem1()
    {
        return $this->item1;
    }

    /**
     * Set item2
     *
     * @param integer $item2
     *
     * @return CharacterEquipmentsets
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;

        return $this;
    }

    /**
     * Get item2
     *
     * @return integer
     */
    public function getItem2()
    {
        return $this->item2;
    }

    /**
     * Set item3
     *
     * @param integer $item3
     *
     * @return CharacterEquipmentsets
     */
    public function setItem3($item3)
    {
        $this->item3 = $item3;

        return $this;
    }

    /**
     * Get item3
     *
     * @return integer
     */
    public function getItem3()
    {
        return $this->item3;
    }

    /**
     * Set item4
     *
     * @param integer $item4
     *
     * @return CharacterEquipmentsets
     */
    public function setItem4($item4)
    {
        $this->item4 = $item4;

        return $this;
    }

    /**
     * Get item4
     *
     * @return integer
     */
    public function getItem4()
    {
        return $this->item4;
    }

    /**
     * Set item5
     *
     * @param integer $item5
     *
     * @return CharacterEquipmentsets
     */
    public function setItem5($item5)
    {
        $this->item5 = $item5;

        return $this;
    }

    /**
     * Get item5
     *
     * @return integer
     */
    public function getItem5()
    {
        return $this->item5;
    }

    /**
     * Set item6
     *
     * @param integer $item6
     *
     * @return CharacterEquipmentsets
     */
    public function setItem6($item6)
    {
        $this->item6 = $item6;

        return $this;
    }

    /**
     * Get item6
     *
     * @return integer
     */
    public function getItem6()
    {
        return $this->item6;
    }

    /**
     * Set item7
     *
     * @param integer $item7
     *
     * @return CharacterEquipmentsets
     */
    public function setItem7($item7)
    {
        $this->item7 = $item7;

        return $this;
    }

    /**
     * Get item7
     *
     * @return integer
     */
    public function getItem7()
    {
        return $this->item7;
    }

    /**
     * Set item8
     *
     * @param integer $item8
     *
     * @return CharacterEquipmentsets
     */
    public function setItem8($item8)
    {
        $this->item8 = $item8;

        return $this;
    }

    /**
     * Get item8
     *
     * @return integer
     */
    public function getItem8()
    {
        return $this->item8;
    }

    /**
     * Set item9
     *
     * @param integer $item9
     *
     * @return CharacterEquipmentsets
     */
    public function setItem9($item9)
    {
        $this->item9 = $item9;

        return $this;
    }

    /**
     * Get item9
     *
     * @return integer
     */
    public function getItem9()
    {
        return $this->item9;
    }

    /**
     * Set item10
     *
     * @param integer $item10
     *
     * @return CharacterEquipmentsets
     */
    public function setItem10($item10)
    {
        $this->item10 = $item10;

        return $this;
    }

    /**
     * Get item10
     *
     * @return integer
     */
    public function getItem10()
    {
        return $this->item10;
    }

    /**
     * Set item11
     *
     * @param integer $item11
     *
     * @return CharacterEquipmentsets
     */
    public function setItem11($item11)
    {
        $this->item11 = $item11;

        return $this;
    }

    /**
     * Get item11
     *
     * @return integer
     */
    public function getItem11()
    {
        return $this->item11;
    }

    /**
     * Set item12
     *
     * @param integer $item12
     *
     * @return CharacterEquipmentsets
     */
    public function setItem12($item12)
    {
        $this->item12 = $item12;

        return $this;
    }

    /**
     * Get item12
     *
     * @return integer
     */
    public function getItem12()
    {
        return $this->item12;
    }

    /**
     * Set item13
     *
     * @param integer $item13
     *
     * @return CharacterEquipmentsets
     */
    public function setItem13($item13)
    {
        $this->item13 = $item13;

        return $this;
    }

    /**
     * Get item13
     *
     * @return integer
     */
    public function getItem13()
    {
        return $this->item13;
    }

    /**
     * Set item14
     *
     * @param integer $item14
     *
     * @return CharacterEquipmentsets
     */
    public function setItem14($item14)
    {
        $this->item14 = $item14;

        return $this;
    }

    /**
     * Get item14
     *
     * @return integer
     */
    public function getItem14()
    {
        return $this->item14;
    }

    /**
     * Set item15
     *
     * @param integer $item15
     *
     * @return CharacterEquipmentsets
     */
    public function setItem15($item15)
    {
        $this->item15 = $item15;

        return $this;
    }

    /**
     * Get item15
     *
     * @return integer
     */
    public function getItem15()
    {
        return $this->item15;
    }

    /**
     * Set item16
     *
     * @param integer $item16
     *
     * @return CharacterEquipmentsets
     */
    public function setItem16($item16)
    {
        $this->item16 = $item16;

        return $this;
    }

    /**
     * Get item16
     *
     * @return integer
     */
    public function getItem16()
    {
        return $this->item16;
    }

    /**
     * Set item17
     *
     * @param integer $item17
     *
     * @return CharacterEquipmentsets
     */
    public function setItem17($item17)
    {
        $this->item17 = $item17;

        return $this;
    }

    /**
     * Get item17
     *
     * @return integer
     */
    public function getItem17()
    {
        return $this->item17;
    }

    /**
     * Set item18
     *
     * @param integer $item18
     *
     * @return CharacterEquipmentsets
     */
    public function setItem18($item18)
    {
        $this->item18 = $item18;

        return $this;
    }

    /**
     * Get item18
     *
     * @return integer
     */
    public function getItem18()
    {
        return $this->item18;
    }

    /**
     * Get setguid
     *
     * @return integer
     */
    public function getSetguid()
    {
        return $this->setguid;
    }
}
