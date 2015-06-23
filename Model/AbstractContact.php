<?php

namespace Osen\ContactBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractContact
 */
class AbstractContact
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var bool $captcha
     *
     * @ORM\Column(type="boolean", length=255)
     */
    protected $captchaEnabled = false;

    /**
     * @var string $heading
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $heading = '';

    /**
     * @var string $content
     *
     * @ORM\Column(type="text")
     */
    protected $content = '';

    /**
     * @var string $country
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $country = '';

    /**
     * @var string $city
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $city = '';

    /**
     * @var string $street
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $street = '';

    /**
     * @var string $building
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $building = '';

    /**
     * @var string $office
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $office = '';

    /**
     * @var string $email
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $email = '';

    /**
     * @var string $website
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $website = '';

    /**
     * @var string $phone
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $phone = '';

    /**
     * @var string $skype
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $skype = '';

    /**
     * @var string $person
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $person = '';

    /**
     * @var string $company
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $company = '';

    /**
     * @var string $schedule
     *
     * @ORM\Column(type="text")
     */
    protected $schedule = '';

    /**
     * @var string $map
     *
     * @ORM\Column(type="text")
     */
    protected $map = '';

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isCaptchaEnabled()
    {
        return $this->captchaEnabled;
    }

    /**
     * @param boolean $captchaEnabled
     */
    public function setCaptchaEnabled($captchaEnabled)
    {
        $this->captchaEnabled = $captchaEnabled;
    }

    /**
     * @return string
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @param string $heading
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param string $building
     */
    public function setBuilding($building)
    {
        $this->building = $building;
    }

    /**
     * @return string
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param string $office
     */
    public function setOffice($office)
    {
        $this->office = $office;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param string $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

    /**
     * @return string
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param string $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param string $schedule
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param string $map
     */
    public function setMap($map)
    {
        $this->map = $map;
    }
}
