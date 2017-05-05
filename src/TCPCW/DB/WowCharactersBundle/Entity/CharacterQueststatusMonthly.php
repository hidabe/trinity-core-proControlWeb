<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterQueststatusMonthly
 *
 * @ORM\Table(name="character_queststatus_monthly", indexes={@ORM\Index(name="idx_guid", columns={"guid"})})
 * @ORM\Entity
 */
class CharacterQueststatusMonthly
{
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
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterQueststatusMonthly
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
     * @return CharacterQueststatusMonthly
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
