<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcText
 *
 * @ORM\Table(name="npc_text")
 * @ORM\Entity
 */
class NpcText
{
    /**
     * @var string
     *
     * @ORM\Column(name="text0_0", type="text", nullable=true)
     */
    private $text00;

    /**
     * @var string
     *
     * @ORM\Column(name="text0_1", type="text", nullable=true)
     */
    private $text01;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID0", type="integer", nullable=false)
     */
    private $broadcasttextid0 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang0", type="boolean", nullable=false)
     */
    private $lang0 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability0", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em0_0", type="smallint", nullable=false)
     */
    private $em00 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em0_1", type="smallint", nullable=false)
     */
    private $em01 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em0_2", type="smallint", nullable=false)
     */
    private $em02 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em0_3", type="smallint", nullable=false)
     */
    private $em03 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em0_4", type="smallint", nullable=false)
     */
    private $em04 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em0_5", type="smallint", nullable=false)
     */
    private $em05 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text1_0", type="text", nullable=true)
     */
    private $text10;

    /**
     * @var string
     *
     * @ORM\Column(name="text1_1", type="text", nullable=true)
     */
    private $text11;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID1", type="integer", nullable=false)
     */
    private $broadcasttextid1 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang1", type="boolean", nullable=false)
     */
    private $lang1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability1", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em1_0", type="smallint", nullable=false)
     */
    private $em10 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em1_1", type="smallint", nullable=false)
     */
    private $em11 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em1_2", type="smallint", nullable=false)
     */
    private $em12 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em1_3", type="smallint", nullable=false)
     */
    private $em13 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em1_4", type="smallint", nullable=false)
     */
    private $em14 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em1_5", type="smallint", nullable=false)
     */
    private $em15 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text2_0", type="text", nullable=true)
     */
    private $text20;

    /**
     * @var string
     *
     * @ORM\Column(name="text2_1", type="text", nullable=true)
     */
    private $text21;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID2", type="integer", nullable=false)
     */
    private $broadcasttextid2 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang2", type="boolean", nullable=false)
     */
    private $lang2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability2", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em2_0", type="smallint", nullable=false)
     */
    private $em20 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em2_1", type="smallint", nullable=false)
     */
    private $em21 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em2_2", type="smallint", nullable=false)
     */
    private $em22 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em2_3", type="smallint", nullable=false)
     */
    private $em23 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em2_4", type="smallint", nullable=false)
     */
    private $em24 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em2_5", type="smallint", nullable=false)
     */
    private $em25 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text3_0", type="text", nullable=true)
     */
    private $text30;

    /**
     * @var string
     *
     * @ORM\Column(name="text3_1", type="text", nullable=true)
     */
    private $text31;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID3", type="integer", nullable=false)
     */
    private $broadcasttextid3 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang3", type="boolean", nullable=false)
     */
    private $lang3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability3", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em3_0", type="smallint", nullable=false)
     */
    private $em30 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em3_1", type="smallint", nullable=false)
     */
    private $em31 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em3_2", type="smallint", nullable=false)
     */
    private $em32 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em3_3", type="smallint", nullable=false)
     */
    private $em33 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em3_4", type="smallint", nullable=false)
     */
    private $em34 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em3_5", type="smallint", nullable=false)
     */
    private $em35 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text4_0", type="text", nullable=true)
     */
    private $text40;

    /**
     * @var string
     *
     * @ORM\Column(name="text4_1", type="text", nullable=true)
     */
    private $text41;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID4", type="integer", nullable=false)
     */
    private $broadcasttextid4 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang4", type="boolean", nullable=false)
     */
    private $lang4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability4", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em4_0", type="smallint", nullable=false)
     */
    private $em40 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em4_1", type="smallint", nullable=false)
     */
    private $em41 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em4_2", type="smallint", nullable=false)
     */
    private $em42 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em4_3", type="smallint", nullable=false)
     */
    private $em43 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em4_4", type="smallint", nullable=false)
     */
    private $em44 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em4_5", type="smallint", nullable=false)
     */
    private $em45 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text5_0", type="text", nullable=true)
     */
    private $text50;

    /**
     * @var string
     *
     * @ORM\Column(name="text5_1", type="text", nullable=true)
     */
    private $text51;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID5", type="integer", nullable=false)
     */
    private $broadcasttextid5 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang5", type="boolean", nullable=false)
     */
    private $lang5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability5", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em5_0", type="smallint", nullable=false)
     */
    private $em50 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em5_1", type="smallint", nullable=false)
     */
    private $em51 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em5_2", type="smallint", nullable=false)
     */
    private $em52 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em5_3", type="smallint", nullable=false)
     */
    private $em53 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em5_4", type="smallint", nullable=false)
     */
    private $em54 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em5_5", type="smallint", nullable=false)
     */
    private $em55 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text6_0", type="text", nullable=true)
     */
    private $text60;

    /**
     * @var string
     *
     * @ORM\Column(name="text6_1", type="text", nullable=true)
     */
    private $text61;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID6", type="integer", nullable=false)
     */
    private $broadcasttextid6 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang6", type="boolean", nullable=false)
     */
    private $lang6 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability6", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em6_0", type="smallint", nullable=false)
     */
    private $em60 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em6_1", type="smallint", nullable=false)
     */
    private $em61 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em6_2", type="smallint", nullable=false)
     */
    private $em62 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em6_3", type="smallint", nullable=false)
     */
    private $em63 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em6_4", type="smallint", nullable=false)
     */
    private $em64 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em6_5", type="smallint", nullable=false)
     */
    private $em65 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text7_0", type="text", nullable=true)
     */
    private $text70;

    /**
     * @var string
     *
     * @ORM\Column(name="text7_1", type="text", nullable=true)
     */
    private $text71;

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextID7", type="integer", nullable=false)
     */
    private $broadcasttextid7 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lang7", type="boolean", nullable=false)
     */
    private $lang7 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Probability7", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em7_0", type="smallint", nullable=false)
     */
    private $em70 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em7_1", type="smallint", nullable=false)
     */
    private $em71 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em7_2", type="smallint", nullable=false)
     */
    private $em72 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em7_3", type="smallint", nullable=false)
     */
    private $em73 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em7_4", type="smallint", nullable=false)
     */
    private $em74 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="em7_5", type="smallint", nullable=false)
     */
    private $em75 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set text00
     *
     * @param string $text00
     *
     * @return NpcText
     */
    public function setText00($text00)
    {
        $this->text00 = $text00;

        return $this;
    }

    /**
     * Get text00
     *
     * @return string
     */
    public function getText00()
    {
        return $this->text00;
    }

    /**
     * Set text01
     *
     * @param string $text01
     *
     * @return NpcText
     */
    public function setText01($text01)
    {
        $this->text01 = $text01;

        return $this;
    }

    /**
     * Get text01
     *
     * @return string
     */
    public function getText01()
    {
        return $this->text01;
    }

    /**
     * Set broadcasttextid0
     *
     * @param integer $broadcasttextid0
     *
     * @return NpcText
     */
    public function setBroadcasttextid0($broadcasttextid0)
    {
        $this->broadcasttextid0 = $broadcasttextid0;

        return $this;
    }

    /**
     * Get broadcasttextid0
     *
     * @return integer
     */
    public function getBroadcasttextid0()
    {
        return $this->broadcasttextid0;
    }

    /**
     * Set lang0
     *
     * @param boolean $lang0
     *
     * @return NpcText
     */
    public function setLang0($lang0)
    {
        $this->lang0 = $lang0;

        return $this;
    }

    /**
     * Get lang0
     *
     * @return boolean
     */
    public function getLang0()
    {
        return $this->lang0;
    }

    /**
     * Set probability0
     *
     * @param float $probability0
     *
     * @return NpcText
     */
    public function setProbability0($probability0)
    {
        $this->probability0 = $probability0;

        return $this;
    }

    /**
     * Get probability0
     *
     * @return float
     */
    public function getProbability0()
    {
        return $this->probability0;
    }

    /**
     * Set em00
     *
     * @param integer $em00
     *
     * @return NpcText
     */
    public function setEm00($em00)
    {
        $this->em00 = $em00;

        return $this;
    }

    /**
     * Get em00
     *
     * @return integer
     */
    public function getEm00()
    {
        return $this->em00;
    }

    /**
     * Set em01
     *
     * @param integer $em01
     *
     * @return NpcText
     */
    public function setEm01($em01)
    {
        $this->em01 = $em01;

        return $this;
    }

    /**
     * Get em01
     *
     * @return integer
     */
    public function getEm01()
    {
        return $this->em01;
    }

    /**
     * Set em02
     *
     * @param integer $em02
     *
     * @return NpcText
     */
    public function setEm02($em02)
    {
        $this->em02 = $em02;

        return $this;
    }

    /**
     * Get em02
     *
     * @return integer
     */
    public function getEm02()
    {
        return $this->em02;
    }

    /**
     * Set em03
     *
     * @param integer $em03
     *
     * @return NpcText
     */
    public function setEm03($em03)
    {
        $this->em03 = $em03;

        return $this;
    }

    /**
     * Get em03
     *
     * @return integer
     */
    public function getEm03()
    {
        return $this->em03;
    }

    /**
     * Set em04
     *
     * @param integer $em04
     *
     * @return NpcText
     */
    public function setEm04($em04)
    {
        $this->em04 = $em04;

        return $this;
    }

    /**
     * Get em04
     *
     * @return integer
     */
    public function getEm04()
    {
        return $this->em04;
    }

    /**
     * Set em05
     *
     * @param integer $em05
     *
     * @return NpcText
     */
    public function setEm05($em05)
    {
        $this->em05 = $em05;

        return $this;
    }

    /**
     * Get em05
     *
     * @return integer
     */
    public function getEm05()
    {
        return $this->em05;
    }

    /**
     * Set text10
     *
     * @param string $text10
     *
     * @return NpcText
     */
    public function setText10($text10)
    {
        $this->text10 = $text10;

        return $this;
    }

    /**
     * Get text10
     *
     * @return string
     */
    public function getText10()
    {
        return $this->text10;
    }

    /**
     * Set text11
     *
     * @param string $text11
     *
     * @return NpcText
     */
    public function setText11($text11)
    {
        $this->text11 = $text11;

        return $this;
    }

    /**
     * Get text11
     *
     * @return string
     */
    public function getText11()
    {
        return $this->text11;
    }

    /**
     * Set broadcasttextid1
     *
     * @param integer $broadcasttextid1
     *
     * @return NpcText
     */
    public function setBroadcasttextid1($broadcasttextid1)
    {
        $this->broadcasttextid1 = $broadcasttextid1;

        return $this;
    }

    /**
     * Get broadcasttextid1
     *
     * @return integer
     */
    public function getBroadcasttextid1()
    {
        return $this->broadcasttextid1;
    }

    /**
     * Set lang1
     *
     * @param boolean $lang1
     *
     * @return NpcText
     */
    public function setLang1($lang1)
    {
        $this->lang1 = $lang1;

        return $this;
    }

    /**
     * Get lang1
     *
     * @return boolean
     */
    public function getLang1()
    {
        return $this->lang1;
    }

    /**
     * Set probability1
     *
     * @param float $probability1
     *
     * @return NpcText
     */
    public function setProbability1($probability1)
    {
        $this->probability1 = $probability1;

        return $this;
    }

    /**
     * Get probability1
     *
     * @return float
     */
    public function getProbability1()
    {
        return $this->probability1;
    }

    /**
     * Set em10
     *
     * @param integer $em10
     *
     * @return NpcText
     */
    public function setEm10($em10)
    {
        $this->em10 = $em10;

        return $this;
    }

    /**
     * Get em10
     *
     * @return integer
     */
    public function getEm10()
    {
        return $this->em10;
    }

    /**
     * Set em11
     *
     * @param integer $em11
     *
     * @return NpcText
     */
    public function setEm11($em11)
    {
        $this->em11 = $em11;

        return $this;
    }

    /**
     * Get em11
     *
     * @return integer
     */
    public function getEm11()
    {
        return $this->em11;
    }

    /**
     * Set em12
     *
     * @param integer $em12
     *
     * @return NpcText
     */
    public function setEm12($em12)
    {
        $this->em12 = $em12;

        return $this;
    }

    /**
     * Get em12
     *
     * @return integer
     */
    public function getEm12()
    {
        return $this->em12;
    }

    /**
     * Set em13
     *
     * @param integer $em13
     *
     * @return NpcText
     */
    public function setEm13($em13)
    {
        $this->em13 = $em13;

        return $this;
    }

    /**
     * Get em13
     *
     * @return integer
     */
    public function getEm13()
    {
        return $this->em13;
    }

    /**
     * Set em14
     *
     * @param integer $em14
     *
     * @return NpcText
     */
    public function setEm14($em14)
    {
        $this->em14 = $em14;

        return $this;
    }

    /**
     * Get em14
     *
     * @return integer
     */
    public function getEm14()
    {
        return $this->em14;
    }

    /**
     * Set em15
     *
     * @param integer $em15
     *
     * @return NpcText
     */
    public function setEm15($em15)
    {
        $this->em15 = $em15;

        return $this;
    }

    /**
     * Get em15
     *
     * @return integer
     */
    public function getEm15()
    {
        return $this->em15;
    }

    /**
     * Set text20
     *
     * @param string $text20
     *
     * @return NpcText
     */
    public function setText20($text20)
    {
        $this->text20 = $text20;

        return $this;
    }

    /**
     * Get text20
     *
     * @return string
     */
    public function getText20()
    {
        return $this->text20;
    }

    /**
     * Set text21
     *
     * @param string $text21
     *
     * @return NpcText
     */
    public function setText21($text21)
    {
        $this->text21 = $text21;

        return $this;
    }

    /**
     * Get text21
     *
     * @return string
     */
    public function getText21()
    {
        return $this->text21;
    }

    /**
     * Set broadcasttextid2
     *
     * @param integer $broadcasttextid2
     *
     * @return NpcText
     */
    public function setBroadcasttextid2($broadcasttextid2)
    {
        $this->broadcasttextid2 = $broadcasttextid2;

        return $this;
    }

    /**
     * Get broadcasttextid2
     *
     * @return integer
     */
    public function getBroadcasttextid2()
    {
        return $this->broadcasttextid2;
    }

    /**
     * Set lang2
     *
     * @param boolean $lang2
     *
     * @return NpcText
     */
    public function setLang2($lang2)
    {
        $this->lang2 = $lang2;

        return $this;
    }

    /**
     * Get lang2
     *
     * @return boolean
     */
    public function getLang2()
    {
        return $this->lang2;
    }

    /**
     * Set probability2
     *
     * @param float $probability2
     *
     * @return NpcText
     */
    public function setProbability2($probability2)
    {
        $this->probability2 = $probability2;

        return $this;
    }

    /**
     * Get probability2
     *
     * @return float
     */
    public function getProbability2()
    {
        return $this->probability2;
    }

    /**
     * Set em20
     *
     * @param integer $em20
     *
     * @return NpcText
     */
    public function setEm20($em20)
    {
        $this->em20 = $em20;

        return $this;
    }

    /**
     * Get em20
     *
     * @return integer
     */
    public function getEm20()
    {
        return $this->em20;
    }

    /**
     * Set em21
     *
     * @param integer $em21
     *
     * @return NpcText
     */
    public function setEm21($em21)
    {
        $this->em21 = $em21;

        return $this;
    }

    /**
     * Get em21
     *
     * @return integer
     */
    public function getEm21()
    {
        return $this->em21;
    }

    /**
     * Set em22
     *
     * @param integer $em22
     *
     * @return NpcText
     */
    public function setEm22($em22)
    {
        $this->em22 = $em22;

        return $this;
    }

    /**
     * Get em22
     *
     * @return integer
     */
    public function getEm22()
    {
        return $this->em22;
    }

    /**
     * Set em23
     *
     * @param integer $em23
     *
     * @return NpcText
     */
    public function setEm23($em23)
    {
        $this->em23 = $em23;

        return $this;
    }

    /**
     * Get em23
     *
     * @return integer
     */
    public function getEm23()
    {
        return $this->em23;
    }

    /**
     * Set em24
     *
     * @param integer $em24
     *
     * @return NpcText
     */
    public function setEm24($em24)
    {
        $this->em24 = $em24;

        return $this;
    }

    /**
     * Get em24
     *
     * @return integer
     */
    public function getEm24()
    {
        return $this->em24;
    }

    /**
     * Set em25
     *
     * @param integer $em25
     *
     * @return NpcText
     */
    public function setEm25($em25)
    {
        $this->em25 = $em25;

        return $this;
    }

    /**
     * Get em25
     *
     * @return integer
     */
    public function getEm25()
    {
        return $this->em25;
    }

    /**
     * Set text30
     *
     * @param string $text30
     *
     * @return NpcText
     */
    public function setText30($text30)
    {
        $this->text30 = $text30;

        return $this;
    }

    /**
     * Get text30
     *
     * @return string
     */
    public function getText30()
    {
        return $this->text30;
    }

    /**
     * Set text31
     *
     * @param string $text31
     *
     * @return NpcText
     */
    public function setText31($text31)
    {
        $this->text31 = $text31;

        return $this;
    }

    /**
     * Get text31
     *
     * @return string
     */
    public function getText31()
    {
        return $this->text31;
    }

    /**
     * Set broadcasttextid3
     *
     * @param integer $broadcasttextid3
     *
     * @return NpcText
     */
    public function setBroadcasttextid3($broadcasttextid3)
    {
        $this->broadcasttextid3 = $broadcasttextid3;

        return $this;
    }

    /**
     * Get broadcasttextid3
     *
     * @return integer
     */
    public function getBroadcasttextid3()
    {
        return $this->broadcasttextid3;
    }

    /**
     * Set lang3
     *
     * @param boolean $lang3
     *
     * @return NpcText
     */
    public function setLang3($lang3)
    {
        $this->lang3 = $lang3;

        return $this;
    }

    /**
     * Get lang3
     *
     * @return boolean
     */
    public function getLang3()
    {
        return $this->lang3;
    }

    /**
     * Set probability3
     *
     * @param float $probability3
     *
     * @return NpcText
     */
    public function setProbability3($probability3)
    {
        $this->probability3 = $probability3;

        return $this;
    }

    /**
     * Get probability3
     *
     * @return float
     */
    public function getProbability3()
    {
        return $this->probability3;
    }

    /**
     * Set em30
     *
     * @param integer $em30
     *
     * @return NpcText
     */
    public function setEm30($em30)
    {
        $this->em30 = $em30;

        return $this;
    }

    /**
     * Get em30
     *
     * @return integer
     */
    public function getEm30()
    {
        return $this->em30;
    }

    /**
     * Set em31
     *
     * @param integer $em31
     *
     * @return NpcText
     */
    public function setEm31($em31)
    {
        $this->em31 = $em31;

        return $this;
    }

    /**
     * Get em31
     *
     * @return integer
     */
    public function getEm31()
    {
        return $this->em31;
    }

    /**
     * Set em32
     *
     * @param integer $em32
     *
     * @return NpcText
     */
    public function setEm32($em32)
    {
        $this->em32 = $em32;

        return $this;
    }

    /**
     * Get em32
     *
     * @return integer
     */
    public function getEm32()
    {
        return $this->em32;
    }

    /**
     * Set em33
     *
     * @param integer $em33
     *
     * @return NpcText
     */
    public function setEm33($em33)
    {
        $this->em33 = $em33;

        return $this;
    }

    /**
     * Get em33
     *
     * @return integer
     */
    public function getEm33()
    {
        return $this->em33;
    }

    /**
     * Set em34
     *
     * @param integer $em34
     *
     * @return NpcText
     */
    public function setEm34($em34)
    {
        $this->em34 = $em34;

        return $this;
    }

    /**
     * Get em34
     *
     * @return integer
     */
    public function getEm34()
    {
        return $this->em34;
    }

    /**
     * Set em35
     *
     * @param integer $em35
     *
     * @return NpcText
     */
    public function setEm35($em35)
    {
        $this->em35 = $em35;

        return $this;
    }

    /**
     * Get em35
     *
     * @return integer
     */
    public function getEm35()
    {
        return $this->em35;
    }

    /**
     * Set text40
     *
     * @param string $text40
     *
     * @return NpcText
     */
    public function setText40($text40)
    {
        $this->text40 = $text40;

        return $this;
    }

    /**
     * Get text40
     *
     * @return string
     */
    public function getText40()
    {
        return $this->text40;
    }

    /**
     * Set text41
     *
     * @param string $text41
     *
     * @return NpcText
     */
    public function setText41($text41)
    {
        $this->text41 = $text41;

        return $this;
    }

    /**
     * Get text41
     *
     * @return string
     */
    public function getText41()
    {
        return $this->text41;
    }

    /**
     * Set broadcasttextid4
     *
     * @param integer $broadcasttextid4
     *
     * @return NpcText
     */
    public function setBroadcasttextid4($broadcasttextid4)
    {
        $this->broadcasttextid4 = $broadcasttextid4;

        return $this;
    }

    /**
     * Get broadcasttextid4
     *
     * @return integer
     */
    public function getBroadcasttextid4()
    {
        return $this->broadcasttextid4;
    }

    /**
     * Set lang4
     *
     * @param boolean $lang4
     *
     * @return NpcText
     */
    public function setLang4($lang4)
    {
        $this->lang4 = $lang4;

        return $this;
    }

    /**
     * Get lang4
     *
     * @return boolean
     */
    public function getLang4()
    {
        return $this->lang4;
    }

    /**
     * Set probability4
     *
     * @param float $probability4
     *
     * @return NpcText
     */
    public function setProbability4($probability4)
    {
        $this->probability4 = $probability4;

        return $this;
    }

    /**
     * Get probability4
     *
     * @return float
     */
    public function getProbability4()
    {
        return $this->probability4;
    }

    /**
     * Set em40
     *
     * @param integer $em40
     *
     * @return NpcText
     */
    public function setEm40($em40)
    {
        $this->em40 = $em40;

        return $this;
    }

    /**
     * Get em40
     *
     * @return integer
     */
    public function getEm40()
    {
        return $this->em40;
    }

    /**
     * Set em41
     *
     * @param integer $em41
     *
     * @return NpcText
     */
    public function setEm41($em41)
    {
        $this->em41 = $em41;

        return $this;
    }

    /**
     * Get em41
     *
     * @return integer
     */
    public function getEm41()
    {
        return $this->em41;
    }

    /**
     * Set em42
     *
     * @param integer $em42
     *
     * @return NpcText
     */
    public function setEm42($em42)
    {
        $this->em42 = $em42;

        return $this;
    }

    /**
     * Get em42
     *
     * @return integer
     */
    public function getEm42()
    {
        return $this->em42;
    }

    /**
     * Set em43
     *
     * @param integer $em43
     *
     * @return NpcText
     */
    public function setEm43($em43)
    {
        $this->em43 = $em43;

        return $this;
    }

    /**
     * Get em43
     *
     * @return integer
     */
    public function getEm43()
    {
        return $this->em43;
    }

    /**
     * Set em44
     *
     * @param integer $em44
     *
     * @return NpcText
     */
    public function setEm44($em44)
    {
        $this->em44 = $em44;

        return $this;
    }

    /**
     * Get em44
     *
     * @return integer
     */
    public function getEm44()
    {
        return $this->em44;
    }

    /**
     * Set em45
     *
     * @param integer $em45
     *
     * @return NpcText
     */
    public function setEm45($em45)
    {
        $this->em45 = $em45;

        return $this;
    }

    /**
     * Get em45
     *
     * @return integer
     */
    public function getEm45()
    {
        return $this->em45;
    }

    /**
     * Set text50
     *
     * @param string $text50
     *
     * @return NpcText
     */
    public function setText50($text50)
    {
        $this->text50 = $text50;

        return $this;
    }

    /**
     * Get text50
     *
     * @return string
     */
    public function getText50()
    {
        return $this->text50;
    }

    /**
     * Set text51
     *
     * @param string $text51
     *
     * @return NpcText
     */
    public function setText51($text51)
    {
        $this->text51 = $text51;

        return $this;
    }

    /**
     * Get text51
     *
     * @return string
     */
    public function getText51()
    {
        return $this->text51;
    }

    /**
     * Set broadcasttextid5
     *
     * @param integer $broadcasttextid5
     *
     * @return NpcText
     */
    public function setBroadcasttextid5($broadcasttextid5)
    {
        $this->broadcasttextid5 = $broadcasttextid5;

        return $this;
    }

    /**
     * Get broadcasttextid5
     *
     * @return integer
     */
    public function getBroadcasttextid5()
    {
        return $this->broadcasttextid5;
    }

    /**
     * Set lang5
     *
     * @param boolean $lang5
     *
     * @return NpcText
     */
    public function setLang5($lang5)
    {
        $this->lang5 = $lang5;

        return $this;
    }

    /**
     * Get lang5
     *
     * @return boolean
     */
    public function getLang5()
    {
        return $this->lang5;
    }

    /**
     * Set probability5
     *
     * @param float $probability5
     *
     * @return NpcText
     */
    public function setProbability5($probability5)
    {
        $this->probability5 = $probability5;

        return $this;
    }

    /**
     * Get probability5
     *
     * @return float
     */
    public function getProbability5()
    {
        return $this->probability5;
    }

    /**
     * Set em50
     *
     * @param integer $em50
     *
     * @return NpcText
     */
    public function setEm50($em50)
    {
        $this->em50 = $em50;

        return $this;
    }

    /**
     * Get em50
     *
     * @return integer
     */
    public function getEm50()
    {
        return $this->em50;
    }

    /**
     * Set em51
     *
     * @param integer $em51
     *
     * @return NpcText
     */
    public function setEm51($em51)
    {
        $this->em51 = $em51;

        return $this;
    }

    /**
     * Get em51
     *
     * @return integer
     */
    public function getEm51()
    {
        return $this->em51;
    }

    /**
     * Set em52
     *
     * @param integer $em52
     *
     * @return NpcText
     */
    public function setEm52($em52)
    {
        $this->em52 = $em52;

        return $this;
    }

    /**
     * Get em52
     *
     * @return integer
     */
    public function getEm52()
    {
        return $this->em52;
    }

    /**
     * Set em53
     *
     * @param integer $em53
     *
     * @return NpcText
     */
    public function setEm53($em53)
    {
        $this->em53 = $em53;

        return $this;
    }

    /**
     * Get em53
     *
     * @return integer
     */
    public function getEm53()
    {
        return $this->em53;
    }

    /**
     * Set em54
     *
     * @param integer $em54
     *
     * @return NpcText
     */
    public function setEm54($em54)
    {
        $this->em54 = $em54;

        return $this;
    }

    /**
     * Get em54
     *
     * @return integer
     */
    public function getEm54()
    {
        return $this->em54;
    }

    /**
     * Set em55
     *
     * @param integer $em55
     *
     * @return NpcText
     */
    public function setEm55($em55)
    {
        $this->em55 = $em55;

        return $this;
    }

    /**
     * Get em55
     *
     * @return integer
     */
    public function getEm55()
    {
        return $this->em55;
    }

    /**
     * Set text60
     *
     * @param string $text60
     *
     * @return NpcText
     */
    public function setText60($text60)
    {
        $this->text60 = $text60;

        return $this;
    }

    /**
     * Get text60
     *
     * @return string
     */
    public function getText60()
    {
        return $this->text60;
    }

    /**
     * Set text61
     *
     * @param string $text61
     *
     * @return NpcText
     */
    public function setText61($text61)
    {
        $this->text61 = $text61;

        return $this;
    }

    /**
     * Get text61
     *
     * @return string
     */
    public function getText61()
    {
        return $this->text61;
    }

    /**
     * Set broadcasttextid6
     *
     * @param integer $broadcasttextid6
     *
     * @return NpcText
     */
    public function setBroadcasttextid6($broadcasttextid6)
    {
        $this->broadcasttextid6 = $broadcasttextid6;

        return $this;
    }

    /**
     * Get broadcasttextid6
     *
     * @return integer
     */
    public function getBroadcasttextid6()
    {
        return $this->broadcasttextid6;
    }

    /**
     * Set lang6
     *
     * @param boolean $lang6
     *
     * @return NpcText
     */
    public function setLang6($lang6)
    {
        $this->lang6 = $lang6;

        return $this;
    }

    /**
     * Get lang6
     *
     * @return boolean
     */
    public function getLang6()
    {
        return $this->lang6;
    }

    /**
     * Set probability6
     *
     * @param float $probability6
     *
     * @return NpcText
     */
    public function setProbability6($probability6)
    {
        $this->probability6 = $probability6;

        return $this;
    }

    /**
     * Get probability6
     *
     * @return float
     */
    public function getProbability6()
    {
        return $this->probability6;
    }

    /**
     * Set em60
     *
     * @param integer $em60
     *
     * @return NpcText
     */
    public function setEm60($em60)
    {
        $this->em60 = $em60;

        return $this;
    }

    /**
     * Get em60
     *
     * @return integer
     */
    public function getEm60()
    {
        return $this->em60;
    }

    /**
     * Set em61
     *
     * @param integer $em61
     *
     * @return NpcText
     */
    public function setEm61($em61)
    {
        $this->em61 = $em61;

        return $this;
    }

    /**
     * Get em61
     *
     * @return integer
     */
    public function getEm61()
    {
        return $this->em61;
    }

    /**
     * Set em62
     *
     * @param integer $em62
     *
     * @return NpcText
     */
    public function setEm62($em62)
    {
        $this->em62 = $em62;

        return $this;
    }

    /**
     * Get em62
     *
     * @return integer
     */
    public function getEm62()
    {
        return $this->em62;
    }

    /**
     * Set em63
     *
     * @param integer $em63
     *
     * @return NpcText
     */
    public function setEm63($em63)
    {
        $this->em63 = $em63;

        return $this;
    }

    /**
     * Get em63
     *
     * @return integer
     */
    public function getEm63()
    {
        return $this->em63;
    }

    /**
     * Set em64
     *
     * @param integer $em64
     *
     * @return NpcText
     */
    public function setEm64($em64)
    {
        $this->em64 = $em64;

        return $this;
    }

    /**
     * Get em64
     *
     * @return integer
     */
    public function getEm64()
    {
        return $this->em64;
    }

    /**
     * Set em65
     *
     * @param integer $em65
     *
     * @return NpcText
     */
    public function setEm65($em65)
    {
        $this->em65 = $em65;

        return $this;
    }

    /**
     * Get em65
     *
     * @return integer
     */
    public function getEm65()
    {
        return $this->em65;
    }

    /**
     * Set text70
     *
     * @param string $text70
     *
     * @return NpcText
     */
    public function setText70($text70)
    {
        $this->text70 = $text70;

        return $this;
    }

    /**
     * Get text70
     *
     * @return string
     */
    public function getText70()
    {
        return $this->text70;
    }

    /**
     * Set text71
     *
     * @param string $text71
     *
     * @return NpcText
     */
    public function setText71($text71)
    {
        $this->text71 = $text71;

        return $this;
    }

    /**
     * Get text71
     *
     * @return string
     */
    public function getText71()
    {
        return $this->text71;
    }

    /**
     * Set broadcasttextid7
     *
     * @param integer $broadcasttextid7
     *
     * @return NpcText
     */
    public function setBroadcasttextid7($broadcasttextid7)
    {
        $this->broadcasttextid7 = $broadcasttextid7;

        return $this;
    }

    /**
     * Get broadcasttextid7
     *
     * @return integer
     */
    public function getBroadcasttextid7()
    {
        return $this->broadcasttextid7;
    }

    /**
     * Set lang7
     *
     * @param boolean $lang7
     *
     * @return NpcText
     */
    public function setLang7($lang7)
    {
        $this->lang7 = $lang7;

        return $this;
    }

    /**
     * Get lang7
     *
     * @return boolean
     */
    public function getLang7()
    {
        return $this->lang7;
    }

    /**
     * Set probability7
     *
     * @param float $probability7
     *
     * @return NpcText
     */
    public function setProbability7($probability7)
    {
        $this->probability7 = $probability7;

        return $this;
    }

    /**
     * Get probability7
     *
     * @return float
     */
    public function getProbability7()
    {
        return $this->probability7;
    }

    /**
     * Set em70
     *
     * @param integer $em70
     *
     * @return NpcText
     */
    public function setEm70($em70)
    {
        $this->em70 = $em70;

        return $this;
    }

    /**
     * Get em70
     *
     * @return integer
     */
    public function getEm70()
    {
        return $this->em70;
    }

    /**
     * Set em71
     *
     * @param integer $em71
     *
     * @return NpcText
     */
    public function setEm71($em71)
    {
        $this->em71 = $em71;

        return $this;
    }

    /**
     * Get em71
     *
     * @return integer
     */
    public function getEm71()
    {
        return $this->em71;
    }

    /**
     * Set em72
     *
     * @param integer $em72
     *
     * @return NpcText
     */
    public function setEm72($em72)
    {
        $this->em72 = $em72;

        return $this;
    }

    /**
     * Get em72
     *
     * @return integer
     */
    public function getEm72()
    {
        return $this->em72;
    }

    /**
     * Set em73
     *
     * @param integer $em73
     *
     * @return NpcText
     */
    public function setEm73($em73)
    {
        $this->em73 = $em73;

        return $this;
    }

    /**
     * Get em73
     *
     * @return integer
     */
    public function getEm73()
    {
        return $this->em73;
    }

    /**
     * Set em74
     *
     * @param integer $em74
     *
     * @return NpcText
     */
    public function setEm74($em74)
    {
        $this->em74 = $em74;

        return $this;
    }

    /**
     * Get em74
     *
     * @return integer
     */
    public function getEm74()
    {
        return $this->em74;
    }

    /**
     * Set em75
     *
     * @param integer $em75
     *
     * @return NpcText
     */
    public function setEm75($em75)
    {
        $this->em75 = $em75;

        return $this;
    }

    /**
     * Get em75
     *
     * @return integer
     */
    public function getEm75()
    {
        return $this->em75;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return NpcText
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
