<?php
namespace Codility\MaximumSliceProblem;

final class MaxSliceSum
{
    public static function solution($A)
    {
        $maxEnd = $maxSlice = PHP_INT_MIN;
        foreach ($A as $value) {
            $maxEnd = max($value, $maxEnd + $value);
            $maxSlice = max($maxSlice, $maxEnd);
        }

        return $maxSlice;
    }
}
