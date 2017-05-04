<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ip2nationcountries
 *
 * @ORM\Table(name="ip2nationCountries", indexes={@ORM\Index(name="code", columns={"code"})})
 * @ORM\Entity
 */
class Ip2nationcountries
{
    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_2", type="string", length=2, nullable=false)
     */
    private $isoCode2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_3", type="string", length=3, nullable=true)
     */
    private $isoCode3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iso_country", type="string", length=255, nullable=false)
     */
    private $isoCountry = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=false)
     */
    private $country = '';

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", precision=10, scale=0, nullable=false)
     */
    private $lat = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="lon", type="float", precision=10, scale=0, nullable=false)
     */
    private $lon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;



    /**
     * Set isoCode2
     *
     * @param string $isoCode2
     *
     * @return Ip2nationcountries
     */
    public function setIsoCode2($isoCode2)
    {
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    /**
     * Get isoCode2
     *
     * @return string
     */
    public function getIsoCode2()
    {
        return $this->isoCode2;
    }

    /**
     * Set isoCode3
     *
     * @param string $isoCode3
     *
     * @return Ip2nationcountries
     */
    public function setIsoCode3($isoCode3)
    {
        $this->isoCode3 = $isoCode3;

        return $this;
    }

    /**
     * Get isoCode3
     *
     * @return string
     */
    public function getIsoCode3()
    {
        return $this->isoCode3;
    }

    /**
     * Set isoCountry
     *
     * @param string $isoCountry
     *
     * @return Ip2nationcountries
     */
    public function setIsoCountry($isoCountry)
    {
        $this->isoCountry = $isoCountry;

        return $this;
    }

    /**
     * Get isoCountry
     *
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->isoCountry;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Ip2nationcountries
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
     * Set lat
     *
     * @param float $lat
     *
     * @return Ip2nationcountries
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param float $lon
     *
     * @return Ip2nationcountries
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
