<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TCPCW\DB\WowAuthBundle\Services\AccountHelper;
use TCPCW\DB\WowCharactersBundle\Entity\Characters;
use TCPCW\DB\WowCharactersBundle\Entity\ItemInstance;
use TCPCW\DB\WowCharactersBundle\Entity\Repository\CharactersRepository;

/**
 * @Route("/panel/items")
 */
class PanelItemsController extends Controller
{
    /**
     * @Route("/view/{characterId}", name="panel_items_view")
     */
    public function viewAction(Request $request, $characterId)
    {
        /** @var AccountHelper $accountHelper */
        $accountHelper = $this->get('tcpcwdb_wow_auth.account');
        $account = $accountHelper->getAccountFromUsername($this->getUser()->getUsername());

        return $this->render('panel/items/view.html.twig', array());
    }
}