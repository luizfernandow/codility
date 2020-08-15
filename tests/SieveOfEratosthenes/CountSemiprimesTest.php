<?php declare(strict_types=1);
use Codility\SieveOfEratosthenes\CountSemiprimes;
use PHPUnit\Framework\TestCase;

final class CountSemiprimesTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            [10, 4, 0],
            CountSemiprimes::solution(26, [1, 4, 16], [26, 10, 20])
        );
    }
}
