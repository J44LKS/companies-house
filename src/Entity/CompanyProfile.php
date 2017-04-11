<?php

namespace philwc\Entity;

class CompanyProfile implements EntityInterface
{
    private $accounts;
    private $annualReturn;
    private $branchCompanyDetails;
    private $canFile;
    private $companyName;
    private $companyNumber;
    private $companyStatus;
    private $companyStatusDetail;
    private $confirmationStatement;
    private $dateOfCessation;
    private $dateOfCreation;
    private $hasBeenLiquidated;
    private $hasCharges;
    private $hasInsolvencyHistory;
    private $isCommunityInterestCompany;
    private $jurisdiction;
    private $lastFullMembersListDate;
    private $partialDataAvailable;
    private $previousCompanyNames;
    private $registeredOfficeAddress;
    private $registeredOfficeIsInDispute;
    private $sicCodes;
    private $type;
    private $undeliverableRegisteredOfficeAddress;

    /**
     * @return Accounts
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param Accounts $accounts
     */
    public function setAccounts(Accounts $accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * @return array
     */
    public function getAnnualReturn()
    {
        return $this->annualReturn;
    }

    /**
     * @param array $annualReturn
     */
    public function setAnnualReturn(array $annualReturn)
    {
        $this->annualReturn = $annualReturn;
    }

    /**
     * @return array
     */
    public function getBranchCompanyDetails()
    {
        return $this->branchCompanyDetails;
    }

    /**
     * @param array $branchCompanyDetails
     */
    public function setBranchCompanyDetails(array $branchCompanyDetails)
    {
        $this->branchCompanyDetails = $branchCompanyDetails;
    }

    /**
     * @return boolean
     */
    public function getCanFile()
    {
        return $this->canFile;
    }

    /**
     * @param boolean $canFile
     */
    public function setCanFile(bool $canFile)
    {
        $this->canFile = $canFile;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     */
    public function setCompanyName(string $companyName)
    {
        $this->companyName = $companyName;
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
     * @return string
     */
    public function getCompanyStatusDetail()
    {
        return $this->companyStatusDetail;
    }

    /**
     * @param string $companyStatusDetail
     */
    public function setCompanyStatusDetail(string $companyStatusDetail)
    {
        $this->companyStatusDetail = $companyStatusDetail;
    }

    /**
     * @return array
     */
    public function getConfirmationStatement()
    {
        return $this->confirmationStatement;
    }

    /**
     * @param array $confirmationStatement
     */
    public function setConfirmationStatement(array $confirmationStatement)
    {
        $this->confirmationStatement = $confirmationStatement;
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
     * @return boolean
     */
    public function getHasBeenLiquidated()
    {
        return $this->hasBeenLiquidated;
    }

    /**
     * @param boolean $hasBeenLiquidated
     */
    public function setHasBeenLiquidated(bool $hasBeenLiquidated)
    {
        $this->hasBeenLiquidated = $hasBeenLiquidated;
    }

    /**
     * @return boolean
     */
    public function getHasCharges()
    {
        return $this->hasCharges;
    }

    /**
     * @param boolean $hasCharges
     */
    public function setHasCharges(bool $hasCharges)
    {
        $this->hasCharges = $hasCharges;
    }

    /**
     * @return boolean
     */
    public function getHasInsolvencyHistory()
    {
        return $this->hasInsolvencyHistory;
    }

    /**
     * @param boolean $hasInsolvencyHistory
     */
    public function setHasInsolvencyHistory(bool $hasInsolvencyHistory)
    {
        $this->hasInsolvencyHistory = $hasInsolvencyHistory;
    }

    /**
     * @return boolean
     */
    public function getIsCommunityInterestCompany()
    {
        return $this->isCommunityInterestCompany;
    }

    /**
     * @param boolean $isCommunityInterestCompany
     */
    public function setIsCommunityInterestCompany(bool $isCommunityInterestCompany)
    {
        $this->isCommunityInterestCompany = $isCommunityInterestCompany;
    }

    /**
     * @return string
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * @param string $jurisdiction
     */
    public function setJurisdiction(string $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
    }

    /**
     * @return \DateTime
     */
    public function getLastFullMembersListDate()
    {
        return $this->lastFullMembersListDate;
    }

    /**
     * @param \DateTime $lastFullMembersListDate
     */
    public function setLastFullMembersListDate(\DateTime $lastFullMembersListDate)
    {
        $this->lastFullMembersListDate = $lastFullMembersListDate;
    }

    /**
     * @return string
     */
    public function getPartialDataAvailable()
    {
        return $this->partialDataAvailable;
    }

    /**
     * @param string $partialDataAvailable
     */
    public function setPartialDataAvailable(string $partialDataAvailable)
    {
        $this->partialDataAvailable = $partialDataAvailable;
    }

    /**
     * @return array
     */
    public function getPreviousCompanyNames()
    {
        return $this->previousCompanyNames;
    }

    /**
     * @param array $previousCompanyNames
     */
    public function setPreviousCompanyNames(array $previousCompanyNames)
    {
        $this->previousCompanyNames = $previousCompanyNames;
    }

    /**
     * @return Address
     */
    public function getRegisteredOfficeAddress()
    {
        return $this->registeredOfficeAddress;
    }

    /**
     * @param Address $registeredOfficeAddress
     */
    public function setRegisteredOfficeAddress(Address $registeredOfficeAddress)
    {
        $this->registeredOfficeAddress = $registeredOfficeAddress;
    }

    /**
     * @return boolean
     */
    public function getRegisteredOfficeIsInDispute()
    {
        return $this->registeredOfficeIsInDispute;
    }

    /**
     * @param boolean $registeredOfficeIsInDispute
     */
    public function setRegisteredOfficeIsInDispute(bool $registeredOfficeIsInDispute)
    {
        $this->registeredOfficeIsInDispute = $registeredOfficeIsInDispute;
    }

    /**
     * @return array
     */
    public function getSicCodes()
    {
        return $this->sicCodes;
    }

    /**
     * @param array $sicCodes
     */
    public function setSicCodes(array $sicCodes)
    {
        $this->sicCodes = $sicCodes;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function getUndeliverableRegisteredOfficeAddress()
    {
        return $this->undeliverableRegisteredOfficeAddress;
    }

    /**
     * @param boolean $undeliverableRegisteredOfficeAddress
     */
    public function setUndeliverableRegisteredOfficeAddress(bool $undeliverableRegisteredOfficeAddress)
    {
        $this->undeliverableRegisteredOfficeAddress = $undeliverableRegisteredOfficeAddress;
    }
}