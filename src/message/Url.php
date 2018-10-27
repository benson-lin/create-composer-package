<?php

namespace BensonlinTest;

class Url {

    public static function open($url = '') {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        echo $res->getStatusCode();
        echo $res->getHeaderLine('content-type');
        echo $res->getBody();
    }
}