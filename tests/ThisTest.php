<?php
require_once(__DIR__.'/../vendor/autoload.php');

class ThisTest extends \PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}