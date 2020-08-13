<?php
namespace Codility\TimeComplexity;

final class TapeEquilibrium
{
    public static function solution($A)
    {
        $count = count($A);
        $right = array_sum($A);
        $min = PHP_INT_MAX;
        $left = 0;
        for ($i = 0; $i < $count - 1; $i++) {
            $left += $A[$i];
            $right -= $A[$i];
            $abs = abs($left - $right);
            if ($abs < $min) {
                $min = $abs;
            }
        }
        return $min;
    }
}
