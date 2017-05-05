<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemSoulboundTradeData
 *
 * @ORM\Table(name="item_soulbound_trade_data")
 * @ORM\Entity
 */
class ItemSoulboundTradeData
{
    /**
     * @var string
     *
     * @ORM\Column(name="allowedPlayers", type="text", length=65535, nullable=false)
     */
    private $allowedplayers;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemGuid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemguid;



    /**
     * Set allowedplayers
     *
     * @param string $allowedplayers
     *
     * @return ItemSoulboundTradeData
     */
    public function setAllowedplayers($allowedplayers)
    {
        $this->allowedplayers = $allowedplayers;

        return $this;
    }

    /**
     * Get allowedplayers
     *
     * @return string
     */
    public function getAllowedplayers()
    {
        return $this->allowedplayers;
    }

    /**
     * Get itemguid
     *
     * @return integer
     */
    public function getItemguid()
    {
        return $this->itemguid;
    }
}
