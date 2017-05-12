<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BattlemasterEntry
 *
 * @ORM\Table(name="battlemaster_entry")
 * @ORM\Entity
 */
class BattlemasterEntry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bg_template", type="integer", nullable=false)
     */
    private $bgTemplate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set bgTemplate
     *
     * @param integer $bgTemplate
     *
     * @return BattlemasterEntry
     */
    public function setBgTemplate($bgTemplate)
    {
        $this->bgTemplate = $bgTemplate;

        return $this;
    }

    /**
     * Get bgTemplate
     *
     * @return integer
     */
    public function getBgTemplate()
    {
        return $this->bgTemplate;
    }

    /**
     * Get entry
     *
     * @return integer
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
