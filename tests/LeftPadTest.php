<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class LeftPadTest extends TestCase
{
    /** @test */
    public function global_function_works_properly(): void
    {
        $this->assertEquals('  foo', leftpad('foo', 5));
        $this->assertEquals('foobar', leftpad('foobar', 6));
        $this->assertEquals('foobar', leftpad('foobar', 3));
        $this->assertEquals('01', leftpad('1', 2, '0'));
        $this->assertEquals('-1', leftpad('1', 2, '-'));
    }

    /** @test */
    public function namespaced_function_works_properly(): void
    {
        $this->assertEquals('  foo', \Alexsoft\Leftpad\leftpad('foo', 5));
        $this->assertEquals('foobar', \Alexsoft\Leftpad\leftpad('foobar', 6));
        $this->assertEquals('foobar', \Alexsoft\Leftpad\leftpad('foobar', 3));
        $this->assertEquals('01', \Alexsoft\Leftpad\leftpad('1', 2, '0'));
        $this->assertEquals('-1', \Alexsoft\Leftpad\leftpad('1', 2, '-'));
    }
}
