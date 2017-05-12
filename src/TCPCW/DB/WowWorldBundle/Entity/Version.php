<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table(name="version")
 * @ORM\Entity
 */
class Version
{
    /**
     * @var string
     *
     * @ORM\Column(name="core_revision", type="string", length=120, nullable=true)
     */
    private $coreRevision;

    /**
     * @var string
     *
     * @ORM\Column(name="db_version", type="string", length=120, nullable=true)
     */
    private $dbVersion;

    /**
     * @var integer
     *
     * @ORM\Column(name="cache_id", type="integer", nullable=true)
     */
    private $cacheId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="core_version", type="string", length=120)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coreVersion;



    /**
     * Set coreRevision
     *
     * @param string $coreRevision
     *
     * @return Version
     */
    public function setCoreRevision($coreRevision)
    {
        $this->coreRevision = $coreRevision;

        return $this;
    }

    /**
     * Get coreRevision
     *
     * @return string
     */
    public function getCoreRevision()
    {
        return $this->coreRevision;
    }

    /**
     * Set dbVersion
     *
     * @param string $dbVersion
     *
     * @return Version
     */
    public function setDbVersion($dbVersion)
    {
        $this->dbVersion = $dbVersion;

        return $this;
    }

    /**
     * Get dbVersion
     *
     * @return string
     */
    public function getDbVersion()
    {
        return $this->dbVersion;
    }

    /**
     * Set cacheId
     *
     * @param integer $cacheId
     *
     * @return Version
     */
    public function setCacheId($cacheId)
    {
        $this->cacheId = $cacheId;

        return $this;
    }

    /**
     * Get cacheId
     *
     * @return integer
     */
    public function getCacheId()
    {
        return $this->cacheId;
    }

    /**
     * Get coreVersion
     *
     * @return string
     */
    public function getCoreVersion()
    {
        return $this->coreVersion;
    }
}
