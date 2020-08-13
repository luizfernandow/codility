<?php declare(strict_types=1);
use Codility\CountingElements\PermCheck;
use PHPUnit\Framework\TestCase;

final class PermCheckTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            PermCheck::solution([4, 1, 3, 2])
        );

        $this->assertEquals(
            0,
            PermCheck::solution([4, 1, 3])
        );
    }
}
