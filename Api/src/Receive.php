<?php
namespace Api;
use GuzzleHttp\Client;

class Receive {

    protected string $baseUrl = "https://core.aia.tools/api/v1/";

    protected Client $client;

    public function __construct() {
        $this->client = new Client();
    }
    public function AiaTools($path): mixed
    {
        $response = $this->client->get($this->baseUrl."$path");
        return $this->decodeResult($response);
    }

    private function decodeResult($response): array
    {
        return json_decode($response->getBody(),true);
    }
}