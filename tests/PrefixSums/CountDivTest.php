<?php declare(strict_types=1);
use Codility\PrefixSums\CountDiv;
use PHPUnit\Framework\TestCase;

final class CountDivTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            CountDiv::solution(6, 11, 2)
        );
    }
}
