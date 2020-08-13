<?php declare(strict_types=1);
use Codility\StacksAndQueues\Nesting;
use PHPUnit\Framework\TestCase;

final class NestingTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            Nesting::solution('(()(())())')
        );

        $this->assertEquals(
            0,
            Nesting::solution('())')
        );
    }
}
