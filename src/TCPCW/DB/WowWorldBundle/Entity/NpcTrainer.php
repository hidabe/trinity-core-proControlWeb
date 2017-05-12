<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NpcTrainer
 *
 * @ORM\Table(name="npc_trainer")
 * @ORM\Entity
 */
class NpcTrainer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MoneyCost", type="integer", nullable=false)
     */
    private $moneycost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ReqSkillLine", type="smallint", nullable=false)
     */
    private $reqskillline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ReqSkillRank", type="smallint", nullable=false)
     */
    private $reqskillrank = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ReqLevel", type="boolean", nullable=false)
     */
    private $reqlevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="SpellID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $spellid;



    /**
     * Set moneycost
     *
     * @param integer $moneycost
     *
     * @return NpcTrainer
     */
    public function setMoneycost($moneycost)
    {
        $this->moneycost = $moneycost;

        return $this;
    }

    /**
     * Get moneycost
     *
     * @return integer
     */
    public function getMoneycost()
    {
        return $this->moneycost;
    }

    /**
     * Set reqskillline
     *
     * @param integer $reqskillline
     *
     * @return NpcTrainer
     */
    public function setReqskillline($reqskillline)
    {
        $this->reqskillline = $reqskillline;

        return $this;
    }

    /**
     * Get reqskillline
     *
     * @return integer
     */
    public function getReqskillline()
    {
        return $this->reqskillline;
    }

    /**
     * Set reqskillrank
     *
     * @param integer $reqskillrank
     *
     * @return NpcTrainer
     */
    public function setReqskillrank($reqskillrank)
    {
        $this->reqskillrank = $reqskillrank;

        return $this;
    }

    /**
     * Get reqskillrank
     *
     * @return integer
     */
    public function getReqskillrank()
    {
        return $this->reqskillrank;
    }

    /**
     * Set reqlevel
     *
     * @param boolean $reqlevel
     *
     * @return NpcTrainer
     */
    public function setReqlevel($reqlevel)
    {
        $this->reqlevel = $reqlevel;

        return $this;
    }

    /**
     * Get reqlevel
     *
     * @return boolean
     */
    public function getReqlevel()
    {
        return $this->reqlevel;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return NpcTrainer
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
     * Set spellid
     *
     * @param integer $spellid
     *
     * @return NpcTrainer
     */
    public function setSpellid($spellid)
    {
        $this->spellid = $spellid;

        return $this;
    }

    /**
     * Get spellid
     *
     * @return integer
     */
    public function getSpellid()
    {
        return $this->spellid;
    }
}
