<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BroadcastText
 *
 * @ORM\Table(name="broadcast_text")
 * @ORM\Entity
 */
class BroadcastText
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Language", type="integer", nullable=false)
     */
    private $language = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MaleText", type="text", nullable=true)
     */
    private $maletext;

    /**
     * @var string
     *
     * @ORM\Column(name="FemaleText", type="text", nullable=true)
     */
    private $femaletext;

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteID0", type="integer", nullable=false)
     */
    private $emoteid0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteID1", type="integer", nullable=false)
     */
    private $emoteid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteID2", type="integer", nullable=false)
     */
    private $emoteid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay0", type="integer", nullable=false)
     */
    private $emotedelay0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay1", type="integer", nullable=false)
     */
    private $emotedelay1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteDelay2", type="integer", nullable=false)
     */
    private $emotedelay2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SoundId", type="integer", nullable=false)
     */
    private $soundid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Unk1", type="integer", nullable=false)
     */
    private $unk1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Unk2", type="integer", nullable=false)
     */
    private $unk2 = '0';

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
     * Set language
     *
     * @param integer $language
     *
     * @return BroadcastText
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return integer
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set maletext
     *
     * @param string $maletext
     *
     * @return BroadcastText
     */
    public function setMaletext($maletext)
    {
        $this->maletext = $maletext;

        return $this;
    }

    /**
     * Get maletext
     *
     * @return string
     */
    public function getMaletext()
    {
        return $this->maletext;
    }

    /**
     * Set femaletext
     *
     * @param string $femaletext
     *
     * @return BroadcastText
     */
    public function setFemaletext($femaletext)
    {
        $this->femaletext = $femaletext;

        return $this;
    }

    /**
     * Get femaletext
     *
     * @return string
     */
    public function getFemaletext()
    {
        return $this->femaletext;
    }

    /**
     * Set emoteid0
     *
     * @param integer $emoteid0
     *
     * @return BroadcastText
     */
    public function setEmoteid0($emoteid0)
    {
        $this->emoteid0 = $emoteid0;

        return $this;
    }

    /**
     * Get emoteid0
     *
     * @return integer
     */
    public function getEmoteid0()
    {
        return $this->emoteid0;
    }

    /**
     * Set emoteid1
     *
     * @param integer $emoteid1
     *
     * @return BroadcastText
     */
    public function setEmoteid1($emoteid1)
    {
        $this->emoteid1 = $emoteid1;

        return $this;
    }

    /**
     * Get emoteid1
     *
     * @return integer
     */
    public function getEmoteid1()
    {
        return $this->emoteid1;
    }

    /**
     * Set emoteid2
     *
     * @param integer $emoteid2
     *
     * @return BroadcastText
     */
    public function setEmoteid2($emoteid2)
    {
        $this->emoteid2 = $emoteid2;

        return $this;
    }

    /**
     * Get emoteid2
     *
     * @return integer
     */
    public function getEmoteid2()
    {
        return $this->emoteid2;
    }

    /**
     * Set emotedelay0
     *
     * @param integer $emotedelay0
     *
     * @return BroadcastText
     */
    public function setEmotedelay0($emotedelay0)
    {
        $this->emotedelay0 = $emotedelay0;

        return $this;
    }

    /**
     * Get emotedelay0
     *
     * @return integer
     */
    public function getEmotedelay0()
    {
        return $this->emotedelay0;
    }

    /**
     * Set emotedelay1
     *
     * @param integer $emotedelay1
     *
     * @return BroadcastText
     */
    public function setEmotedelay1($emotedelay1)
    {
        $this->emotedelay1 = $emotedelay1;

        return $this;
    }

    /**
     * Get emotedelay1
     *
     * @return integer
     */
    public function getEmotedelay1()
    {
        return $this->emotedelay1;
    }

    /**
     * Set emotedelay2
     *
     * @param integer $emotedelay2
     *
     * @return BroadcastText
     */
    public function setEmotedelay2($emotedelay2)
    {
        $this->emotedelay2 = $emotedelay2;

        return $this;
    }

    /**
     * Get emotedelay2
     *
     * @return integer
     */
    public function getEmotedelay2()
    {
        return $this->emotedelay2;
    }

    /**
     * Set soundid
     *
     * @param integer $soundid
     *
     * @return BroadcastText
     */
    public function setSoundid($soundid)
    {
        $this->soundid = $soundid;

        return $this;
    }

    /**
     * Get soundid
     *
     * @return integer
     */
    public function getSoundid()
    {
        return $this->soundid;
    }

    /**
     * Set unk1
     *
     * @param integer $unk1
     *
     * @return BroadcastText
     */
    public function setUnk1($unk1)
    {
        $this->unk1 = $unk1;

        return $this;
    }

    /**
     * Get unk1
     *
     * @return integer
     */
    public function getUnk1()
    {
        return $this->unk1;
    }

    /**
     * Set unk2
     *
     * @param integer $unk2
     *
     * @return BroadcastText
     */
    public function setUnk2($unk2)
    {
        $this->unk2 = $unk2;

        return $this;
    }

    /**
     * Get unk2
     *
     * @return integer
     */
    public function getUnk2()
    {
        return $this->unk2;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return BroadcastText
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
