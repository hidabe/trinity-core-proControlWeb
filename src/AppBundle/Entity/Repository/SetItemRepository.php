<?php
namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use TCPCW\DB\WowCharactersBundle\Entity\Characters;

class SetItemRepository extends EntityRepository {
    public function getCompatibleByCharacter(Characters $character) {
        // TODO: Add filter by character.level
        return $this->findAll();
    }
}
?>