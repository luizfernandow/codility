<?php declare(strict_types=1);
use Codility\Sorting\Distinct;
use PHPUnit\Framework\TestCase;

final class DistinctTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            Distinct::solution([2, 1, 1, 2, 3, 1])
        );
    }
}
