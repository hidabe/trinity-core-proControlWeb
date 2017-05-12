<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameWeather
 *
 * @ORM\Table(name="game_weather")
 * @ORM\Entity
 */
class GameWeather
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="spring_rain_chance", type="boolean", nullable=false)
     */
    private $springRainChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spring_snow_chance", type="boolean", nullable=false)
     */
    private $springSnowChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spring_storm_chance", type="boolean", nullable=false)
     */
    private $springStormChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="summer_rain_chance", type="boolean", nullable=false)
     */
    private $summerRainChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="summer_snow_chance", type="boolean", nullable=false)
     */
    private $summerSnowChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="summer_storm_chance", type="boolean", nullable=false)
     */
    private $summerStormChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fall_rain_chance", type="boolean", nullable=false)
     */
    private $fallRainChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fall_snow_chance", type="boolean", nullable=false)
     */
    private $fallSnowChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fall_storm_chance", type="boolean", nullable=false)
     */
    private $fallStormChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="winter_rain_chance", type="boolean", nullable=false)
     */
    private $winterRainChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="winter_snow_chance", type="boolean", nullable=false)
     */
    private $winterSnowChance = '25';

    /**
     * @var boolean
     *
     * @ORM\Column(name="winter_storm_chance", type="boolean", nullable=false)
     */
    private $winterStormChance = '25';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="zone", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zone;



    /**
     * Set springRainChance
     *
     * @param boolean $springRainChance
     *
     * @return GameWeather
     */
    public function setSpringRainChance($springRainChance)
    {
        $this->springRainChance = $springRainChance;

        return $this;
    }

    /**
     * Get springRainChance
     *
     * @return boolean
     */
    public function getSpringRainChance()
    {
        return $this->springRainChance;
    }

    /**
     * Set springSnowChance
     *
     * @param boolean $springSnowChance
     *
     * @return GameWeather
     */
    public function setSpringSnowChance($springSnowChance)
    {
        $this->springSnowChance = $springSnowChance;

        return $this;
    }

    /**
     * Get springSnowChance
     *
     * @return boolean
     */
    public function getSpringSnowChance()
    {
        return $this->springSnowChance;
    }

    /**
     * Set springStormChance
     *
     * @param boolean $springStormChance
     *
     * @return GameWeather
     */
    public function setSpringStormChance($springStormChance)
    {
        $this->springStormChance = $springStormChance;

        return $this;
    }

    /**
     * Get springStormChance
     *
     * @return boolean
     */
    public function getSpringStormChance()
    {
        return $this->springStormChance;
    }

    /**
     * Set summerRainChance
     *
     * @param boolean $summerRainChance
     *
     * @return GameWeather
     */
    public function setSummerRainChance($summerRainChance)
    {
        $this->summerRainChance = $summerRainChance;

        return $this;
    }

    /**
     * Get summerRainChance
     *
     * @return boolean
     */
    public function getSummerRainChance()
    {
        return $this->summerRainChance;
    }

    /**
     * Set summerSnowChance
     *
     * @param boolean $summerSnowChance
     *
     * @return GameWeather
     */
    public function setSummerSnowChance($summerSnowChance)
    {
        $this->summerSnowChance = $summerSnowChance;

        return $this;
    }

    /**
     * Get summerSnowChance
     *
     * @return boolean
     */
    public function getSummerSnowChance()
    {
        return $this->summerSnowChance;
    }

    /**
     * Set summerStormChance
     *
     * @param boolean $summerStormChance
     *
     * @return GameWeather
     */
    public function setSummerStormChance($summerStormChance)
    {
        $this->summerStormChance = $summerStormChance;

        return $this;
    }

    /**
     * Get summerStormChance
     *
     * @return boolean
     */
    public function getSummerStormChance()
    {
        return $this->summerStormChance;
    }

    /**
     * Set fallRainChance
     *
     * @param boolean $fallRainChance
     *
     * @return GameWeather
     */
    public function setFallRainChance($fallRainChance)
    {
        $this->fallRainChance = $fallRainChance;

        return $this;
    }

    /**
     * Get fallRainChance
     *
     * @return boolean
     */
    public function getFallRainChance()
    {
        return $this->fallRainChance;
    }

    /**
     * Set fallSnowChance
     *
     * @param boolean $fallSnowChance
     *
     * @return GameWeather
     */
    public function setFallSnowChance($fallSnowChance)
    {
        $this->fallSnowChance = $fallSnowChance;

        return $this;
    }

    /**
     * Get fallSnowChance
     *
     * @return boolean
     */
    public function getFallSnowChance()
    {
        return $this->fallSnowChance;
    }

    /**
     * Set fallStormChance
     *
     * @param boolean $fallStormChance
     *
     * @return GameWeather
     */
    public function setFallStormChance($fallStormChance)
    {
        $this->fallStormChance = $fallStormChance;

        return $this;
    }

    /**
     * Get fallStormChance
     *
     * @return boolean
     */
    public function getFallStormChance()
    {
        return $this->fallStormChance;
    }

    /**
     * Set winterRainChance
     *
     * @param boolean $winterRainChance
     *
     * @return GameWeather
     */
    public function setWinterRainChance($winterRainChance)
    {
        $this->winterRainChance = $winterRainChance;

        return $this;
    }

    /**
     * Get winterRainChance
     *
     * @return boolean
     */
    public function getWinterRainChance()
    {
        return $this->winterRainChance;
    }

    /**
     * Set winterSnowChance
     *
     * @param boolean $winterSnowChance
     *
     * @return GameWeather
     */
    public function setWinterSnowChance($winterSnowChance)
    {
        $this->winterSnowChance = $winterSnowChance;

        return $this;
    }

    /**
     * Get winterSnowChance
     *
     * @return boolean
     */
    public function getWinterSnowChance()
    {
        return $this->winterSnowChance;
    }

    /**
     * Set winterStormChance
     *
     * @param boolean $winterStormChance
     *
     * @return GameWeather
     */
    public function setWinterStormChance($winterStormChance)
    {
        $this->winterStormChance = $winterStormChance;

        return $this;
    }

    /**
     * Get winterStormChance
     *
     * @return boolean
     */
    public function getWinterStormChance()
    {
        return $this->winterStormChance;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return GameWeather
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
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
}
