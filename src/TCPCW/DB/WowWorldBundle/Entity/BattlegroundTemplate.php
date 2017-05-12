<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BattlegroundTemplate
 *
 * @ORM\Table(name="battleground_template")
 * @ORM\Entity
 */
class BattlegroundTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MinPlayersPerTeam", type="smallint", nullable=false)
     */
    private $minplayersperteam = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxPlayersPerTeam", type="smallint", nullable=false)
     */
    private $maxplayersperteam = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MinLvl", type="boolean", nullable=false)
     */
    private $minlvl = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="MaxLvl", type="boolean", nullable=false)
     */
    private $maxlvl = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AllianceStartLoc", type="integer", nullable=false)
     */
    private $alliancestartloc;

    /**
     * @var float
     *
     * @ORM\Column(name="AllianceStartO", type="float", precision=10, scale=0, nullable=false)
     */
    private $alliancestarto;

    /**
     * @var integer
     *
     * @ORM\Column(name="HordeStartLoc", type="integer", nullable=false)
     */
    private $hordestartloc;

    /**
     * @var float
     *
     * @ORM\Column(name="HordeStartO", type="float", precision=10, scale=0, nullable=false)
     */
    private $hordestarto;

    /**
     * @var float
     *
     * @ORM\Column(name="StartMaxDist", type="float", precision=10, scale=0, nullable=false)
     */
    private $startmaxdist = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Weight", type="boolean", nullable=false)
     */
    private $weight = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=32, nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set minplayersperteam
     *
     * @param integer $minplayersperteam
     *
     * @return BattlegroundTemplate
     */
    public function setMinplayersperteam($minplayersperteam)
    {
        $this->minplayersperteam = $minplayersperteam;

        return $this;
    }

    /**
     * Get minplayersperteam
     *
     * @return integer
     */
    public function getMinplayersperteam()
    {
        return $this->minplayersperteam;
    }

    /**
     * Set maxplayersperteam
     *
     * @param integer $maxplayersperteam
     *
     * @return BattlegroundTemplate
     */
    public function setMaxplayersperteam($maxplayersperteam)
    {
        $this->maxplayersperteam = $maxplayersperteam;

        return $this;
    }

    /**
     * Get maxplayersperteam
     *
     * @return integer
     */
    public function getMaxplayersperteam()
    {
        return $this->maxplayersperteam;
    }

    /**
     * Set minlvl
     *
     * @param boolean $minlvl
     *
     * @return BattlegroundTemplate
     */
    public function setMinlvl($minlvl)
    {
        $this->minlvl = $minlvl;

        return $this;
    }

    /**
     * Get minlvl
     *
     * @return boolean
     */
    public function getMinlvl()
    {
        return $this->minlvl;
    }

    /**
     * Set maxlvl
     *
     * @param boolean $maxlvl
     *
     * @return BattlegroundTemplate
     */
    public function setMaxlvl($maxlvl)
    {
        $this->maxlvl = $maxlvl;

        return $this;
    }

    /**
     * Get maxlvl
     *
     * @return boolean
     */
    public function getMaxlvl()
    {
        return $this->maxlvl;
    }

    /**
     * Set alliancestartloc
     *
     * @param integer $alliancestartloc
     *
     * @return BattlegroundTemplate
     */
    public function setAlliancestartloc($alliancestartloc)
    {
        $this->alliancestartloc = $alliancestartloc;

        return $this;
    }

    /**
     * Get alliancestartloc
     *
     * @return integer
     */
    public function getAlliancestartloc()
    {
        return $this->alliancestartloc;
    }

    /**
     * Set alliancestarto
     *
     * @param float $alliancestarto
     *
     * @return BattlegroundTemplate
     */
    public function setAlliancestarto($alliancestarto)
    {
        $this->alliancestarto = $alliancestarto;

        return $this;
    }

    /**
     * Get alliancestarto
     *
     * @return float
     */
    public function getAlliancestarto()
    {
        return $this->alliancestarto;
    }

    /**
     * Set hordestartloc
     *
     * @param integer $hordestartloc
     *
     * @return BattlegroundTemplate
     */
    public function setHordestartloc($hordestartloc)
    {
        $this->hordestartloc = $hordestartloc;

        return $this;
    }

    /**
     * Get hordestartloc
     *
     * @return integer
     */
    public function getHordestartloc()
    {
        return $this->hordestartloc;
    }

    /**
     * Set hordestarto
     *
     * @param float $hordestarto
     *
     * @return BattlegroundTemplate
     */
    public function setHordestarto($hordestarto)
    {
        $this->hordestarto = $hordestarto;

        return $this;
    }

    /**
     * Get hordestarto
     *
     * @return float
     */
    public function getHordestarto()
    {
        return $this->hordestarto;
    }

    /**
     * Set startmaxdist
     *
     * @param float $startmaxdist
     *
     * @return BattlegroundTemplate
     */
    public function setStartmaxdist($startmaxdist)
    {
        $this->startmaxdist = $startmaxdist;

        return $this;
    }

    /**
     * Get startmaxdist
     *
     * @return float
     */
    public function getStartmaxdist()
    {
        return $this->startmaxdist;
    }

    /**
     * Set weight
     *
     * @param boolean $weight
     *
     * @return BattlegroundTemplate
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return boolean
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return BattlegroundTemplate
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return BattlegroundTemplate
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
