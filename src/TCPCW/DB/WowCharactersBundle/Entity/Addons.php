<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addons
 *
 * @ORM\Table(name="addons")
 * @ORM\Entity
 */
class Addons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="crc", type="integer", nullable=false)
     */
    private $crc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=120)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;



    /**
     * Set crc
     *
     * @param integer $crc
     *
     * @return Addons
     */
    public function setCrc($crc)
    {
        $this->crc = $crc;

        return $this;
    }

    /**
     * Get crc
     *
     * @return integer
     */
    public function getCrc()
    {
        return $this->crc;
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
}
