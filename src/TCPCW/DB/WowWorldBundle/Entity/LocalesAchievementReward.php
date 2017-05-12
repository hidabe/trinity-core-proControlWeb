<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalesAchievementReward
 *
 * @ORM\Table(name="locales_achievement_reward")
 * @ORM\Entity
 */
class LocalesAchievementReward
{
    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc1", type="string", length=100, nullable=false)
     */
    private $subjectLoc1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc2", type="string", length=100, nullable=false)
     */
    private $subjectLoc2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc3", type="string", length=100, nullable=false)
     */
    private $subjectLoc3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc4", type="string", length=100, nullable=false)
     */
    private $subjectLoc4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc5", type="string", length=100, nullable=false)
     */
    private $subjectLoc5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc6", type="string", length=100, nullable=false)
     */
    private $subjectLoc6 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc7", type="string", length=100, nullable=false)
     */
    private $subjectLoc7 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="subject_loc8", type="string", length=100, nullable=false)
     */
    private $subjectLoc8 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc1", type="text", length=65535, nullable=true)
     */
    private $textLoc1;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc2", type="text", length=65535, nullable=true)
     */
    private $textLoc2;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc3", type="text", length=65535, nullable=true)
     */
    private $textLoc3;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc4", type="text", length=65535, nullable=true)
     */
    private $textLoc4;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc5", type="text", length=65535, nullable=true)
     */
    private $textLoc5;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc6", type="text", length=65535, nullable=true)
     */
    private $textLoc6;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc7", type="text", length=65535, nullable=true)
     */
    private $textLoc7;

    /**
     * @var string
     *
     * @ORM\Column(name="text_loc8", type="text", length=65535, nullable=true)
     */
    private $textLoc8;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;



    /**
     * Set subjectLoc1
     *
     * @param string $subjectLoc1
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc1($subjectLoc1)
    {
        $this->subjectLoc1 = $subjectLoc1;

        return $this;
    }

    /**
     * Get subjectLoc1
     *
     * @return string
     */
    public function getSubjectLoc1()
    {
        return $this->subjectLoc1;
    }

    /**
     * Set subjectLoc2
     *
     * @param string $subjectLoc2
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc2($subjectLoc2)
    {
        $this->subjectLoc2 = $subjectLoc2;

        return $this;
    }

    /**
     * Get subjectLoc2
     *
     * @return string
     */
    public function getSubjectLoc2()
    {
        return $this->subjectLoc2;
    }

    /**
     * Set subjectLoc3
     *
     * @param string $subjectLoc3
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc3($subjectLoc3)
    {
        $this->subjectLoc3 = $subjectLoc3;

        return $this;
    }

    /**
     * Get subjectLoc3
     *
     * @return string
     */
    public function getSubjectLoc3()
    {
        return $this->subjectLoc3;
    }

    /**
     * Set subjectLoc4
     *
     * @param string $subjectLoc4
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc4($subjectLoc4)
    {
        $this->subjectLoc4 = $subjectLoc4;

        return $this;
    }

    /**
     * Get subjectLoc4
     *
     * @return string
     */
    public function getSubjectLoc4()
    {
        return $this->subjectLoc4;
    }

    /**
     * Set subjectLoc5
     *
     * @param string $subjectLoc5
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc5($subjectLoc5)
    {
        $this->subjectLoc5 = $subjectLoc5;

        return $this;
    }

    /**
     * Get subjectLoc5
     *
     * @return string
     */
    public function getSubjectLoc5()
    {
        return $this->subjectLoc5;
    }

    /**
     * Set subjectLoc6
     *
     * @param string $subjectLoc6
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc6($subjectLoc6)
    {
        $this->subjectLoc6 = $subjectLoc6;

        return $this;
    }

    /**
     * Get subjectLoc6
     *
     * @return string
     */
    public function getSubjectLoc6()
    {
        return $this->subjectLoc6;
    }

    /**
     * Set subjectLoc7
     *
     * @param string $subjectLoc7
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc7($subjectLoc7)
    {
        $this->subjectLoc7 = $subjectLoc7;

        return $this;
    }

    /**
     * Get subjectLoc7
     *
     * @return string
     */
    public function getSubjectLoc7()
    {
        return $this->subjectLoc7;
    }

    /**
     * Set subjectLoc8
     *
     * @param string $subjectLoc8
     *
     * @return LocalesAchievementReward
     */
    public function setSubjectLoc8($subjectLoc8)
    {
        $this->subjectLoc8 = $subjectLoc8;

        return $this;
    }

    /**
     * Get subjectLoc8
     *
     * @return string
     */
    public function getSubjectLoc8()
    {
        return $this->subjectLoc8;
    }

    /**
     * Set textLoc1
     *
     * @param string $textLoc1
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc1($textLoc1)
    {
        $this->textLoc1 = $textLoc1;

        return $this;
    }

    /**
     * Get textLoc1
     *
     * @return string
     */
    public function getTextLoc1()
    {
        return $this->textLoc1;
    }

    /**
     * Set textLoc2
     *
     * @param string $textLoc2
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc2($textLoc2)
    {
        $this->textLoc2 = $textLoc2;

        return $this;
    }

    /**
     * Get textLoc2
     *
     * @return string
     */
    public function getTextLoc2()
    {
        return $this->textLoc2;
    }

    /**
     * Set textLoc3
     *
     * @param string $textLoc3
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc3($textLoc3)
    {
        $this->textLoc3 = $textLoc3;

        return $this;
    }

    /**
     * Get textLoc3
     *
     * @return string
     */
    public function getTextLoc3()
    {
        return $this->textLoc3;
    }

    /**
     * Set textLoc4
     *
     * @param string $textLoc4
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc4($textLoc4)
    {
        $this->textLoc4 = $textLoc4;

        return $this;
    }

    /**
     * Get textLoc4
     *
     * @return string
     */
    public function getTextLoc4()
    {
        return $this->textLoc4;
    }

    /**
     * Set textLoc5
     *
     * @param string $textLoc5
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc5($textLoc5)
    {
        $this->textLoc5 = $textLoc5;

        return $this;
    }

    /**
     * Get textLoc5
     *
     * @return string
     */
    public function getTextLoc5()
    {
        return $this->textLoc5;
    }

    /**
     * Set textLoc6
     *
     * @param string $textLoc6
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc6($textLoc6)
    {
        $this->textLoc6 = $textLoc6;

        return $this;
    }

    /**
     * Get textLoc6
     *
     * @return string
     */
    public function getTextLoc6()
    {
        return $this->textLoc6;
    }

    /**
     * Set textLoc7
     *
     * @param string $textLoc7
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc7($textLoc7)
    {
        $this->textLoc7 = $textLoc7;

        return $this;
    }

    /**
     * Get textLoc7
     *
     * @return string
     */
    public function getTextLoc7()
    {
        return $this->textLoc7;
    }

    /**
     * Set textLoc8
     *
     * @param string $textLoc8
     *
     * @return LocalesAchievementReward
     */
    public function setTextLoc8($textLoc8)
    {
        $this->textLoc8 = $textLoc8;

        return $this;
    }

    /**
     * Get textLoc8
     *
     * @return string
     */
    public function getTextLoc8()
    {
        return $this->textLoc8;
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
