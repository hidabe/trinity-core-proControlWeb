<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WardenChecks
 *
 * @ORM\Table(name="warden_checks")
 * @ORM\Entity
 */
class WardenChecks
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=48, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="str", type="string", length=20, nullable=true)
     */
    private $str;

    /**
     * @var integer
     *
     * @ORM\Column(name="address", type="integer", nullable=true)
     */
    private $address;

    /**
     * @var boolean
     *
     * @ORM\Column(name="length", type="boolean", nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=24, nullable=true)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=50, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return WardenChecks
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return WardenChecks
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set str
     *
     * @param string $str
     *
     * @return WardenChecks
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return string
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set address
     *
     * @param integer $address
     *
     * @return WardenChecks
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return integer
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set length
     *
     * @param boolean $length
     *
     * @return WardenChecks
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return boolean
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return WardenChecks
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return WardenChecks
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
