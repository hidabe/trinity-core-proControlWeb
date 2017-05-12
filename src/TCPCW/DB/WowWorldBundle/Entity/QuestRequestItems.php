<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestRequestItems
 *
 * @ORM\Table(name="quest_request_items")
 * @ORM\Entity
 */
class QuestRequestItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteOnComplete", type="smallint", nullable=false)
     */
    private $emoteoncomplete = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EmoteOnIncomplete", type="smallint", nullable=false)
     */
    private $emoteonincomplete = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CompletionText", type="text", length=65535, nullable=true)
     */
    private $completiontext;

    /**
     * @var integer
     *
     * @ORM\Column(name="VerifiedBuild", type="smallint", nullable=false)
     */
    private $verifiedbuild = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set emoteoncomplete
     *
     * @param integer $emoteoncomplete
     *
     * @return QuestRequestItems
     */
    public function setEmoteoncomplete($emoteoncomplete)
    {
        $this->emoteoncomplete = $emoteoncomplete;

        return $this;
    }

    /**
     * Get emoteoncomplete
     *
     * @return integer
     */
    public function getEmoteoncomplete()
    {
        return $this->emoteoncomplete;
    }

    /**
     * Set emoteonincomplete
     *
     * @param integer $emoteonincomplete
     *
     * @return QuestRequestItems
     */
    public function setEmoteonincomplete($emoteonincomplete)
    {
        $this->emoteonincomplete = $emoteonincomplete;

        return $this;
    }

    /**
     * Get emoteonincomplete
     *
     * @return integer
     */
    public function getEmoteonincomplete()
    {
        return $this->emoteonincomplete;
    }

    /**
     * Set completiontext
     *
     * @param string $completiontext
     *
     * @return QuestRequestItems
     */
    public function setCompletiontext($completiontext)
    {
        $this->completiontext = $completiontext;

        return $this;
    }

    /**
     * Get completiontext
     *
     * @return string
     */
    public function getCompletiontext()
    {
        return $this->completiontext;
    }

    /**
     * Set verifiedbuild
     *
     * @param integer $verifiedbuild
     *
     * @return QuestRequestItems
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
