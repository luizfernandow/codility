<?php
namespace Codility\Leader;

final class Dominator
{
    public static function solution($A)
    {
        if (empty($A)) {
            return -1;
        }
        $count = count($A);
        $valuesCount = array_count_values($A);
        arsort($valuesCount);
        if (current($valuesCount) <= $count/2) {
            return -1;
        }
        return array_search(key($valuesCount), $A);
    }
}
