<?php declare(strict_types=1);
use Codility\Arrays\OddOccurrencesInArray;
use PHPUnit\Framework\TestCase;

final class OddOccurrencesInArrayTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            7,
            OddOccurrencesInArray::solution([9, 3, 9, 3, 9, 7, 9])
        );
    }
}
