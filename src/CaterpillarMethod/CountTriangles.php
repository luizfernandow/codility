<?php
namespace Codility\CaterpillarMethod;

final class CountTriangles
{
    public static function solution($A)
    {
        $count = count($A);
        if ($count < 3) {
            return 0;
        }
        sort($A);
        $tri = 0;
        for ($i = 0; $i < $count; $i++) {
            $k = $i + 2;
            for ($j = $i + 1; $j < $count; $j++) {
                while ($k < $count && $A[$i] + $A[$j] > $A[$k]) {
                    $k++;
                }
                $tri += $k - $j - 1;
            }
        }
        return $tri;
    }
}
