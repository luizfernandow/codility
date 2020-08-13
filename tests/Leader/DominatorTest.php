<?php declare(strict_types=1);
use Codility\Leader\Dominator;
use PHPUnit\Framework\TestCase;

final class DominatorTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            0,
            Dominator::solution([3, 4, 3, 2, 3, -1, 3, 3])
        );
    }
}
