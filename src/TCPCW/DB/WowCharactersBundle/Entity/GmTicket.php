<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmTicket
 *
 * @ORM\Table(name="gm_ticket")
 * @ORM\Entity
 */
class GmTicket
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="playerGuid", type="integer", nullable=false)
     */
    private $playerguid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="createTime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mapId", type="smallint", nullable=false)
     */
    private $mapid = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="posX", type="float", precision=10, scale=0, nullable=false)
     */
    private $posx = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="posY", type="float", precision=10, scale=0, nullable=false)
     */
    private $posy = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="posZ", type="float", precision=10, scale=0, nullable=false)
     */
    private $posz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastModifiedTime", type="integer", nullable=false)
     */
    private $lastmodifiedtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="closedBy", type="integer", nullable=false)
     */
    private $closedby = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="assignedTo", type="integer", nullable=false)
     */
    private $assignedto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completed", type="integer", nullable=false)
     */
    private $completed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="escalated", type="integer", nullable=false)
     */
    private $escalated = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="needMoreHelp", type="integer", nullable=false)
     */
    private $needmorehelp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="resolvedBy", type="integer", nullable=false)
     */
    private $resolvedby = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return GmTicket
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
     * Set playerguid
     *
     * @param integer $playerguid
     *
     * @return GmTicket
     */
    public function setPlayerguid($playerguid)
    {
        $this->playerguid = $playerguid;

        return $this;
    }

    /**
     * Get playerguid
     *
     * @return integer
     */
    public function getPlayerguid()
    {
        return $this->playerguid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GmTicket
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
     * Set description
     *
     * @param string $description
     *
     * @return GmTicket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return GmTicket
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set mapid
     *
     * @param integer $mapid
     *
     * @return GmTicket
     */
    public function setMapid($mapid)
    {
        $this->mapid = $mapid;

        return $this;
    }

    /**
     * Get mapid
     *
     * @return integer
     */
    public function getMapid()
    {
        return $this->mapid;
    }

    /**
     * Set posx
     *
     * @param float $posx
     *
     * @return GmTicket
     */
    public function setPosx($posx)
    {
        $this->posx = $posx;

        return $this;
    }

    /**
     * Get posx
     *
     * @return float
     */
    public function getPosx()
    {
        return $this->posx;
    }

    /**
     * Set posy
     *
     * @param float $posy
     *
     * @return GmTicket
     */
    public function setPosy($posy)
    {
        $this->posy = $posy;

        return $this;
    }

    /**
     * Get posy
     *
     * @return float
     */
    public function getPosy()
    {
        return $this->posy;
    }

    /**
     * Set posz
     *
     * @param float $posz
     *
     * @return GmTicket
     */
    public function setPosz($posz)
    {
        $this->posz = $posz;

        return $this;
    }

    /**
     * Get posz
     *
     * @return float
     */
    public function getPosz()
    {
        return $this->posz;
    }

    /**
     * Set lastmodifiedtime
     *
     * @param integer $lastmodifiedtime
     *
     * @return GmTicket
     */
    public function setLastmodifiedtime($lastmodifiedtime)
    {
        $this->lastmodifiedtime = $lastmodifiedtime;

        return $this;
    }

    /**
     * Get lastmodifiedtime
     *
     * @return integer
     */
    public function getLastmodifiedtime()
    {
        return $this->lastmodifiedtime;
    }

    /**
     * Set closedby
     *
     * @param integer $closedby
     *
     * @return GmTicket
     */
    public function setClosedby($closedby)
    {
        $this->closedby = $closedby;

        return $this;
    }

    /**
     * Get closedby
     *
     * @return integer
     */
    public function getClosedby()
    {
        return $this->closedby;
    }

    /**
     * Set assignedto
     *
     * @param integer $assignedto
     *
     * @return GmTicket
     */
    public function setAssignedto($assignedto)
    {
        $this->assignedto = $assignedto;

        return $this;
    }

    /**
     * Get assignedto
     *
     * @return integer
     */
    public function getAssignedto()
    {
        return $this->assignedto;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GmTicket
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
     * Set response
     *
     * @param string $response
     *
     * @return GmTicket
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set completed
     *
     * @param boolean $completed
     *
     * @return GmTicket
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return boolean
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * Set escalated
     *
     * @param boolean $escalated
     *
     * @return GmTicket
     */
    public function setEscalated($escalated)
    {
        $this->escalated = $escalated;

        return $this;
    }

    /**
     * Get escalated
     *
     * @return boolean
     */
    public function getEscalated()
    {
        return $this->escalated;
    }

    /**
     * Set viewed
     *
     * @param boolean $viewed
     *
     * @return GmTicket
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed
     *
     * @return boolean
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set needmorehelp
     *
     * @param boolean $needmorehelp
     *
     * @return GmTicket
     */
    public function setNeedmorehelp($needmorehelp)
    {
        $this->needmorehelp = $needmorehelp;

        return $this;
    }

    /**
     * Get needmorehelp
     *
     * @return boolean
     */
    public function getNeedmorehelp()
    {
        return $this->needmorehelp;
    }

    /**
     * Set resolvedby
     *
     * @param integer $resolvedby
     *
     * @return GmTicket
     */
    public function setResolvedby($resolvedby)
    {
        $this->resolvedby = $resolvedby;

        return $this;
    }

    /**
     * Get resolvedby
     *
     * @return integer
     */
    public function getResolvedby()
    {
        return $this->resolvedby;
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
