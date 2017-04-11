<?php

namespace philwc\Call;

/**
 * Class Request
 * @package philwc\Call
 */
class Request
{
    /**
     * @var string
     */
    const BASE_URL = 'https://api.companieshouse.gov.uk';

    /**
     * @var string
     */
    private $url;
    /**
     * @var string
     */
    private $method;
    /**
     * @var array
     */
    private $parameters;

    /**
     * Request constructor.
     * @param string $url
     * @param string $method
     * @param array $parameters
     */
    public function __construct(string $url, string $method, array $parameters = [])
    {
        $this->url = self::BASE_URL . $url;
        $this->method = $method;
        $this->parameters = $parameters;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
}
