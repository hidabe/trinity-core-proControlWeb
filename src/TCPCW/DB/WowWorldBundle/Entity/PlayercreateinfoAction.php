<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayercreateinfoAction
 *
 * @ORM\Table(name="playercreateinfo_action", indexes={@ORM\Index(name="playercreateinfo_race_class_index", columns={"race", "class"})})
 * @ORM\Entity
 */
class PlayercreateinfoAction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="action", type="integer", nullable=false)
     */
    private $action = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="smallint", nullable=false)
     */
    private $type = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="race", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $race;

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="button", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $button;



    /**
     * Set action
     *
     * @param integer $action
     *
     * @return PlayercreateinfoAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return integer
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return PlayercreateinfoAction
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set race
     *
     * @param boolean $race
     *
     * @return PlayercreateinfoAction
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return boolean
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return PlayercreateinfoAction
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set button
     *
     * @param integer $button
     *
     * @return PlayercreateinfoAction
     */
    public function setButton($button)
    {
        $this->button = $button;

        return $this;
    }

    /**
     * Get button
     *
     * @return integer
     */
    public function getButton()
    {
        return $this->button;
    }
}
