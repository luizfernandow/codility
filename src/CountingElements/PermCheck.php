<?php
namespace Codility\CountingElements;

final class PermCheck
{
    public static function solution($A)
    {
        $count = count($A);
        sort($A);
        for ($i = 0; $i < $count; $i++) {
            if ($A[$i] !== ($i + 1)) {
                return 0;
            }
        }
        return 1;
    }
}
