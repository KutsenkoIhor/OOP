<?php

namespace User;

class User
{
    private $user;
    private $adresa = [];

    public function __construct($name)
    {
        $this->user = $name;
    }

    public function addAddress(User\Address $address)
    {
        $this->adresa[] = $address;
    }

    public function getAddresses()
    {
        return $this->adresa;
    }

    public function getName()
    {
        return $this->user;
    }
}

class Address
{
    private $country;
    private $city;
    private $street;

    public function __construct($country, $city, $street)
    {
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
    public function setStreet($street)
    {
        $this->street = $street;
    }
}



