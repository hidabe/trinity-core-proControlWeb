<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutdoorpvpTemplate
 *
 * @ORM\Table(name="outdoorpvp_template")
 * @ORM\Entity
 */
class OutdoorpvpTemplate
{
    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="TypeId", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;



    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return OutdoorpvpTemplate
     */
    public function setScriptname($scriptname)
    {
        $this->scriptname = $scriptname;

        return $this;
    }

    /**
     * Get scriptname
     *
     * @return string
     */
    public function getScriptname()
    {
        return $this->scriptname;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return OutdoorpvpTemplate
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Get typeid
     *
     * @return boolean
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
