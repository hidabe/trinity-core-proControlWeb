<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetitionSign
 *
 * @ORM\Table(name="petition_sign", indexes={@ORM\Index(name="Idx_playerguid", columns={"playerguid"}), @ORM\Index(name="Idx_ownerguid", columns={"ownerguid"})})
 * @ORM\Entity
 */
class PetitionSign
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ownerguid", type="integer", nullable=false)
     */
    private $ownerguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="player_account", type="integer", nullable=false)
     */
    private $playerAccount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="petitionguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $petitionguid;

    /**
     * @var integer
     *
     * @ORM\Column(name="playerguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerguid;



    /**
     * Set ownerguid
     *
     * @param integer $ownerguid
     *
     * @return PetitionSign
     */
    public function setOwnerguid($ownerguid)
    {
        $this->ownerguid = $ownerguid;

        return $this;
    }

    /**
     * Get ownerguid
     *
     * @return integer
     */
    public function getOwnerguid()
    {
        return $this->ownerguid;
    }

    /**
     * Set playerAccount
     *
     * @param integer $playerAccount
     *
     * @return PetitionSign
     */
    public function setPlayerAccount($playerAccount)
    {
        $this->playerAccount = $playerAccount;

        return $this;
    }

    /**
     * Get playerAccount
     *
     * @return integer
     */
    public function getPlayerAccount()
    {
        return $this->playerAccount;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return PetitionSign
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set petitionguid
     *
     * @param integer $petitionguid
     *
     * @return PetitionSign
     */
    public function setPetitionguid($petitionguid)
    {
        $this->petitionguid = $petitionguid;

        return $this;
    }

    /**
     * Get petitionguid
     *
     * @return integer
     */
    public function getPetitionguid()
    {
        return $this->petitionguid;
    }

    /**
     * Set playerguid
     *
     * @param integer $playerguid
     *
     * @return PetitionSign
     */
    public function setPlayerguid($playerguid)
    {
        $this->playerguid = $playerguid;

        return $this;
    }

    /**
     * Get playerguid
     *
     * @return integer
     */
    public function getPlayerguid()
    {
        return $this->playerguid;
    }
}
