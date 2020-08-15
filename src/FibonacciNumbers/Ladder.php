<?php

namespace Codility\FibonacciNumbers;

final class Ladder
{
    public static function solution($A, $B)
    {
        $count = count($A);
        $L = max($A);
        $PMax = max($B);
        
        $fib = [0, 1];
        for ($i = 2; $i < $L + 2; $i++) {
            $fib[$i] = ($fib[$i-1] + $fib[$i-2]) & ((1 << $PMax) - 1);
        }
        
        $return = [];
        for ($i = 0; $i < $count; $i++) {
            $return[$i] = $fib[$A[$i] + 1] & ((1 << $B[$i]) - 1);
        }
        
        return $return;
    }
}
