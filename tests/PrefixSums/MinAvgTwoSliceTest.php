<?php declare(strict_types=1);
use Codility\PrefixSums\MinAvgTwoSlice;
use PHPUnit\Framework\TestCase;

final class MinAvgTwoSliceTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            MinAvgTwoSlice::solution([4, 2, 2, 5, 1, 5, 8])
        );
    }
}
