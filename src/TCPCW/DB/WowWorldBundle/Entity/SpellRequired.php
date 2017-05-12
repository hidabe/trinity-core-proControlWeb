<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellRequired
 *
 * @ORM\Table(name="spell_required")
 * @ORM\Entity
 */
class SpellRequired
{
    /**
     * @var integer
     *
     * @ORM\Column(name="spell_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spellId;

    /**
     * @var integer
     *
     * @ORM\Column(name="req_spell", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reqSpell;



    /**
     * Set spellId
     *
     * @param integer $spellId
     *
     * @return SpellRequired
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

    /**
     * Set reqSpell
     *
     * @param integer $reqSpell
     *
     * @return SpellRequired
     */
    public function setReqSpell($reqSpell)
    {
        $this->reqSpell = $reqSpell;

        return $this;
    }

    /**
     * Get reqSpell
     *
     * @return integer
     */
    public function getReqSpell()
    {
        return $this->reqSpell;
    }
}
