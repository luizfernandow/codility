<?php
namespace Codility\MaximumSliceProblem;

final class MaxDoubleSliceSum
{
    public static function solution($A)
    {
        $count = count($A);
        $left = $right = [];
        $left[0] = $right[$count - 1] = 0;
        $max = 0;
    
        for ($i = 1; $i < $count; $i++) {
            $left[$i] = max($left[$i - 1] + $A[$i], 0);
            $right[$count - $i - 1] = max($right[$count - $i] + $A[$count - $i - 1], 0);
        }
    
        for ($i = 1; $i < $count - 1; $i++) {
            $max = max($max, $left[$i -1] + $right[$i + 1]);
        }
    
        return $max;
    }
}
