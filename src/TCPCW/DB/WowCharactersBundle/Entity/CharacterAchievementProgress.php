<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterAchievementProgress
 *
 * @ORM\Table(name="character_achievement_progress")
 * @ORM\Entity
 */
class CharacterAchievementProgress
{
    /**
     * @var integer
     *
     * @ORM\Column(name="counter", type="integer", nullable=false)
     */
    private $counter;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="criteria", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $criteria;



    /**
     * Set counter
     *
     * @param integer $counter
     *
     * @return CharacterAchievementProgress
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * Get counter
     *
     * @return integer
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set date
     *
     * @param integer $date
     *
     * @return CharacterAchievementProgress
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterAchievementProgress
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
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

    /**
     * Set criteria
     *
     * @param integer $criteria
     *
     * @return CharacterAchievementProgress
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * Get criteria
     *
     * @return integer
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
}
