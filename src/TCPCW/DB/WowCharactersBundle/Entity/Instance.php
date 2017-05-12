<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instance
 *
 * @ORM\Table(name="instance", indexes={@ORM\Index(name="map", columns={"map"}), @ORM\Index(name="resettime", columns={"resettime"}), @ORM\Index(name="difficulty", columns={"difficulty"})})
 * @ORM\Entity
 */
class Instance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint", nullable=false)
     */
    private $map = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resettime", type="bigint", nullable=false)
     */
    private $resettime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="difficulty", type="integer", nullable=false)
     */
    private $difficulty = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="completedEncounters", type="integer", nullable=false)
     */
    private $completedencounters = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=255, nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set map
     *
     * @param integer $map
     *
     * @return Instance
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set resettime
     *
     * @param integer $resettime
     *
     * @return Instance
     */
    public function setResettime($resettime)
    {
        $this->resettime = $resettime;

        return $this;
    }

    /**
     * Get resettime
     *
     * @return integer
     */
    public function getResettime()
    {
        return $this->resettime;
    }

    /**
     * Set difficulty
     *
     * @param boolean $difficulty
     *
     * @return Instance
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return boolean
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set completedencounters
     *
     * @param integer $completedencounters
     *
     * @return Instance
     */
    public function setCompletedencounters($completedencounters)
    {
        $this->completedencounters = $completedencounters;

        return $this;
    }

    /**
     * Get completedencounters
     *
     * @return integer
     */
    public function getCompletedencounters()
    {
        return $this->completedencounters;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Instance
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
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
