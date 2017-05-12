<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpelldifficultyDbc
 *
 * @ORM\Table(name="spelldifficulty_dbc")
 * @ORM\Entity
 */
class SpelldifficultyDbc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="spellid0", type="integer", nullable=false)
     */
    private $spellid0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid1", type="integer", nullable=false)
     */
    private $spellid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid2", type="integer", nullable=false)
     */
    private $spellid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="spellid3", type="integer", nullable=false)
     */
    private $spellid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set spellid0
     *
     * @param integer $spellid0
     *
     * @return SpelldifficultyDbc
     */
    public function setSpellid0($spellid0)
    {
        $this->spellid0 = $spellid0;

        return $this;
    }

    /**
     * Get spellid0
     *
     * @return integer
     */
    public function getSpellid0()
    {
        return $this->spellid0;
    }

    /**
     * Set spellid1
     *
     * @param integer $spellid1
     *
     * @return SpelldifficultyDbc
     */
    public function setSpellid1($spellid1)
    {
        $this->spellid1 = $spellid1;

        return $this;
    }

    /**
     * Get spellid1
     *
     * @return integer
     */
    public function getSpellid1()
    {
        return $this->spellid1;
    }

    /**
     * Set spellid2
     *
     * @param integer $spellid2
     *
     * @return SpelldifficultyDbc
     */
    public function setSpellid2($spellid2)
    {
        $this->spellid2 = $spellid2;

        return $this;
    }

    /**
     * Get spellid2
     *
     * @return integer
     */
    public function getSpellid2()
    {
        return $this->spellid2;
    }

    /**
     * Set spellid3
     *
     * @param integer $spellid3
     *
     * @return SpelldifficultyDbc
     */
    public function setSpellid3($spellid3)
    {
        $this->spellid3 = $spellid3;

        return $this;
    }

    /**
     * Get spellid3
     *
     * @return integer
     */
    public function getSpellid3()
    {
        return $this->spellid3;
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
