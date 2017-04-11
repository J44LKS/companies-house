<?php

namespace philwc\Entity;

class Accounts implements EntityInterface
{
    private $accountingReferenceDate;
    private $lastAccounts;
    private $nextAccounts;
    private $nextDue;
    private $nextMadeUpTo;
    private $overdue;

    /**
     * @return array
     */
    public function getAccountingReferenceDate()
    {
        return $this->accountingReferenceDate;
    }

    /**
     * @param array $accountingReferenceDate
     */
    public function setAccountingReferenceDate(array $accountingReferenceDate)
    {
        $this->accountingReferenceDate = $accountingReferenceDate;
    }

    /**
     * @return array
     */
    public function getLastAccounts()
    {
        return $this->lastAccounts;
    }

    /**
     * @param array $lastAccounts
     */
    public function setLastAccounts(array $lastAccounts)
    {
        $this->lastAccounts = $lastAccounts;
    }

    /**
     * @return array
     */
    public function getNextAccounts()
    {
        return $this->nextAccounts;
    }

    /**
     * @param array $nextAccounts
     */
    public function setNextAccounts(array $nextAccounts)
    {
        $this->nextAccounts = $nextAccounts;
    }

    /**
     * @return \DateTime
     */
    public function getNextDue()
    {
        return $this->nextDue;
    }

    /**
     * @param \DateTime $nextDue
     */
    public function setNextDue(\DateTime $nextDue)
    {
        $this->nextDue = $nextDue;
    }

    /**
     * @return \DateTime
     */
    public function getNextMadeUpTo()
    {
        return $this->nextMadeUpTo;
    }

    /**
     * @param \DateTime $nextMadeUpTo
     */
    public function setNextMadeUpTo(\DateTime $nextMadeUpTo)
    {
        $this->nextMadeUpTo = $nextMadeUpTo;
    }

    /**
     * @return boolean
     */
    public function getOverdue()
    {
        return $this->overdue;
    }

    /**
     * @param boolean $overdue
     */
    public function setOverdue(bool $overdue)
    {
        $this->overdue = $overdue;
    }
}