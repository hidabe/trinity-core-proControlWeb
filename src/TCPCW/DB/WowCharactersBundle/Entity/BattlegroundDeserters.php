<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BattlegroundDeserters
 *
 * @ORM\Table(name="battleground_deserters")
 * @ORM\Entity
 */
class BattlegroundDeserters
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return BattlegroundDeserters
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return BattlegroundDeserters
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
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
