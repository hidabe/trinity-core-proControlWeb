<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpdatesInclude
 *
 * @ORM\Table(name="updates_include")
 * @ORM\Entity
 */
class UpdatesInclude
{
    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false)
     */
    private $state = 'RELEASED';

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=200)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $path;



    /**
     * Set state
     *
     * @param string $state
     *
     * @return UpdatesInclude
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
