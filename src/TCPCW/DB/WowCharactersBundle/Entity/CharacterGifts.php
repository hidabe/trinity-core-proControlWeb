<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterGifts
 *
 * @ORM\Table(name="character_gifts", indexes={@ORM\Index(name="idx_guid", columns={"guid"})})
 * @ORM\Entity
 */
class CharacterGifts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer", nullable=false)
     */
    private $entry = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="flags", type="integer", nullable=false)
     */
    private $flags = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemGuid;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterGifts
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return CharacterGifts
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return CharacterGifts
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return integer
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Get itemGuid
     *
     * @return integer
     */
    public function getItemGuid()
    {
        return $this->itemGuid;
    }
}
