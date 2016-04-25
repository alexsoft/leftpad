<?php

class LeftPadTest extends PHPUnit_Framework_TestCase
{
    public function testFunction()
    {
        $this->assertEquals('  foo', leftpad('foo', 5));
        $this->assertEquals('foobar', leftpad('foobar', 6));
        $this->assertEquals('foobar', leftpad('foobar', 3));
        $this->assertEquals('01', leftpad(1, 2, 0));
        $this->assertEquals('-1', leftpad(1, 2, '-'));
    }
}
