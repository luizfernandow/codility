<?php declare(strict_types=1);
use Codility\PrimeAndCompositeNumbers\Flags;
use PHPUnit\Framework\TestCase;

final class FlagsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            Flags::solution([1, 5, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2])
        );

        $this->assertEquals(
            2,
            Flags::solution([0, 0, 0, 0, 0, 1, 0, 1, 0, 1])
        );
    }
}
