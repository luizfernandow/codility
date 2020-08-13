<?php declare(strict_types=1);
use Codility\PrimeAndCompositeNumbers\MinPerimeterRectangle;
use PHPUnit\Framework\TestCase;

final class MinPerimeterRectangleTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            22,
            MinPerimeterRectangle::solution(30)
        );
    }
}
