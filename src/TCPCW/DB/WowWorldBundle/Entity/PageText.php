<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageText
 *
 * @ORM\Table(name="page_text")
 * @ORM\Entity
 */
class PageText
{
    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="NextPageID", type="integer", nullable=false)
     */
    private $nextpageid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set text
     *
     * @param string $text
     *
     * @return PageText
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
     * Set nextpageid
     *
     * @param integer $nextpageid
     *
     * @return PageText
     */
    public function setNextpageid($nextpageid)
    {
        $this->nextpageid = $nextpageid;

        return $this;
    }

    /**
     * Get nextpageid
     *
     * @return integer
     */
    public function getNextpageid()
    {
        return $this->nextpageid;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return PageText
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
