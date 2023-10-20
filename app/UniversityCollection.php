<?php

namespace App;
class UniversityCollection
{

    private array $universities;

    public function __construct(array $universities = [])
    {
        $this->universities = [];
        foreach ($universities as $university) {
            if (!$university instanceof University)
                continue;
            $this->add($university);
        }
    }

    public function add(University $university): void
    {
        $this->universities[] = $university;
    }


    public function getUniversities(): array
    {
        return $this->universities;
    }


}