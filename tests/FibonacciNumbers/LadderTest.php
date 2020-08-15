<?php declare(strict_types=1);
use Codility\FibonacciNumbers\Ladder;
use PHPUnit\Framework\TestCase;

final class LadderTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            [5, 1, 8, 0, 1],
            Ladder::solution([4, 4, 5, 5, 1], [3, 2, 4, 3, 1])
        );
    }
}
