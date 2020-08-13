<?php

namespace Codility\CountingElements;

final class FrogRiverOne
{
    public static function solution($X, $A)
    {
        $count = count($A);
        $leaves = [];
        $jumps = 0;
        for ($i = 0; $i < $count; $i++) {
            if (!isset($leaves[$A[$i]])) {
                $leaves[$A[$i]] = true;
                $jumps++;
            }
            if ($jumps === $X) {
                return $i;
            }
        }
        return -1;
    }
}
