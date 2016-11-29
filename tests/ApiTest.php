<?php
namespace OKohei\LineNotify\Tests;

use OKohei\LineNotify\Api;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    public function testNotify()
    {
        $res =  Api::notify();
        $this->assertTrue($res);
    }
}
