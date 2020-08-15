<?php declare(strict_types=1);
use Codility\FibonacciNumbers\FibFrog;
use PHPUnit\Framework\TestCase;

final class FibFrogTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            3,
            FibFrog::solution([0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0])
        );
    }
}
