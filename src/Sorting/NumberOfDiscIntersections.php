<?php
namespace Codility\Sorting;

final class NumberOfDiscIntersections
{
    public static function solution($A)
    {
        $count = count($A);
        $intersect = $active = 0;
        $start = $end = array_fill(0, $count, 0);
        
        for ($i = 0; $i < $count; $i++) {
            if ($i < $A[$i]) {
                $start[0]++;
            } else {
                $start[$i - $A[$i]]++;
            }
            
            if ($i + $A[$i] >= $count) {
                $end[$count - 1]++;
            } else {
                $end[$i + $A[$i]]++;
            }
        }
        for ($i = 0; $i < $count; $i++) {
            $intersect += $active * $start[$i] + ($start[$i] * ($start[$i] - 1)) / 2;
            if (10000000 < $intersect) {
                return -1;
            }
            $active += $start[$i] - $end[$i];
        }
        
        return $intersect;
    }
}
