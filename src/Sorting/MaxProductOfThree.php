<?php
namespace Codility\Sorting;

final class MaxProductOfThree
{
    public static function solution($A)
    {
        rsort($A);
        $count = count($A);
        return max($A[0] * $A[1] * $A[2], $A[0] * $A[$count-1] * $A[$count-2]);
    }
}
