<?php declare(strict_types=1);
use Codility\GreedyAlgorithms\MaxNonoverlappingSegments;
use PHPUnit\Framework\TestCase;

final class MaxNonoverlappingSegmentsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            MaxNonoverlappingSegments::solution([1, 3, 7, 9, 9], [5, 6, 8, 9, 10])
        );
    }

    public function testEmpty()
    {
        $this->assertEquals(
            0,
            MaxNonoverlappingSegments::solution([], [])
        );
    }
}
