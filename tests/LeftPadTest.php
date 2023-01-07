<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class LeftPadTest extends TestCase
{
    /** @test */
    public function global_function_works_properly(): void
    {
        $this->assertSame('  foo', leftpad('foo', 5));
        $this->assertSame('foobar', leftpad('foobar', 6));
        $this->assertSame('foobar', leftpad('foobar', 3));
        $this->assertSame('01', leftpad('1', 2, '0'));
        $this->assertSame('-1', leftpad('1', 2, '-'));
    }

    /** @test */
    public function namespaced_function_works_properly(): void
    {
        $this->assertSame('  foo', \Alexsoft\Leftpad\leftpad('foo', 5));
        $this->assertSame('foobar', \Alexsoft\Leftpad\leftpad('foobar', 6));
        $this->assertSame('foobar', \Alexsoft\Leftpad\leftpad('foobar', 3));
        $this->assertSame('01', \Alexsoft\Leftpad\leftpad('1', 2, '0'));
        $this->assertSame('-1', \Alexsoft\Leftpad\leftpad('1', 2, '-'));
    }
}
