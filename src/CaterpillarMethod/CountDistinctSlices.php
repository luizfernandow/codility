<?php
namespace Codility\CaterpillarMethod;

final class CountDistinctSlices
{
    public static function solution($M, $A)
    {
        $count = count($A);
        if ($M === 0) {
            return $count;
        }
        $result = 0;
        $test = [];
        $left = 0;
        $right = 0;
        while ($right < $count && $left < $count) {
            if ($right < $count && !isset($test[$A[$right]])) {
                $result += ($right - $left + 1);
                if ($result > 1000000000) {
                    return 1000000000;
                }
                $test[$A[$right]] = true;
                $right++;
            } else {
                while ($right < $count && $left < $count && $A[$left] != $A[$right]) {
                    unset($test[$A[$left]]);
                    $left++;
                }
                unset($test[$A[$left]]);
                $left++;
            }
        }
        return $result;
    }
}
