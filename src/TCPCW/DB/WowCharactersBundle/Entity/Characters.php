<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Characters
 *
 * @ORM\Table(name="characters", indexes={@ORM\Index(name="idx_account", columns={"account"}), @ORM\Index(name="idx_online", columns={"online"}), @ORM\Index(name="idx_name", columns={"name"})})
 * @ORM\Entity(repositoryClass="TCPCW\DB\WowCharactersBundle\Entity\Repository\CharactersRepository")
 */
class Characters
{
    public function getItemEntries() {
        $itemEntries = array();
        /** @var CharacterInventory $characterInventory */
        foreach($this->getCharacterInventories() as $characterInventory) {
            $itemEntries[] = $characterInventory->getItemInstance()->getItementry();
        }
        return $itemEntries;
    }

    /**
    * @ORM\OneToMany(targetEntity="CharacterInventory", mappedBy="guid")
    */
    private $characterInventories;

    /**
     * @var integer
     *
     * @ORM\Column(name="account", type="integer", nullable=false)
     */
    private $account = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="race", type="integer", nullable=false)
     */
    private $race = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="class", type="integer", nullable=false)
     */
    private $class = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="integer", nullable=false)
     */
    private $gender = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skin", type="integer", nullable=false)
     */
    private $skin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="face", type="integer", nullable=false)
     */
    private $face = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hairStyle", type="integer", nullable=false)
     */
    private $hairstyle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hairColor", type="integer", nullable=false)
     */
    private $haircolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="facialStyle", type="integer", nullable=false)
     */
    private $facialstyle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="bankSlots", type="integer", nullable=false)
     */
    private $bankslots = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="restState", type="integer", nullable=false)
     */
    private $reststate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="playerFlags", type="integer", nullable=false)
     */
    private $playerflags = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="position_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $positionZ = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint", nullable=false)
     */
    private $map = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="instance_id", type="integer", nullable=false)
     */
    private $instanceId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="instance_mode_mask", type="integer", nullable=false)
     */
    private $instanceModeMask = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="orientation", type="float", precision=10, scale=0, nullable=false)
     */
    private $orientation = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="taximask", type="text", length=65535, nullable=false)
     */
    private $taximask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="integer", nullable=false)
     */
    private $online = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cinematic", type="integer", nullable=false)
     */
    private $cinematic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totaltime", type="integer", nullable=false)
     */
    private $totaltime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="leveltime", type="integer", nullable=false)
     */
    private $leveltime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="logout_time", type="integer", nullable=false)
     */
    private $logoutTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_logout_resting", type="integer", nullable=false)
     */
    private $isLogoutResting = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rest_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $restBonus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resettalents_cost", type="integer", nullable=false)
     */
    private $resettalentsCost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resettalents_time", type="integer", nullable=false)
     */
    private $resettalentsTime = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="trans_x", type="float", precision=10, scale=0, nullable=false)
     */
    private $transX = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="trans_y", type="float", precision=10, scale=0, nullable=false)
     */
    private $transY = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="trans_z", type="float", precision=10, scale=0, nullable=false)
     */
    private $transZ = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="trans_o", type="float", precision=10, scale=0, nullable=false)
     */
    private $transO = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="transguid", type="integer", nullable=false)
     */
    private $transguid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="extra_flags", type="smallint", nullable=false)
     */
    private $extraFlags = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stable_slots", type="integer", nullable=false)
     */
    private $stableSlots = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="at_login", type="smallint", nullable=false)
     */
    private $atLogin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone", type="smallint", nullable=false)
     */
    private $zone = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="death_expire_time", type="integer", nullable=false)
     */
    private $deathExpireTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="taxi_path", type="text", length=65535, nullable=true)
     */
    private $taxiPath;

    /**
     * @var integer
     *
     * @ORM\Column(name="arenaPoints", type="integer", nullable=false)
     */
    private $arenapoints = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalHonorPoints", type="integer", nullable=false)
     */
    private $totalhonorpoints = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="todayHonorPoints", type="integer", nullable=false)
     */
    private $todayhonorpoints = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="yesterdayHonorPoints", type="integer", nullable=false)
     */
    private $yesterdayhonorpoints = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="totalKills", type="integer", nullable=false)
     */
    private $totalkills = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="todayKills", type="smallint", nullable=false)
     */
    private $todaykills = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="yesterdayKills", type="smallint", nullable=false)
     */
    private $yesterdaykills = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="chosenTitle", type="integer", nullable=false)
     */
    private $chosentitle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="knownCurrencies", type="bigint", nullable=false)
     */
    private $knowncurrencies = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="watchedFaction", type="integer", nullable=false)
     */
    private $watchedfaction = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="drunk", type="integer", nullable=false)
     */
    private $drunk = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="health", type="integer", nullable=false)
     */
    private $health = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power1", type="integer", nullable=false)
     */
    private $power1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power2", type="integer", nullable=false)
     */
    private $power2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power3", type="integer", nullable=false)
     */
    private $power3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power4", type="integer", nullable=false)
     */
    private $power4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power5", type="integer", nullable=false)
     */
    private $power5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power6", type="integer", nullable=false)
     */
    private $power6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="power7", type="integer", nullable=false)
     */
    private $power7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="latency", type="integer", nullable=false)
     */
    private $latency = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="talentGroupsCount", type="integer", nullable=false)
     */
    private $talentgroupscount = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="activeTalentGroup", type="integer", nullable=false)
     */
    private $activetalentgroup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="exploredZones", type="text", nullable=true)
     */
    private $exploredzones;

    /**
     * @var string
     *
     * @ORM\Column(name="equipmentCache", type="text", nullable=true)
     */
    private $equipmentcache;

    /**
     * @var integer
     *
     * @ORM\Column(name="ammoId", type="integer", nullable=false)
     */
    private $ammoid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="knownTitles", type="text", nullable=true)
     */
    private $knowntitles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actionBars", type="integer", nullable=false)
     */
    private $actionbars = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="grantableLevels", type="integer", nullable=false)
     */
    private $grantablelevels = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deleteInfos_Account", type="integer", nullable=true)
     */
    private $deleteinfosAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="deleteInfos_Name", type="string", length=12, nullable=true)
     */
    private $deleteinfosName;

    /**
     * @var integer
     *
     * @ORM\Column(name="deleteDate", type="integer", nullable=true)
     */
    private $deletedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set account
     *
     * @param integer $account
     *
     * @return Characters
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return integer
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Characters
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set race
     *
     * @param boolean $race
     *
     * @return Characters
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return boolean
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set class
     *
     * @param boolean $class
     *
     * @return Characters
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return boolean
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     *
     * @return Characters
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set level
     *
     * @param boolean $level
     *
     * @return Characters
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set xp
     *
     * @param integer $xp
     *
     * @return Characters
     */
    public function setXp($xp)
    {
        $this->xp = $xp;

        return $this;
    }

    /**
     * Get xp
     *
     * @return integer
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return Characters
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set skin
     *
     * @param boolean $skin
     *
     * @return Characters
     */
    public function setSkin($skin)
    {
        $this->skin = $skin;

        return $this;
    }

    /**
     * Get skin
     *
     * @return boolean
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set face
     *
     * @param boolean $face
     *
     * @return Characters
     */
    public function setFace($face)
    {
        $this->face = $face;

        return $this;
    }

    /**
     * Get face
     *
     * @return boolean
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * Set hairstyle
     *
     * @param boolean $hairstyle
     *
     * @return Characters
     */
    public function setHairstyle($hairstyle)
    {
        $this->hairstyle = $hairstyle;

        return $this;
    }

    /**
     * Get hairstyle
     *
     * @return boolean
     */
    public function getHairstyle()
    {
        return $this->hairstyle;
    }

    /**
     * Set haircolor
     *
     * @param boolean $haircolor
     *
     * @return Characters
     */
    public function setHaircolor($haircolor)
    {
        $this->haircolor = $haircolor;

        return $this;
    }

    /**
     * Get haircolor
     *
     * @return boolean
     */
    public function getHaircolor()
    {
        return $this->haircolor;
    }

    /**
     * Set facialstyle
     *
     * @param boolean $facialstyle
     *
     * @return Characters
     */
    public function setFacialstyle($facialstyle)
    {
        $this->facialstyle = $facialstyle;

        return $this;
    }

    /**
     * Get facialstyle
     *
     * @return boolean
     */
    public function getFacialstyle()
    {
        return $this->facialstyle;
    }

    /**
     * Set bankslots
     *
     * @param boolean $bankslots
     *
     * @return Characters
     */
    public function setBankslots($bankslots)
    {
        $this->bankslots = $bankslots;

        return $this;
    }

    /**
     * Get bankslots
     *
     * @return boolean
     */
    public function getBankslots()
    {
        return $this->bankslots;
    }

    /**
     * Set reststate
     *
     * @param boolean $reststate
     *
     * @return Characters
     */
    public function setReststate($reststate)
    {
        $this->reststate = $reststate;

        return $this;
    }

    /**
     * Get reststate
     *
     * @return boolean
     */
    public function getReststate()
    {
        return $this->reststate;
    }

    /**
     * Set playerflags
     *
     * @param integer $playerflags
     *
     * @return Characters
     */
    public function setPlayerflags($playerflags)
    {
        $this->playerflags = $playerflags;

        return $this;
    }

    /**
     * Get playerflags
     *
     * @return integer
     */
    public function getPlayerflags()
    {
        return $this->playerflags;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return Characters
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get positionX
     *
     * @return float
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set positionY
     *
     * @param float $positionY
     *
     * @return Characters
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }

    /**
     * Get positionY
     *
     * @return float
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set positionZ
     *
     * @param float $positionZ
     *
     * @return Characters
     */
    public function setPositionZ($positionZ)
    {
        $this->positionZ = $positionZ;

        return $this;
    }

    /**
     * Get positionZ
     *
     * @return float
     */
    public function getPositionZ()
    {
        return $this->positionZ;
    }

    /**
     * Set map
     *
     * @param integer $map
     *
     * @return Characters
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set instanceId
     *
     * @param integer $instanceId
     *
     * @return Characters
     */
    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;

        return $this;
    }

    /**
     * Get instanceId
     *
     * @return integer
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }

    /**
     * Set instanceModeMask
     *
     * @param boolean $instanceModeMask
     *
     * @return Characters
     */
    public function setInstanceModeMask($instanceModeMask)
    {
        $this->instanceModeMask = $instanceModeMask;

        return $this;
    }

    /**
     * Get instanceModeMask
     *
     * @return boolean
     */
    public function getInstanceModeMask()
    {
        return $this->instanceModeMask;
    }

    /**
     * Set orientation
     *
     * @param float $orientation
     *
     * @return Characters
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return float
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set taximask
     *
     * @param string $taximask
     *
     * @return Characters
     */
    public function setTaximask($taximask)
    {
        $this->taximask = $taximask;

        return $this;
    }

    /**
     * Get taximask
     *
     * @return string
     */
    public function getTaximask()
    {
        return $this->taximask;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Characters
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set cinematic
     *
     * @param boolean $cinematic
     *
     * @return Characters
     */
    public function setCinematic($cinematic)
    {
        $this->cinematic = $cinematic;

        return $this;
    }

    /**
     * Get cinematic
     *
     * @return boolean
     */
    public function getCinematic()
    {
        return $this->cinematic;
    }

    /**
     * Set totaltime
     *
     * @param integer $totaltime
     *
     * @return Characters
     */
    public function setTotaltime($totaltime)
    {
        $this->totaltime = $totaltime;

        return $this;
    }

    /**
     * Get totaltime
     *
     * @return integer
     */
    public function getTotaltime()
    {
        return $this->totaltime;
    }

    /**
     * Set leveltime
     *
     * @param integer $leveltime
     *
     * @return Characters
     */
    public function setLeveltime($leveltime)
    {
        $this->leveltime = $leveltime;

        return $this;
    }

    /**
     * Get leveltime
     *
     * @return integer
     */
    public function getLeveltime()
    {
        return $this->leveltime;
    }

    /**
     * Set logoutTime
     *
     * @param integer $logoutTime
     *
     * @return Characters
     */
    public function setLogoutTime($logoutTime)
    {
        $this->logoutTime = $logoutTime;

        return $this;
    }

    /**
     * Get logoutTime
     *
     * @return integer
     */
    public function getLogoutTime()
    {
        return $this->logoutTime;
    }

    /**
     * Set isLogoutResting
     *
     * @param boolean $isLogoutResting
     *
     * @return Characters
     */
    public function setIsLogoutResting($isLogoutResting)
    {
        $this->isLogoutResting = $isLogoutResting;

        return $this;
    }

    /**
     * Get isLogoutResting
     *
     * @return boolean
     */
    public function getIsLogoutResting()
    {
        return $this->isLogoutResting;
    }

    /**
     * Set restBonus
     *
     * @param float $restBonus
     *
     * @return Characters
     */
    public function setRestBonus($restBonus)
    {
        $this->restBonus = $restBonus;

        return $this;
    }

    /**
     * Get restBonus
     *
     * @return float
     */
    public function getRestBonus()
    {
        return $this->restBonus;
    }

    /**
     * Set resettalentsCost
     *
     * @param integer $resettalentsCost
     *
     * @return Characters
     */
    public function setResettalentsCost($resettalentsCost)
    {
        $this->resettalentsCost = $resettalentsCost;

        return $this;
    }

    /**
     * Get resettalentsCost
     *
     * @return integer
     */
    public function getResettalentsCost()
    {
        return $this->resettalentsCost;
    }

    /**
     * Set resettalentsTime
     *
     * @param integer $resettalentsTime
     *
     * @return Characters
     */
    public function setResettalentsTime($resettalentsTime)
    {
        $this->resettalentsTime = $resettalentsTime;

        return $this;
    }

    /**
     * Get resettalentsTime
     *
     * @return integer
     */
    public function getResettalentsTime()
    {
        return $this->resettalentsTime;
    }

    /**
     * Set transX
     *
     * @param float $transX
     *
     * @return Characters
     */
    public function setTransX($transX)
    {
        $this->transX = $transX;

        return $this;
    }

    /**
     * Get transX
     *
     * @return float
     */
    public function getTransX()
    {
        return $this->transX;
    }

    /**
     * Set transY
     *
     * @param float $transY
     *
     * @return Characters
     */
    public function setTransY($transY)
    {
        $this->transY = $transY;

        return $this;
    }

    /**
     * Get transY
     *
     * @return float
     */
    public function getTransY()
    {
        return $this->transY;
    }

    /**
     * Set transZ
     *
     * @param float $transZ
     *
     * @return Characters
     */
    public function setTransZ($transZ)
    {
        $this->transZ = $transZ;

        return $this;
    }

    /**
     * Get transZ
     *
     * @return float
     */
    public function getTransZ()
    {
        return $this->transZ;
    }

    /**
     * Set transO
     *
     * @param float $transO
     *
     * @return Characters
     */
    public function setTransO($transO)
    {
        $this->transO = $transO;

        return $this;
    }

    /**
     * Get transO
     *
     * @return float
     */
    public function getTransO()
    {
        return $this->transO;
    }

    /**
     * Set transguid
     *
     * @param integer $transguid
     *
     * @return Characters
     */
    public function setTransguid($transguid)
    {
        $this->transguid = $transguid;

        return $this;
    }

    /**
     * Get transguid
     *
     * @return integer
     */
    public function getTransguid()
    {
        return $this->transguid;
    }

    /**
     * Set extraFlags
     *
     * @param integer $extraFlags
     *
     * @return Characters
     */
    public function setExtraFlags($extraFlags)
    {
        $this->extraFlags = $extraFlags;

        return $this;
    }

    /**
     * Get extraFlags
     *
     * @return integer
     */
    public function getExtraFlags()
    {
        return $this->extraFlags;
    }

    /**
     * Set stableSlots
     *
     * @param boolean $stableSlots
     *
     * @return Characters
     */
    public function setStableSlots($stableSlots)
    {
        $this->stableSlots = $stableSlots;

        return $this;
    }

    /**
     * Get stableSlots
     *
     * @return boolean
     */
    public function getStableSlots()
    {
        return $this->stableSlots;
    }

    /**
     * Set atLogin
     *
     * @param integer $atLogin
     *
     * @return Characters
     */
    public function setAtLogin($atLogin)
    {
        $this->atLogin = $atLogin;

        return $this;
    }

    /**
     * Get atLogin
     *
     * @return integer
     */
    public function getAtLogin()
    {
        return $this->atLogin;
    }

    /**
     * Set zone
     *
     * @param integer $zone
     *
     * @return Characters
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return integer
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set deathExpireTime
     *
     * @param integer $deathExpireTime
     *
     * @return Characters
     */
    public function setDeathExpireTime($deathExpireTime)
    {
        $this->deathExpireTime = $deathExpireTime;

        return $this;
    }

    /**
     * Get deathExpireTime
     *
     * @return integer
     */
    public function getDeathExpireTime()
    {
        return $this->deathExpireTime;
    }

    /**
     * Set taxiPath
     *
     * @param string $taxiPath
     *
     * @return Characters
     */
    public function setTaxiPath($taxiPath)
    {
        $this->taxiPath = $taxiPath;

        return $this;
    }

    /**
     * Get taxiPath
     *
     * @return string
     */
    public function getTaxiPath()
    {
        return $this->taxiPath;
    }

    /**
     * Set arenapoints
     *
     * @param integer $arenapoints
     *
     * @return Characters
     */
    public function setArenapoints($arenapoints)
    {
        $this->arenapoints = $arenapoints;

        return $this;
    }

    /**
     * Get arenapoints
     *
     * @return integer
     */
    public function getArenapoints()
    {
        return $this->arenapoints;
    }

    /**
     * Set totalhonorpoints
     *
     * @param integer $totalhonorpoints
     *
     * @return Characters
     */
    public function setTotalhonorpoints($totalhonorpoints)
    {
        $this->totalhonorpoints = $totalhonorpoints;

        return $this;
    }

    /**
     * Get totalhonorpoints
     *
     * @return integer
     */
    public function getTotalhonorpoints()
    {
        return $this->totalhonorpoints;
    }

    /**
     * Set todayhonorpoints
     *
     * @param integer $todayhonorpoints
     *
     * @return Characters
     */
    public function setTodayhonorpoints($todayhonorpoints)
    {
        $this->todayhonorpoints = $todayhonorpoints;

        return $this;
    }

    /**
     * Get todayhonorpoints
     *
     * @return integer
     */
    public function getTodayhonorpoints()
    {
        return $this->todayhonorpoints;
    }

    /**
     * Set yesterdayhonorpoints
     *
     * @param integer $yesterdayhonorpoints
     *
     * @return Characters
     */
    public function setYesterdayhonorpoints($yesterdayhonorpoints)
    {
        $this->yesterdayhonorpoints = $yesterdayhonorpoints;

        return $this;
    }

    /**
     * Get yesterdayhonorpoints
     *
     * @return integer
     */
    public function getYesterdayhonorpoints()
    {
        return $this->yesterdayhonorpoints;
    }

    /**
     * Set totalkills
     *
     * @param integer $totalkills
     *
     * @return Characters
     */
    public function setTotalkills($totalkills)
    {
        $this->totalkills = $totalkills;

        return $this;
    }

    /**
     * Get totalkills
     *
     * @return integer
     */
    public function getTotalkills()
    {
        return $this->totalkills;
    }

    /**
     * Set todaykills
     *
     * @param integer $todaykills
     *
     * @return Characters
     */
    public function setTodaykills($todaykills)
    {
        $this->todaykills = $todaykills;

        return $this;
    }

    /**
     * Get todaykills
     *
     * @return integer
     */
    public function getTodaykills()
    {
        return $this->todaykills;
    }

    /**
     * Set yesterdaykills
     *
     * @param integer $yesterdaykills
     *
     * @return Characters
     */
    public function setYesterdaykills($yesterdaykills)
    {
        $this->yesterdaykills = $yesterdaykills;

        return $this;
    }

    /**
     * Get yesterdaykills
     *
     * @return integer
     */
    public function getYesterdaykills()
    {
        return $this->yesterdaykills;
    }

    /**
     * Set chosentitle
     *
     * @param integer $chosentitle
     *
     * @return Characters
     */
    public function setChosentitle($chosentitle)
    {
        $this->chosentitle = $chosentitle;

        return $this;
    }

    /**
     * Get chosentitle
     *
     * @return integer
     */
    public function getChosentitle()
    {
        return $this->chosentitle;
    }

    /**
     * Set knowncurrencies
     *
     * @param integer $knowncurrencies
     *
     * @return Characters
     */
    public function setKnowncurrencies($knowncurrencies)
    {
        $this->knowncurrencies = $knowncurrencies;

        return $this;
    }

    /**
     * Get knowncurrencies
     *
     * @return integer
     */
    public function getKnowncurrencies()
    {
        return $this->knowncurrencies;
    }

    /**
     * Set watchedfaction
     *
     * @param integer $watchedfaction
     *
     * @return Characters
     */
    public function setWatchedfaction($watchedfaction)
    {
        $this->watchedfaction = $watchedfaction;

        return $this;
    }

    /**
     * Get watchedfaction
     *
     * @return integer
     */
    public function getWatchedfaction()
    {
        return $this->watchedfaction;
    }

    /**
     * Set drunk
     *
     * @param boolean $drunk
     *
     * @return Characters
     */
    public function setDrunk($drunk)
    {
        $this->drunk = $drunk;

        return $this;
    }

    /**
     * Get drunk
     *
     * @return boolean
     */
    public function getDrunk()
    {
        return $this->drunk;
    }

    /**
     * Set health
     *
     * @param integer $health
     *
     * @return Characters
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set power1
     *
     * @param integer $power1
     *
     * @return Characters
     */
    public function setPower1($power1)
    {
        $this->power1 = $power1;

        return $this;
    }

    /**
     * Get power1
     *
     * @return integer
     */
    public function getPower1()
    {
        return $this->power1;
    }

    /**
     * Set power2
     *
     * @param integer $power2
     *
     * @return Characters
     */
    public function setPower2($power2)
    {
        $this->power2 = $power2;

        return $this;
    }

    /**
     * Get power2
     *
     * @return integer
     */
    public function getPower2()
    {
        return $this->power2;
    }

    /**
     * Set power3
     *
     * @param integer $power3
     *
     * @return Characters
     */
    public function setPower3($power3)
    {
        $this->power3 = $power3;

        return $this;
    }

    /**
     * Get power3
     *
     * @return integer
     */
    public function getPower3()
    {
        return $this->power3;
    }

    /**
     * Set power4
     *
     * @param integer $power4
     *
     * @return Characters
     */
    public function setPower4($power4)
    {
        $this->power4 = $power4;

        return $this;
    }

    /**
     * Get power4
     *
     * @return integer
     */
    public function getPower4()
    {
        return $this->power4;
    }

    /**
     * Set power5
     *
     * @param integer $power5
     *
     * @return Characters
     */
    public function setPower5($power5)
    {
        $this->power5 = $power5;

        return $this;
    }

    /**
     * Get power5
     *
     * @return integer
     */
    public function getPower5()
    {
        return $this->power5;
    }

    /**
     * Set power6
     *
     * @param integer $power6
     *
     * @return Characters
     */
    public function setPower6($power6)
    {
        $this->power6 = $power6;

        return $this;
    }

    /**
     * Get power6
     *
     * @return integer
     */
    public function getPower6()
    {
        return $this->power6;
    }

    /**
     * Set power7
     *
     * @param integer $power7
     *
     * @return Characters
     */
    public function setPower7($power7)
    {
        $this->power7 = $power7;

        return $this;
    }

    /**
     * Get power7
     *
     * @return integer
     */
    public function getPower7()
    {
        return $this->power7;
    }

    /**
     * Set latency
     *
     * @param integer $latency
     *
     * @return Characters
     */
    public function setLatency($latency)
    {
        $this->latency = $latency;

        return $this;
    }

    /**
     * Get latency
     *
     * @return integer
     */
    public function getLatency()
    {
        return $this->latency;
    }

    /**
     * Set talentgroupscount
     *
     * @param boolean $talentgroupscount
     *
     * @return Characters
     */
    public function setTalentgroupscount($talentgroupscount)
    {
        $this->talentgroupscount = $talentgroupscount;

        return $this;
    }

    /**
     * Get talentgroupscount
     *
     * @return boolean
     */
    public function getTalentgroupscount()
    {
        return $this->talentgroupscount;
    }

    /**
     * Set activetalentgroup
     *
     * @param boolean $activetalentgroup
     *
     * @return Characters
     */
    public function setActivetalentgroup($activetalentgroup)
    {
        $this->activetalentgroup = $activetalentgroup;

        return $this;
    }

    /**
     * Get activetalentgroup
     *
     * @return boolean
     */
    public function getActivetalentgroup()
    {
        return $this->activetalentgroup;
    }

    /**
     * Set exploredzones
     *
     * @param string $exploredzones
     *
     * @return Characters
     */
    public function setExploredzones($exploredzones)
    {
        $this->exploredzones = $exploredzones;

        return $this;
    }

    /**
     * Get exploredzones
     *
     * @return string
     */
    public function getExploredzones()
    {
        return $this->exploredzones;
    }

    /**
     * Set equipmentcache
     *
     * @param string $equipmentcache
     *
     * @return Characters
     */
    public function setEquipmentcache($equipmentcache)
    {
        $this->equipmentcache = $equipmentcache;

        return $this;
    }

    /**
     * Get equipmentcache
     *
     * @return string
     */
    public function getEquipmentcache()
    {
        return $this->equipmentcache;
    }

    /**
     * Set ammoid
     *
     * @param integer $ammoid
     *
     * @return Characters
     */
    public function setAmmoid($ammoid)
    {
        $this->ammoid = $ammoid;

        return $this;
    }

    /**
     * Get ammoid
     *
     * @return integer
     */
    public function getAmmoid()
    {
        return $this->ammoid;
    }

    /**
     * Set knowntitles
     *
     * @param string $knowntitles
     *
     * @return Characters
     */
    public function setKnowntitles($knowntitles)
    {
        $this->knowntitles = $knowntitles;

        return $this;
    }

    /**
     * Get knowntitles
     *
     * @return string
     */
    public function getKnowntitles()
    {
        return $this->knowntitles;
    }

    /**
     * Set actionbars
     *
     * @param boolean $actionbars
     *
     * @return Characters
     */
    public function setActionbars($actionbars)
    {
        $this->actionbars = $actionbars;

        return $this;
    }

    /**
     * Get actionbars
     *
     * @return boolean
     */
    public function getActionbars()
    {
        return $this->actionbars;
    }

    /**
     * Set grantablelevels
     *
     * @param boolean $grantablelevels
     *
     * @return Characters
     */
    public function setGrantablelevels($grantablelevels)
    {
        $this->grantablelevels = $grantablelevels;

        return $this;
    }

    /**
     * Get grantablelevels
     *
     * @return boolean
     */
    public function getGrantablelevels()
    {
        return $this->grantablelevels;
    }

    /**
     * Set deleteinfosAccount
     *
     * @param integer $deleteinfosAccount
     *
     * @return Characters
     */
    public function setDeleteinfosAccount($deleteinfosAccount)
    {
        $this->deleteinfosAccount = $deleteinfosAccount;

        return $this;
    }

    /**
     * Get deleteinfosAccount
     *
     * @return integer
     */
    public function getDeleteinfosAccount()
    {
        return $this->deleteinfosAccount;
    }

    /**
     * Set deleteinfosName
     *
     * @param string $deleteinfosName
     *
     * @return Characters
     */
    public function setDeleteinfosName($deleteinfosName)
    {
        $this->deleteinfosName = $deleteinfosName;

        return $this;
    }

    /**
     * Get deleteinfosName
     *
     * @return string
     */
    public function getDeleteinfosName()
    {
        return $this->deleteinfosName;
    }

    /**
     * Set deletedate
     *
     * @param integer $deletedate
     *
     * @return Characters
     */
    public function setDeletedate($deletedate)
    {
        $this->deletedate = $deletedate;

        return $this;
    }

    /**
     * Get deletedate
     *
     * @return integer
     */
    public function getDeletedate()
    {
        return $this->deletedate;
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
     * Constructor
     */
    public function __construct()
    {
        $this->characterInventories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add characterInventory
     *
     * @param \TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory $characterInventory
     *
     * @return Characters
     */
    public function addCharacterInventory(\TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory $characterInventory)
    {
        $this->characterInventories[] = $characterInventory;

        return $this;
    }

    /**
     * Remove characterInventory
     *
     * @param \TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory $characterInventory
     */
    public function removeCharacterInventory(\TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory $characterInventory)
    {
        $this->characterInventories->removeElement($characterInventory);
    }

    /**
     * Get characterInventories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCharacterInventories()
    {
        return $this->characterInventories;
    }
}
