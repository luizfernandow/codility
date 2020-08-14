<?php
namespace Codility\GreedyAlgorithms;

final class TieRopes
{
    public static function solution($K, $A)
    {
        $count = count($A);
        $ropes = 0;
        $lastRope = $A[0];
        for ($i = 1; $i < $count; $i++) {
            if ($lastRope >= $K) {
                $ropes++;
                $lastRope = $A[$i];
            } else {
                $lastRope += $A[$i];
            }
        }
        if ($lastRope >= $K) {
            $ropes++;
        }
        
        return $ropes;
    }
}
