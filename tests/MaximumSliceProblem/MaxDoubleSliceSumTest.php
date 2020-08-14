<?php declare(strict_types=1);
use Codility\MaximumSliceProblem\MaxDoubleSliceSum;
use PHPUnit\Framework\TestCase;

final class MaxDoubleSliceSumTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            17,
            MaxDoubleSliceSum::solution([3, 2, 6, -1, 4, 5, -1, 2])
        );
    }
}
