<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterFishingsteps
 *
 * @ORM\Table(name="character_fishingsteps")
 * @ORM\Entity
 */
class CharacterFishingsteps
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="fishingSteps", type="integer", nullable=false)
     */
    private $fishingsteps = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set fishingsteps
     *
     * @param boolean $fishingsteps
     *
     * @return CharacterFishingsteps
     */
    public function setFishingsteps($fishingsteps)
    {
        $this->fishingsteps = $fishingsteps;

        return $this;
    }

    /**
     * Get fishingsteps
     *
     * @return boolean
     */
    public function getFishingsteps()
    {
        return $this->fishingsteps;
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
