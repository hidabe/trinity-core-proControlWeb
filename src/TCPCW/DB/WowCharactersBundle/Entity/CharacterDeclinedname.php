<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterDeclinedname
 *
 * @ORM\Table(name="character_declinedname")
 * @ORM\Entity
 */
class CharacterDeclinedname
{
    /**
     * @var string
     *
     * @ORM\Column(name="genitive", type="string", length=15, nullable=false)
     */
    private $genitive = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dative", type="string", length=15, nullable=false)
     */
    private $dative = '';

    /**
     * @var string
     *
     * @ORM\Column(name="accusative", type="string", length=15, nullable=false)
     */
    private $accusative = '';

    /**
     * @var string
     *
     * @ORM\Column(name="instrumental", type="string", length=15, nullable=false)
     */
    private $instrumental = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prepositional", type="string", length=15, nullable=false)
     */
    private $prepositional = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set genitive
     *
     * @param string $genitive
     *
     * @return CharacterDeclinedname
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
     * @return CharacterDeclinedname
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
     * @return CharacterDeclinedname
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
     * @return CharacterDeclinedname
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
     * @return CharacterDeclinedname
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
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }
}
