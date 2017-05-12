<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSocial
 *
 * @ORM\Table(name="character_social", indexes={@ORM\Index(name="friend", columns={"friend"})})
 * @ORM\Entity
 */
class CharacterSocial
{
    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=48, nullable=false)
     */
    private $note = '';

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
     * @ORM\Column(name="friend", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $friend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flags", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $flags;



    /**
     * Set note
     *
     * @param string $note
     *
     * @return CharacterSocial
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterSocial
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
     * Set friend
     *
     * @param integer $friend
     *
     * @return CharacterSocial
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return integer
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Set flags
     *
     * @param boolean $flags
     *
     * @return CharacterSocial
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return boolean
     */
    public function getFlags()
    {
        return $this->flags;
    }
}
