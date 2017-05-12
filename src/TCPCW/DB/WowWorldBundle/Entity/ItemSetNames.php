<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemSetNames
 *
 * @ORM\Table(name="item_set_names")
 * @ORM\Entity
 */
class ItemSetNames
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="InventoryType", type="boolean", nullable=false)
     */
    private $inventorytype = '0';

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
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return ItemSetNames
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
     * Set inventorytype
     *
     * @param boolean $inventorytype
     *
     * @return ItemSetNames
     */
    public function setInventorytype($inventorytype)
    {
        $this->inventorytype = $inventorytype;

        return $this;
    }

    /**
     * Get inventorytype
     *
     * @return boolean
     */
    public function getInventorytype()
    {
        return $this->inventorytype;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return ItemSetNames
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
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
