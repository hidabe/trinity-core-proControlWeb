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
 * @Route("/panel")
 */
class PanelController extends Controller
{
    /**
     * @Route("/", name="panel_dashboard")
     */
    public function dashboardAction(Request $request)
    {
        /** @var AccountHelper $accountHelper */
        $accountHelper = $this->get('tcpcwdb_wow_auth.account');
        $account = $accountHelper->getAccountFromUsername($this->getUser()->getUsername());

        /** @var EntityManager $emWowCharacters */
        $emWowCharacters = $this->get('doctrine.orm.wow_characters_entity_manager');
        /** @var CharactersRepository $repositoryCharacters */
        $repositoryCharacters = $emWowCharacters->getRepository("TCPCWDBWowCharactersBundle:Characters");
        $characters = $repositoryCharacters->getByAccountId($account->getId());

        return $this->render('panel/dashboard.html.twig', array(
            'characters' => $characters
        ));
    }

    /**
     * @Route("/changeLevel/{character_guid}/{amount}", name="panel_changeLevel")
     */
    public function changeLevelAction(Request $request, $character_guid, $amount) {
        /** @var AccountHelper $accountHelper */
        $accountHelper = $this->get('tcpcwdb_wow_auth.account');
        $account = $accountHelper->getAccountFromUsername($this->getUser()->getUsername());
        /** @var EntityManager $emWowCharacters */
        $emWowCharacters = $this->get('doctrine.orm.wow_characters_entity_manager');
        /** @var CharactersRepository $repositoryCharacters */
        $repositoryCharacters = $emWowCharacters->getRepository("TCPCWDBWowCharactersBundle:Characters");
        $characters = $repositoryCharacters->getByAccountId($account->getId());

        /** @var Characters $character */
        foreach($characters as $character) {
            if ($character->getGuid() == $character_guid) {
                if ($amount == "down") {
                    $character->setLevel($character->getLevel() - 1);
                } else if ($amount == "up") {
                    $character->setLevel($character->getLevel() + 1);
                }
                $emWowCharacters->persist($character);
                $emWowCharacters->flush();
            }
        }

        $this->addFlash('info', "Done!");

        return $this->redirect($this->generateUrl('panel_dashboard'));
    }
}