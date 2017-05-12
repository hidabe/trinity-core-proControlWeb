<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstanceTemplate
 *
 * @ORM\Table(name="instance_template")
 * @ORM\Entity
 */
class InstanceTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="smallint", nullable=false)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="script", type="string", length=128, nullable=false)
     */
    private $script = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowMount", type="boolean", nullable=false)
     */
    private $allowmount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="map", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $map;



    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return InstanceTemplate
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set script
     *
     * @param string $script
     *
     * @return InstanceTemplate
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set allowmount
     *
     * @param boolean $allowmount
     *
     * @return InstanceTemplate
     */
    public function setAllowmount($allowmount)
    {
        $this->allowmount = $allowmount;

        return $this;
    }

    /**
     * Get allowmount
     *
     * @return boolean
     */
    public function getAllowmount()
    {
        return $this->allowmount;
    }

    /**
     * Get map
     *
     * @return integer
     */
    public function getMap()
    {
        return $this->map;
    }
}
