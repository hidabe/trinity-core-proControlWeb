<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WardenAction
 *
 * @ORM\Table(name="warden_action")
 * @ORM\Entity
 */
class WardenAction
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="action", type="integer", nullable=true)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="wardenId", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wardenid;



    /**
     * Set action
     *
     * @param boolean $action
     *
     * @return WardenAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return boolean
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get wardenid
     *
     * @return integer
     */
    public function getWardenid()
    {
        return $this->wardenid;
    }
}
