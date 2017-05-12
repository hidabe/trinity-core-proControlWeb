<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmSubsurvey
 *
 * @ORM\Table(name="gm_subsurvey")
 * @ORM\Entity
 */
class GmSubsurvey
{
    /**
     * @var integer
     *
     * @ORM\Column(name="answer", type="integer", nullable=false)
     */
    private $answer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="answerComment", type="text", length=65535, nullable=false)
     */
    private $answercomment;

    /**
     * @var integer
     *
     * @ORM\Column(name="surveyId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $surveyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="questionId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionid;



    /**
     * Set answer
     *
     * @param integer $answer
     *
     * @return GmSubsurvey
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return integer
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set answercomment
     *
     * @param string $answercomment
     *
     * @return GmSubsurvey
     */
    public function setAnswercomment($answercomment)
    {
        $this->answercomment = $answercomment;

        return $this;
    }

    /**
     * Get answercomment
     *
     * @return string
     */
    public function getAnswercomment()
    {
        return $this->answercomment;
    }

    /**
     * Set surveyid
     *
     * @param integer $surveyid
     *
     * @return GmSubsurvey
     */
    public function setSurveyid($surveyid)
    {
        $this->surveyid = $surveyid;

        return $this;
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

    /**
     * Set questionid
     *
     * @param integer $questionid
     *
     * @return GmSubsurvey
     */
    public function setQuestionid($questionid)
    {
        $this->questionid = $questionid;

        return $this;
    }

    /**
     * Get questionid
     *
     * @return integer
     */
    public function getQuestionid()
    {
        return $this->questionid;
    }
}
