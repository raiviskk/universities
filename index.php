<?php
require_once 'app/ApiData.php';
use App\ApiData;

$apiData = new ApiData();

echo "Welcome to University Search!" . PHP_EOL;
echo "This tool allows you to search for universities by country." . PHP_EOL;

$country = readline('Enter the country: ');


$universityCollection = $apiData->dataFromApi($country);

if (count($universityCollection->getUniversities()) === 0) {
    echo "No universities found for the country: $country" . PHP_EOL;
} else {
    foreach ($universityCollection->getUniversities() as $university) {
        echo "Name: " . $university->getName() . PHP_EOL;
        echo "Website: " . $university->getWebsite() . PHP_EOL;
        echo "Country: " . $university->getCountry() . PHP_EOL . PHP_EOL;
    }
}
