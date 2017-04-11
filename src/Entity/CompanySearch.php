<?php

namespace philwc\Entity;

class CompanySearch implements EntityInterface
{
    private $dateOfCreation;
    private $description;
    private $snippet;
    private $addressSnippet;
    private $companyStatus;
    private $address;
    private $title;
    private $companyType;
    private $companyNumber;
    private $dateOfCessation;

    /**
     * @return \DateTime
     */
    public function getDateOfCreation()
    {
        return $this->dateOfCreation;
    }

    /**
     * @param \DateTime $dateOfCreation
     */
    public function setDateOfCreation(\DateTime $dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param string $snippet
     */
    public function setSnippet(string $snippet)
    {
        $this->snippet = $snippet;
    }

    /**
     * @return string
     */
    public function getAddressSnippet()
    {
        return $this->addressSnippet;
    }

    /**
     * @param string $addressSnippet
     */
    public function setAddressSnippet(string $addressSnippet)
    {
        $this->addressSnippet = $addressSnippet;
    }

    /**
     * @return string
     */
    public function getCompanyStatus()
    {
        return $this->companyStatus;
    }

    /**
     * @param string $companyStatus
     */
    public function setCompanyStatus(string $companyStatus)
    {
        $this->companyStatus = $companyStatus;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @param string $companyType
     */
    public function setCompanyType(string $companyType)
    {
        $this->companyType = $companyType;
    }

    /**
     * @return string
     */
    public function getCompanyNumber()
    {
        return $this->companyNumber;
    }

    /**
     * @param string $companyNumber
     */
    public function setCompanyNumber(string $companyNumber)
    {
        $this->companyNumber = $companyNumber;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfCessation()
    {
        return $this->dateOfCessation;
    }

    /**
     * @param \DateTime $dateOfCessation
     */
    public function setDateOfCessation(\DateTime $dateOfCessation)
    {
        $this->dateOfCessation = $dateOfCessation;
    }
}
