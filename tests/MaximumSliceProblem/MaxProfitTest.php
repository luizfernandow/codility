<?php declare(strict_types=1);
use Codility\MaximumSliceProblem\MaxProfit;
use PHPUnit\Framework\TestCase;

final class MaxProfitTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            356,
            MaxProfit::solution([23171, 21011, 21123, 21366, 21013, 21367])
        );
    }
}
