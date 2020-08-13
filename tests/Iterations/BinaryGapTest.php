<?php declare(strict_types=1);
use Codility\Iterations\BinaryGap;
use PHPUnit\Framework\TestCase;

final class BinaryGapTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            5,
            BinaryGap::solution(1041)
        );

        $this->assertEquals(
            0,
            BinaryGap::solution(15)
        );

        $this->assertEquals(
            0,
            BinaryGap::solution(32)
        );

        $this->assertEquals(
            2,
            BinaryGap::solution(25)
        );

        $this->assertEquals(
            1,
            BinaryGap::solution(22)
        );

        $this->assertEquals(
            0,
            BinaryGap::solution(7)
        );

        $this->assertEquals(
            3,
            BinaryGap::solution(1988)
        );
    }
}
