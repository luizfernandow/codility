<?php
namespace Codility\CaterpillarMethod;

final class AbsDistinct
{
    public static function solution($A)
    {
        $result = [];
        foreach ($A as $value) {
            if ($value < 0) {
                $value *= -1;
            }
            $result[$value] = $value;
        }
        return count($result);
    }
}
