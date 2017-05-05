<?php
namespace AppBundle\Services;

use FOS\UserBundle\Doctrine\UserManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class UserHelper {
    public function __construct(UserManager $userManager, TokenStorage $tokenStorage)
    {
        $this->userManager = $userManager;
        $this->tokenStorage = $tokenStorage;
    }
    /**
     * Crea o actualiza un usuario en la base de datos de Symfony
     *
     * Si el password es nulo, no se habilitará el usuario dando por sentado que no ha hecho login
     *
     * @param $username
     * @param $password
     * @return \FOS\UserBundle\Model\UserInterface|mixed
     */
    public function createOrUpdateUser($username = null, $password = null)
    {
        $userSymfony = $this->userManager->findUserByUsername($username);

        if (!$userSymfony) {
            $userSymfony = $this->userManager->createUser();
        }

        $userSymfony->setUsername($username);
        $userSymfony->setEmail($username);
        $userSymfony->setFirstname($username);
        $userSymfony->setLastname($username);
        if ($password != null) {
            $userSymfony->setPlainPassword($password);
            $userSymfony->setEnabled(1);
        } else {
            $userSymfony->setPlainPassword("default");
        }

        $this->userManager->updateUser($userSymfony);

        return $userSymfony;
    }
}
?>