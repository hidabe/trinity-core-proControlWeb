<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalesCreatureText
 *
 * @ORM\Table(name="locales_creature_text")
 * @ORM\Entity
 */
class LocalesCreatureText
{
    /**
     * @var string
     *
     * @ORM\Column(name="text_loc1", type="text", length=65535, nullable=true)
     */
    private $textLoc1;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc2", type="text", length=65535, nullable=true)
     */
    private $textLoc2;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc3", type="text", length=65535, nullable=true)
     */
    private $textLoc3;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc4", type="text", length=65535, nullable=true)
     */
    private $textLoc4;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc5", type="text", length=65535, nullable=true)
     */
    private $textLoc5;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc6", type="text", length=65535, nullable=true)
     */
    private $textLoc6;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc7", type="text", length=65535, nullable=true)
     */
    private $textLoc7;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc8", type="text", length=65535, nullable=true)
     */
    private $textLoc8;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="groupid", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set textLoc1
     *
     * @param string $textLoc1
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc1($textLoc1)
    {
        $this->textLoc1 = $textLoc1;

        return $this;
    }

    /**
     * Get textLoc1
     *
     * @return string
     */
    public function getTextLoc1()
    {
        return $this->textLoc1;
    }

    /**
     * Set textLoc2
     *
     * @param string $textLoc2
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc2($textLoc2)
    {
        $this->textLoc2 = $textLoc2;

        return $this;
    }

    /**
     * Get textLoc2
     *
     * @return string
     */
    public function getTextLoc2()
    {
        return $this->textLoc2;
    }

    /**
     * Set textLoc3
     *
     * @param string $textLoc3
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc3($textLoc3)
    {
        $this->textLoc3 = $textLoc3;

        return $this;
    }

    /**
     * Get textLoc3
     *
     * @return string
     */
    public function getTextLoc3()
    {
        return $this->textLoc3;
    }

    /**
     * Set textLoc4
     *
     * @param string $textLoc4
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc4($textLoc4)
    {
        $this->textLoc4 = $textLoc4;

        return $this;
    }

    /**
     * Get textLoc4
     *
     * @return string
     */
    public function getTextLoc4()
    {
        return $this->textLoc4;
    }

    /**
     * Set textLoc5
     *
     * @param string $textLoc5
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc5($textLoc5)
    {
        $this->textLoc5 = $textLoc5;

        return $this;
    }

    /**
     * Get textLoc5
     *
     * @return string
     */
    public function getTextLoc5()
    {
        return $this->textLoc5;
    }

    /**
     * Set textLoc6
     *
     * @param string $textLoc6
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc6($textLoc6)
    {
        $this->textLoc6 = $textLoc6;

        return $this;
    }

    /**
     * Get textLoc6
     *
     * @return string
     */
    public function getTextLoc6()
    {
        return $this->textLoc6;
    }

    /**
     * Set textLoc7
     *
     * @param string $textLoc7
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc7($textLoc7)
    {
        $this->textLoc7 = $textLoc7;

        return $this;
    }

    /**
     * Get textLoc7
     *
     * @return string
     */
    public function getTextLoc7()
    {
        return $this->textLoc7;
    }

    /**
     * Set textLoc8
     *
     * @param string $textLoc8
     *
     * @return LocalesCreatureText
     */
    public function setTextLoc8($textLoc8)
    {
        $this->textLoc8 = $textLoc8;

        return $this;
    }

    /**
     * Get textLoc8
     *
     * @return string
     */
    public function getTextLoc8()
    {
        return $this->textLoc8;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return LocalesCreatureText
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
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

    /**
     * Set groupid
     *
     * @param boolean $groupid
     *
     * @return LocalesCreatureText
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return boolean
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set id
     *
     * @param boolean $id
     *
     * @return LocalesCreatureText
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }
}
