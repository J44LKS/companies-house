<?php

namespace philwc\Exception;

class ParseException extends \Exception
{
    public static function fromException(\Exception $e)
    {
        return new ParseException($e->getMessage(), $e->getCode(), $e);
    }
}