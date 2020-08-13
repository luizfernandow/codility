<?php declare(strict_types=1);
use Codility\PrefixSums\PassingCars;
use PHPUnit\Framework\TestCase;

final class PassingCarsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            5,
            PassingCars::solution([0, 1, 0, 1, 1])
        );
    }
}
