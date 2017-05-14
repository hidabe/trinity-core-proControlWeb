<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Repository\SetItemRepository;
use AppBundle\Services\CharacterHelper;
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
        /** @var CharacterHelper $characterHelper */
        $characterHelper = $this->get('app.characterHelper');
        $character = $characterHelper->getSecurityCharacter($characterId, $this->getUser());

        /** @var EntityManager $em */
        $em = $this->get('doctrine.orm.entity_manager');
        /** @var SetItemRepository $setItemRepository */
        $setItemRepository = $em->getRepository("AppBundle:SetItem");
        $setItems = $setItemRepository->getCompatibleByCharacter($character);

        return $this->render('panel/items/view.html.twig', array(
            'character' => $character,
            'setItems' => $setItems
        ));
    }

    /**
     * @Route("/save/{characterId}/{setItemId}", name="panel_items_save")
     */
    public function saveAction(Request $request, $characterId, $setItemId) {
        /** @var CharacterHelper $characterHelper */
        $characterHelper = $this->get('app.characterHelper');
        $character = $characterHelper->getSecurityCharacter($characterId, $this->getUser());

        /** @var EntityManager $em */
        $em = $this->get('doctrine.orm.entity_manager');
        /** @var SetItemRepository $setItemRepository */
        $setItemRepository = $em->getRepository("AppBundle:SetItem");

        $setItem = $setItemRepository->findOneById($setItemId);

        $characterHelper->addSetItem($character, $setItem);

        $this->addFlash('info', "Done!");

        return $this->redirect($this->generateUrl('panel_dashboard'));
    }
}