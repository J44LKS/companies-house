<?php

namespace philwc\Entity;

class Error implements EntityInterface
{
    private $error;
    private $errorValues;
    private $location;
    private $locationType;
    private $type;

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    public function setError(string $error)
    {
        $this->error = $error;
    }

    /**
     * @return array
     */
    public function getErrorValues()
    {
        return $this->errorValues;
    }

    /**
     * @param mixed $errorValues
     */
    public function setErrorValues(array $errorValues)
    {
        $this->errorValues = $errorValues;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * @param string $locationType
     */
    public function setLocationType(string $locationType)
    {
        $this->locationType = $locationType;
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
}