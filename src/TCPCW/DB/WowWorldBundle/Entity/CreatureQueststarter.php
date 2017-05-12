<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureQueststarter
 *
 * @ORM\Table(name="creature_queststarter")
 * @ORM\Entity
 */
class CreatureQueststarter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quest", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $quest;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return CreatureQueststarter
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set quest
     *
     * @param integer $quest
     *
     * @return CreatureQueststarter
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
