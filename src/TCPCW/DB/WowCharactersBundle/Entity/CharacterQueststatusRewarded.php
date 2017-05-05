<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQueststatusRewarded
 *
 * @ORM\Table(name="character_queststatus_rewarded")
 * @ORM\Entity
 */
class CharacterQueststatusRewarded
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active = '1';

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
     * @ORM\Column(name="quest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $quest;



    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return CharacterQueststatusRewarded
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterQueststatusRewarded
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
     * Set quest
     *
     * @param integer $quest
     *
     * @return CharacterQueststatusRewarded
     */
    public function setQuest($quest)
    {
        $this->quest = $quest;

        return $this;
    }

    /**
     * Get quest
     *
     * @return integer
     */
    public function getQuest()
    {
        return $this->quest;
    }
}
