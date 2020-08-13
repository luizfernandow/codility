<?php declare(strict_types=1);
use Codility\CountingElements\MissingInteger;
use PHPUnit\Framework\TestCase;

final class MissingIntegerTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            5,
            MissingInteger::solution([1, 3, 6, 4, 1, 2])
        );

        $this->assertEquals(
            4,
            MissingInteger::solution([1, 2, 3])
        );

        $this->assertEquals(
            1,
            MissingInteger::solution([-1, -3])
        );
    }
}
