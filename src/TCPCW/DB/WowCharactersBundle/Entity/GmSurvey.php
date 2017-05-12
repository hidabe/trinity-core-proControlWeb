<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmSurvey
 *
 * @ORM\Table(name="gm_survey")
 * @ORM\Entity
 */
class GmSurvey
{
    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer", nullable=false)
     */
    private $guid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mainSurvey", type="integer", nullable=false)
     */
    private $mainsurvey = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var integer
     *
     * @ORM\Column(name="createTime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="surveyId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surveyid;



    /**
     * Set guid
     *
     * @param integer $guid
     *
     * @return GmSurvey
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return integer
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set mainsurvey
     *
     * @param integer $mainsurvey
     *
     * @return GmSurvey
     */
    public function setMainsurvey($mainsurvey)
    {
        $this->mainsurvey = $mainsurvey;

        return $this;
    }

    /**
     * Get mainsurvey
     *
     * @return integer
     */
    public function getMainsurvey()
    {
        return $this->mainsurvey;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return GmSurvey
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
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return GmSurvey
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
     * Get surveyid
     *
     * @return integer
     */
    public function getSurveyid()
    {
        return $this->surveyid;
    }
}
