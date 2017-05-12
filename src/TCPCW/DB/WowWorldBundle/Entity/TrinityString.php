<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrinityString
 *
 * @ORM\Table(name="trinity_string")
 * @ORM\Entity
 */
class TrinityString
{
    /**
     * @var string
     *
     * @ORM\Column(name="content_default", type="text", length=65535, nullable=false)
     */
    private $contentDefault;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc1", type="text", length=65535, nullable=true)
     */
    private $contentLoc1;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc2", type="text", length=65535, nullable=true)
     */
    private $contentLoc2;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc3", type="text", length=65535, nullable=true)
     */
    private $contentLoc3;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc4", type="text", length=65535, nullable=true)
     */
    private $contentLoc4;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc5", type="text", length=65535, nullable=true)
     */
    private $contentLoc5;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc6", type="text", length=65535, nullable=true)
     */
    private $contentLoc6;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc7", type="text", length=65535, nullable=true)
     */
    private $contentLoc7;

    /**
     * @var string
     *
     * @ORM\Column(name="content_loc8", type="text", length=65535, nullable=true)
     */
    private $contentLoc8;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set contentDefault
     *
     * @param string $contentDefault
     *
     * @return TrinityString
     */
    public function setContentDefault($contentDefault)
    {
        $this->contentDefault = $contentDefault;

        return $this;
    }

    /**
     * Get contentDefault
     *
     * @return string
     */
    public function getContentDefault()
    {
        return $this->contentDefault;
    }

    /**
     * Set contentLoc1
     *
     * @param string $contentLoc1
     *
     * @return TrinityString
     */
    public function setContentLoc1($contentLoc1)
    {
        $this->contentLoc1 = $contentLoc1;

        return $this;
    }

    /**
     * Get contentLoc1
     *
     * @return string
     */
    public function getContentLoc1()
    {
        return $this->contentLoc1;
    }

    /**
     * Set contentLoc2
     *
     * @param string $contentLoc2
     *
     * @return TrinityString
     */
    public function setContentLoc2($contentLoc2)
    {
        $this->contentLoc2 = $contentLoc2;

        return $this;
    }

    /**
     * Get contentLoc2
     *
     * @return string
     */
    public function getContentLoc2()
    {
        return $this->contentLoc2;
    }

    /**
     * Set contentLoc3
     *
     * @param string $contentLoc3
     *
     * @return TrinityString
     */
    public function setContentLoc3($contentLoc3)
    {
        $this->contentLoc3 = $contentLoc3;

        return $this;
    }

    /**
     * Get contentLoc3
     *
     * @return string
     */
    public function getContentLoc3()
    {
        return $this->contentLoc3;
    }

    /**
     * Set contentLoc4
     *
     * @param string $contentLoc4
     *
     * @return TrinityString
     */
    public function setContentLoc4($contentLoc4)
    {
        $this->contentLoc4 = $contentLoc4;

        return $this;
    }

    /**
     * Get contentLoc4
     *
     * @return string
     */
    public function getContentLoc4()
    {
        return $this->contentLoc4;
    }

    /**
     * Set contentLoc5
     *
     * @param string $contentLoc5
     *
     * @return TrinityString
     */
    public function setContentLoc5($contentLoc5)
    {
        $this->contentLoc5 = $contentLoc5;

        return $this;
    }

    /**
     * Get contentLoc5
     *
     * @return string
     */
    public function getContentLoc5()
    {
        return $this->contentLoc5;
    }

    /**
     * Set contentLoc6
     *
     * @param string $contentLoc6
     *
     * @return TrinityString
     */
    public function setContentLoc6($contentLoc6)
    {
        $this->contentLoc6 = $contentLoc6;

        return $this;
    }

    /**
     * Get contentLoc6
     *
     * @return string
     */
    public function getContentLoc6()
    {
        return $this->contentLoc6;
    }

    /**
     * Set contentLoc7
     *
     * @param string $contentLoc7
     *
     * @return TrinityString
     */
    public function setContentLoc7($contentLoc7)
    {
        $this->contentLoc7 = $contentLoc7;

        return $this;
    }

    /**
     * Get contentLoc7
     *
     * @return string
     */
    public function getContentLoc7()
    {
        return $this->contentLoc7;
    }

    /**
     * Set contentLoc8
     *
     * @param string $contentLoc8
     *
     * @return TrinityString
     */
    public function setContentLoc8($contentLoc8)
    {
        $this->contentLoc8 = $contentLoc8;

        return $this;
    }

    /**
     * Get contentLoc8
     *
     * @return string
     */
    public function getContentLoc8()
    {
        return $this->contentLoc8;
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
}
