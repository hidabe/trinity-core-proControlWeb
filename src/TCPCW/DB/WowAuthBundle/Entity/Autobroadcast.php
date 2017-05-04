<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autobroadcast
 *
 * @ORM\Table(name="autobroadcast")
 * @ORM\Entity
 */
class Autobroadcast
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="weight", type="boolean", nullable=true)
     */
    private $weight = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="realmid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;



    /**
     * Set weight
     *
     * @param boolean $weight
     *
     * @return Autobroadcast
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return boolean
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Autobroadcast
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set id
     *
     * @param boolean $id
     *
     * @return Autobroadcast
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return boolean
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set realmid
     *
     * @param integer $realmid
     *
     * @return Autobroadcast
     */
    public function setRealmid($realmid)
    {
        $this->realmid = $realmid;

        return $this;
    }

    /**
     * Get realmid
     *
     * @return integer
     */
    public function getRealmid()
    {
        return $this->realmid;
    }
}
