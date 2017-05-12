<?php
namespace TCPCW\DB\WowCharactersBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class CharactersRepository extends EntityRepository {
    public function getByAccountId($accountId) {
        return $this->findByAccount($accountId);
    }
}
?>