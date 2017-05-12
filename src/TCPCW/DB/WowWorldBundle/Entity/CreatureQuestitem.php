<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureQuestitem
 *
 * @ORM\Table(name="creature_questitem")
 * @ORM\Entity
 */
class CreatureQuestitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ItemId", type="integer", nullable=false)
     */
    private $itemid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=false)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CreatureEntry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $creatureentry;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idx", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idx;



    /**
     * Set itemid
     *
     * @param integer $itemid
     *
     * @return CreatureQuestitem
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return CreatureQuestitem
     */
    public function setVerifiedbuild($verifiedbuild)
    {
        $this->verifiedbuild = $verifiedbuild;

        return $this;
    }

    /**
     * Get verifiedbuild
     *
     * @return integer
     */
    public function getVerifiedbuild()
    {
        return $this->verifiedbuild;
    }

    /**
     * Set creatureentry
     *
     * @param integer $creatureentry
     *
     * @return CreatureQuestitem
     */
    public function setCreatureentry($creatureentry)
    {
        $this->creatureentry = $creatureentry;

        return $this;
    }

    /**
     * Get creatureentry
     *
     * @return integer
     */
    public function getCreatureentry()
    {
        return $this->creatureentry;
    }

    /**
     * Set idx
     *
     * @param integer $idx
     *
     * @return CreatureQuestitem
     */
    public function setIdx($idx)
    {
        $this->idx = $idx;

        return $this;
    }

    /**
     * Get idx
     *
     * @return integer
     */
    public function getIdx()
    {
        return $this->idx;
    }
}
