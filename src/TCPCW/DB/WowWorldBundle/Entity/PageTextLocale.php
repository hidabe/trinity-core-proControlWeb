<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageTextLocale
 *
 * @ORM\Table(name="page_text_locale")
 * @ORM\Entity
 */
class PageTextLocale
{
    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=true)
     */
    private $text;

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
     * Set text
     *
     * @param string $text
     *
     * @return PageTextLocale
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return PageTextLocale
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
     * @return PageTextLocale
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
     * @return PageTextLocale
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
