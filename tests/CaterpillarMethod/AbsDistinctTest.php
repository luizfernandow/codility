<?php declare(strict_types=1);
use Codility\CaterpillarMethod\AbsDistinct;
use PHPUnit\Framework\TestCase;

final class AbsDistinctTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            5,
            AbsDistinct::solution([-5, -3, -1, 0, 3, 6])
        );
    }
}
