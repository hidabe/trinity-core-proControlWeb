<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetNameGeneration
 *
 * @ORM\Table(name="pet_name_generation")
 * @ORM\Entity
 */
class PetNameGeneration
{
    /**
     * @var string
     *
     * @ORM\Column(name="word", type="text", length=255, nullable=false)
     */
    private $word;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer", nullable=false)
     */
    private $entry = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="half", type="boolean", nullable=false)
     */
    private $half = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set word
     *
     * @param string $word
     *
     * @return PetNameGeneration
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set entry
     *
     * @param integer $entry
     *
     * @return PetNameGeneration
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
     * Set half
     *
     * @param boolean $half
     *
     * @return PetNameGeneration
     */
    public function setHalf($half)
    {
        $this->half = $half;

        return $this;
    }

    /**
     * Get half
     *
     * @return boolean
     */
    public function getHalf()
    {
        return $this->half;
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
