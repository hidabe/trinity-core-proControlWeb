<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemRefundInstance
 *
 * @ORM\Table(name="item_refund_instance")
 * @ORM\Entity
 */
class ItemRefundInstance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="paidMoney", type="integer", nullable=false)
     */
    private $paidmoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="paidExtendedCost", type="smallint", nullable=false)
     */
    private $paidextendedcost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="item_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemGuid;

    /**
     * @var integer
     *
     * @ORM\Column(name="player_guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $playerGuid;



    /**
     * Set paidmoney
     *
     * @param integer $paidmoney
     *
     * @return ItemRefundInstance
     */
    public function setPaidmoney($paidmoney)
    {
        $this->paidmoney = $paidmoney;

        return $this;
    }

    /**
     * Get paidmoney
     *
     * @return integer
     */
    public function getPaidmoney()
    {
        return $this->paidmoney;
    }

    /**
     * Set paidextendedcost
     *
     * @param integer $paidextendedcost
     *
     * @return ItemRefundInstance
     */
    public function setPaidextendedcost($paidextendedcost)
    {
        $this->paidextendedcost = $paidextendedcost;

        return $this;
    }

    /**
     * Get paidextendedcost
     *
     * @return integer
     */
    public function getPaidextendedcost()
    {
        return $this->paidextendedcost;
    }

    /**
     * Set itemGuid
     *
     * @param integer $itemGuid
     *
     * @return ItemRefundInstance
     */
    public function setItemGuid($itemGuid)
    {
        $this->itemGuid = $itemGuid;

        return $this;
    }

    /**
     * Get itemGuid
     *
     * @return integer
     */
    public function getItemGuid()
    {
        return $this->itemGuid;
    }

    /**
     * Set playerGuid
     *
     * @param integer $playerGuid
     *
     * @return ItemRefundInstance
     */
    public function setPlayerGuid($playerGuid)
    {
        $this->playerGuid = $playerGuid;

        return $this;
    }

    /**
     * Get playerGuid
     *
     * @return integer
     */
    public function getPlayerGuid()
    {
        return $this->playerGuid;
    }
}
