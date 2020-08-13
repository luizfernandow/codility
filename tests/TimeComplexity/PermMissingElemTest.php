<?php declare(strict_types=1);
use Codility\TimeComplexity\PermMissingElem;
use PHPUnit\Framework\TestCase;

final class PermMissingElemTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            4,
            PermMissingElem::solution([2, 3, 1, 5])
        );
    }
}
