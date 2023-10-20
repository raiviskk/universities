<?php

namespace App;

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiData
{
    /**
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function dataFromApi(string $country): UniversityCollection
    {
        $response = (new Client())->get("http://universities.hipolabs.com/search?country=$country");
        $data = json_decode($response->getBody(), false, 512, JSON_THROW_ON_ERROR);
        var_dump($data);
        $collection = new UniversityCollection();


        foreach ($data as $record) {
            $collection->add(new University(
                $record->name,
                $record->web_pages[0],
                $record->country
            ));
        }

        return $collection;
    }
}
