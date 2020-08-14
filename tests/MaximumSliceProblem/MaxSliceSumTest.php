<?php declare(strict_types=1);
use Codility\MaximumSliceProblem\MaxSliceSum;
use PHPUnit\Framework\TestCase;

final class MaxSliceSumTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            5,
            MaxSliceSum::solution([3, 2, -6, 4, 0])
        );

        $this->assertEquals(
            -10,
            MaxSliceSum::solution([-10])
        );

        $this->assertEquals(
            1,
            MaxSliceSum::solution([-2, 1])
        );
    }
}
