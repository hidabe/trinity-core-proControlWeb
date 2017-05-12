<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GameobjectQuestitem
 *
 * @ORM\Table(name="gameobject_questitem")
 * @ORM\Entity
 */
class GameobjectQuestitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ItemId", type="integer", nullable=false)
     */
    private $itemid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=false)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GameObjectEntry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gameobjectentry;

    /**
     * @var integer
     *
     * @ORM\Column(name="Idx", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idx;



    /**
     * Set itemid
     *
     * @param integer $itemid
     *
     * @return GameobjectQuestitem
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return GameobjectQuestitem
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
     * Set gameobjectentry
     *
     * @param integer $gameobjectentry
     *
     * @return GameobjectQuestitem
     */
    public function setGameobjectentry($gameobjectentry)
    {
        $this->gameobjectentry = $gameobjectentry;

        return $this;
    }

    /**
     * Get gameobjectentry
     *
     * @return integer
     */
    public function getGameobjectentry()
    {
        return $this->gameobjectentry;
    }

    /**
     * Set idx
     *
     * @param integer $idx
     *
     * @return GameobjectQuestitem
     */
    public function setIdx($idx)
    {
        $this->idx = $idx;

        return $this;
    }

    /**
     * Get idx
     *
     * @return integer
     */
    public function getIdx()
    {
        return $this->idx;
    }
}
