<?php declare(strict_types=1);
use Codility\PrimeAndCompositeNumbers\CountFactors;
use PHPUnit\Framework\TestCase;

final class CountFactorsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            8,
            CountFactors::solution(24)
        );
    }
}
