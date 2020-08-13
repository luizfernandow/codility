<?php
namespace Codility\Arrays;

final class CyclicRotation
{
    public static function solution($A, $K)
    {
        if (empty($A)) {
            return [];
        }
        for ($i = 0 ;$i < $K; $i++) {
            $el = array_pop($A);
            array_unshift($A, $el);
        }
        return $A;
    }
}
