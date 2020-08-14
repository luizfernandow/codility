<?php declare(strict_types=1);
use Codility\GreedyAlgorithms\TieRopes;
use PHPUnit\Framework\TestCase;

final class TieRopesTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            TieRopes::solution(4, [1, 2, 3, 4, 1, 1, 3])
        );
    }

    public function testEmpty()
    {
        $this->assertEquals(
            1,
            TieRopes::solution(1, [1])
        );
    }
}
