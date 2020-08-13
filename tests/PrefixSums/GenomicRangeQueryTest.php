<?php declare(strict_types=1);
use Codility\PrefixSums\GenomicRangeQuery;
use PHPUnit\Framework\TestCase;

final class GenomicRangeQueryTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            [2, 4, 1],
            GenomicRangeQuery::solution('CAGCCTA', [2, 5, 0], [4, 5, 6])
        );
    }
}
