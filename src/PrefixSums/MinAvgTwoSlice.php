<?php
namespace Codility\PrefixSums;

final class MinAvgTwoSlice
{
    public static function solution($A)
    {
        $count = count($A);
        $index = 0;
        $min = PHP_INT_MAX;
        for ($i = 0; $i < $count - 1; $i++) {
            $avg = ($A[$i] + $A[$i+1]) / 2;
            if ($avg < $min) {
                $min = $avg;
                $index = $i;
            }
            if ($i + 2 < $count) {
                $avg = ($A[$i] + $A[$i+1] + $A[$i+2]) / 3;
                if ($avg < $min) {
                    $min = $avg;
                    $index = $i;
                }
            }
        }
        return $index;
    }
}
