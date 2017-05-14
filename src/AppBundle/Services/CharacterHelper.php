<?php
namespace AppBundle\Services;

use AppBundle\Entity\SetItem;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use TCPCW\DB\WowAuthBundle\Services\AccountHelper;
use TCPCW\DB\WowCharactersBundle\Entity\CharacterInventory;
use TCPCW\DB\WowCharactersBundle\Entity\Characters;
use TCPCW\DB\WowCharactersBundle\Entity\ItemInstance;
use TCPCW\DB\WowCharactersBundle\Entity\Repository\CharactersRepository;

class CharacterHelper
{
    public function __construct(EntityManager $emAuth, EntityManager $emCharacters, AccountHelper $accountHelper)
    {
        $this->emAuth = $emAuth;
        $this->emCharacters = $emCharacters;
        $this->accountHelper = $accountHelper;
    }

    public function getSecurityCharacters(User $user = null) {
        $account = $this->accountHelper->getAccountFromUsername($user->getUsername());
        /** @var CharactersRepository $repositoryCharacters */
        $repositoryCharacters = $this->emCharacters->getRepository("TCPCWDBWowCharactersBundle:Characters");
        $characters = $repositoryCharacters->getByAccountId($account->getId());
        return $characters;
    }

    public function getSecurityCharacter($characterId, User $user = null) {
        $characters = $this->getSecurityCharacters($user);
        /** @var Characters $character */
        foreach($characters as $character) {
            if ($characterId == $character->getGuid()) {
                return $character;
            }
        }
        return null;
    }

    public function addSetItem(Characters $character, SetItem $setItem) {
        // TODO: NO FINISHED!


        die("Not finished, not use!");

        /** @var EntityRepository $reCharacterInventory */
        $reCharacterInventory = $this->emCharacters->getRepository("TCPCWDBWowCharactersBundle:CharacterInventory");
        $actualItems = $reCharacterInventory->findBy(array(
            'character' => $character
        ));
        /** @var CharacterInventory $actualItem */
        foreach($actualItems as $actualItem) {
            if ($actualItem->getBag() == 0) {
                $this->emCharacters->remove($actualItem);
            }
        }
        $this->emCharacters->flush();

        foreach($setItem->getArrayItemsId() as $itemId) {
            $itemInstance = new ItemInstance();
            $itemInstance->setItementry($itemId);
            $itemInstance->setOwnerGuid($character->getGuid());
            $itemInstance->setCount(1);
            $this->emCharacters->persist($itemInstance);
            $this->emCharacters->flush();

            $characterInventory = new CharacterInventory();
            $characterInventory->setGuid($character);
            $characterInventory->setBag(0);
            $characterInventory->setSlot(3);
            $characterInventory->setGuid($itemInstance->getGuid());
            $this->emCharacters->persist($itemInstance);
            $this->emCharacters->flush();
        }

        die("H");
    }
}