<?php
namespace TCPCW\DB\WowWorldBundle\Twig;

use TCPCW\DB\WowWorldBundle\Service\ItemHelper;

class ItemExtension extends \Twig_Extension
{
    private $itemHelper;

    public function __construct(ItemHelper $itemHelper)
    {
        $this->itemHelper = $itemHelper;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('itemIcon', array($this, 'itemIconFilter')),
            new \Twig_SimpleFilter('itemHTMLTooltip', array($this, 'itemHTMLTooltipFilter'))
        );
    }

    public function itemIconFilter($itemId)
    {
        return $this->itemHelper->getIconFromItemId($itemId);
    }

    public function itemHTMLTooltipFilter($itemId) {
        return $this->itemHelper->getHTMLTooltipFromItemId($itemId);
    }
}
?>