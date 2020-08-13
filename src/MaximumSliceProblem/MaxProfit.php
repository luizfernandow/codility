<?php
namespace Codility\MaximumSliceProblem;

final class MaxProfit
{
    public static function solution($A)
    {
        if (empty($A)) {
            return 0;
        }
        $count = count($A);
        $buy = $buyCandidate = $A[0];
        $sell = 0;
        for ($i = 1; $i < $count; $i++) {
            if ($A[$i] - $buy < 0 && $A[$i] < $buyCandidate) {
                $buyCandidate = $A[$i];
            }
            if ($A[$i] > $sell || ($A[$i] - $buyCandidate) > ($sell - $buy)) {
                $sell = $A[$i];
                if ($buyCandidate < $buy) {
                    $buy = $buyCandidate;
                }
            }
        }
        $profit = $sell - $buy;
        return  $profit > 0 ? $profit : 0;
    }
}
