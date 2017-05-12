<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureEquipTemplate
 *
 * @ORM\Table(name="creature_equip_template")
 * @ORM\Entity
 */
class CreatureEquipTemplate
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ItemID1", type="integer", nullable=false)
     */
    private $itemid1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemID2", type="integer", nullable=false)
     */
    private $itemid2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ItemID3", type="integer", nullable=false)
     */
    private $itemid3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CreatureID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $creatureid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ID", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set itemid1
     *
     * @param integer $itemid1
     *
     * @return CreatureEquipTemplate
     */
    public function setItemid1($itemid1)
    {
        $this->itemid1 = $itemid1;

        return $this;
    }

    /**
     * Get itemid1
     *
     * @return integer
     */
    public function getItemid1()
    {
        return $this->itemid1;
    }

    /**
     * Set itemid2
     *
     * @param integer $itemid2
     *
     * @return CreatureEquipTemplate
     */
    public function setItemid2($itemid2)
    {
        $this->itemid2 = $itemid2;

        return $this;
    }

    /**
     * Get itemid2
     *
     * @return integer
     */
    public function getItemid2()
    {
        return $this->itemid2;
    }

    /**
     * Set itemid3
     *
     * @param integer $itemid3
     *
     * @return CreatureEquipTemplate
     */
    public function setItemid3($itemid3)
    {
        $this->itemid3 = $itemid3;

        return $this;
    }

    /**
     * Get itemid3
     *
     * @return integer
     */
    public function getItemid3()
    {
        return $this->itemid3;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return CreatureEquipTemplate
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
     * Set creatureid
     *
     * @param integer $creatureid
     *
     * @return CreatureEquipTemplate
     */
    public function setCreatureid($creatureid)
    {
        $this->creatureid = $creatureid;

        return $this;
    }

    /**
     * Get creatureid
     *
     * @return integer
     */
    public function getCreatureid()
    {
        return $this->creatureid;
    }

    /**
     * Set id
     *
     * @param boolean $id
     *
     * @return CreatureEquipTemplate
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }
}
