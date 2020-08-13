<?php declare(strict_types=1);
use Codility\Sorting\MaxProductOfThree;
use PHPUnit\Framework\TestCase;

final class MaxProductOfThreeTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            60,
            MaxProductOfThree::solution([-3, 1, 2, -2, 5, 6])
        );
    }
}
