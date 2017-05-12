<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountTutorial
 *
 * @ORM\Table(name="account_tutorial")
 * @ORM\Entity
 */
class AccountTutorial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tut0", type="integer", nullable=false)
     */
    private $tut0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut1", type="integer", nullable=false)
     */
    private $tut1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut2", type="integer", nullable=false)
     */
    private $tut2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut3", type="integer", nullable=false)
     */
    private $tut3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut4", type="integer", nullable=false)
     */
    private $tut4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut5", type="integer", nullable=false)
     */
    private $tut5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut6", type="integer", nullable=false)
     */
    private $tut6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tut7", type="integer", nullable=false)
     */
    private $tut7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="accountId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accountid;



    /**
     * Set tut0
     *
     * @param integer $tut0
     *
     * @return AccountTutorial
     */
    public function setTut0($tut0)
    {
        $this->tut0 = $tut0;

        return $this;
    }

    /**
     * Get tut0
     *
     * @return integer
     */
    public function getTut0()
    {
        return $this->tut0;
    }

    /**
     * Set tut1
     *
     * @param integer $tut1
     *
     * @return AccountTutorial
     */
    public function setTut1($tut1)
    {
        $this->tut1 = $tut1;

        return $this;
    }

    /**
     * Get tut1
     *
     * @return integer
     */
    public function getTut1()
    {
        return $this->tut1;
    }

    /**
     * Set tut2
     *
     * @param integer $tut2
     *
     * @return AccountTutorial
     */
    public function setTut2($tut2)
    {
        $this->tut2 = $tut2;

        return $this;
    }

    /**
     * Get tut2
     *
     * @return integer
     */
    public function getTut2()
    {
        return $this->tut2;
    }

    /**
     * Set tut3
     *
     * @param integer $tut3
     *
     * @return AccountTutorial
     */
    public function setTut3($tut3)
    {
        $this->tut3 = $tut3;

        return $this;
    }

    /**
     * Get tut3
     *
     * @return integer
     */
    public function getTut3()
    {
        return $this->tut3;
    }

    /**
     * Set tut4
     *
     * @param integer $tut4
     *
     * @return AccountTutorial
     */
    public function setTut4($tut4)
    {
        $this->tut4 = $tut4;

        return $this;
    }

    /**
     * Get tut4
     *
     * @return integer
     */
    public function getTut4()
    {
        return $this->tut4;
    }

    /**
     * Set tut5
     *
     * @param integer $tut5
     *
     * @return AccountTutorial
     */
    public function setTut5($tut5)
    {
        $this->tut5 = $tut5;

        return $this;
    }

    /**
     * Get tut5
     *
     * @return integer
     */
    public function getTut5()
    {
        return $this->tut5;
    }

    /**
     * Set tut6
     *
     * @param integer $tut6
     *
     * @return AccountTutorial
     */
    public function setTut6($tut6)
    {
        $this->tut6 = $tut6;

        return $this;
    }

    /**
     * Get tut6
     *
     * @return integer
     */
    public function getTut6()
    {
        return $this->tut6;
    }

    /**
     * Set tut7
     *
     * @param integer $tut7
     *
     * @return AccountTutorial
     */
    public function setTut7($tut7)
    {
        $this->tut7 = $tut7;

        return $this;
    }

    /**
     * Get tut7
     *
     * @return integer
     */
    public function getTut7()
    {
        return $this->tut7;
    }

    /**
     * Get accountid
     *
     * @return integer
     */
    public function getAccountid()
    {
        return $this->accountid;
    }
}
