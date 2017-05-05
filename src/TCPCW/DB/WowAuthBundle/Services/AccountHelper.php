<?php
namespace TCPCW\DB\WowAuthBundle\Services;

use Doctrine\ORM\EntityManager;
use TCPCW\DB\WowAuthBundle\Entity\Repository\AccountRepository;

class AccountHelper {
    private $emWowAuth;

    public function __construct(EntityManager $emWowAuth)
    {
        $this->emWowAuth = $emWowAuth;
    }

    public function checkAccount($username, $password) {
        $account = null;
        return $account;
    }

    public function createAccount($username, $password) {
        /** @var AccountRepository $accountRepository */
        $accountRepository = $this->emWowAuth->getRepository("TCPCWDBWowAuthBundle:Account");
        return $accountRepository->create($username, $password);
    }

    public function createOrUpdateAccount($username, $password) {
        $account = null;
        return $account;
    }
}

?>