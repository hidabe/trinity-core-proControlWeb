<?php

namespace TCPCW\DB\WowWorldBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureText
 *
 * @ORM\Table(name="creature_text")
 * @ORM\Entity
 */
class CreatureText
{
    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="language", type="boolean", nullable=false)
     */
    private $language = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="probability", type="float", precision=10, scale=0, nullable=false)
     */
    private $probability = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="emote", type="integer", nullable=false)
     */
    private $emote = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sound", type="integer", nullable=false)
     */
    private $sound = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="BroadcastTextId", type="integer", nullable=false)
     */
    private $broadcasttextid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="TextRange", type="boolean", nullable=false)
     */
    private $textrange = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="entry", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $entry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="groupid", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $groupid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;



    /**
     * Set text
     *
     * @param string $text
     *
     * @return CreatureText
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
     * Set type
     *
     * @param boolean $type
     *
     * @return CreatureText
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
     * Set language
     *
     * @param boolean $language
     *
     * @return CreatureText
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return boolean
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set probability
     *
     * @param float $probability
     *
     * @return CreatureText
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set emote
     *
     * @param integer $emote
     *
     * @return CreatureText
     */
    public function setEmote($emote)
    {
        $this->emote = $emote;

        return $this;
    }

    /**
     * Get emote
     *
     * @return integer
     */
    public function getEmote()
    {
        return $this->emote;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return CreatureText
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set sound
     *
     * @param integer $sound
     *
     * @return CreatureText
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get sound
     *
     * @return integer
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Set broadcasttextid
     *
     * @param integer $broadcasttextid
     *
     * @return CreatureText
     */
    public function setBroadcasttextid($broadcasttextid)
    {
        $this->broadcasttextid = $broadcasttextid;

        return $this;
    }

    /**
     * Get broadcasttextid
     *
     * @return integer
     */
    public function getBroadcasttextid()
    {
        return $this->broadcasttextid;
    }

    /**
     * Set textrange
     *
     * @param boolean $textrange
     *
     * @return CreatureText
     */
    public function setTextrange($textrange)
    {
        $this->textrange = $textrange;

        return $this;
    }

    /**
     * Get textrange
     *
     * @return boolean
     */
    public function getTextrange()
    {
        return $this->textrange;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return CreatureText
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
     * Set entry
     *
     * @param integer $entry
     *
     * @return CreatureText
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;

        return $this;
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

    /**
     * Set groupid
     *
     * @param boolean $groupid
     *
     * @return CreatureText
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return boolean
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set id
     *
     * @param boolean $id
     *
     * @return CreatureText
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
}
