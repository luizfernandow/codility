<?php declare(strict_types=1);
use Codility\Sorting\NumberOfDiscIntersections;
use PHPUnit\Framework\TestCase;

final class NumberOfDiscIntersectionsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            11,
            NumberOfDiscIntersections::solution([1, 5, 2, 1, 4, 0])
        );
    }
}
