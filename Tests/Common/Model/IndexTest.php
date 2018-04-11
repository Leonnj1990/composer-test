<?php
namespace Common\Model;

use PHPUnit\Framework\TestCase;

class IndexTest extends PHPUnit_Framework_TestCase
{
    private $stub;

    public function setUp()
    {
        $this->stub = new Index();
    }

    public function tearDown()
    {
        unset($this->stub);
    }

    public function testHelloWorld()
    {
        $this->assertEquals('Hello World Model', $this->stub->hello());
    }
}