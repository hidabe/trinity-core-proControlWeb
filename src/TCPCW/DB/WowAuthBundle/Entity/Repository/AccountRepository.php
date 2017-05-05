<?php
namespace TCPCW\DB\WowAuthBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use TCPCW\DB\WowAuthBundle\Entity\Account;

class AccountRepository extends EntityRepository {
    public function create($username, $password) {
        $account = new Account();
        $account->setUsername($username);
        $sha_pass = sha1($username . ":" . $password);
        $account->setShaPassHash($sha_pass);

        $this->getEntityManager()->persist($account);
        $this->getEntityManager()->flush();

        return $account;
    }
}
?>