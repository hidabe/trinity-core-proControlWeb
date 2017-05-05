<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPet
 *
 * @ORM\Table(name="character_pet", indexes={@ORM\Index(name="owner", columns={"owner"}), @ORM\Index(name="idx_slot", columns={"slot"})})
 * @ORM\Entity
 */
class CharacterPet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer", nullable=false)
     */
    private $entry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="modelid", type="integer", nullable=true)
     */
    private $modelid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CreatedBySpell", type="integer", nullable=false)
     */
    private $createdbyspell = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PetType", type="integer", nullable=false)
     */
    private $pettype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint", nullable=false)
     */
    private $level = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="exp", type="integer", nullable=false)
     */
    private $exp = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reactstate", type="integer", nullable=false)
     */
    private $reactstate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=21, nullable=false)
     */
    private $name = 'Pet';

    /**
     * @var boolean
     *
     * @ORM\Column(name="renamed", type="integer", nullable=false)
     */
    private $renamed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="slot", type="integer", nullable=false)
     */
    private $slot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="curhealth", type="integer", nullable=false)
     */
    private $curhealth = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="curmana", type="integer", nullable=false)
     */
    private $curmana = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="curhappiness", type="integer", nullable=false)
     */
    private $curhappiness = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="savetime", type="integer", nullable=false)
     */
    private $savetime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="abdata", type="text", length=65535, nullable=true)
     */
    private $abdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return CharacterPet
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
     * Set owner
     *
     * @param integer $owner
     *
     * @return CharacterPet
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set modelid
     *
     * @param integer $modelid
     *
     * @return CharacterPet
     */
    public function setModelid($modelid)
    {
        $this->modelid = $modelid;

        return $this;
    }

    /**
     * Get modelid
     *
     * @return integer
     */
    public function getModelid()
    {
        return $this->modelid;
    }

    /**
     * Set createdbyspell
     *
     * @param integer $createdbyspell
     *
     * @return CharacterPet
     */
    public function setCreatedbyspell($createdbyspell)
    {
        $this->createdbyspell = $createdbyspell;

        return $this;
    }

    /**
     * Get createdbyspell
     *
     * @return integer
     */
    public function getCreatedbyspell()
    {
        return $this->createdbyspell;
    }

    /**
     * Set pettype
     *
     * @param boolean $pettype
     *
     * @return CharacterPet
     */
    public function setPettype($pettype)
    {
        $this->pettype = $pettype;

        return $this;
    }

    /**
     * Get pettype
     *
     * @return boolean
     */
    public function getPettype()
    {
        return $this->pettype;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return CharacterPet
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     *
     * @return CharacterPet
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set reactstate
     *
     * @param boolean $reactstate
     *
     * @return CharacterPet
     */
    public function setReactstate($reactstate)
    {
        $this->reactstate = $reactstate;

        return $this;
    }

    /**
     * Get reactstate
     *
     * @return boolean
     */
    public function getReactstate()
    {
        return $this->reactstate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CharacterPet
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
     * Set renamed
     *
     * @param boolean $renamed
     *
     * @return CharacterPet
     */
    public function setRenamed($renamed)
    {
        $this->renamed = $renamed;

        return $this;
    }

    /**
     * Get renamed
     *
     * @return boolean
     */
    public function getRenamed()
    {
        return $this->renamed;
    }

    /**
     * Set slot
     *
     * @param boolean $slot
     *
     * @return CharacterPet
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return boolean
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set curhealth
     *
     * @param integer $curhealth
     *
     * @return CharacterPet
     */
    public function setCurhealth($curhealth)
    {
        $this->curhealth = $curhealth;

        return $this;
    }

    /**
     * Get curhealth
     *
     * @return integer
     */
    public function getCurhealth()
    {
        return $this->curhealth;
    }

    /**
     * Set curmana
     *
     * @param integer $curmana
     *
     * @return CharacterPet
     */
    public function setCurmana($curmana)
    {
        $this->curmana = $curmana;

        return $this;
    }

    /**
     * Get curmana
     *
     * @return integer
     */
    public function getCurmana()
    {
        return $this->curmana;
    }

    /**
     * Set curhappiness
     *
     * @param integer $curhappiness
     *
     * @return CharacterPet
     */
    public function setCurhappiness($curhappiness)
    {
        $this->curhappiness = $curhappiness;

        return $this;
    }

    /**
     * Get curhappiness
     *
     * @return integer
     */
    public function getCurhappiness()
    {
        return $this->curhappiness;
    }

    /**
     * Set savetime
     *
     * @param integer $savetime
     *
     * @return CharacterPet
     */
    public function setSavetime($savetime)
    {
        $this->savetime = $savetime;

        return $this;
    }

    /**
     * Get savetime
     *
     * @return integer
     */
    public function getSavetime()
    {
        return $this->savetime;
    }

    /**
     * Set abdata
     *
     * @param string $abdata
     *
     * @return CharacterPet
     */
    public function setAbdata($abdata)
    {
        $this->abdata = $abdata;

        return $this;
    }

    /**
     * Get abdata
     *
     * @return string
     */
    public function getAbdata()
    {
        return $this->abdata;
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
