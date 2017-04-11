<?php

namespace philwc\Call;

use GuzzleHttp\Client;
use philwc\Entity\EntityInterface;
use philwc\Entity\Error;
use philwc\EntityCollection;
use philwc\EntityFactory;
use philwc\Exception\ParseException;
use philwc\Exception\RequestErrorException;

abstract class Api
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var string
     */
    private $apiKey;

    /**
     * Api constructor.
     * @param Client $client
     * @param string $apiKey
     */
    public function __construct(Client $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    /**
     * @param Request $request
     * @return EntityCollection|EntityInterface
     * @throws \philwc\Exception\RequestErrorException
     * @throws \philwc\Exception\ParseException
     */
    protected function run(Request $request)
    {
        $params = $request->getParameters();
        $params['auth'] = [$this->apiKey, ''];
        try {
            $response = $this->client->request($request->getMethod(), $request->getUrl(), $params);
        } catch (\Exception $e) {
            throw RequestErrorException::fromException($e);
        }

        $data = \GuzzleHttp\json_decode($response->getBody(), true);

        return $this->parseResult($data);
    }

    /**
     * @param array $data
     * @return EntityCollection|EntityInterface
     * @throws \philwc\Exception\RequestErrorException
     * @throws \philwc\Exception\ParseException
     */
    private function parseResult(array $data)
    {
        $items = $data;
        $class = $this->getEntityClass();
        $single = true;
        if (array_key_exists('errors', $data)) {
            $items = $data['errors'];
            $class = Error::class;
            $single = false;
        }
        if (array_key_exists('items', $data)) {
            $items = $data['items'];
            $single = false;
        }

        try {
            if ($single) {
                return EntityFactory::getSingle($class, $data);
            }

            return EntityFactory::getCollection($class, $items);
        } catch (\Exception $e) {
            throw ParseException::fromException($e);
        }
    }

    abstract protected function getEntityClass();
}
