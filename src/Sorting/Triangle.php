<?php
namespace Codility\Sorting;

final class Triangle
{
    public static function solution($A)
    {
        $count = count($A);
        if ($count < 3) {
            return 0;
        }
        sort($A);
        for ($i = 0; $i < $count - 2; $i++) {
            if ($A[$i] + $A[$i + 1] > $A[$i + 2]) {
                return 1;
            }
        }
     
        return 0;
    }
}
