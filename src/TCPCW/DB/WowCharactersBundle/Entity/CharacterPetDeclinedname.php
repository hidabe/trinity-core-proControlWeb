<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterPetDeclinedname
 *
 * @ORM\Table(name="character_pet_declinedname", indexes={@ORM\Index(name="owner_key", columns={"owner"})})
 * @ORM\Entity
 */
class CharacterPetDeclinedname
{
    /**
     * @var integer
     *
     * @ORM\Column(name="owner", type="integer", nullable=false)
     */
    private $owner = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="genitive", type="string", length=12, nullable=false)
     */
    private $genitive = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dative", type="string", length=12, nullable=false)
     */
    private $dative = '';

    /**
     * @var string
     *
     * @ORM\Column(name="accusative", type="string", length=12, nullable=false)
     */
    private $accusative = '';

    /**
     * @var string
     *
     * @ORM\Column(name="instrumental", type="string", length=12, nullable=false)
     */
    private $instrumental = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prepositional", type="string", length=12, nullable=false)
     */
    private $prepositional = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set owner
     *
     * @param integer $owner
     *
     * @return CharacterPetDeclinedname
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
     * Set genitive
     *
     * @param string $genitive
     *
     * @return CharacterPetDeclinedname
     */
    public function setGenitive($genitive)
    {
        $this->genitive = $genitive;

        return $this;
    }

    /**
     * Get genitive
     *
     * @return string
     */
    public function getGenitive()
    {
        return $this->genitive;
    }

    /**
     * Set dative
     *
     * @param string $dative
     *
     * @return CharacterPetDeclinedname
     */
    public function setDative($dative)
    {
        $this->dative = $dative;

        return $this;
    }

    /**
     * Get dative
     *
     * @return string
     */
    public function getDative()
    {
        return $this->dative;
    }

    /**
     * Set accusative
     *
     * @param string $accusative
     *
     * @return CharacterPetDeclinedname
     */
    public function setAccusative($accusative)
    {
        $this->accusative = $accusative;

        return $this;
    }

    /**
     * Get accusative
     *
     * @return string
     */
    public function getAccusative()
    {
        return $this->accusative;
    }

    /**
     * Set instrumental
     *
     * @param string $instrumental
     *
     * @return CharacterPetDeclinedname
     */
    public function setInstrumental($instrumental)
    {
        $this->instrumental = $instrumental;

        return $this;
    }

    /**
     * Get instrumental
     *
     * @return string
     */
    public function getInstrumental()
    {
        return $this->instrumental;
    }

    /**
     * Set prepositional
     *
     * @param string $prepositional
     *
     * @return CharacterPetDeclinedname
     */
    public function setPrepositional($prepositional)
    {
        $this->prepositional = $prepositional;

        return $this;
    }

    /**
     * Get prepositional
     *
     * @return string
     */
    public function getPrepositional()
    {
        return $this->prepositional;
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
