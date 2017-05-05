<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharacterBattlegroundData
 *
 * @ORM\Table(name="character_battleground_data")
 * @ORM\Entity
 */
class CharacterBattlegroundData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="instanceId", type="integer", nullable=false)
     */
    private $instanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="team", type="smallint", nullable=false)
     */
    private $team;

    /**
     * @var float
     *
     * @ORM\Column(name="joinX", type="float", precision=10, scale=0, nullable=false)
     */
    private $joinx = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="joinY", type="float", precision=10, scale=0, nullable=false)
     */
    private $joiny = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="joinZ", type="float", precision=10, scale=0, nullable=false)
     */
    private $joinz = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="joinO", type="float", precision=10, scale=0, nullable=false)
     */
    private $joino = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="joinMapId", type="smallint", nullable=false)
     */
    private $joinmapid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="taxiStart", type="integer", nullable=false)
     */
    private $taxistart = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="taxiEnd", type="integer", nullable=false)
     */
    private $taxiend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mountSpell", type="integer", nullable=false)
     */
    private $mountspell = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set instanceid
     *
     * @param integer $instanceid
     *
     * @return CharacterBattlegroundData
     */
    public function setInstanceid($instanceid)
    {
        $this->instanceid = $instanceid;

        return $this;
    }

    /**
     * Get instanceid
     *
     * @return integer
     */
    public function getInstanceid()
    {
        return $this->instanceid;
    }

    /**
     * Set team
     *
     * @param integer $team
     *
     * @return CharacterBattlegroundData
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return integer
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set joinx
     *
     * @param float $joinx
     *
     * @return CharacterBattlegroundData
     */
    public function setJoinx($joinx)
    {
        $this->joinx = $joinx;

        return $this;
    }

    /**
     * Get joinx
     *
     * @return float
     */
    public function getJoinx()
    {
        return $this->joinx;
    }

    /**
     * Set joiny
     *
     * @param float $joiny
     *
     * @return CharacterBattlegroundData
     */
    public function setJoiny($joiny)
    {
        $this->joiny = $joiny;

        return $this;
    }

    /**
     * Get joiny
     *
     * @return float
     */
    public function getJoiny()
    {
        return $this->joiny;
    }

    /**
     * Set joinz
     *
     * @param float $joinz
     *
     * @return CharacterBattlegroundData
     */
    public function setJoinz($joinz)
    {
        $this->joinz = $joinz;

        return $this;
    }

    /**
     * Get joinz
     *
     * @return float
     */
    public function getJoinz()
    {
        return $this->joinz;
    }

    /**
     * Set joino
     *
     * @param float $joino
     *
     * @return CharacterBattlegroundData
     */
    public function setJoino($joino)
    {
        $this->joino = $joino;

        return $this;
    }

    /**
     * Get joino
     *
     * @return float
     */
    public function getJoino()
    {
        return $this->joino;
    }

    /**
     * Set joinmapid
     *
     * @param integer $joinmapid
     *
     * @return CharacterBattlegroundData
     */
    public function setJoinmapid($joinmapid)
    {
        $this->joinmapid = $joinmapid;

        return $this;
    }

    /**
     * Get joinmapid
     *
     * @return integer
     */
    public function getJoinmapid()
    {
        return $this->joinmapid;
    }

    /**
     * Set taxistart
     *
     * @param integer $taxistart
     *
     * @return CharacterBattlegroundData
     */
    public function setTaxistart($taxistart)
    {
        $this->taxistart = $taxistart;

        return $this;
    }

    /**
     * Get taxistart
     *
     * @return integer
     */
    public function getTaxistart()
    {
        return $this->taxistart;
    }

    /**
     * Set taxiend
     *
     * @param integer $taxiend
     *
     * @return CharacterBattlegroundData
     */
    public function setTaxiend($taxiend)
    {
        $this->taxiend = $taxiend;

        return $this;
    }

    /**
     * Get taxiend
     *
     * @return integer
     */
    public function getTaxiend()
    {
        return $this->taxiend;
    }

    /**
     * Set mountspell
     *
     * @param integer $mountspell
     *
     * @return CharacterBattlegroundData
     */
    public function setMountspell($mountspell)
    {
        $this->mountspell = $mountspell;

        return $this;
    }

    /**
     * Get mountspell
     *
     * @return integer
     */
    public function getMountspell()
    {
        return $this->mountspell;
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
