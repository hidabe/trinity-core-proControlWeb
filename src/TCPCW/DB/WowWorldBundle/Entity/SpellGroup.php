<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellGroup
 *
 * @ORM\Table(name="spell_group")
 * @ORM\Entity
 */
class SpellGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="spell_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spellId;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return SpellGroup
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set spellId
     *
     * @param integer $spellId
     *
     * @return SpellGroup
     */
    public function setSpellId($spellId)
    {
        $this->spellId = $spellId;

        return $this;
    }

    /**
     * Get spellId
     *
     * @return integer
     */
    public function getSpellId()
    {
        return $this->spellId;
    }
}
