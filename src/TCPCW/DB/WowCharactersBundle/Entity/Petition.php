<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Petition
 *
 * @ORM\Table(name="petition", uniqueConstraints={@ORM\UniqueConstraint(name="index_ownerguid_petitionguid", columns={"ownerguid", "petitionguid"})})
 * @ORM\Entity
 */
class Petition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="petitionguid", type="integer", nullable=true)
     */
    private $petitionguid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerguid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ownerguid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type;



    /**
     * Set petitionguid
     *
     * @param integer $petitionguid
     *
     * @return Petition
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
     * Set name
     *
     * @param string $name
     *
     * @return Petition
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
     * Set ownerguid
     *
     * @param integer $ownerguid
     *
     * @return Petition
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
     * Set type
     *
     * @param boolean $type
     *
     * @return Petition
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
}
