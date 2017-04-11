<?php

namespace philwc\Call\Search;

use philwc\Call\Api;
use philwc\Call\Request;
use philwc\Entity\CompanyProfile;
use philwc\EntityCollection;

class Number extends Api
{
    /**
     * @param string $companyNumber
     * @return EntityCollection
     * @throws \philwc\Exception\RequestErrorException
     * @throws \philwc\Exception\ParseException
     */
    public function search(string $companyNumber)
    {
        return $this->run(new Request(sprintf('/company/%s', $companyNumber), 'GET'));
    }

    /**
     * @return string
     */
    protected function getEntityClass(): string
    {
        return CompanyProfile::class;
    }
}