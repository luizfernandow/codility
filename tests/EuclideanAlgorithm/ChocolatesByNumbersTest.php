<?php declare(strict_types=1);
use Codility\EuclideanAlgorithm\ChocolatesByNumbers;
use PHPUnit\Framework\TestCase;

final class ChocolatesByNumbersTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            5,
            ChocolatesByNumbers::solution(10, 4)
        );
    }
}
