<?php declare(strict_types=1);
use Codility\CaterpillarMethod\CountDistinctSlices;
use PHPUnit\Framework\TestCase;

final class CountDistinctSlicesTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            9,
            CountDistinctSlices::solution(6, [3, 4, 5, 5, 2])
        );
    }
}
