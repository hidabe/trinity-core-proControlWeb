<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterGlyphs
 *
 * @ORM\Table(name="character_glyphs")
 * @ORM\Entity
 */
class CharacterGlyphs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="glyph1", type="smallint", nullable=true)
     */
    private $glyph1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph2", type="smallint", nullable=true)
     */
    private $glyph2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph3", type="smallint", nullable=true)
     */
    private $glyph3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph4", type="smallint", nullable=true)
     */
    private $glyph4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph5", type="smallint", nullable=true)
     */
    private $glyph5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="glyph6", type="smallint", nullable=true)
     */
    private $glyph6 = '0';

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
     * @ORM\Column(name="talentGroup", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $talentgroup;



    /**
     * Set glyph1
     *
     * @param integer $glyph1
     *
     * @return CharacterGlyphs
     */
    public function setGlyph1($glyph1)
    {
        $this->glyph1 = $glyph1;

        return $this;
    }

    /**
     * Get glyph1
     *
     * @return integer
     */
    public function getGlyph1()
    {
        return $this->glyph1;
    }

    /**
     * Set glyph2
     *
     * @param integer $glyph2
     *
     * @return CharacterGlyphs
     */
    public function setGlyph2($glyph2)
    {
        $this->glyph2 = $glyph2;

        return $this;
    }

    /**
     * Get glyph2
     *
     * @return integer
     */
    public function getGlyph2()
    {
        return $this->glyph2;
    }

    /**
     * Set glyph3
     *
     * @param integer $glyph3
     *
     * @return CharacterGlyphs
     */
    public function setGlyph3($glyph3)
    {
        $this->glyph3 = $glyph3;

        return $this;
    }

    /**
     * Get glyph3
     *
     * @return integer
     */
    public function getGlyph3()
    {
        return $this->glyph3;
    }

    /**
     * Set glyph4
     *
     * @param integer $glyph4
     *
     * @return CharacterGlyphs
     */
    public function setGlyph4($glyph4)
    {
        $this->glyph4 = $glyph4;

        return $this;
    }

    /**
     * Get glyph4
     *
     * @return integer
     */
    public function getGlyph4()
    {
        return $this->glyph4;
    }

    /**
     * Set glyph5
     *
     * @param integer $glyph5
     *
     * @return CharacterGlyphs
     */
    public function setGlyph5($glyph5)
    {
        $this->glyph5 = $glyph5;

        return $this;
    }

    /**
     * Get glyph5
     *
     * @return integer
     */
    public function getGlyph5()
    {
        return $this->glyph5;
    }

    /**
     * Set glyph6
     *
     * @param integer $glyph6
     *
     * @return CharacterGlyphs
     */
    public function setGlyph6($glyph6)
    {
        $this->glyph6 = $glyph6;

        return $this;
    }

    /**
     * Get glyph6
     *
     * @return integer
     */
    public function getGlyph6()
    {
        return $this->glyph6;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterGlyphs
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
     * Set talentgroup
     *
     * @param boolean $talentgroup
     *
     * @return CharacterGlyphs
     */
    public function setTalentgroup($talentgroup)
    {
        $this->talentgroup = $talentgroup;

        return $this;
    }

    /**
     * Get talentgroup
     *
     * @return boolean
     */
    public function getTalentgroup()
    {
        return $this->talentgroup;
    }
}
