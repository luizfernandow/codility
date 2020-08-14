<?php
namespace Codility\PrefixSums;

final class CountDiv
{
    public static function solution($A, $B, $K)
    {
        while ($B % $K !== 0) {
            $B--;
        }
        $divB = $B/$K;
        while ($A % $K !== 0) {
            $A++;
        }
        $divA = $A/$K;
    
        return $divB - $divA + 1;
    }
}
