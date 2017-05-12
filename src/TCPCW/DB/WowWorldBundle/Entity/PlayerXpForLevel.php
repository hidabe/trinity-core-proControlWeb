<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerXpForLevel
 *
 * @ORM\Table(name="player_xp_for_level")
 * @ORM\Entity
 */
class PlayerXpForLevel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Experience", type="integer", nullable=false)
     */
    private $experience;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Level", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $level;



    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return PlayerXpForLevel
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return integer
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }
}
