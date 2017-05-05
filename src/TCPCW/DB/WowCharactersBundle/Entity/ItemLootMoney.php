<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemLootMoney
 *
 * @ORM\Table(name="item_loot_money")
 * @ORM\Entity
 */
class ItemLootMoney
{
    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="container_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $containerId;



    /**
     * Set money
     *
     * @param integer $money
     *
     * @return ItemLootMoney
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Get containerId
     *
     * @return integer
     */
    public function getContainerId()
    {
        return $this->containerId;
    }
}
