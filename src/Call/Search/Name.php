<?php

namespace philwc\Call\Search;

use philwc\Call\Api;
use philwc\Call\Request;
use philwc\Entity\CompanySearch;
use philwc\EntityCollection;

class Name extends Api
{
    /**
     * @param string $name
     * @return EntityCollection
     * @throws \philwc\Exception\RequestErrorException
     * @throws \philwc\Exception\ParseException
     */
    public function search(string $name)
    {
        return $this->run(new Request('/search/companies', 'GET', ['query' => ['q' => $name]]));
    }

    /**
     * @return string
     */
    protected function getEntityClass(): string
    {
        return CompanySearch::class;
    }
}