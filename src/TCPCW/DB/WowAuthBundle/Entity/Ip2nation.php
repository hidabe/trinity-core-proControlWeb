<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ip2nation
 *
 * @ORM\Table(name="ip2nation", uniqueConstraints={@ORM\UniqueConstraint(name="ip_4", columns={"ip"})}, indexes={@ORM\Index(name="ip", columns={"ip"}), @ORM\Index(name="ip_2", columns={"ip"}), @ORM\Index(name="ip_3", columns={"ip"})})
 * @ORM\Entity
 */
class Ip2nation
{
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=false)
     */
    private $country = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="ip", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ip;



    /**
     * Set country
     *
     * @param string $country
     *
     * @return Ip2nation
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get ip
     *
     * @return integer
     */
    public function getIp()
    {
        return $this->ip;
    }
}
