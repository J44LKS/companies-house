<?php

namespace philwc\Entity;

class Address implements EntityInterface
{

    private $addressLine1;
    private $addressLine2;
    private $careOf;
    private $region;
    private $country;
    private $poBox;
    private $postalCode;
    private $premises;
    private $locality;

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @param string $addressLine2
     */
    public function setAddressLine2(string $addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return string
     */
    public function getCareOf()
    {
        return $this->careOf;
    }

    /**
     * @param string $careOf
     */
    public function setCareOf(string $careOf)
    {
        $this->careOf = $careOf;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * @param string $poBox
     */
    public function setPoBox(string $poBox)
    {
        $this->poBox = $poBox;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     */
    public function setAddressLine1(string $addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getPremises()
    {
        return $this->premises;
    }

    /**
     * @param string $premises
     */
    public function setPremises(string $premises)
    {
        $this->premises = $premises;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * @param string $locality
     */
    public function setLocality(string $locality)
    {
        $this->locality = $locality;
    }
}