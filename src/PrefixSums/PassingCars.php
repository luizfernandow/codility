<?php
namespace Codility\PrefixSums;

final class PassingCars
{
    public static function solution($A)
    {
        $count = count($A);
        $countValues = array_count_values($A);
        $return = 0;
        $countOne = 0;
        for ($i = 0; $i < $count; $i++) {
            if ($A[$i] === 0) {
                if (isset($countValues[1])) {
                    $return += $countValues[1] - $countOne;
                    if ($return > 1000000000) {
                        return -1;
                    }
                }
                continue;
            }
            $countOne++;
        }
        return $return;
    }
}
