<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayercreateinfoSkills
 *
 * @ORM\Table(name="playercreateinfo_skills")
 * @ORM\Entity
 */
class PlayercreateinfoSkills
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false)
     */
    private $rank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $skill;

    /**
     * @var integer
     *
     * @ORM\Column(name="raceMask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $racemask;

    /**
     * @var integer
     *
     * @ORM\Column(name="classMask", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $classmask;



    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return PlayercreateinfoSkills
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return PlayercreateinfoSkills
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
     * Set skill
     *
     * @param integer $skill
     *
     * @return PlayercreateinfoSkills
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return integer
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set racemask
     *
     * @param integer $racemask
     *
     * @return PlayercreateinfoSkills
     */
    public function setRacemask($racemask)
    {
        $this->racemask = $racemask;

        return $this;
    }

    /**
     * Get racemask
     *
     * @return integer
     */
    public function getRacemask()
    {
        return $this->racemask;
    }

    /**
     * Set classmask
     *
     * @param integer $classmask
     *
     * @return PlayercreateinfoSkills
     */
    public function setClassmask($classmask)
    {
        $this->classmask = $classmask;

        return $this;
    }

    /**
     * Get classmask
     *
     * @return integer
     */
    public function getClassmask()
    {
        return $this->classmask;
    }
}
