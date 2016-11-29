<?php

namespace OKohei\LineNotify;

use GuzzleHttp\Client as GuzzleClient;

class Line 
{   
    private $client;
    private $accessToken;

    /**
     * @param array $options API options
     */
    public function __construct($accessToken, $options = array())
    {
        $this->accessToken = $accessToken;
        $this->client = new GuzzleClient([
            'base_uri' => 'https://notify-api.line.me/'
            'headers'         => [
                'Content-Type'        => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer xxxxxxxxxxxxxx'
            ]
        ]);
        $this->client->setDefaultOption('headers/Content-Type', "application/json");
        $this->client->setDefaultOption('headers/ACCESS-KEY', $this->accessKey);

        $this->transfer = new Transfer($this);
    }
}
