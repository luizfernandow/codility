<?php declare(strict_types=1);
use Codility\Leader\EquiLeader;
use PHPUnit\Framework\TestCase;

final class EquiLeaderTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            2,
            EquiLeader::solution([4, 3, 4, 4, 4, 2])
        );
    }
}
