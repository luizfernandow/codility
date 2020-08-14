<?php declare(strict_types=1);
use Codility\StacksAndQueues\Fish;
use PHPUnit\Framework\TestCase;

final class FishTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            2,
            Fish::solution([4, 3, 2, 1, 5], [0, 1, 0, 0, 0])
        );

        $this->assertEquals(
            2,
            Fish::solution([4, 3, 2, 1, 5], [0, 1, 0, 1, 0])
        );
    }
}
