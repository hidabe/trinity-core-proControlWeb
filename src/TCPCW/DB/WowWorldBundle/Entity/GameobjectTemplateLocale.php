<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameobjectTemplateLocale
 *
 * @ORM\Table(name="gameobject_template_locale")
 * @ORM\Entity
 */
class GameobjectTemplateLocale
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="castBarCaption", type="text", length=65535, nullable=true)
     */
    private $castbarcaption;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locale;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return GameobjectTemplateLocale
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
     * Set castbarcaption
     *
     * @param string $castbarcaption
     *
     * @return GameobjectTemplateLocale
     */
    public function setCastbarcaption($castbarcaption)
    {
        $this->castbarcaption = $castbarcaption;

        return $this;
    }

    /**
     * Get castbarcaption
     *
     * @return string
     */
    public function getCastbarcaption()
    {
        return $this->castbarcaption;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return GameobjectTemplateLocale
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return GameobjectTemplateLocale
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return GameobjectTemplateLocale
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
}
