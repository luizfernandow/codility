<?php
namespace Codility\TimeComplexity;

final class PermMissingElem
{
    public static function solution($A)
    {
        $count = count($A);
        sort($A);
        for ($i=0; $i < $A; $i++) {
            if ($A[$i] !== ($i + 1)) {
                return $i + 1;
            }
        }
    }
}
