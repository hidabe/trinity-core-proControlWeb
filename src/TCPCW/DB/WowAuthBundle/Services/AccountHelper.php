<?php
namespace TCPCW\DB\WowAuthBundle\Services;

use Doctrine\ORM\EntityManager;
use TCPCW\DB\WowAuthBundle\Entity\Account;
use TCPCW\DB\WowAuthBundle\Entity\Repository\AccountRepository;

class AccountHelper {
    private $emWowAuth;

    public function __construct(EntityManager $emWowAuth)
    {
        $this->emWowAuth = $emWowAuth;
    }

    /**
     * @param $username
     * @return Account
     */
    public function getAccountFromUsername($username) {
        /** @var AccountRepository $accountRepository */
        $accountRepository = $this->emWowAuth->getRepository("TCPCWDBWowAuthBundle:Account");
        /** @var Account $account */
        $account = $accountRepository->findOneByUsername(strtoupper($username));
        return $account;
    }

    public function checkAccount($username, $password) {
        $username = strtoupper($username);
        $password = strtoupper($password);

        /** @var AccountRepository $accountRepository */
        $accountRepository = $this->emWowAuth->getRepository("TCPCWDBWowAuthBundle:Account");
        /** @var Account $account */
        $account = $accountRepository->findOneByUsername($username);

        if ($account == null) return null;

        $shaPassword = $this->getSha($username, $password);
        if ($account->getShaPassHash() != $shaPassword) return null;

        return $account;
    }

    public function createAccount($username, $password) {
        /** @var AccountRepository $accountRepository */
        $accountRepository = $this->emWowAuth->getRepository("TCPCWDBWowAuthBundle:Account");
        return $accountRepository->create($username, $password);
    }

    public function createOrUpdateAccount($username, $password) {
        // TODO: Implement! (i dont know about if i need it)

        $account = null;
        return $account;
    }

    public function getSha($username, $password) {
        return strtoupper(sha1(strtoupper($username) . ":" . strtoupper($password)));
    }
}

?>