<?php

require __DIR__.'/../vendor/autoload.php';

use xdstack\ip2location\Ip;
use PHPUnit\Framework\TestCase;

class IpTest extends TestCase
{
    public function findTest()
    {
        $this->assertEquals(['中国', '山东', '聊城', ''], Ip::find('27.196.21.222'));
        $this->assertEquals(['中国', '北京', '北京', ''], Ip::find('123.120.229.239'));
        $this->assertEquals(['美国', '美国', '', ''], Ip::find('169.235.24.133'));
        $this->assertEquals(['本机地址', '本机地址', '', ''], Ip::find('127.0.0.1'));
    }
}