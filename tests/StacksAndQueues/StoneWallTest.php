<?php declare(strict_types=1);
use Codility\StacksAndQueues\StoneWall;
use PHPUnit\Framework\TestCase;

final class StoneWallTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            7,
            StoneWall::solution([8, 8, 5, 7, 9, 8, 7, 4, 8])
        );

        $this->assertEquals(
            3,
            StoneWall::solution([2, 3, 2, 1])
        );
    }
}
