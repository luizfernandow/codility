<?php
namespace Codility\Arrays;

final class OddOccurrencesInArray
{
    public static function solution($A)
    {
        $values = array_count_values($A);
        $odd = array_filter($values, function ($var) {
            return $var % 2 !== 0;
        });
        return key($odd);
    }
}
