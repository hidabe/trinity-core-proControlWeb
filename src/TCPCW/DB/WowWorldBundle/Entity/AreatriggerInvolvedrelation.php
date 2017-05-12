<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreatriggerInvolvedrelation
 *
 * @ORM\Table(name="areatrigger_involvedrelation")
 * @ORM\Entity
 */
class AreatriggerInvolvedrelation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quest", type="integer", nullable=false)
     */
    private $quest = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set quest
     *
     * @param integer $quest
     *
     * @return AreatriggerInvolvedrelation
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
