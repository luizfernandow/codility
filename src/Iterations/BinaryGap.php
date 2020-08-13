<?php
namespace Codility\Iterations;

final class BinaryGap
{
    public static function solution($N)
    {
        $bin = decbin($N);
        preg_match_all('/(?<=1)(0*)(?=1)/', $bin, $matches, PREG_PATTERN_ORDER);
        $gaps = $matches[0];
        if (empty($gaps)) {
            return 0;
        }
        rsort($gaps, SORT_STRING);
        $maxGap = $gaps[0];
    
        return strlen($maxGap);
    }
}
