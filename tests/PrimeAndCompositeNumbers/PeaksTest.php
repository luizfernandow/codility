<?php declare(strict_types=1);
use Codility\PrimeAndCompositeNumbers\Peaks;
use PHPUnit\Framework\TestCase;

final class PeaksTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            Peaks::solution([1, 2, 3, 4, 3, 4, 1, 2, 3, 4, 6, 2])
        );

        $this->assertEquals(
            1,
            Peaks::solution([1, 3, 2, 1])
        );
    }
}
