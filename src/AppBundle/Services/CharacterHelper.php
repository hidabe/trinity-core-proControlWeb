<?php
namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class CharacterHelper
{
    public function __construct(EntityManager $emAuth, EntityManager $emCharacters)
    {
        $this->emAuth = $emAuth;
        $this->emCharacters = $emCharacters;
    }

    public function getSecurityCharacter($characterId, $user = null) {

    }
}