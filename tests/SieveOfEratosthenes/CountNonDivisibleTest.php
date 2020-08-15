<?php declare(strict_types=1);
use Codility\SieveOfEratosthenes\CountNonDivisible;
use PHPUnit\Framework\TestCase;

final class CountNonDivisibleTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            [2, 4, 3, 2, 0],
            CountNonDivisible::solution([3, 1, 2, 3, 6])
        );
    }
}
