<?php

namespace philwc;

use GuzzleHttp\Client;
use philwc\Call\Api;
use philwc\Exception\InvalidClassException;

class CompaniesHouseFactory
{
    /**
     * @param string $action
     * @param string $method
     * @param string $apiKey
     * @return Api
     * @throws InvalidClassException
     */
    public static function get(string $action, string $method, string $apiKey)
    {
        return self::getByClass(sprintf('\philwc\Call\%s\%s', $action, $method), $apiKey);
    }

    /**
     * @param string $class
     * @param string $apiKey
     * @return Api
     * @throws InvalidClassException
     */
    public static function getByClass(string $class, string $apiKey)
    {
        if (!class_exists($class)) {
            throw new InvalidClassException(sprintf('Class "%s" doesn\'t exist!', $class));
        }

        return new $class(new Client(), $apiKey);
    }
}