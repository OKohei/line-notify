<?php

namespace OKohei\LineNotify;

use OKohei\LineNotify\Api;
use GuzzleHttp\Client as GuzzleClient;

class Api
{   
    public static function notify($message)
    {
        $client = new GuzzleClient([
            'base_uri' => 'https://notify-api.line.me/',
            'headers'         => [
                'Content-Type'        => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer xxxxxxxxxx'
            ]
        ]);
        $client->request('post', 'api/notify', ['form_params' => ['message' => 'HELLO WORLD']]);
        return true;
    }
}
