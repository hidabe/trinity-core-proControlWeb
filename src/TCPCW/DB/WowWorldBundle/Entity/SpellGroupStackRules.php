<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpellGroupStackRules
 *
 * @ORM\Table(name="spell_group_stack_rules")
 * @ORM\Entity
 */
class SpellGroupStackRules
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="stack_rule", type="boolean", nullable=false)
     */
    private $stackRule = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupId;



    /**
     * Set stackRule
     *
     * @param boolean $stackRule
     *
     * @return SpellGroupStackRules
     */
    public function setStackRule($stackRule)
    {
        $this->stackRule = $stackRule;

        return $this;
    }

    /**
     * Get stackRule
     *
     * @return boolean
     */
    public function getStackRule()
    {
        return $this->stackRule;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
