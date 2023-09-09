<?php


namespace Psalmsin1759\PlacesToCoordinates;

use GuzzleHttp\Client;

class Coordinates
{
    protected $apiKey;
    protected $httpClient;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new Client();
    }

    public static function getCoordinates($address)
    {
        $instance = app(self::class);

        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$instance->apiKey}";

        $response = $instance->httpClient->get($url);
        $data = json_decode($response->getBody(), true);

        if (isset($data['results'][0]['geometry']['location'])) {
            return $data['results'][0]['geometry']['location'];
        }

        return null;
    }
}
