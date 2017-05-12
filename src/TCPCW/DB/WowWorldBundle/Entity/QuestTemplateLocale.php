<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestTemplateLocale
 *
 * @ORM\Table(name="quest_template_locale")
 * @ORM\Entity
 */
class QuestTemplateLocale
{
    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Details", type="text", length=65535, nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="Objectives", type="text", length=65535, nullable=true)
     */
    private $objectives;

    /**
     * @var string
     *
     * @ORM\Column(name="OfferRewardText", type="text", length=65535, nullable=true)
     */
    private $offerrewardtext;

    /**
     * @var string
     *
     * @ORM\Column(name="RequestItemsText", type="text", length=65535, nullable=true)
     */
    private $requestitemstext;

    /**
     * @var string
     *
     * @ORM\Column(name="EndText", type="text", length=65535, nullable=true)
     */
    private $endtext;

    /**
     * @var string
     *
     * @ORM\Column(name="CompletedText", type="text", length=65535, nullable=true)
     */
    private $completedtext;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText1", type="text", length=65535, nullable=true)
     */
    private $objectivetext1;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText2", type="text", length=65535, nullable=true)
     */
    private $objectivetext2;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText3", type="text", length=65535, nullable=true)
     */
    private $objectivetext3;

    /**
     * @var string
     *
     * @ORM\Column(name="ObjectiveText4", type="text", length=65535, nullable=true)
     */
    private $objectivetext4;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=true)
     */
    private $verifiedbuild = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $locale;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return QuestTemplateLocale
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return QuestTemplateLocale
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set objectives
     *
     * @param string $objectives
     *
     * @return QuestTemplateLocale
     */
    public function setObjectives($objectives)
    {
        $this->objectives = $objectives;

        return $this;
    }

    /**
     * Get objectives
     *
     * @return string
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * Set offerrewardtext
     *
     * @param string $offerrewardtext
     *
     * @return QuestTemplateLocale
     */
    public function setOfferrewardtext($offerrewardtext)
    {
        $this->offerrewardtext = $offerrewardtext;

        return $this;
    }

    /**
     * Get offerrewardtext
     *
     * @return string
     */
    public function getOfferrewardtext()
    {
        return $this->offerrewardtext;
    }

    /**
     * Set requestitemstext
     *
     * @param string $requestitemstext
     *
     * @return QuestTemplateLocale
     */
    public function setRequestitemstext($requestitemstext)
    {
        $this->requestitemstext = $requestitemstext;

        return $this;
    }

    /**
     * Get requestitemstext
     *
     * @return string
     */
    public function getRequestitemstext()
    {
        return $this->requestitemstext;
    }

    /**
     * Set endtext
     *
     * @param string $endtext
     *
     * @return QuestTemplateLocale
     */
    public function setEndtext($endtext)
    {
        $this->endtext = $endtext;

        return $this;
    }

    /**
     * Get endtext
     *
     * @return string
     */
    public function getEndtext()
    {
        return $this->endtext;
    }

    /**
     * Set completedtext
     *
     * @param string $completedtext
     *
     * @return QuestTemplateLocale
     */
    public function setCompletedtext($completedtext)
    {
        $this->completedtext = $completedtext;

        return $this;
    }

    /**
     * Get completedtext
     *
     * @return string
     */
    public function getCompletedtext()
    {
        return $this->completedtext;
    }

    /**
     * Set objectivetext1
     *
     * @param string $objectivetext1
     *
     * @return QuestTemplateLocale
     */
    public function setObjectivetext1($objectivetext1)
    {
        $this->objectivetext1 = $objectivetext1;

        return $this;
    }

    /**
     * Get objectivetext1
     *
     * @return string
     */
    public function getObjectivetext1()
    {
        return $this->objectivetext1;
    }

    /**
     * Set objectivetext2
     *
     * @param string $objectivetext2
     *
     * @return QuestTemplateLocale
     */
    public function setObjectivetext2($objectivetext2)
    {
        $this->objectivetext2 = $objectivetext2;

        return $this;
    }

    /**
     * Get objectivetext2
     *
     * @return string
     */
    public function getObjectivetext2()
    {
        return $this->objectivetext2;
    }

    /**
     * Set objectivetext3
     *
     * @param string $objectivetext3
     *
     * @return QuestTemplateLocale
     */
    public function setObjectivetext3($objectivetext3)
    {
        $this->objectivetext3 = $objectivetext3;

        return $this;
    }

    /**
     * Get objectivetext3
     *
     * @return string
     */
    public function getObjectivetext3()
    {
        return $this->objectivetext3;
    }

    /**
     * Set objectivetext4
     *
     * @param string $objectivetext4
     *
     * @return QuestTemplateLocale
     */
    public function setObjectivetext4($objectivetext4)
    {
        $this->objectivetext4 = $objectivetext4;

        return $this;
    }

    /**
     * Get objectivetext4
     *
     * @return string
     */
    public function getObjectivetext4()
    {
        return $this->objectivetext4;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return QuestTemplateLocale
     */
    public function setVerifiedbuild($verifiedbuild)
    {
        $this->verifiedbuild = $verifiedbuild;

        return $this;
    }

    /**
     * Get verifiedbuild
     *
     * @return integer
     */
    public function getVerifiedbuild()
    {
        return $this->verifiedbuild;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return QuestTemplateLocale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return QuestTemplateLocale
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
