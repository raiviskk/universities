<?php

namespace App;
class University
{
    private string $name;
    private string $website;
    private string $country;

    public function __construct(string $name, string $website, string $country)
    {
        $this->name = $name;
        $this->website = $website;
        $this->country = $country;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function getCountry(): string
    {
        return $this->country;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }


    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
}