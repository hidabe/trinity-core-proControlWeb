<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterSpellCooldown
 *
 * @ORM\Table(name="character_spell_cooldown")
 * @ORM\Entity
 */
class CharacterSpellCooldown
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer", nullable=false)
     */
    private $item = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryId", type="integer", nullable=false)
     */
    private $categoryid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryEnd", type="integer", nullable=false)
     */
    private $categoryend = '0';

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
     * @ORM\Column(name="spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spell;



    /**
     * Set item
     *
     * @param integer $item
     *
     * @return CharacterSpellCooldown
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return CharacterSpellCooldown
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return CharacterSpellCooldown
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set categoryend
     *
     * @param integer $categoryend
     *
     * @return CharacterSpellCooldown
     */
    public function setCategoryend($categoryend)
    {
        $this->categoryend = $categoryend;

        return $this;
    }

    /**
     * Get categoryend
     *
     * @return integer
     */
    public function getCategoryend()
    {
        return $this->categoryend;
    }

    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return CharacterSpellCooldown
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
     * Set spell
     *
     * @param integer $spell
     *
     * @return CharacterSpellCooldown
     */
    public function setSpell($spell)
    {
        $this->spell = $spell;

        return $this;
    }

    /**
     * Get spell
     *
     * @return integer
     */
    public function getSpell()
    {
        return $this->spell;
    }
}
