<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TCPCW\DB\WowWorldBundle\Service\ItemHelper;

class DebugController extends Controller
{
    /**
     * @Route("/debug", name="debug")
     */
    public function debugAction(Request $request)
    {
        // Temporal action for Debug
        /** @var ItemHelper $itemHelper */
        $itemHelper = $this->get('tcpcwdb_wow_world.item');

        $text = $itemHelper->getIconFromItemId(148);
        $htmlTooltip = $itemHelper->getHTMLTooltipFromItemId(12689);
        var_dump($htmlTooltip);
        var_dump($text);
    }
}
