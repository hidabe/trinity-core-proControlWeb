<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameobjectTemplate
 *
 * @ORM\Table(name="gameobject_template", indexes={@ORM\Index(name="idx_name", columns={"name"})})
 * @ORM\Entity
 */
class GameobjectTemplate
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayId", type="integer", nullable=false)
     */
    private $displayid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IconName", type="string", length=100, nullable=false)
     */
    private $iconname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="castBarCaption", type="string", length=100, nullable=false)
     */
    private $castbarcaption = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unk1", type="string", length=100, nullable=false)
     */
    private $unk1 = '';

    /**
     * @var float
     *
     * @ORM\Column(name="size", type="float", precision=10, scale=0, nullable=false)
     */
    private $size = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data0", type="integer", nullable=false)
     */
    private $data0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data1", type="integer", nullable=false)
     */
    private $data1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data2", type="integer", nullable=false)
     */
    private $data2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data3", type="integer", nullable=false)
     */
    private $data3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data4", type="integer", nullable=false)
     */
    private $data4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data5", type="integer", nullable=false)
     */
    private $data5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data6", type="integer", nullable=false)
     */
    private $data6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data7", type="integer", nullable=false)
     */
    private $data7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data8", type="integer", nullable=false)
     */
    private $data8 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data9", type="integer", nullable=false)
     */
    private $data9 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data10", type="integer", nullable=false)
     */
    private $data10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data11", type="integer", nullable=false)
     */
    private $data11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data12", type="integer", nullable=false)
     */
    private $data12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data13", type="integer", nullable=false)
     */
    private $data13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data14", type="integer", nullable=false)
     */
    private $data14 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data15", type="integer", nullable=false)
     */
    private $data15 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data16", type="integer", nullable=false)
     */
    private $data16 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data17", type="integer", nullable=false)
     */
    private $data17 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data18", type="integer", nullable=false)
     */
    private $data18 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data19", type="integer", nullable=false)
     */
    private $data19 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data20", type="integer", nullable=false)
     */
    private $data20 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data21", type="integer", nullable=false)
     */
    private $data21 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data22", type="integer", nullable=false)
     */
    private $data22 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Data23", type="integer", nullable=false)
     */
    private $data23 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AIName", type="string", length=64, nullable=false)
     */
    private $ainame = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return GameobjectTemplate
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set displayid
     *
     * @param integer $displayid
     *
     * @return GameobjectTemplate
     */
    public function setDisplayid($displayid)
    {
        $this->displayid = $displayid;

        return $this;
    }

    /**
     * Get displayid
     *
     * @return integer
     */
    public function getDisplayid()
    {
        return $this->displayid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GameobjectTemplate
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
     * @return GameobjectTemplate
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
     * Set castbarcaption
     *
     * @param string $castbarcaption
     *
     * @return GameobjectTemplate
     */
    public function setCastbarcaption($castbarcaption)
    {
        $this->castbarcaption = $castbarcaption;

        return $this;
    }

    /**
     * Get castbarcaption
     *
     * @return string
     */
    public function getCastbarcaption()
    {
        return $this->castbarcaption;
    }

    /**
     * Set unk1
     *
     * @param string $unk1
     *
     * @return GameobjectTemplate
     */
    public function setUnk1($unk1)
    {
        $this->unk1 = $unk1;

        return $this;
    }

    /**
     * Get unk1
     *
     * @return string
     */
    public function getUnk1()
    {
        return $this->unk1;
    }

    /**
     * Set size
     *
     * @param float $size
     *
     * @return GameobjectTemplate
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set data0
     *
     * @param integer $data0
     *
     * @return GameobjectTemplate
     */
    public function setData0($data0)
    {
        $this->data0 = $data0;

        return $this;
    }

    /**
     * Get data0
     *
     * @return integer
     */
    public function getData0()
    {
        return $this->data0;
    }

    /**
     * Set data1
     *
     * @param integer $data1
     *
     * @return GameobjectTemplate
     */
    public function setData1($data1)
    {
        $this->data1 = $data1;

        return $this;
    }

    /**
     * Get data1
     *
     * @return integer
     */
    public function getData1()
    {
        return $this->data1;
    }

    /**
     * Set data2
     *
     * @param integer $data2
     *
     * @return GameobjectTemplate
     */
    public function setData2($data2)
    {
        $this->data2 = $data2;

        return $this;
    }

    /**
     * Get data2
     *
     * @return integer
     */
    public function getData2()
    {
        return $this->data2;
    }

    /**
     * Set data3
     *
     * @param integer $data3
     *
     * @return GameobjectTemplate
     */
    public function setData3($data3)
    {
        $this->data3 = $data3;

        return $this;
    }

    /**
     * Get data3
     *
     * @return integer
     */
    public function getData3()
    {
        return $this->data3;
    }

    /**
     * Set data4
     *
     * @param integer $data4
     *
     * @return GameobjectTemplate
     */
    public function setData4($data4)
    {
        $this->data4 = $data4;

        return $this;
    }

    /**
     * Get data4
     *
     * @return integer
     */
    public function getData4()
    {
        return $this->data4;
    }

    /**
     * Set data5
     *
     * @param integer $data5
     *
     * @return GameobjectTemplate
     */
    public function setData5($data5)
    {
        $this->data5 = $data5;

        return $this;
    }

    /**
     * Get data5
     *
     * @return integer
     */
    public function getData5()
    {
        return $this->data5;
    }

    /**
     * Set data6
     *
     * @param integer $data6
     *
     * @return GameobjectTemplate
     */
    public function setData6($data6)
    {
        $this->data6 = $data6;

        return $this;
    }

    /**
     * Get data6
     *
     * @return integer
     */
    public function getData6()
    {
        return $this->data6;
    }

    /**
     * Set data7
     *
     * @param integer $data7
     *
     * @return GameobjectTemplate
     */
    public function setData7($data7)
    {
        $this->data7 = $data7;

        return $this;
    }

    /**
     * Get data7
     *
     * @return integer
     */
    public function getData7()
    {
        return $this->data7;
    }

    /**
     * Set data8
     *
     * @param integer $data8
     *
     * @return GameobjectTemplate
     */
    public function setData8($data8)
    {
        $this->data8 = $data8;

        return $this;
    }

    /**
     * Get data8
     *
     * @return integer
     */
    public function getData8()
    {
        return $this->data8;
    }

    /**
     * Set data9
     *
     * @param integer $data9
     *
     * @return GameobjectTemplate
     */
    public function setData9($data9)
    {
        $this->data9 = $data9;

        return $this;
    }

    /**
     * Get data9
     *
     * @return integer
     */
    public function getData9()
    {
        return $this->data9;
    }

    /**
     * Set data10
     *
     * @param integer $data10
     *
     * @return GameobjectTemplate
     */
    public function setData10($data10)
    {
        $this->data10 = $data10;

        return $this;
    }

    /**
     * Get data10
     *
     * @return integer
     */
    public function getData10()
    {
        return $this->data10;
    }

    /**
     * Set data11
     *
     * @param integer $data11
     *
     * @return GameobjectTemplate
     */
    public function setData11($data11)
    {
        $this->data11 = $data11;

        return $this;
    }

    /**
     * Get data11
     *
     * @return integer
     */
    public function getData11()
    {
        return $this->data11;
    }

    /**
     * Set data12
     *
     * @param integer $data12
     *
     * @return GameobjectTemplate
     */
    public function setData12($data12)
    {
        $this->data12 = $data12;

        return $this;
    }

    /**
     * Get data12
     *
     * @return integer
     */
    public function getData12()
    {
        return $this->data12;
    }

    /**
     * Set data13
     *
     * @param integer $data13
     *
     * @return GameobjectTemplate
     */
    public function setData13($data13)
    {
        $this->data13 = $data13;

        return $this;
    }

    /**
     * Get data13
     *
     * @return integer
     */
    public function getData13()
    {
        return $this->data13;
    }

    /**
     * Set data14
     *
     * @param integer $data14
     *
     * @return GameobjectTemplate
     */
    public function setData14($data14)
    {
        $this->data14 = $data14;

        return $this;
    }

    /**
     * Get data14
     *
     * @return integer
     */
    public function getData14()
    {
        return $this->data14;
    }

    /**
     * Set data15
     *
     * @param integer $data15
     *
     * @return GameobjectTemplate
     */
    public function setData15($data15)
    {
        $this->data15 = $data15;

        return $this;
    }

    /**
     * Get data15
     *
     * @return integer
     */
    public function getData15()
    {
        return $this->data15;
    }

    /**
     * Set data16
     *
     * @param integer $data16
     *
     * @return GameobjectTemplate
     */
    public function setData16($data16)
    {
        $this->data16 = $data16;

        return $this;
    }

    /**
     * Get data16
     *
     * @return integer
     */
    public function getData16()
    {
        return $this->data16;
    }

    /**
     * Set data17
     *
     * @param integer $data17
     *
     * @return GameobjectTemplate
     */
    public function setData17($data17)
    {
        $this->data17 = $data17;

        return $this;
    }

    /**
     * Get data17
     *
     * @return integer
     */
    public function getData17()
    {
        return $this->data17;
    }

    /**
     * Set data18
     *
     * @param integer $data18
     *
     * @return GameobjectTemplate
     */
    public function setData18($data18)
    {
        $this->data18 = $data18;

        return $this;
    }

    /**
     * Get data18
     *
     * @return integer
     */
    public function getData18()
    {
        return $this->data18;
    }

    /**
     * Set data19
     *
     * @param integer $data19
     *
     * @return GameobjectTemplate
     */
    public function setData19($data19)
    {
        $this->data19 = $data19;

        return $this;
    }

    /**
     * Get data19
     *
     * @return integer
     */
    public function getData19()
    {
        return $this->data19;
    }

    /**
     * Set data20
     *
     * @param integer $data20
     *
     * @return GameobjectTemplate
     */
    public function setData20($data20)
    {
        $this->data20 = $data20;

        return $this;
    }

    /**
     * Get data20
     *
     * @return integer
     */
    public function getData20()
    {
        return $this->data20;
    }

    /**
     * Set data21
     *
     * @param integer $data21
     *
     * @return GameobjectTemplate
     */
    public function setData21($data21)
    {
        $this->data21 = $data21;

        return $this;
    }

    /**
     * Get data21
     *
     * @return integer
     */
    public function getData21()
    {
        return $this->data21;
    }

    /**
     * Set data22
     *
     * @param integer $data22
     *
     * @return GameobjectTemplate
     */
    public function setData22($data22)
    {
        $this->data22 = $data22;

        return $this;
    }

    /**
     * Get data22
     *
     * @return integer
     */
    public function getData22()
    {
        return $this->data22;
    }

    /**
     * Set data23
     *
     * @param integer $data23
     *
     * @return GameobjectTemplate
     */
    public function setData23($data23)
    {
        $this->data23 = $data23;

        return $this;
    }

    /**
     * Get data23
     *
     * @return integer
     */
    public function getData23()
    {
        return $this->data23;
    }

    /**
     * Set ainame
     *
     * @param string $ainame
     *
     * @return GameobjectTemplate
     */
    public function setAiname($ainame)
    {
        $this->ainame = $ainame;

        return $this;
    }

    /**
     * Get ainame
     *
     * @return string
     */
    public function getAiname()
    {
        return $this->ainame;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return GameobjectTemplate
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return GameobjectTemplate
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
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
