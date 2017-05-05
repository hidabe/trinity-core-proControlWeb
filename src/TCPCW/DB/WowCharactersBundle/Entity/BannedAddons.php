<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BannedAddons
 *
 * @ORM\Table(name="banned_addons", uniqueConstraints={@ORM\UniqueConstraint(name="idx_name_ver", columns={"Name", "Version"})})
 * @ORM\Entity
 */
class BannedAddons
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Version", type="string", length=255, nullable=false)
     */
    private $version = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return BannedAddons
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return BannedAddons
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return BannedAddons
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
