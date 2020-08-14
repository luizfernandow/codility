<?php
namespace Codility\GreedyAlgorithms;

final class MaxNonoverlappingSegments
{
    public static function solution($A, $B)
    {
        $count = count($B);
        if ($count < 2) {
            return $count;
        }
        $nonOverlapping = 1;
        $lastB = $B[0];
        for ($i = 1; $i < $count; $i++) {
            if ($lastB < $A[$i]) {
                $nonOverlapping++;
                $lastB = $B[$i];
            }
        }
        
        return $nonOverlapping;
    }
}
