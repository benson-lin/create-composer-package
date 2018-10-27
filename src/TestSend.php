<?php

use BensonlinTest\Url;

class TestSend {

    public function open($url)
    {
        Url::open($url);
    }
}
$autoload =  '../vendor/autoload.php';
require $autoload;

$test = new TestSend();
$test->open('http://bensonlin.cn/');