<?php
namespace AppBundle\Services;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use TCPCW\DB\WowAuthBundle\Services\AccountHelper;
use TCPCW\DB\WowCharactersBundle\Entity\Characters;
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
}