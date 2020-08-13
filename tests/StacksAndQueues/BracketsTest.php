<?php declare(strict_types=1);
use Codility\StacksAndQueues\Brackets;
use PHPUnit\Framework\TestCase;

final class BracketsTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals(
            1,
            Brackets::solution('{[()()]}')
        );

        $this->assertEquals(
            0,
            Brackets::solution('([)()]')
        );
    }
}
