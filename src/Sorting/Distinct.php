<?php
namespace Codility\Sorting;

final class Distinct
{
    public static function solution($A)
    {
        $return = [];
        foreach ($A as $value) {
            $return[$value] = $value;
        }
        return count($return);
    }
}
