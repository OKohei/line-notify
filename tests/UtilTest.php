<?php
namespace OKohei\LineNotify\Tests;

use OKohei\LineNotify\Util;

class UtilTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialCommitForTest()
    {
        $res =  Util::initialCommitForTest();
        $this->assertTrue($res);
    }
}
