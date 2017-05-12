<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellCustomAttr
 *
 * @ORM\Table(name="spell_custom_attr")
 * @ORM\Entity
 */
class SpellCustomAttr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attributes", type="integer", nullable=false)
     */
    private $attributes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set attributes
     *
     * @param integer $attributes
     *
     * @return SpellCustomAttr
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return integer
     */
    public function getAttributes()
    {
        return $this->attributes;
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
}
