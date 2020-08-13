<?php declare(strict_types=1);
use Codility\CaterpillarMethod\CountTriangles;
use PHPUnit\Framework\TestCase;

final class CountTrianglesTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            4,
            CountTriangles::solution([10, 2, 5, 1, 8, 12])
        );
    }
}
