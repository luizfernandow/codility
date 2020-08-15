<?php

namespace Codility\FibonacciNumbers;

final class FibFrog
{
    public static function solution($A)
    {
        $A[] = 1;
        $count = count($A);
        $fib = [0, 1];
        for ($i = 2; $i < 27; $i++) {
            $calc = $fib[$i - 1] + $fib[$i - 2];
            if ($calc > $count) {
                break;
            }
            $fib[$i] = $calc;
        }
        $fib = array_slice($fib, 2);
        
        $reachable = array_fill(0, $count, -1);
        foreach ($fib as $jump) {
            if ($A[$jump - 1] == 1) {
                $reachable[$jump - 1] = 1;
            }
        }
        
        for ($i = 0; $i < $count; $i++) {
            if ($A[$i] == 0 || $reachable[$i] > 0) {
                continue;
            }
            $minIndex = -1;
            $minValue = 100000;
            foreach ($fib as $jump) {
                $prevIndex = $i - $jump;
                if ($prevIndex < 0) {
                    break;
                }
                if ($reachable[$prevIndex] > 0 && $minValue > $reachable[$prevIndex]) {
                    $minValue = $reachable[$prevIndex];
                    $minIndex = $prevIndex;
                }
            }
            if ($minIndex !== -1) {
                $reachable[$i] = $minValue + 1;
            }
        }
        
        return $reachable[$count - 1];
    }
}
