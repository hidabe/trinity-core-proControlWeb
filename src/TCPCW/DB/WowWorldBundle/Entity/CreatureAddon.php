<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureAddon
 *
 * @ORM\Table(name="creature_addon")
 * @ORM\Entity
 */
class CreatureAddon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="path_id", type="integer", nullable=false)
     */
    private $pathId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mount", type="integer", nullable=false)
     */
    private $mount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes1", type="integer", nullable=false)
     */
    private $bytes1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bytes2", type="integer", nullable=false)
     */
    private $bytes2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="emote", type="integer", nullable=false)
     */
    private $emote = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="auras", type="text", length=65535, nullable=true)
     */
    private $auras;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set pathId
     *
     * @param integer $pathId
     *
     * @return CreatureAddon
     */
    public function setPathId($pathId)
    {
        $this->pathId = $pathId;

        return $this;
    }

    /**
     * Get pathId
     *
     * @return integer
     */
    public function getPathId()
    {
        return $this->pathId;
    }

    /**
     * Set mount
     *
     * @param integer $mount
     *
     * @return CreatureAddon
     */
    public function setMount($mount)
    {
        $this->mount = $mount;

        return $this;
    }

    /**
     * Get mount
     *
     * @return integer
     */
    public function getMount()
    {
        return $this->mount;
    }

    /**
     * Set bytes1
     *
     * @param integer $bytes1
     *
     * @return CreatureAddon
     */
    public function setBytes1($bytes1)
    {
        $this->bytes1 = $bytes1;

        return $this;
    }

    /**
     * Get bytes1
     *
     * @return integer
     */
    public function getBytes1()
    {
        return $this->bytes1;
    }

    /**
     * Set bytes2
     *
     * @param integer $bytes2
     *
     * @return CreatureAddon
     */
    public function setBytes2($bytes2)
    {
        $this->bytes2 = $bytes2;

        return $this;
    }

    /**
     * Get bytes2
     *
     * @return integer
     */
    public function getBytes2()
    {
        return $this->bytes2;
    }

    /**
     * Set emote
     *
     * @param integer $emote
     *
     * @return CreatureAddon
     */
    public function setEmote($emote)
    {
        $this->emote = $emote;

        return $this;
    }

    /**
     * Get emote
     *
     * @return integer
     */
    public function getEmote()
    {
        return $this->emote;
    }

    /**
     * Set auras
     *
     * @param string $auras
     *
     * @return CreatureAddon
     */
    public function setAuras($auras)
    {
        $this->auras = $auras;

        return $this;
    }

    /**
     * Get auras
     *
     * @return string
     */
    public function getAuras()
    {
        return $this->auras;
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
