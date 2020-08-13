<?php declare(strict_types=1);
use Codility\CountingElements\MaxCounters;
use PHPUnit\Framework\TestCase;

final class MaxCountersTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            [3, 2, 2, 4, 2],
            MaxCounters::solution(5, [3, 4, 4, 6, 1, 4, 4])
        );
    }

    public function testSingle()
    {
        $this->assertEquals(
            [1],
            MaxCounters::solution(1, [1])
        );
    }
}
