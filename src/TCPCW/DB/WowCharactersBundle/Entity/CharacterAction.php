<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterAction
 *
 * @ORM\Table(name="character_action")
 * @ORM\Entity
 */
class CharacterAction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="action", type="integer", nullable=false)
     */
    private $action = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spec", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="button", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $button;



    /**
     * Set action
     *
     * @param integer $action
     *
     * @return CharacterAction
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
     * @param boolean $type
     *
     * @return CharacterAction
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
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterAction
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
     * Set spec
     *
     * @param boolean $spec
     *
     * @return CharacterAction
     */
    public function setSpec($spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Get spec
     *
     * @return boolean
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Set button
     *
     * @param boolean $button
     *
     * @return CharacterAction
     */
    public function setButton($button)
    {
        $this->button = $button;

        return $this;
    }

    /**
     * Get button
     *
     * @return boolean
     */
    public function getButton()
    {
        return $this->button;
    }
}
