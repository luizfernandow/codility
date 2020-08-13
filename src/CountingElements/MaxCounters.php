<?php
namespace Codility\CountingElements;

final class MaxCounters
{
    public static function solution($N, $A)
    {
        $counters = array_fill(0, $N, 0);
        $max = 0;
        $maxApply = 0;
        foreach ($A as $operation) {
            if ($operation <= $N) {
                $key = $operation - 1;
                if ($counters[$key] < $maxApply) {
                    $counters[$key] = $maxApply;
                }
                $counters[$key]++;
                $max = max($max, $counters[$key]);
            } else {
                $maxApply = $max;
            }
        }
        foreach ($counters as $key => $value) {
            $counters[$key] = max($maxApply, $value);
        }
   
        return $counters;
    }
}
