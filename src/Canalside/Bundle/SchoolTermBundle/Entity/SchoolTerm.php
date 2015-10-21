<?php

/*
 * This file is part of the Canalside package.
 *
 * (c) Mike Kovacevich
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Canalside\Bundle\SchoolTermBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="school_term")
 */
class SchoolTerm
{
    /**
     * @ORM\Column(type="integer", name="school_term_id")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $schoolTermId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $label;

    /**
     * @ORM\Column(type="string", length=2, name="country_code")
     */
    protected $countryCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $region;

    /**
     * @ORM\Column(type="integer")
     */
    protected $year;

    /**
     * @ORM\Column(type="integer")
     */
    protected $term;

    /**
     * @ORM\Column(type="date")
     */
    protected $start;

    /**
     * @ORM\Column(type="date")
     */
    protected $finish;

    /**
     * @ORM\Column(type="integer")
     */
    protected $days;

    /**
     * @ORM\Column(type="integer", name="created_by")
     */
    protected $createdBy;

    /**
     * @ORM\Column(type="datetime", name="created_on")
     */
    protected $createdOn;

    /**
     * @ORM\Column(type="string", length=255, name="created_ip")
     */
    protected $createdIp;

    /**
     * @ORM\Column(type="integer", name="updated_by")
     */
    protected $updatedBy;

    /**
     * @ORM\Column(type="datetime", name="updated_on")
     */
    protected $updatedOn;

    /**
     * @ORM\Column(type="string", length=255, name="updated_ip")
     */
    protected $updatedIp;

    /**
     * @ORM\Column(type="integer")
     */
    protected $active;

    /**
     * Instantiate new SchoolTerm object.
     */
    public function __construct()
    {
        $this->createdBy = 3;
        $this->createdOn = new \DateTime();
        $this->createdIp = "127.0.0.1";
    }

    /**
     * Get schoolTermId
     *
     * @return integer 
     */
    public function getSchoolTermId()
    {
        return $this->schoolTermId;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return SchoolTerm
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     * @return SchoolTerm
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return SchoolTerm
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return SchoolTerm
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set term
     *
     * @param integer $term
     * @return SchoolTerm
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return integer 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set start
     *
     * @param date $start
     * @return SchoolTerm
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return date
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set finish
     *
     * @param date $finish
     * @return SchoolTerm
     */
    public function setFinish(\DateTime $finish)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * Get finish
     *
     * @return date
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set days
     *
     * @param integer $days
     * @return SchoolTerm
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Get days
     *
     * @return integer 
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     * @return SchoolTerm
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdOn
     *
     * @param datetime $createdOn
     * @return SchoolTerm
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return datetime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set createdIp
     *
     * @param string $createdIp
     * @return SchoolTerm
     */
    public function setCreatedIp($createdIp)
    {
        $this->createdIp = $createdIp;

        return $this;
    }

    /**
     * Get createdIp
     *
     * @return string 
     */
    public function getCreatedIp()
    {
        return $this->createdIp;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     * @return SchoolTerm
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedOn
     *
     * @param datetime $updatedOn
     * @return SchoolTerm
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn
     *
     * @return datetime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * Set updatedIp
     *
     * @param string $updatedIp
     * @return SchoolTerm
     */
    public function setUpdatedIp($updatedIp)
    {
        $this->updatedIp = $updatedIp;

        return $this;
    }

    /**
     * Get updatedIp
     *
     * @return string 
     */
    public function getUpdatedIp()
    {
        return $this->updatedIp;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return SchoolTerm
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

}