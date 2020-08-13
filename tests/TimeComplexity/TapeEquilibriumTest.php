<?php declare(strict_types=1);
use Codility\TimeComplexity\TapeEquilibrium;
use PHPUnit\Framework\TestCase;

final class TapeEquilibriumTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            TapeEquilibrium::solution([3, 1, 2, 4, 3])
        );
    }

    public function testDouble()
    {
        $this->assertEquals(
            2000,
            TapeEquilibrium::solution([-1000, 1000])
        );
    }
}
