<?php

namespace philwc\Exception;

class RequestErrorException extends \Exception
{
    public static function fromException(\Exception $e)
    {
        return new RequestErrorException($e->getMessage(), $e->getCode(), $e);
    }
}