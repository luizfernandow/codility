<?php declare(strict_types=1);
use Codility\TimeComplexity\FrogJmp;
use PHPUnit\Framework\TestCase;

final class FrogJmpTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            FrogJmp::solution(10, 85, 30)
        );
    }
}
