<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BroadcastTextLocale
 *
 * @ORM\Table(name="broadcast_text_locale")
 * @ORM\Entity
 */
class BroadcastTextLocale
{
    /**
     * @var string
     *
     * @ORM\Column(name="MaleText", type="text", length=65535, nullable=true)
     */
    private $maletext;

    /**
     * @var string
     *
     * @ORM\Column(name="FemaleText", type="text", length=65535, nullable=true)
     */
    private $femaletext;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locale;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set maletext
     *
     * @param string $maletext
     *
     * @return BroadcastTextLocale
     */
    public function setMaletext($maletext)
    {
        $this->maletext = $maletext;

        return $this;
    }

    /**
     * Get maletext
     *
     * @return string
     */
    public function getMaletext()
    {
        return $this->maletext;
    }

    /**
     * Set femaletext
     *
     * @param string $femaletext
     *
     * @return BroadcastTextLocale
     */
    public function setFemaletext($femaletext)
    {
        $this->femaletext = $femaletext;

        return $this;
    }

    /**
     * Get femaletext
     *
     * @return string
     */
    public function getFemaletext()
    {
        return $this->femaletext;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return BroadcastTextLocale
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
     * Set locale
     *
     * @param string $locale
     *
     * @return BroadcastTextLocale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return BroadcastTextLocale
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
}
