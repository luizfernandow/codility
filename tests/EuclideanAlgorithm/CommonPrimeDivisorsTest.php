<?php declare(strict_types=1);
use Codility\EuclideanAlgorithm\CommonPrimeDivisors;
use PHPUnit\Framework\TestCase;

final class CommonPrimeDivisorsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            CommonPrimeDivisors::solution([15, 10, 9], [75, 30, 5])
        );
    }
}
