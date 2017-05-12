<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditions
 *
 * @ORM\Table(name="conditions")
 * @ORM\Entity
 */
class Conditions
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="NegativeCondition", type="boolean", nullable=false)
     */
    private $negativecondition = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ErrorType", type="integer", nullable=false)
     */
    private $errortype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ErrorTextId", type="integer", nullable=false)
     */
    private $errortextid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ScriptName", type="string", length=64, nullable=false)
     */
    private $scriptname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="SourceTypeOrReferenceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourcetypeorreferenceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="SourceGroup", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourcegroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="SourceEntry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourceentry;

    /**
     * @var integer
     *
     * @ORM\Column(name="SourceId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ElseGroup", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $elsegroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConditionTypeOrReference", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditiontypeorreference;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ConditionTarget", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditiontarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConditionValue1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditionvalue1;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConditionValue2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditionvalue2;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConditionValue3", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $conditionvalue3;



    /**
     * Set negativecondition
     *
     * @param boolean $negativecondition
     *
     * @return Conditions
     */
    public function setNegativecondition($negativecondition)
    {
        $this->negativecondition = $negativecondition;

        return $this;
    }

    /**
     * Get negativecondition
     *
     * @return boolean
     */
    public function getNegativecondition()
    {
        return $this->negativecondition;
    }

    /**
     * Set errortype
     *
     * @param integer $errortype
     *
     * @return Conditions
     */
    public function setErrortype($errortype)
    {
        $this->errortype = $errortype;

        return $this;
    }

    /**
     * Get errortype
     *
     * @return integer
     */
    public function getErrortype()
    {
        return $this->errortype;
    }

    /**
     * Set errortextid
     *
     * @param integer $errortextid
     *
     * @return Conditions
     */
    public function setErrortextid($errortextid)
    {
        $this->errortextid = $errortextid;

        return $this;
    }

    /**
     * Get errortextid
     *
     * @return integer
     */
    public function getErrortextid()
    {
        return $this->errortextid;
    }

    /**
     * Set scriptname
     *
     * @param string $scriptname
     *
     * @return Conditions
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
     * @return Conditions
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
     * Set sourcetypeorreferenceid
     *
     * @param integer $sourcetypeorreferenceid
     *
     * @return Conditions
     */
    public function setSourcetypeorreferenceid($sourcetypeorreferenceid)
    {
        $this->sourcetypeorreferenceid = $sourcetypeorreferenceid;

        return $this;
    }

    /**
     * Get sourcetypeorreferenceid
     *
     * @return integer
     */
    public function getSourcetypeorreferenceid()
    {
        return $this->sourcetypeorreferenceid;
    }

    /**
     * Set sourcegroup
     *
     * @param integer $sourcegroup
     *
     * @return Conditions
     */
    public function setSourcegroup($sourcegroup)
    {
        $this->sourcegroup = $sourcegroup;

        return $this;
    }

    /**
     * Get sourcegroup
     *
     * @return integer
     */
    public function getSourcegroup()
    {
        return $this->sourcegroup;
    }

    /**
     * Set sourceentry
     *
     * @param integer $sourceentry
     *
     * @return Conditions
     */
    public function setSourceentry($sourceentry)
    {
        $this->sourceentry = $sourceentry;

        return $this;
    }

    /**
     * Get sourceentry
     *
     * @return integer
     */
    public function getSourceentry()
    {
        return $this->sourceentry;
    }

    /**
     * Set sourceid
     *
     * @param integer $sourceid
     *
     * @return Conditions
     */
    public function setSourceid($sourceid)
    {
        $this->sourceid = $sourceid;

        return $this;
    }

    /**
     * Get sourceid
     *
     * @return integer
     */
    public function getSourceid()
    {
        return $this->sourceid;
    }

    /**
     * Set elsegroup
     *
     * @param integer $elsegroup
     *
     * @return Conditions
     */
    public function setElsegroup($elsegroup)
    {
        $this->elsegroup = $elsegroup;

        return $this;
    }

    /**
     * Get elsegroup
     *
     * @return integer
     */
    public function getElsegroup()
    {
        return $this->elsegroup;
    }

    /**
     * Set conditiontypeorreference
     *
     * @param integer $conditiontypeorreference
     *
     * @return Conditions
     */
    public function setConditiontypeorreference($conditiontypeorreference)
    {
        $this->conditiontypeorreference = $conditiontypeorreference;

        return $this;
    }

    /**
     * Get conditiontypeorreference
     *
     * @return integer
     */
    public function getConditiontypeorreference()
    {
        return $this->conditiontypeorreference;
    }

    /**
     * Set conditiontarget
     *
     * @param boolean $conditiontarget
     *
     * @return Conditions
     */
    public function setConditiontarget($conditiontarget)
    {
        $this->conditiontarget = $conditiontarget;

        return $this;
    }

    /**
     * Get conditiontarget
     *
     * @return boolean
     */
    public function getConditiontarget()
    {
        return $this->conditiontarget;
    }

    /**
     * Set conditionvalue1
     *
     * @param integer $conditionvalue1
     *
     * @return Conditions
     */
    public function setConditionvalue1($conditionvalue1)
    {
        $this->conditionvalue1 = $conditionvalue1;

        return $this;
    }

    /**
     * Get conditionvalue1
     *
     * @return integer
     */
    public function getConditionvalue1()
    {
        return $this->conditionvalue1;
    }

    /**
     * Set conditionvalue2
     *
     * @param integer $conditionvalue2
     *
     * @return Conditions
     */
    public function setConditionvalue2($conditionvalue2)
    {
        $this->conditionvalue2 = $conditionvalue2;

        return $this;
    }

    /**
     * Get conditionvalue2
     *
     * @return integer
     */
    public function getConditionvalue2()
    {
        return $this->conditionvalue2;
    }

    /**
     * Set conditionvalue3
     *
     * @param integer $conditionvalue3
     *
     * @return Conditions
     */
    public function setConditionvalue3($conditionvalue3)
    {
        $this->conditionvalue3 = $conditionvalue3;

        return $this;
    }

    /**
     * Get conditionvalue3
     *
     * @return integer
     */
    public function getConditionvalue3()
    {
        return $this->conditionvalue3;
    }
}
