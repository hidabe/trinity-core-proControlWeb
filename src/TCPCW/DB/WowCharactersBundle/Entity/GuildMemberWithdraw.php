<?php

namespace TCPCW\DB\WowCharactersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildMemberWithdraw
 *
 * @ORM\Table(name="guild_member_withdraw")
 * @ORM\Entity
 */
class GuildMemberWithdraw
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tab0", type="integer", nullable=false)
     */
    private $tab0 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tab1", type="integer", nullable=false)
     */
    private $tab1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tab2", type="integer", nullable=false)
     */
    private $tab2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tab3", type="integer", nullable=false)
     */
    private $tab3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tab4", type="integer", nullable=false)
     */
    private $tab4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tab5", type="integer", nullable=false)
     */
    private $tab5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="guid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $guid;



    /**
     * Set tab0
     *
     * @param integer $tab0
     *
     * @return GuildMemberWithdraw
     */
    public function setTab0($tab0)
    {
        $this->tab0 = $tab0;

        return $this;
    }

    /**
     * Get tab0
     *
     * @return integer
     */
    public function getTab0()
    {
        return $this->tab0;
    }

    /**
     * Set tab1
     *
     * @param integer $tab1
     *
     * @return GuildMemberWithdraw
     */
    public function setTab1($tab1)
    {
        $this->tab1 = $tab1;

        return $this;
    }

    /**
     * Get tab1
     *
     * @return integer
     */
    public function getTab1()
    {
        return $this->tab1;
    }

    /**
     * Set tab2
     *
     * @param integer $tab2
     *
     * @return GuildMemberWithdraw
     */
    public function setTab2($tab2)
    {
        $this->tab2 = $tab2;

        return $this;
    }

    /**
     * Get tab2
     *
     * @return integer
     */
    public function getTab2()
    {
        return $this->tab2;
    }

    /**
     * Set tab3
     *
     * @param integer $tab3
     *
     * @return GuildMemberWithdraw
     */
    public function setTab3($tab3)
    {
        $this->tab3 = $tab3;

        return $this;
    }

    /**
     * Get tab3
     *
     * @return integer
     */
    public function getTab3()
    {
        return $this->tab3;
    }

    /**
     * Set tab4
     *
     * @param integer $tab4
     *
     * @return GuildMemberWithdraw
     */
    public function setTab4($tab4)
    {
        $this->tab4 = $tab4;

        return $this;
    }

    /**
     * Get tab4
     *
     * @return integer
     */
    public function getTab4()
    {
        return $this->tab4;
    }

    /**
     * Set tab5
     *
     * @param integer $tab5
     *
     * @return GuildMemberWithdraw
     */
    public function setTab5($tab5)
    {
        $this->tab5 = $tab5;

        return $this;
    }

    /**
     * Get tab5
     *
     * @return integer
     */
    public function getTab5()
    {
        return $this->tab5;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return GuildMemberWithdraw
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
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
}
