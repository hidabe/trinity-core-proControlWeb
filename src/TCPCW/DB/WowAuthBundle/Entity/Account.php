<?php

namespace TCPCW\DB\WowAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="account", uniqueConstraints={@ORM\UniqueConstraint(name="idx_username", columns={"username"})})
 * @ORM\Entity(repositoryClass="TCPCW\DB\WowAuthBundle\Entity\Repository\AccountRepository")
 */
class Account
{
    public function __construct()
    {
        $this->joindate = new \DateTime("now");
        $this->lastLogin = null;
        //$this->lastLogin = new \DateTime("now");
    }

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=32, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sha_pass_hash", type="string", length=40, nullable=false)
     */
    private $shaPassHash = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sessionkey", type="string", length=80, nullable=false)
     */
    private $sessionkey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="v", type="string", length=64, nullable=false)
     */
    private $v = '';

    /**
     * @var string
     *
     * @ORM\Column(name="s", type="string", length=64, nullable=false)
     */
    private $s = '';

    /**
     * @var string
     *
     * @ORM\Column(name="token_key", type="string", length=100, nullable=false)
     */
    private $tokenKey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_mail", type="string", length=255, nullable=false)
     */
    private $regMail = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="joindate", type="datetime", nullable=false)
     */
    private $joindate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="last_ip", type="string", length=15, nullable=false)
     */
    private $lastIp = '127.0.0.1';

    /**
     * @var string
     *
     * @ORM\Column(name="last_attempt_ip", type="string", length=15, nullable=false)
     */
    private $lastAttemptIp = '127.0.0.1';

    /**
     * @var integer
     *
     * @ORM\Column(name="failed_logins", type="integer", nullable=false)
     */
    private $failedLogins = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=false)
     */
    private $locked = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lock_country", type="string", length=2, nullable=false)
     */
    private $lockCountry = '00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean", nullable=false)
     */
    private $online = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="expansion", type="boolean", nullable=false)
     */
    private $expansion = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="mutetime", type="bigint", nullable=false)
     */
    private $mutetime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mutereason", type="string", length=255, nullable=false)
     */
    private $mutereason = '';

    /**
     * @var string
     *
     * @ORM\Column(name="muteby", type="string", length=50, nullable=false)
     */
    private $muteby = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="locale", type="boolean", nullable=false)
     */
    private $locale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="os", type="string", length=3, nullable=false)
     */
    private $os = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="recruiter", type="integer", nullable=false)
     */
    private $recruiter = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set username
     *
     * @param string $username
     *
     * @return Account
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set shaPassHash
     *
     * @param string $shaPassHash
     *
     * @return Account
     */
    public function setShaPassHash($shaPassHash)
    {
        $this->shaPassHash = $shaPassHash;

        return $this;
    }

    /**
     * Get shaPassHash
     *
     * @return string
     */
    public function getShaPassHash()
    {
        return $this->shaPassHash;
    }

    /**
     * Set sessionkey
     *
     * @param string $sessionkey
     *
     * @return Account
     */
    public function setSessionkey($sessionkey)
    {
        $this->sessionkey = $sessionkey;

        return $this;
    }

    /**
     * Get sessionkey
     *
     * @return string
     */
    public function getSessionkey()
    {
        return $this->sessionkey;
    }

    /**
     * Set v
     *
     * @param string $v
     *
     * @return Account
     */
    public function setV($v)
    {
        $this->v = $v;

        return $this;
    }

    /**
     * Get v
     *
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * Set s
     *
     * @param string $s
     *
     * @return Account
     */
    public function setS($s)
    {
        $this->s = $s;

        return $this;
    }

    /**
     * Get s
     *
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * Set tokenKey
     *
     * @param string $tokenKey
     *
     * @return Account
     */
    public function setTokenKey($tokenKey)
    {
        $this->tokenKey = $tokenKey;

        return $this;
    }

    /**
     * Get tokenKey
     *
     * @return string
     */
    public function getTokenKey()
    {
        return $this->tokenKey;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Account
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set regMail
     *
     * @param string $regMail
     *
     * @return Account
     */
    public function setRegMail($regMail)
    {
        $this->regMail = $regMail;

        return $this;
    }

    /**
     * Get regMail
     *
     * @return string
     */
    public function getRegMail()
    {
        return $this->regMail;
    }

    /**
     * Set joindate
     *
     * @param \DateTime $joindate
     *
     * @return Account
     */
    public function setJoindate($joindate)
    {
        $this->joindate = $joindate;

        return $this;
    }

    /**
     * Get joindate
     *
     * @return \DateTime
     */
    public function getJoindate()
    {
        return $this->joindate;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     *
     * @return Account
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * Get lastIp
     *
     * @return string
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set lastAttemptIp
     *
     * @param string $lastAttemptIp
     *
     * @return Account
     */
    public function setLastAttemptIp($lastAttemptIp)
    {
        $this->lastAttemptIp = $lastAttemptIp;

        return $this;
    }

    /**
     * Get lastAttemptIp
     *
     * @return string
     */
    public function getLastAttemptIp()
    {
        return $this->lastAttemptIp;
    }

    /**
     * Set failedLogins
     *
     * @param integer $failedLogins
     *
     * @return Account
     */
    public function setFailedLogins($failedLogins)
    {
        $this->failedLogins = $failedLogins;

        return $this;
    }

    /**
     * Get failedLogins
     *
     * @return integer
     */
    public function getFailedLogins()
    {
        return $this->failedLogins;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     *
     * @return Account
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set lockCountry
     *
     * @param string $lockCountry
     *
     * @return Account
     */
    public function setLockCountry($lockCountry)
    {
        $this->lockCountry = $lockCountry;

        return $this;
    }

    /**
     * Get lockCountry
     *
     * @return string
     */
    public function getLockCountry()
    {
        return $this->lockCountry;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return Account
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Account
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set expansion
     *
     * @param boolean $expansion
     *
     * @return Account
     */
    public function setExpansion($expansion)
    {
        $this->expansion = $expansion;

        return $this;
    }

    /**
     * Get expansion
     *
     * @return boolean
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * Set mutetime
     *
     * @param integer $mutetime
     *
     * @return Account
     */
    public function setMutetime($mutetime)
    {
        $this->mutetime = $mutetime;

        return $this;
    }

    /**
     * Get mutetime
     *
     * @return integer
     */
    public function getMutetime()
    {
        return $this->mutetime;
    }

    /**
     * Set mutereason
     *
     * @param string $mutereason
     *
     * @return Account
     */
    public function setMutereason($mutereason)
    {
        $this->mutereason = $mutereason;

        return $this;
    }

    /**
     * Get mutereason
     *
     * @return string
     */
    public function getMutereason()
    {
        return $this->mutereason;
    }

    /**
     * Set muteby
     *
     * @param string $muteby
     *
     * @return Account
     */
    public function setMuteby($muteby)
    {
        $this->muteby = $muteby;

        return $this;
    }

    /**
     * Get muteby
     *
     * @return string
     */
    public function getMuteby()
    {
        return $this->muteby;
    }

    /**
     * Set locale
     *
     * @param boolean $locale
     *
     * @return Account
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return boolean
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set os
     *
     * @param string $os
     *
     * @return Account
     */
    public function setOs($os)
    {
        $this->os = $os;

        return $this;
    }

    /**
     * Get os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set recruiter
     *
     * @param integer $recruiter
     *
     * @return Account
     */
    public function setRecruiter($recruiter)
    {
        $this->recruiter = $recruiter;

        return $this;
    }

    /**
     * Get recruiter
     *
     * @return integer
     */
    public function getRecruiter()
    {
        return $this->recruiter;
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
