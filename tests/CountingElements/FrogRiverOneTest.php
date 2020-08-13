<?php declare(strict_types=1);
use Codility\CountingElements\FrogRiverOne;
use PHPUnit\Framework\TestCase;

final class FrogRiverOneTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            6,
            FrogRiverOne::solution(5, [1, 3, 1, 4, 2, 3, 5, 4])
        );
    }
}
