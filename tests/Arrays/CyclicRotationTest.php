<?php declare(strict_types=1);
use Codility\Arrays\CyclicRotation;
use PHPUnit\Framework\TestCase;

final class CyclicRotationTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            [9, 7, 6, 3, 8],
            CyclicRotation::solution([3, 8, 9, 7, 6], 3)
        );

        $this->assertEquals(
            [0, 0, 0],
            CyclicRotation::solution([0, 0, 0], 1)
        );

        $this->assertEquals(
            [1, 2, 3, 4],
            CyclicRotation::solution([1, 2, 3, 4], 4)
        );
    }

    public function testEmpty()
    {
        $this->assertEquals(
            [],
            CyclicRotation::solution([], 3)
        );
    }

    public function testSingle()
    {
        $this->assertEquals(
            [3],
            CyclicRotation::solution([3], 3)
        );
    }
}
