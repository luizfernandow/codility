<?php declare(strict_types=1);
use Codility\Sorting\Triangle;
use PHPUnit\Framework\TestCase;

final class TriangleTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            Triangle::solution([10, 2, 5, 1, 8, 20])
        );

        $this->assertEquals(
            0,
            Triangle::solution([10, 50, 5, 1])
        );
    }
}
